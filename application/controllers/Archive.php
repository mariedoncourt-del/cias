<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Archive extends BaseController
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
       $this->global['pageTitle'] = 'Maf Facturation : Archives des données';
      // $data['donnee'] = $this->dossier->recuperer();
        
        $this->loadViews("general/archive", $this->global, NULL , NULL);
        
    }

   
    
}   

?>