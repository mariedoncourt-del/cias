<?php
// CIAS Safe accessor - evite Undefined property
if (!function_exists("_s")) {
    function _s($obj, $prop, $default = "") {
        return isset($obj->$prop) ? $obj->$prop : $default;
    }
}
 if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Formateur extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('table_model');
        $this->load->model('stagiaire_model');
        $this->isLoggedIn();
    }

    public function ajouter_signature_formateur()
    {
       $this->global['pageTitle'] = 'Signatures des formateurs';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("formateur/ajouter_signature_formateur", $this->global, NULL , NULL);
        
    }

    public function ajouter_signature()
    {
       $this->global['pageTitle'] = 'Signatures des formateurs';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("formateur/ajouter_signature", $this->global, NULL , NULL);
        
    }

    public function upload_signatures() {
        $nom_formateur = $this->input->post('nom_formateur');
        $prenom_formateur = $this->input->post('prenom_formateur');
       // $config['upload_path'] = 'assets/uploads/'; // Chemin où les fichiers seront stockés
     /*  $config['upload_path']=  "/home/mafformael/www/cias/assets/upload/";
        $config['allowed_types'] = 'gif|jpg|png'; // Types de fichiers autorisés
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('signatures')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            // Enregistrement en base de données
            $this->stagiaire_model->ajouterSignature($nom_formateur,$prenom_formateur, $file_name);
            redirect('formateur/ajouter_signature');
        }*/

        //$nom_formateur = $this->input->post('nom_formateur');
       // $config['upload_path'] = './uploads/'; // Chemin où les fichiers seront stockés
       $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types'] = 'gif|jpg|png'; // Types de fichiers autorisés
        
        $this->load->library('upload', $config);
        $files = $_FILES['signatures'];
    
        $uploaded = [];
        $errors = [];
    
        foreach ($files['name'] as $key => $file_name) {
            $_FILES['signatures']['name'] = $files['name'][$key];
            $_FILES['signatures']['type'] = $files['type'][$key];
            $_FILES['signatures']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['signatures']['error'] = $files['error'][$key];
            $_FILES['signatures']['size'] = $files['size'][$key];
    
            if (!$this->upload->do_upload('signatures')) {
                $errors[] = $this->upload->display_errors();
            } else {
                $uploaded[] = $this->upload->data('file_name');
            }
        }
    
        if (!empty($uploaded)) {
            // Enregistrement en base de données
            $this->stagiaire_model->ajouterSignature($nom_formateur, $prenom_formateur,$uploaded);
        }
    
        if (!empty($errors)) {
            print_r($errors); // Gérer les erreurs ici
        }
    
        //redirect('formateur/index');
        redirect('formateur/ajouter_signature');
    }


    public function supprimer_signature()
    {
        $this->stagiaire_model->supprimer_signature(1);
        echo "Supprimer";
    }

    public function aficher_signatures()
    {
        print_r($this->stagiaire_model->aficher_signatures());
    }

    function get_autocomplete_signature(){
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_signature('CANO','PHILIPPE',$_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->signatures,
                );
                echo json_encode($arr_result);
            }
        }
    }


    public function prosesUploadSignature()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');
        

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/signatures/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }

    print_r($uploadData);

  /*   if($uploadData !== null){ // Jika Berhasil Upload
            $data = array('nom_formateur' => $this->input->post("nom_formateur"),
            'prenom_formateur' => $this->input->post("prenom_formateur"),
            'signatures' => $uploadData
     );
            // Insert ke Database 
            $insert = $this->table_model->uploadsignature($data);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formateur/ajout_signature_formateur");
            }

        }*/

}


    /**
     * This is default routing method
     * It routes to default listing page
     */
function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_formateur($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nom_formateur,
                );
                echo json_encode($arr_result);
            }
        }
    }
    public function Afficher_formateur()
    {
       // $this->load->model('elevemodel');
        //$nomeleve = $this->input->post("nomeleve");
        //$nomeleve = 59;
        $nom_formateur = $this->input->post("nom_formateur");
        echo $this->table_model->Recherche_formateur($nom_formateur);
    }


    public function index()
    {
       $this->global['pageTitle'] = 'Saisie des formateurs';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("formateur/ajout_formateur", $this->global, $data, NULL);
        
    }

    public function test_insertion_formateur()
{ 

    $this->load->library('form_validation');
    $this->form_validation->set_rules('nom_formateur','Nom formateur','required');
    $this->form_validation->set_rules('prenom_formateur','Prénom formateur','required');
    if($this->form_validation->run()==true)
    {
        $data  = array('nom_formateur' => $this->input->post('nom_formateur') , 'prenom_formateur' => $this->input->post('prenom_formateur') );
        $this->table_model->inserer_formateur($data);
        $array = array('sucess' => '<div class="alert alert-success">Enregistrement OK"></div>');
    }
    else
    {
        $array = array('error' => true,
            'error_nomformateur' => form_error('nom_formateur'),
            'error_prenomformateur' => form_error('prenom_formateur')

        );
    }
    echo json_encode($array);


   
   // echo "Enregistrement OK";
}

public function modifier_cv()
{
    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $config['upload_path']=  "/home/mafformael/www/cias/assets/cv/";
    $config['allowed_types']='gif|jpg|png|jpeg|pdf';
    $config['encrypt_name'] = FALSE;
    $this->load->library('upload',$config);
    if($this->upload->do_upload("fichier")){

       
        $data = array('upload_data' => $this->upload->data());
       $x = $data['upload_data']['file_name'];
       $this->stagiaire_model->modifier_cv_formateur($this->input->post("nom_formateurss"),$this->input->post("prenom_formateurss"),$x);

     }

     redirect('formateur');
}

public function liste_formateur()
{
   // $organisme = $this->input->post("organisme");
    $data = $this->table_model->afficher_formateur();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th class="border-primary">Nom formateur</th>
                    <th class="border-primary">Prénom formateur</th>
                
                    <th class="border-primary" colspan=2>Action</th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_formateur.'</td>
                        <td class="border-primary">'.$row->prenom_formateur.'</td>

<td class="border-primary"><button type="button" class="btn_modifier btn btn-warning btn-sm" data-nom_formateur='.$row->nom_formateur.' data-prenom_formateur="'.$row->prenom_formateur.'" data-organisme="'.$row->organisme.'" title="Modifier"><span class="fa fa-pencil" aria-hidden="true"></span></button></td>
                        <td class="border-primary"><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-organisme="'.$row->organisme.'" data-nom_formateur='.$row->nom_formateur.' data-prenom_formateur="'.$row->prenom_formateur.'" title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>
                      
                        <td class="border-primary"><a href="'.base_url()."assets/cv/".$row->cv_formateur.'"  class="btn btn-success btn-sm" target="_blank" title="CV"><span class="fa fa-eye" aria-hidden="true"></span></a>

                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


public function supprimer_formateur()
{
    $this->table_model->supprimer_formateur($this->input->post("nom_formateur") );
}

}

?>