<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CIAS - Notifications par email (Amélioration #6 - juin 2026)
|--------------------------------------------------------------------------
| Destinataires pré-configurés pour le bouton "Envoyer par email"
| de l'écran 5 (Demande de prise en charge).
|
| Modifier ici les adresses sans toucher au code.
*/

// Expéditeur
$config['cias_email_from']      = 'contact@formacall.fr';
$config['cias_email_from_name'] = 'CIAS - MAF Formation';

// Destinataires principaux (MAF + Gerald)
$config['cias_email_destinataires'] = array(
    'maformationsas@gmail.com',
    // 'gerald@exemple.fr',   // <- ajouter l'adresse de Gerald ici
);

// Copies (CC) éventuelles
$config['cias_email_cc'] = array();

// Sujet par défaut ({stagiaire} et {formation} sont remplacés automatiquement)
$config['cias_email_sujet'] = 'Dossier de prise en charge - {stagiaire} - {formation}';
