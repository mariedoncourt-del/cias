<?php
// CIAS Safe accessor - evite Undefined property
if (!function_exists("_s")) {
    function _s($obj, $prop, $default = "") {
        return isset($obj->$prop) ? $obj->$prop : $default;
    }
}
 if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Thematique extends BaseController
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

    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
       $this->global['pageTitle'] = 'Saisie thématique';
       $data['donneeformateur'] = $this->table_model->recuperer_thematique();
       // $data['donneethematique'] = $this->table_model->recuperer_thematique();
       $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("thematique/ajout_thematique", $this->global, $data , NULL);
        
    }
function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_thematique($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nom_thematique,
                );
                echo json_encode($arr_result);
            }
        }
    }
    public function modifier_table_formation()
    {
        $this->table_model->modifier_table_formation();
        echo "Modification OK";
    }

     public function creation_table_thematique()
    {
        $this->table_model->creation_table_thematique();
        echo "Création OK";
    }

    public function modifier_table_thematique()
    {
        $this->table_model->modifier_table_thematique();
        echo "OK";
    }


    public function insertion_thematique()
{
    $data  = array('nom_thematique' => $this->input->post('nom_thematique'),'organisme' => $this->input->post('organisme'));
    $this->table_model->inserer_thematique($data);
   // echo "Enregistrement OK";
}

public function modifier_organisme()
{
    $this->table_model->modifier_organisme();
    echo "OK";
}

public function testthematique()
{
    print_r($this->table_model->afficher_thematique('MAF SAS'));
}


public function liste_thematique()
{
    $data = $this->table_model->afficher_thematique();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                  
                    <th>Thématique</th>
                    <th colspan=2>Action</th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->nom_thematique.'</td>
                       
<td><button type="button" class="btn_modifier btn btn-warning btn-sm" data-nom_thematique="'.$row->nom_thematique.'" title="Modifier"><span class="fa fa-pencil" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-nom_thematique="'.$row->nom_thematique.'" data-organisme="'.$this->_safe($row,'organisme','').'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


public function supprimer_thematique()
{
    $this->table_model->supprimer_thematique($this->input->post("nom_thematique"), $this->input->post("organisme"));
}

// ===== NOUVELLES MÉTHODES MODERNES POUR GESTION THÉMATIQUES =====

// Récupérer toutes les thématiques en JSON
public function get_all_json() {
    $thematiques = $this->table_model->get_all_thematiques();
    echo json_encode(['success' => true, 'thematiques' => $thematiques]);
}

// Ajouter une thématique via AJAX
public function ajouter() {
    if($this->input->method() == 'post') {
        $nom = $this->input->post('nom_thematique');
        $description = $this->input->post('description');
        
        if(empty($nom)) {
            echo json_encode(['success' => false, 'message' => 'Le nom est obligatoire']);
            return;
        }
        
        $data = array(
            'nom_thematique' => $nom,
            'description' => $description,
            'actif' => 1,
            'created_at' => date('Y-m-d H:i:s')
        );
        
        $result = $this->table_model->add_thematique($data);
        
        if($result) {
            echo json_encode(['success' => true, 'message' => 'Thématique ajoutée avec succès']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'ajout']);
        }
    }
}

// Modifier une thématique
public function modifier() {
    if($this->input->method() == 'post') {
        $id = $this->input->post('id');
        $nom = $this->input->post('nom_thematique');
        $description = $this->input->post('description');
        
        if(empty($id) || empty($nom)) {
            echo json_encode(['success' => false, 'message' => 'Données manquantes']);
            return;
        }
        
        $data = array(
            'nom_thematique' => $nom,
            'description' => $description
        );
        
        $result = $this->table_model->update_thematique($id, $data);
        
        if($result) {
            echo json_encode(['success' => true, 'message' => 'Thématique modifiée avec succès']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erreur lors de la modification']);
        }
    }
}

// Activer/Désactiver une thématique
public function toggle_actif() {
    if($this->input->method() == 'post') {
        $id = $this->input->post('id');
        $actif = $this->input->post('actif');
        
        if(empty($id)) {
            echo json_encode(['success' => false, 'message' => 'ID manquant']);
            return;
        }
        
        $data = array('actif' => $actif);
        $result = $this->table_model->update_thematique($id, $data);
        
        if($result) {
            echo json_encode(['success' => true, 'message' => 'Statut modifié avec succès']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erreur lors de la modification']);
        }
    }
}


    private function _safe($o,$p,$d=''){
        if(is_object($o)&&property_exists($o,$p))return $o->$p;
        if(is_array($o)&&array_key_exists($p,$o))return $o[$p];
        return $d;
    }
}