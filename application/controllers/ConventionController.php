<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class ConventionController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Convention_model');
    }

    public function index() {
        $data['conventions'] = $this->Convention_model->getConventions();
        $this->load->view('convention_view', $data);
    }
    public function check_date_exists() {
        $formateurId = $this->input->post('formateur_id');
        $selectedDate = $this->input->post('selected_date');

        $dateExists = $this->Convention_model->checkDateExists($formateurId, $selectedDate);

        echo $dateExists ? 'exists' : 'not_exists';
    }
}