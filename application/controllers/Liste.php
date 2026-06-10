<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Liste (ListeController)
 * Lister les dossiers
 * @author : Aina herifitia
 * @version : 1.0
 */
class Liste extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Maf Facturation : Liste des dossiers';
        
        $this->loadViews("saisie/liste_dossier", $this->global, NULL , NULL);
    }
    
}

?>