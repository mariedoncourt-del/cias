<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Fullcalendar extends BaseController {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('fullcalendar_model');
  $this->isLoggedIn();
 }

 function index()
 {
  $this->global['pageTitle'] = 'Intervention formateur';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/fullcalendar", $this->global, NULL , NULL);


 }

 function load()
 {
  $event_data = $this->fullcalendar_model->fetch_all_event();
  foreach($event_data->result_array() as $row)
  {
   $data[] = array(
    'nom_formateur' => $row['nom_formateur'],
    'prenom_formateur' => $row['prenom_formateur'],
    'date_debut' => $row['date_debut'],
    'date_fin' => $row['date_fin']
   );
  }
  echo json_encode($data);
 }

 function insert()
 {
  if($this->input->post('title'))
  {
   $data = array(
    'title'  => $this->input->post('title'),
    'start_event'=> $this->input->post('start'),
    'end_event' => $this->input->post('end')
   );
   $this->fullcalendar_model->insert_event($data);
  }
 }

 function update()
 {
  if($this->input->post('id'))
  {
   $data = array(
    'title'   => $this->input->post('title'),
    'start_event' => $this->input->post('start'),
    'end_event'  => $this->input->post('end')
   );

   $this->fullcalendar_model->update_event($data, $this->input->post('id'));
  }
 }

 function delete()
 {
  if($this->input->post('id'))
  {
   $this->fullcalendar_model->delete_event($this->input->post('id'));
  }
 }

}

?>