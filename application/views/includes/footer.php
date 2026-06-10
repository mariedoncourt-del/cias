
<!-- FIN FORM -->


  </form> 

 

  <script>
    $(document).ready(function(){
        $('#frames').hide();
    $('#images').click(function(){
       // alert("eeeeee")
        $('#frames').show();
        $('#images').hide();
        $('#fermer').show();
        

    });

    $('#fermer').click(function(){
       // alert("eeeeee")
        $('#frames').hide();
        $(this).hide();
        $('#images').show();
       

    });
  });
    </script>


    <!-- <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>CodeInsect</b> Admin System | Version 1.6
        </div>
        <strong>Copyright &copy; 2022 <a href="http://www.maf-formation.org">Maf Formation</a></strong> All rights reserved.
    </footer> -->

    <!-- <script src="<?php// echo base_url('assets/dist/js/jquery-3.6.0.js'); ?>"></script>  -->

<!-- JQUERY UI -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<!-- binding -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/binding.js"></script>

<!-- auto-completion -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/auto-completion.js"></script>
<!-- automatisation point d'accueil -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/point-accueil.js"></script>
<!-- automatisation sexe -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/sexe.js"></script>
<!-- diplome , forme juridique , dirigeant depuis -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/choix_multiple.js"></script>
<!-- verification societe.com -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/verif.js"></script>
<!-- marqueur -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/marqueur.js"></script>
<!-- automatisation date -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/date.js"></script>
<!-- gestion jour ferie -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jour_ferie.js"></script>
<!-- calcul TVA -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/tva.js"></script>
<!-- facture  -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/facture.js"></script>
<!-- validation des champs -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/validation.js"></script>
<!-- signature -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/signature.js"></script>
<!-- export PDF -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/export_pdf.js"></script>
  
    
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js" type="text/javascript"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>

<?php if(strpos($_SERVER['REQUEST_URI'], 'ajout_stagiaires') !== false): ?>
<script type="text/javascript">
// Autocomplete stagiaires - exécuté après tous les scripts (jQuery UI disponible)
(function($) {
  var stagiaireCache = {};

  function fillStagiaire(data) {
    $('#nom_stagiaire').val(data.nom || '');
    $('#prenom_stagiaire').val(data.prenom || '');
    $('#nom_naissance').val(data.nom_naissance || '');
    $('#date_naissance').val(data.date_naissance || '');
    $('#numero_secu').val(data.numero_secu || '');
    $('#telephone').val(data.tel || '');
    $('#mail').val(data.mail || '');
    $('#diplomes').val(data.diplome || '');
    if (data.sexe) {
      $('input[name="sexe"]').prop('checked', false);
      $('input[name="sexe"][value="' + data.sexe + '"]').prop('checked', true);
    }
    if (data.duree) {
      $('input[name="duree"]').prop('checked', false);
      $('input[name="duree"][value="' + data.duree + '"]').prop('checked', true);
    }
    $('#stag-autofill-badge').remove();
    $('#nom_stagiaire').after('<span id="stag-autofill-badge" style="color:#27ae60;font-size:12px;margin-left:8px;font-weight:bold;">✅ Participant trouvé — champs remplis</span>');
    setTimeout(function(){ $('#stag-autofill-badge').fadeOut(3000, function(){ $(this).remove(); }); }, 2000);
  }

  $('#nom_stagiaire').autocomplete({
    minLength: 2,
    delay: 300,
    source: function(request, response) {
      var term = request.term;
      if (term in stagiaireCache) { response(stagiaireCache[term]); return; }
      $.ajax({
        url: '<?php echo site_url("stagiaire/get_autocomplete_stagiaire"); ?>',
        data: { term: term },
        dataType: 'json',
        success: function(data) { stagiaireCache[term] = data; response(data); },
        error: function() { response([]); }
      });
    },
    select: function(event, ui) {
      event.preventDefault();
      fillStagiaire(ui.item);
      return false;
    },
    focus: function(event, ui) {
      event.preventDefault();
      $('#nom_stagiaire').val(ui.item.nom);
      return false;
    }
  }).autocomplete('instance')._renderItem = function(ul, item) {
    return $('<li>').append(
      '<div style="padding:6px 10px;border-bottom:1px solid #eee;">'
      + '<strong>' + item.nom + ' ' + item.prenom + '</strong>'
      + (item.date_naissance && item.date_naissance !== '00/00/0000' ? ' <small style="color:#999;">né(e) le ' + item.date_naissance + '</small>' : '')
      + (item.mail ? '<br><small style="color:#666;">📧 ' + item.mail + '</small>' : '')
      + '</div>'
    ).appendTo(ul);
  };

  // Sur blur du prénom : remplissage auto si combinaison unique
  $('#prenom_stagiaire').on('blur', function() {
    var nom = $('#nom_stagiaire').val().trim();
    var prenom = $(this).val().trim();
    if (nom.length >= 2 && prenom.length >= 2) {
      $.ajax({
        url: '<?php echo site_url("stagiaire/get_autocomplete_stagiaire"); ?>',
        data: { term: nom },
        dataType: 'json',
        success: function(data) {
          var found = $.grep(data, function(d) {
            return d.prenom.toLowerCase() === prenom.toLowerCase();
          });
          if (found.length === 1) fillStagiaire(found[0]);
        }
      });
    }
  });

})(jQuery);
</script>
<?php endif; ?>
  </body>
</html>