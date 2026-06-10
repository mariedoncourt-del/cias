/**
 * CIAS - Améliorations UX (juin 2026)
 * ------------------------------------------------------------------
 * 1. Duplication de dossier            (écran 5 -> pré-remplissage écran 1)
 * 2. Autocomplete entreprise           (SIRET / NAF pré-remplis)
 * 3. Recherche dans les listes déroulantes + recherche point d'accueil
 * 4. Boutons explicites écran 5        (générés côté serveur) + envoi email
 * 5. Barre de progression + sauvegarde automatique (toutes les 30 s)
 * 6. Envoi email direct depuis CIAS    (destinataires pré-configurés)
 *
 * Fichier autonome : ne casse rien si un élément est absent de la page.
 */
(function ($) {
  'use strict';

  if (typeof $ === 'undefined') return;

  // base_url calculée depuis l'URL courante (index.php inclus si présent)
  function baseUrl() {
    var href = window.location.href;
    var m = href.match(/^(.*?index\.php\/)/);
    if (m) return m[1];
    // fallback : racine du site
    var a = document.createElement('a');
    a.href = href;
    return a.protocol + '//' + a.host + '/';
  }
  var BASE = baseUrl();

  function onPage(fragment) {
    return window.location.href.indexOf(fragment) !== -1;
  }

  /* ================================================================
   * Notification "toast" légère (utilisée par autosave + email)
   * ================================================================ */
  function ciasToast(message, type) {
    var colors = { success: '#27ae60', error: '#c0392b', info: '#2c5aa0' };
    var $t = $('<div class="cias-toast"></div>')
      .text(message)
      .css({
        position: 'fixed', bottom: '20px', left: '50%', transform: 'translateX(-50%)',
        background: colors[type] || colors.info, color: '#fff',
        padding: '10px 22px', borderRadius: '6px', zIndex: 99999,
        fontWeight: 'bold', boxShadow: '0 3px 12px rgba(0,0,0,.3)', fontSize: '14px'
      });
    $('body').append($t);
    setTimeout(function () { $t.fadeOut(600, function () { $t.remove(); }); }, 3500);
  }
  window.ciasToast = ciasToast;

  /* ================================================================
   * 5a. BARRE DE PROGRESSION (Étape X / 5)
   * ================================================================ */
  var STEPS = [
    { label: 'Participant',    url: 'stagiaire/ajout_stagiaires',        match: ['ajout_stagiaires'] },
    { label: 'Entreprise',     url: 'stagiaire/ajouter_entreprise',      match: ['ajouter_entreprise', 'ajout_entreprise'] },
    { label: 'Convention',     url: 'stagiaire/convention',              match: ['stagiaire/convention', 'stagiaire/Convention'] },
    { label: 'Émargement',     url: 'stagiaire/ajout_emargements',       match: ['ajout_emargement'] },
    { label: 'Prise en charge', url: 'stagiaire/afficher_liste_stagiaire', match: ['afficher_liste_stagiaire'] }
  ];

  function currentStepIndex() {
    var href = window.location.href;
    for (var i = 0; i < STEPS.length; i++) {
      for (var j = 0; j < STEPS[i].match.length; j++) {
        if (href.indexOf(STEPS[i].match[j]) !== -1) return i;
      }
    }
    return -1;
  }

  function renderStepper() {
    var idx = currentStepIndex();
    if (idx === -1) return;

    var html = '<div id="cias-stepper"><div class="cias-stepper-title">Étape ' + (idx + 1) +
               ' / ' + STEPS.length + ' — ' + STEPS[idx].label + '</div><div class="cias-stepper-track">';
    for (var i = 0; i < STEPS.length; i++) {
      var cls = i < idx ? 'done' : (i === idx ? 'active' : '');
      html += '<a class="cias-step ' + cls + '" href="' + BASE + STEPS[i].url + '" title="' + STEPS[i].label + '">' +
              '<span class="cias-step-dot">' + (i < idx ? '✓' : (i + 1)) + '</span>' +
              '<span class="cias-step-label">' + STEPS[i].label + '</span></a>';
      if (i < STEPS.length - 1) html += '<span class="cias-step-line ' + (i < idx ? 'done' : '') + '"></span>';
    }
    html += '</div></div>';

    var $anchor = $('.content-wrapper').first();
    if ($anchor.length) $anchor.prepend(html);
    else $('body').prepend(html);
  }

  /* ================================================================
   * 5b. SAUVEGARDE AUTOMATIQUE (toutes les 30 s, localStorage)
   * ================================================================ */
  var AUTOSAVE_PAGES = ['ajout_stagiaires', 'ajouter_entreprise', 'ajout_entreprise', 'stagiaire/convention', 'stagiaire/Convention'];

  function autosaveKey() {
    return 'cias_autosave_' + window.location.pathname.replace(/[^a-zA-Z0-9]/g, '_');
  }

  function collectFormData() {
    var data = {};
    $('form').find('input[type=text], input[type=date], input[type=email], input[type=tel], input[type=number], textarea, select').each(function () {
      var name = this.name || this.id;
      if (name && $(this).val()) data[name] = $(this).val();
    });
    $('form').find('input[type=radio]:checked, input[type=checkbox]:checked').each(function () {
      var name = this.name || this.id;
      if (name) data['__check__' + name] = $(this).val();
    });
    return data;
  }

  function restoreFormData(data) {
    var n = 0;
    $.each(data, function (name, val) {
      if (name.indexOf('__check__') === 0) {
        var realName = name.replace('__check__', '');
        var $el = $('[name="' + realName + '"][value="' + val + '"]');
        if ($el.length && !$el.is(':checked')) { $el.prop('checked', true); n++; }
      } else {
        var $f = $('[name="' + name + '"]');
        if (!$f.length) $f = $('#' + name);
        if ($f.length && !$f.val()) { $f.val(val); n++; }
      }
    });
    return n;
  }

  function initAutosave() {
    var active = AUTOSAVE_PAGES.some(function (p) { return onPage(p); });
    if (!active || !$('form').length) return;

    var key = autosaveKey();

    // Proposer la restauration si un brouillon existe
    try {
      var saved = localStorage.getItem(key);
      if (saved) {
        var parsed = JSON.parse(saved);
        var when = parsed.__ts ? new Date(parsed.__ts) : null;
        delete parsed.__ts;
        if (Object.keys(parsed).length > 2) {
          var msg = 'Un brouillon non enregistré a été trouvé' +
                    (when ? ' (' + when.toLocaleDateString('fr-FR') + ' ' + when.toLocaleTimeString('fr-FR', {hour:'2-digit',minute:'2-digit'}) + ')' : '') +
                    '.\nVoulez-vous restaurer les champs saisis ?';
          if (window.confirm(msg)) {
            var n = restoreFormData(parsed);
            ciasToast('✅ Brouillon restauré (' + n + ' champs)', 'success');
          } else {
            localStorage.removeItem(key);
          }
        }
      }
    } catch (e) { /* localStorage indisponible : on ignore */ }

    // Sauvegarde toutes les 30 secondes
    setInterval(function () {
      try {
        var data = collectFormData();
        if (Object.keys(data).length === 0) return;
        data.__ts = Date.now();
        localStorage.setItem(key, JSON.stringify(data));
        var now = new Date();
        var hh = ('0' + now.getHours()).slice(-2) + 'h' + ('0' + now.getMinutes()).slice(-2);
        var $ind = $('#cias-autosave-indicator');
        if (!$ind.length) {
          $ind = $('<div id="cias-autosave-indicator"></div>').css({
            position: 'fixed', bottom: '12px', left: '12px', zIndex: 9999,
            background: 'rgba(39,174,96,.92)', color: '#fff', padding: '4px 12px',
            borderRadius: '4px', fontSize: '12px', fontWeight: 'bold'
          });
          $('body').append($ind);
        }
        $ind.text('💾 Brouillon sauvegardé — ' + hh).show();
        setTimeout(function () { $ind.fadeOut(800); }, 2500);
      } catch (e) { /* ignore */ }
    }, 30000);

    // Nettoyer le brouillon à la soumission du formulaire
    $('form').on('submit', function () {
      try { localStorage.removeItem(key); } catch (e) {}
    });
  }

  /* ================================================================
   * 3. RECHERCHE DANS LES LISTES DÉROULANTES
   *    (filtre tapé au clavier au-dessus de chaque <select> long)
   * ================================================================ */
  function initSearchableSelects() {
    $('select').each(function () {
      var $sel = $(this);
      if ($sel.data('cias-search') || $sel.find('option').length < 8) return;
      $sel.data('cias-search', true);

      var $wrap = $('<span class="cias-select-search-wrap"></span>');
      var $input = $('<input type="text" class="cias-select-search form-control" placeholder="🔍 Rechercher dans la liste...">')
        .css({ marginBottom: '4px', fontSize: '13px' });

      $sel.before($wrap);
      $wrap.append($input);

      var allOptions = $sel.find('option').map(function () {
        return { value: this.value, text: $(this).text() };
      }).get();

      $input.on('input', function () {
        var term = $(this).val().toLowerCase().trim();
        var current = $sel.val();
        $sel.empty();
        var matches = 0;
        allOptions.forEach(function (o) {
          if (!term || o.text.toLowerCase().indexOf(term) !== -1 || (o.value + '').toLowerCase().indexOf(term) !== -1) {
            $sel.append($('<option></option>').attr('value', o.value).text(o.text));
            matches++;
          }
        });
        if (term && matches === 1) {
          $sel.val($sel.find('option').first().val()).trigger('change');
        } else if (current && $sel.find('option[value="' + current + '"]').length) {
          $sel.val(current);
        }
        if (term && matches > 1) {
          $input.attr('title', matches + ' correspondances — précisez votre recherche');
        }
      });
    });
  }

  /* ================================================================
   * 2. AUTOCOMPLETE ENTREPRISE (écran 2)
   *    SIRET / NAF / adresse pré-remplis si l'entreprise existe
   * ================================================================ */
  function fieldEnt(names) {
    for (var i = 0; i < names.length; i++) {
      var $f = $('#' + names[i]);
      if ($f.length) return $f;
      $f = $('[name="' + names[i] + '"]');
      if ($f.length) return $f.first();
    }
    return $();
  }

  function fillEntreprise(d) {
    var map = [
      [['nom_entreprise'], d.nom_entreprise],
      [['nom_commercial'], d.nom_commercial],
      [['code_naf'], d.code_naf],
      [['numero_siret'], d.numero_siret],
      [['activite'], d.activite],
      [['forme_juridique'], d.forme_juridique],
      [['adresses', 'rue', 'adresse'], d.rue],
      [['code_postals', 'code_postal'], d.code_postal],
      [['villes', 'ville'], d.ville],
      [['num_accueil'], d.num_accueil]
    ];
    map.forEach(function (m) {
      var $f = fieldEnt(m[0]);
      if ($f.length && m[1]) $f.val(m[1]).trigger('change');
    });
    ciasToast('✅ Entreprise trouvée — SIRET et NAF pré-remplis', 'success');
  }

  function initAutocompleteEntreprise() {
    var $champ = fieldEnt(['nom_entreprise']);
    if (!$champ.length || !$.fn.autocomplete) return;

    var cache = {};
    $champ.autocomplete({
      minLength: 2,
      delay: 300,
      source: function (request, response) {
        var term = request.term;
        if (cache[term]) { response(cache[term]); return; }
        $.ajax({
          url: BASE + 'stagiaire/get_autocomplete_entreprise',
          data: { term: term },
          dataType: 'json',
          success: function (data) { cache[term] = data; response(data); },
          error: function () { response([]); }
        });
      },
      select: function (event, ui) {
        event.preventDefault();
        fillEntreprise(ui.item);
        return false;
      },
      focus: function (event, ui) {
        event.preventDefault();
        $champ.val(ui.item.nom_entreprise);
        return false;
      }
    });

    var inst = $champ.autocomplete('instance');
    if (inst) {
      inst._renderItem = function (ul, item) {
        return $('<li>').append(
          '<div style="padding:6px 10px;border-bottom:1px solid #eee;">' +
          '<strong>' + item.nom_entreprise + '</strong>' +
          (item.numero_siret ? ' <small style="color:#999;">SIRET ' + item.numero_siret + '</small>' : '') +
          (item.ville ? '<br><small style="color:#666;">📍 ' + item.ville + '</small>' : '') +
          '</div>'
        ).appendTo(ul);
      };
    }
  }

  /* ================================================================
   * 3b. RECHERCHE POINT D'ACCUEIL
   *     "CCI" -> liste des CCI ; message si plusieurs correspondent
   * ================================================================ */
  function initAutocompleteAccueil() {
    var $champ = fieldEnt(['num_accueil']);
    if (!$champ.length || !$.fn.autocomplete) return;

    $champ.attr('placeholder', 'N° ou nom du point d\'accueil (ex : CCI)');

    $champ.autocomplete({
      minLength: 1,
      delay: 300,
      source: function (request, response) {
        $.ajax({
          url: BASE + 'stagiaire/get_autocomplete_accueil',
          data: { term: request.term },
          dataType: 'json',
          success: function (data) {
            if (data.length > 1) {
              ciasToast('ℹ️ ' + data.length + ' points d\'accueil trouvés — précisez', 'info');
            }
            response(data);
          },
          error: function () { response([]); }
        });
      },
      select: function (event, ui) {
        event.preventDefault();
        $champ.val(ui.item.num_accueil).trigger('change');
        ciasToast('✅ Point d\'accueil : ' + ui.item.nom_accueil, 'success');
        return false;
      },
      focus: function (event, ui) {
        event.preventDefault();
        $champ.val(ui.item.num_accueil);
        return false;
      }
    });

    var inst = $champ.autocomplete('instance');
    if (inst) {
      inst._renderItem = function (ul, item) {
        return $('<li>').append(
          '<div style="padding:6px 10px;border-bottom:1px solid #eee;">' +
          '<strong>' + item.nom_accueil + '</strong> <small style="color:#999;">(' + item.num_accueil + ')</small>' +
          (item.ville ? '<br><small style="color:#666;">📍 ' + item.ville + '</small>' : '') +
          '</div>'
        ).appendTo(ul);
      };
    }
  }

  /* ================================================================
   * 1. DUPLICATION DE DOSSIER (écran 5 -> écran 1)
   * ================================================================ */
  function initDuplication() {
    // Clic sur "Dupliquer ce dossier" (boutons générés côté serveur)
    $(document).on('click', '.cias-btn-dupliquer', function () {
      var $b = $(this);
      $b.prop('disabled', true).text('⏳ Chargement...');
      $.ajax({
        url: BASE + 'stagiaire/get_dossier_modele',
        data: {
          nom: $b.data('nom_stagiaire'),
          prenom: $b.data('prenom_stagiaire'),
          id_convention: $b.data('id_convention')
        },
        dataType: 'json',
        success: function (data) {
          if (data.error) { ciasToast('❌ ' + data.error, 'error'); return; }
          try {
            sessionStorage.setItem('cias_dossier_modele', JSON.stringify(data));
            window.location.href = BASE + 'stagiaire/ajout_stagiaires?dupliquer=1';
          } catch (e) {
            ciasToast('❌ Impossible de stocker le modèle de dossier', 'error');
          }
        },
        error: function () { ciasToast('❌ Erreur lors de la récupération du dossier', 'error'); },
        complete: function () { $b.prop('disabled', false).html('🔄 Dupliquer ce dossier'); }
      });
    });

    // Sur l'écran 1 : pré-remplir si un modèle est présent
    if (onPage('ajout_stagiaires') && window.location.search.indexOf('dupliquer=1') !== -1) {
      var raw = null;
      try { raw = sessionStorage.getItem('cias_dossier_modele'); } catch (e) {}
      if (!raw) return;
      var modele;
      try { modele = JSON.parse(raw); } catch (e) { return; }
      var s = modele.stagiaire || {};

      // Champs identiques au dossier d'origine (entreprise, accueil, adresse...)
      var fields = {
        nom_entreprise: s.nom_entreprise, nom_commercial: s.nom_commercial,
        code_naf: s.code_naf, numero_siret: s.numero_siret,
        activite: s.activite, forme_juridique: s.forme_juridique,
        rue: s.rue, adresse: s.adresse, code_postal: s.code_postal, ville: s.ville,
        num_accueil: s.num_accueil
      };
      var n = 0;
      $.each(fields, function (name, val) {
        if (!val) return;
        var $f = $('[name="' + name + '"]');
        if (!$f.length) $f = $('#' + name);
        if ($f.length && !$f.val()) { $f.val(val); n++; }
      });

      if (n > 0) {
        ciasToast('🔄 Dossier dupliqué — ' + n + ' champs pré-remplis (entreprise, point d\'accueil...). Saisissez le nouveau participant.', 'success');
      }
      try { sessionStorage.removeItem('cias_dossier_modele'); } catch (e) {}
    }
  }

  /* ================================================================
   * 6. ENVOI EMAIL DIRECT (écran 5)
   * ================================================================ */
  function initEnvoiEmail() {
    $(document).on('click', '.cias-btn-email', function () {
      var $b = $(this);
      var stag = $b.data('nom_stagiaire') + ' ' + $b.data('prenom_stagiaire');
      if (!window.confirm('Envoyer le dossier de ' + stag + ' par email aux destinataires pré-configurés (MAF + Gerald) ?')) return;

      $b.prop('disabled', true).html('⏳ Envoi en cours...');
      $.ajax({
        url: BASE + 'stagiaire/envoyer_dossier_email',
        method: 'POST',
        data: {
          nom_stagiaire: $b.data('nom_stagiaire'),
          prenom_stagiaire: $b.data('prenom_stagiaire'),
          id_formation: $b.data('id_formation'),
          id_convention: $b.data('id_convention')
        },
        dataType: 'json',
        success: function (resp) {
          if (resp.success) ciasToast('📧 ' + resp.success, 'success');
          else ciasToast('❌ ' + (resp.error || 'Erreur inconnue'), 'error');
        },
        error: function () { ciasToast('❌ Erreur réseau lors de l\'envoi', 'error'); },
        complete: function () { $b.prop('disabled', false).html('📧 Envoyer par email'); }
      });
    });
  }

  /* ================================================================
   * INITIALISATION
   * ================================================================ */
  $(function () {
    renderStepper();
    initAutosave();
    initSearchableSelects();
    initAutocompleteEntreprise();
    initAutocompleteAccueil();
    initDuplication();
    initEnvoiEmail();
  });

})(window.jQuery);
