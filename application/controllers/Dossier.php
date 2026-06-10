<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Dossier extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dossier_model', 'dossier');
        $this->isLoggedIn();
    }

    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
       $this->global['pageTitle'] = 'Maf Facturation : Saisie des dossiers';
       $data['donnee'] = $this->dossier->recuperer();
        
        $this->loadViews("saisie/liste_dossier", $this->global, $data , NULL);
        
    }

    public function ajouter(){
        $param = 'kotokely';
        $this->dossier->inserer($param);
    }

    public function ajout(){
        $this->dossier->ajout();
        redirect ('dossier');
    }

    public function afficherid($id){
        $this->global['pageTitle'] = 'Maf Facturation : édition';
        $data['ligne'] = $this->dossier->recuperer_id($id);
         $this->loadViews("saisie/modifier", $this->global, $data , NULL);
    }

    public function supprimer($id){
        $this->dossier->suppr_id($id);
        redirect('dossier');
    }

    public function modifier_dossier($id){
        $this->dossier->modifier_dossier($id);
         redirect('dossier');
    }
    
}   

?>