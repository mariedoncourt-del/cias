# Améliorations CIAS — juin 2026

Implémentation des 6 améliorations demandées dans le document
`ameliorations-cias-2026-06-09.md` (retour d'expérience saisie de dossiers, workflow écrans 1→5).

---

## ✅ 1. Duplication de dossier

- Nouveau bouton « **🔄 Dupliquer ce dossier** » sur l'écran 5 (*Prise en charge — Lancer stage*), pour chaque ligne du tableau.
- Au clic : récupération du dossier existant (`stagiaire/get_dossier_modele`), redirection vers l'écran 1 (*Participant*) avec **pré-remplissage automatique** des champs inchangés : entreprise, nom commercial, SIRET, code NAF, activité, forme juridique, adresse, point d'accueil.
- L'agent n'a plus qu'à saisir le nouveau participant.

**Fichiers** : `Stagiaire.php` (méthode `get_dossier_modele`), `assets/cias-ameliorations.js` (`initDuplication`).

## ✅ 2. Auto-complete entreprise

- Le champ `nom_entreprise` (écran 2) propose désormais les entreprises déjà en base dès 2 caractères tapés.
- À la sélection : **SIRET, code NAF, activité, forme juridique, adresse, CP, ville et point d'accueil sont pré-remplis automatiquement** → fini les doublons « SARTO » vs « Jérémy SARTO » vs « Le Tranchoir ».
- L'auto-complete stagiaire existait déjà (footer) et est conservé.

**Fichiers** : `Stagiaire.php` (méthode `get_autocomplete_entreprise`), `assets/cias-ameliorations.js`.

## ✅ 3. Recherche dans les listes déroulantes + point d'accueil

- **Toutes les listes déroulantes de 8 options ou plus** reçoivent automatiquement un champ « 🔍 Rechercher dans la liste... » qui filtre les options en temps réel (thématiques, formations, organismes…).
- Le champ **point d'accueil** (`num_accueil`) devient un champ de recherche : taper « CCI » affiche tous les CCI avec leur ville ; si plusieurs correspondent, un message « X points d'accueil trouvés — précisez » s'affiche. Plus besoin de connaître le libellé exact ni le numéro.

**Fichiers** : `Stagiaire.php` (méthode `get_autocomplete_accueil`), `assets/cias-ameliorations.js`.

## ✅ 4. Écran 5 — Boutons explicites

- Les liens « Formulaire » / « Convention » deviennent des boutons modernes et contrastés :
  - « **📄 Générer le formulaire** » (vert) + « 🖼 Aperçu » (version image, pour prévisualiser avant impression)
  - « **📄 Générer la convention** » (orange) + « 🖼 Aperçu »
  - « **📧 Envoyer par email** » (bleu)
  - « **🔄 Dupliquer ce dossier** » (gris)
- Plus besoin de deviner l'URL technique `/imprimer/NOM/PRENOM/ID_COURS/ID` : tout est cliquable.

**Fichiers** : `Stagiaire.php` (fonctions `liste_stagiaire` et `liste_stagiaire1`), `assets/dist/css/cias-ameliorations.css`.

## ✅ 5. Barre de progression + sauvegarde automatique

- **Indicateur de progression** en haut de page sur les 5 écrans du workflow :
  `Étape 2 / 5 — Entreprise` avec barre visuelle (étapes faites ✓ en vert, étape courante en bleu). Chaque étape est cliquable.
- **Sauvegarde automatique toutes les 30 secondes** des formulaires (écrans 1, 2, 3) dans le navigateur (localStorage), avec indicateur « 💾 Brouillon sauvegardé — 22h48 ».
- Si la page est quittée puis rouverte, proposition de **restaurer le brouillon** (avec date/heure). Le brouillon est purgé à la soumission du formulaire.

**Fichiers** : `assets/cias-ameliorations.js` (`renderStepper`, `initAutosave`), `assets/dist/css/cias-ameliorations.css`.

## ✅ 6. Envoi email direct depuis CIAS

- Bouton « **📧 Envoyer par email** » sur l'écran 5 : envoie en un clic un email HTML contenant le résumé du dossier (stagiaire, entreprise, formation) et **les liens directs vers le formulaire et la convention PDF**.
- **Destinataires pré-configurés** dans `application/config/cias_notifications.php` :

```php
$config['cias_email_destinataires'] = array(
    'maformationsas@gmail.com',
    // 'gerald@exemple.fr',   // <- ajouter l'adresse de Gerald ici
);
```

- Le sujet est paramétrable (`{stagiaire}` et `{formation}` remplacés automatiquement).
- Plus besoin de télécharger le PDF, l'attacher et envoyer manuellement → gain de 2-3 min/dossier.

**Fichiers** : `Stagiaire.php` (méthode `envoyer_dossier_email`), `application/config/cias_notifications.php`.

---

## Fichiers modifiés / ajoutés

| Fichier | Type | Rôle |
|---|---|---|
| `application/controllers/Stagiaire.php` | modifié | 4 nouveaux endpoints + boutons écran 5 |
| `application/views/includes/header.php` | modifié | inclusion du CSS |
| `application/views/includes/footer.php` | modifié | inclusion du JS |
| `application/config/cias_notifications.php` | **nouveau** | destinataires email paramétrables |
| `assets/cias-ameliorations.js` | **nouveau** | toute la logique front-end |
| `assets/dist/css/cias-ameliorations.css` | **nouveau** | styles (stepper, boutons, toasts) |

## Notes de déploiement

1. **Adresse de Gerald** : à ajouter dans `application/config/cias_notifications.php` (le fichier est versionné, contrairement aux autres configs sensibles — il ne contient aucun secret).
2. L'envoi d'email utilise la librairie email CodeIgniter avec la configuration serveur existante (comme `envoyer_mail_formateur`). Si l'envoi échoue, vérifier la configuration SMTP du serveur de production.
3. Le JS est **non intrusif** : chaque fonctionnalité ne s'active que si les éléments correspondants sont présents sur la page. Aucune modification des formulaires existants.
4. Sauvegarde auto : stockée localement dans le navigateur du poste de l'agent (rien n'est envoyé au serveur).
