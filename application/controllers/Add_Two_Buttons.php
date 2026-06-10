<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Two_Buttons extends CI_Controller {
    public function index() {
        echo "TEST REUSSI ! Le contrôleur fonctionne !";
        echo "<br><br>";
        echo "<a href='" . site_url('stagiaire/afficher_liste_emargement') . "'>Aller à la liste</a>";
    }
}
