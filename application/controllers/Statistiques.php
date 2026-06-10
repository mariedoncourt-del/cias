<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Statistiques extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
      //  $this->load->model('Dossier_model', 'dossier');
        $this->isLoggedIn();
    }

    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
       $this->global['pageTitle'] = 'Maf Facturation : Statistique';
      // $data['donnee'] = $this->dossier->recuperer();
        
        $this->loadViews("general/statistiques", $this->global, NULL , NULL);
        
    }

   
    
}   

?>