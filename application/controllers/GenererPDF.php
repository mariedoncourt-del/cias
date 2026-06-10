<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : GenererPDF
 * générer les fichiers pdf
 * @author : Aina herifitia RANDRIANIRINA
 * @version : 1.0
 */
class GenererPDF extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        // charger la librairie DOM PDF
        $this->load->library('pdf');
        $this->load->model('pdf_model');
        $this->isLoggedIn();

    }
    
    /**
     * This function used to load the first screen of the user
    */

    public function convention($id)
    {
        $this->global['pageTitle'] = 'génération CONVENTION';
        // recuperer contenu convention
        $html = $this->pdf_model->recuperer_convention($id);

        // recuperer nom + prenom + formation
        $nomfichier = 'CONVENTION '.$this->pdf_model->recuperer_nom_fichier($id);

        // convertir en pdf 
        // print_r($html);
        $this->pdf->creerPDF($html, $nomfichier, false);
    }

    public function facture($id)
    {
        $this->global['pageTitle'] = 'génération FACTURE';
        // recuperer contenu convention
        $html = $this->pdf_model->recuperer_facture($id);

        // recuperer nom + prenom + formation
        $nomfichier = 'FACTURE '.$this->pdf_model->recuperer_nom_fichier($id);

        // convertir en pdf 
        // print_r($html);
        $this->pdf->creerPDF($html, $nomfichier, false);
    }

    public function formulaire($id)
    {
        $this->global['pageTitle'] = 'génération FORMULAIRE';
        // recuperer contenu convention
        $html = $this->pdf_model->recuperer_formulaire($id);

        // recuperer nom + prenom + formation
        $nomfichier = 'FORMULAIRE '.$this->pdf_model->recuperer_nom_fichier($id);

        // print_r($html);

        // convertir en pdf 
        $this->pdf->creerPDF($html, $nomfichier, false);
    }

    
}

?>