<?php
// CIAS Safe accessor - evite Undefined property
if (!function_exists("_s")) {
    function _s($obj, $prop, $default = "") {
        return isset($obj->$prop) ? $obj->$prop : $default;
    }
}
 if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Stagiaire extends BaseController
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
        $this->load->model('Task_model', 'tm');
    }

    public function modifier_date_verlhac()
    {
      $this->stagiaire_model->modifier_date_verlhac();
      echo "OK";
    }

public function list_formulaire()
{

}
  public function modifier_heure_debut()
  {
    $this->stagiaire_model->modifier_heure_debut();
    echo "OK";

  }

  public function test_formation()
  {
    print_r($this->stagiaire_model->liste_stage_par_thematique('', ''));
  }

    public function inserer_conventionsss()
    {
      $data = array('nom_stagiaire' => 'DAVRIL',
                  'prenom_stagiaire'=> 'STEPHANIE',
                  'id_formation' => 'F-VEN-LIV-FAC',
                  'date_debut' => '2024-06-14',
                  'date_fin' => '2024-07-16',
                  'date_signature' => '2023-11-28',
                  'date_convention_1' => '2024-06-14',
                  'date_convention_2' => '2024-06-18',
                  'date_convention_3' => '2024-06-19',
                  'date_convention_4' => '2024-06-20',
                  'date_convention_5' => '2024-06-21',
                  'date_convention_6' => '2024-06-24',
                  'date_convention_7' => '2024-06-25',
                  'date_convention_8' => '2024-07-12',
                  'date_convention_9' => '2024-07-15',
                  'date_convention_10' => '2024-07-16',
                  'heure_debut_1' => '08:00',
                  'heure_debut_2' => '08:00',
                  'heure_debut_3' => '08:00',
                  'heure_debut_4' => '08:00',
                  'heure_debut_5' => '08:00',
                  'heure_debut_6' => '08:00',
                  'heure_debut_7' => '08:00',
                  'heure_debut_8' => '08:00',
                  'heure_debut_9' => '08:00',
                  'heure_debut_10' => '08:00',
                  'heure_fin_1' => '12:00',
                  'heure_fin_2' => '12:00',
                  'heure_fin_3' => '12:00',
                  'heure_fin_4' => '12:00',
                  'heure_fin_5' => '12:00',
                  'heure_fin_6' => '12:00',
                  'heure_fin_7' => '12:00',
                  'heure_fin_8' => '12:00',
                  'heure_fin_9' => '12:00',
                  'heure_fin_10' => '12:00',
                  'heure_debut_111'=> '14:00',
                         'heure_debut_222'=> '14:00',
                         'heure_debut_333'=> '14:00',
                         'heure_debut_444'=> '14:00',
                         'heure_debut_555'=> '14:00',
                         'heure_debut_666'=> '14:00',
                         'heure_debut_777'=>'14:00',
                         'heure_debut_888'=> '14:00',
                         'heure_debut_999'=> '14:00',
                         'heure_debut_1010'=> '14:00',
                         
                        'heure_fin_111'=> '17:00',
                        'heure_fin_222'=> '17:00',
                        'heure_fin_333'=> '17:00',
                        'heure_fin_444'=> '17:00',
                        'heure_fin_555'=> '17:00',
                        'heure_fin_666'=> '17:00',
                        'heure_fin_777'=> '17:00',
                        'heure_fin_888'=> '17:00',
                        'heure_fin_999'=> '17:00',
                        'heure_fin_1010'=> '17:00',
                        
                         'nom_formateur' => 'GUILLOU',
                          'prenom_formateur' => 'Karine',
                          'lieu_formation' => '2 PL DE LA LIBERTE 31470 SAINT-LYS'
                       //

                  
    );
      $this->stagiaire_model->inserer_convention($data);

    }

    public function modifier_signature_faormateur()
    {
      $nom_stagiaire = 'AMADIO';
      $prenom_stagiaire = 'Bruce';
      $id_formation =  'F-LAN-SIG-FR-1';
      $this->stagiaire_model->modifier_signature_faormateurs($nom_stagiaire,$prenom_stagiaire,$id_formation);
      echo "OK";

    }

    public function afficher_signature_stagiaire()
    {
      $nom_stagiaire = 'DESCOUX';
      $prenom_stagiaire = 'ADELINE';
      $id_formation =  'F-REF-FAC';
     print_r($this->stagiaire_model->afficher_signature_stagiaire($nom_stagiaire, $prenom_stagiaire, $id_formation));
    }
    public function modifier_amadio()
    {
      $this->stagiaire_model->modifier_amadio_facture();
      echo "OK";
    }

    public function modifier_dias()
    {
      $this->stagiaire_model->modifier_dias();
      echo "OK";
    }


    public function  modifier_table_emargement_id()
    {
      $this->table_model->modifier_table_emargement_id();
      echo "OK";
    }

    public function inserer_emargementss1()
    {
      $data = array('nom_stagiaire' => 'MIE',
                    'prenom_stagiaire' => 'GABRIELLE',
                    'id_formation' => 'INT-ARTIF',
                    'date_signature_1' => '2024-03-21',
                    'date_signature_2' => '2024-03-27',
                    'date_signature_3' => '2024-03-29',
    );
      $this->stagiaire_model->inserer_emargement($data);
    }

    public function supprimer_qualiopi()
    {
      $this->stagiaire_model->supprimer_qualiopi();
     // echo "OK";
    }

    public function test_id()
    {
      echo $this->stagiaire_model->id_qualiopi('FLORENCE CLERC','I WANT YOU TO SPEAK ENGLISH ');
    }
    public function source_db()
    {
      $this->supprimer_qualiopi();
      $source_db = $this->load->database('source', TRUE);
      //$source_data = $source_db->get('formation')->result_array();
      $source_db->select('formation.id, apprenant.nom AS apprenant_nom, apprenant.prenom AS apprenant_prenom,cours.id as cours_id, cours.titre as cours_titre, prof.nom AS prof_nom, prof.prenom AS prof_prenom');
     // $source_db->select('formation.id, apprenant.nom AS apprenant_nom, apprenant.prenom AS apprenant_prenom, cours.titre');
      $source_db->from('formation');
      $source_db->join('apprenant', 'apprenant.id = formation.apprenant_id');
     $source_db->join('cours', 'cours.id_key = formation.cours_id');
      $source_db->join('prof', 'prof.id = formation.prof_id');
        $query = $source_db->get();
        $source_data = $query->result();
      print_r($source_data);
    }

    public function supprimer_evaluation_hot()
    {
      $this->stagiaire_model->supprimer_evaluation_hot();
    }

    public function evaluation()
    {
      $source_db = $this->load->database('source', TRUE);
      //$source_data = $source_db->get('formation')->result_array();
   /*   $source_db->select('formation.id, apprenant.nom AS apprenant_nom, apprenant.prenom AS apprenant_prenom,cours.id as cours_id, cours.titre as cours_titre, prof.nom AS prof_nom, prof.prenom AS prof_prenom');
     // $source_db->select('formation.id, apprenant.nom AS apprenant_nom, apprenant.prenom AS apprenant_prenom, cours.titre');
      $source_db->from('formation');
      $source_db->join('apprenant', 'apprenant.id = formation.apprenant_id');
     $source_db->join('cours', 'cours.id_key = formation.cours_id');
      $source_db->join('prof', 'prof.id = formation.prof_id');
        $query = $source_db->get();
        $source_data = $query->result();*/
      $query = $source_db->query("select evaluation_hot.id_formation, evaluation_hot.eval_1,evaluation_hot.eval_2,evaluation_hot.eval_3,evaluation_hot.eval_4,evaluation_hot.eval_5,evaluation_hot.eval_6,evaluation_hot.eval_7,evaluation_hot.eval_8, apprenant.nom, apprenant.prenom from evaluation_hot,formation, apprenant where evaluation_hot.id_formation = formation.id and formation.apprenant_id = apprenant.id");


      print_r($query->result());
    }

    public function afficher_evaluation_hot()
    {
      print_r($this->stagiaire_model->afficher_evaluation_hot());
    }

    public function convention_evaluation()
    {
      print_r($this->stagiaire_model->convention_evaluation());
    }

    public function export_evaluation_hot()
    {
      $this->supprimer_evaluation_hot();
      $source_db = $this->load->database('source', TRUE);
      $query = $source_db->query("select evaluation_hot.id_formation, evaluation_hot.eval_1,evaluation_hot.eval_2,evaluation_hot.eval_3,evaluation_hot.eval_4,evaluation_hot.eval_5,evaluation_hot.eval_6,evaluation_hot.eval_7,evaluation_hot.eval_8, evaluation_hot.eval_note, evaluation_hot.sati_1, evaluation_hot.sati_2, evaluation_hot.sati_3, evaluation_hot.sati_4,apprenant.nom, apprenant.prenom from evaluation_hot,formation, apprenant where evaluation_hot.id_formation = formation.id and formation.apprenant_id = apprenant.id");
      $source_data = $query->result_array();
      $target_db = $this->load->database('default', TRUE);
      $target_db->trans_start(); // Début de la transaction
      foreach ($source_data as $row) {
        $data = array('id_formation'=> $row['id_formation'],
        'nom_stagiaire' => $row['nom'],
        'prenom_stagiaire' => $row['prenom'],

        'eval_1'=> $row['eval_1'],
        'eval_2'=> $row['eval_2'],
        'eval_3'=> $row['eval_3'],
        'eval_4'=> $row['eval_4'],
        'eval_5'=> $row['eval_5'],
        'eval_6'=> $row['eval_6'],
        'eval_7'=> $row['eval_7'],
        'eval_8'=> $row['eval_8'],
        'eval_note' => $row['eval_note'],
        'sati_1' => $row['sati_1'],
        'sati_2' => $row['sati_2'],
        'sati_3' => $row['sati_3'],
        'sati_4' => $row['sati_4'],
        
      );
          $target_db->insert('evaluation_hot', $data);
      }
      $target_db->trans_complete(); // Fin de la transaction

      if ($target_db->trans_status() === FALSE) {
          // La transaction a échoué
          echo "Erreur lors de l'importation des données.";
      } else {
          // La transaction a réussi
          //echo "Les données ont été exportées de la base de données source et importées dans la base de données cible avec succès.";
      }


    }

   

    public function export_import_data() {
      $this->supprimer_qualiopi();
      // Chargement de la base de données source
      $source_db = $this->load->database('source', TRUE);

      $source_db->select('formation.id, apprenant.nom AS apprenant_nom, apprenant.prenom AS apprenant_prenom, cours.id as cours_id, cours.titre as cours_titre, prof.nom AS prof_nom, prof.prenom AS prof_prenom');
      // $source_db->select('formation.id, apprenant.nom AS apprenant_nom, apprenant.prenom AS apprenant_prenom, cours.titre');
       $source_db->from('formation');
       $source_db->join('apprenant', 'apprenant.id = formation.apprenant_id');
      $source_db->join('cours', 'cours.id_key = formation.cours_id');
       $source_db->join('prof', 'prof.id = formation.prof_id');
         $query = $source_db->get();
         $source_data = $query->result_array();
       
      // Chargement de la base de données cible
      $target_db = $this->load->database('default', TRUE);
    //  $target_db->stagiaire_model->supprimer_qualiopi();
      // Exporter les données de la table formation de la base de données source
      //$source_data = $source_db->get('formation')->result_array();

      // Importer les données dans la table formation de la base de données cible
      $target_db->trans_start(); // Début de la transaction
      foreach ($source_data as $row) {
        $data = array('id_formation'=> $row['id'],
        'nom_et_prenom' => $row['apprenant_nom'],
        'prof'=> $row['prof_prenom'].' '.$row['prof_nom'],
        'formation' => $row['cours_titre'],
      'id_cours' => $row['cours_id']);
          $target_db->insert('qualiopi', $data);
      }
      $target_db->trans_complete(); // Fin de la transaction

      if ($target_db->trans_status() === FALSE) {
          // La transaction a échoué
          echo "Erreur lors de l'importation des données.";
      } else {
          // La transaction a réussi
        //  echo "Les données ont été exportées de la base de données source et importées dans la base de données cible avec succès.";
      }
  }

  public function afficher_qualiopi()
  {
    print_r($this->stagiaire_model->afficher_qualiopi());
  }


    public function modifier_farjou()
    {
      $this->stagiaire_model->modifier_farjou();
      echo "OK";
    }
    public function modifier_id()
    {
      $this->stagiaire_model->modifier_id(); 
      echo 'OK';
    }

    public function afficher_id()
    {
      print_r($this->stagiaire_model->afficher_id());
      
    }


    public function modifier_num_facture()
    {
      $this->stagiaire_model->modifier_num_facture();
      echo "OK";
    }

    public function nombre_formations()
    {
      echo $this->stagiaire_model->nombre_formations();
    }

    public function evaluation_a_chauds()
	{
		$data = $this->stagiaire_model->afficher_evaluation_hot(2024);
		$sat = 0;
		$total = 0;
       
            foreach($data as $row)
            {
				$sat = $row->sati_1 + $row->sati_2 + $row->sati_3 + $row->sati_4 + $row->eval_1 + $row->eval_2 + $row->eval_3 + $row->eval_4 + $row->eval_5 + $row->eval_6 + $row->eval_7 + $row->eval_8;
				$tot = ($sat * 100)/48;
				$total += $tot;
                
            }
            
        
        
        return round($total/$this->stagiaire_model->nombre_formations(2024),2);
	}

  public function test_thematique()
  {
    print_r($this->stagiaire_model->liste_stage_par_formation('MARKETING 3.0', 2024));
  }

public function liste_stage_par_thematique()
{
  //echo $this->uri->segment(3);
 $data = $this->stagiaire_model->liste_stage_par_thematique($this->input->post("nom_thematique"), $this->input->post("annee"));
 $output = '';
 $somme = 0;
 
  
 
 foreach($data as $row)
 {
    //$somme += substr($row->duree_formation,0,2);
    $somme1 = 0;
    $output .= '<h5>Stage : '.$row->nom_formation.'</h5>';
    $data1 = $this->stagiaire_model->liste_stage_par_formation($row->nom_formation, $this->input->post("annee"));
    $output .= '<table id="maTable" class="table table-bordered table-striped">
    <tr>
        
        
        <th class="border-primary">Nom  stagiaire</th>
        <th class="border-primary">Durée formation</th></tr>';
    foreach($data1 as $row1)
    {
      $somme1 += substr($row1->duree_formation,0,2);
    $output .= '<tr><td class="border-primary">'.$row1->nom_stagiaire.' '.$row1->prenom_stagiaire.'</td><td class="border-primary">'.$row1->duree_formation.'</td></tr>';
    
    }
    $output .= '<tr><td colspan=2></td></tr><tr><td><h5>Total</h5></td><td><h5>'.$somme1.' H</h5></td></tr></table>';
    $somme += $somme1;
    
 }

 $output .= '<table id="maTable" class="table table-bordered table-striped"><tr><th class="border-primary">Total Heures :</th><th class="border-primary">'.$somme.' H</th></tr></table>';

 echo $output;

}

  public function afficher_thematiques()
  {
    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $curl = curl_init();
   /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
    'nom_formateur' => $this->input->post("nom_formateur"),
    'nom_stagiaire' => $this->input->post("nom_stagiaire")
    
  );*/

    curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/evaluation_a_chauds");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
   // curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$row->nom_stagiaire."&prenom_stagiaire=".$row->prenom_stagiaire."&id_formation=".$row->id_formation."");
    //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
    //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
  // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
  //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
   // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

    $result = curl_exec($curl);
    curl_close($curl);
    if($result==null)
    {
      $result = "";
    }
    else{
      $result = $result;
    }

    $curl = curl_init();
   /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
    'nom_formateur' => $this->input->post("nom_formateur"),
    'nom_stagiaire' => $this->input->post("nom_stagiaire")
    
  );*/

    curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/taux_de_reussite");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
   // curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$row->nom_stagiaire."&prenom_stagiaire=".$row->prenom_stagiaire."&id_formation=".$row->id_formation."");
    //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
    //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
  // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
  //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
   // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

    $result1 = curl_exec($curl);
    curl_close($curl);
    if($result==null)
    {
      $result1 = "";
    }
    else{
      $result1 = $result1;
    }

    if($this->input->post("annee")==null|| $this->input->post("annee")=="")
      {
          $tf = $this->stagiaire_model->afficher_evaluation_hot(date('Y')); 
          $annee = date('Y');
      }
      else{
        $tf = $this->stagiaire_model->afficher_evaluation_hot($this->input->post("annee")); 
        $annee = $this->input->post("annee");
      }

    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_thematique($annee);
    $output = '';
      $query = '';
      $output .= '
          <div class="table-responsive text-left">
              <table id="maTable" class="table table-bordered table-striped">
              <tr>
                  <th class="border-primary">Nom thématique</th>
                  <th class="border-primary">Nombre d\'heure par thème</th>
                 
                  
                  
                  
              </tr>
      
      ';
      $somme = 0;
  
          foreach($data as $row)
          {
            $somme += $this->stagiaire_model->nombre_heure_par_theme($row->nom_thematique,$annee);
              $output .= '
                  <tr>
                  <td class="border-primary"><button type="button" style="width:250px" class="btn_thematique btn btn-success btn-sm"  data-annee="'.$annee.'" data-nom_thematique = "'.$row->nom_thematique.'" title="Statistique">'.$row->nom_thematique.'</button></td>
                     
                      <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$this->stagiaire_model->nombre_heure_par_theme($row->nom_thematique,$annee).' H</td>

                      
                     
                      


                
                  </tr>
              
              ';
          }
          
          $t = $this->stagiaire_model->formateur_actif($annee);
          $d = $this->stagiaire_model->nombre_stagiaires($annee);
      
      $output .= '<tr><td><b>Total Heure</b></td><td><b>'.$somme.' H</b></td></tr>
      <tr><td><b>Nombre de formateur actif </b></td><td><b>'.$t.' </b></td></tr>
      <tr><td><b>Nombre de stagiaire </b></td><td><b>'.$d.' </b></td></tr>
      <tr><td><b>Taux de satisfaction </b></td><td><b>'.$tf.' %</b></td></tr>
      <tr><td><b>Taux de réussite </b></td><td><b>'.round($result1,2).' %</b></td></tr>
      
      </table>';
      echo $output;


  }





    public function afficher_thematique()
    {
      $this->export_evaluation_hot();
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/evaluation_a_chauds");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
     // curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$row->nom_stagiaire."&prenom_stagiaire=".$row->prenom_stagiaire."&id_formation=".$row->id_formation."");
      //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);
      if($result==null)
      {
        $result = "";
      }
      else{
        $result = $result;
      }

      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/taux_de_reussite");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
     // curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$row->nom_stagiaire."&prenom_stagiaire=".$row->prenom_stagiaire."&id_formation=".$row->id_formation."");
      //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result1 = curl_exec($curl);
      curl_close($curl);
      if($result==null)
      {
        $result1 = "";
      }
      else{
        $result1 = $result1;
      }

      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      if($this->input->post("annee")==null|| $this->input->post("annee")=="")
      {
          $tf = $this->stagiaire_model->afficher_evaluation_hot(date('Y')); 
          $annee = date('Y');
      }
      else{
        $tf = $this->stagiaire_model->afficher_evaluation_hot($this->input->post("annee")); 
        $annee = $this->input->post("annee");
      }
      $data = $this->stagiaire_model->afficher_thematique($annee);
      $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th class="border-primary">Nom thématique</th>
                    <th class="border-primary">Nombre d\'heure par thème</th>
                   
                    
                    
                    
                </tr>
        
        ';
        $somme = 0;
    
            foreach($data as $row)
            {
              $somme += $this->stagiaire_model->nombre_heure_par_theme($row->nom_thematique,$annee);
                $output .= '
                    <tr>
                        <td class="border-primary"><button type="button" style="width:250px" class="btn_thematique btn btn-success btn-sm"  data-annee="'.$annee.'" data-nom_thematique = "'.$row->nom_thematique.'" data-nom_formation = "'.$row->nom_formation.'" title="Statistique">'.$row->nom_thematique.'</button></td>
                       
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$this->stagiaire_model->nombre_heure_par_theme($row->nom_thematique,$annee).' H</td>

                        
                       
                        


                  
                    </tr>
                
                ';
            }
            
            $t = $this->stagiaire_model->formateur_actif($annee);
            $d = $this->stagiaire_model->nombre_stagiaires($annee);
        
        $output .= '<tr><td><b>Total Heure</b></td><td><b>'.$somme.' H</b></td></tr>
        <tr><td><b>Nombre de formateur actif </b></td><td><b>'.$t.' </b></td></tr>
        <tr><td><b>Nombre de stagiaire </b></td><td><b>'.$d.' </b></td></tr>
        <tr><td><b>Taux de satisfaction </b></td><td><b>'.$tf.' %</b></td></tr>
        <tr><td><b>Taux de réussite </b></td><td><b>'.round($result1,2).' %</b></td></tr>
        
        </table>';
        echo $output;


    }


    public function exporter_statistique_excel()
    {
      $tmpfname = "example.xls";
      $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
      $objPHPExcel = $excelReader->load($tmpfname);
      
      // Set document properties
      $objPHPExcel->getProperties()->setCreator("Furkan Kahveci")
             ->setLastModifiedBy("Furkan Kahveci")
             ->setTitle("Office 2007 XLS Test Document")
             ->setSubject("Office 2007 XLS Test Document")
             ->setDescription("Description for Test Document")
             ->setKeywords("phpexcel office codeigniter php")
             ->setCategory("Test result file");

      // Create a first sheet
      $objPHPExcel->setActiveSheetIndex(0);
  /*
  $objPHPExcel->getActiveSheet()->getDefaultStyle()
->applyFromArray(array(
'font'=>array(
  'name'      =>  'Arial',
  'size'      =>  12,
  'bold'      => true),
'alignment'=>array(
  'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
'borders' => array(
  'allborders'=>array(
  'style' => PHPExcel_Style_Border::BORDER_DASHDOT))
  )
);*/

//$budget = 4257;
//$annee = 2020;
/*
$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
          'borders'=>array(
              'top'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_MEDIUMDASHDOTDOT),
              'bottom'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_DOUBLE ,
      'color'=>array(
      'rgb' => '808080')))));
*/			


/*$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
'borders' => array(
  'bottom' => array(
    'style' => PHPExcel_Style_Border::BORDER_DOUBLE
  )
)
));*/
/*if(date('Y')==2021)
{
      
$budget = $this->input->post("budget");

}
else
{
$budget = $this->soldemodel->Nouveau_solde(date('Y')-1);
}*/
//$annee = date('Y');
$styleA1 = $objPHPExcel->getActiveSheet()->getStyle('A1');
$styleA1->applyFromArray(array(
  'font'=>array(
      'bold'=>true,
      'size'=>16,
      'name'=>'Arial',
      'color'=>array(
          'rgb'=>'000000'))
  ));
//$objPHPExcel->getActiveSheet()->duplicateStyle($styleA1,'A3:N3');
  
  foreach (range('A',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
       $objPHPExcel->getActiveSheet()
              ->getColumnDimension($col)
              ->setAutoSize(true);
    } ;
    foreach (range('B',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;

  
      $stil=array(
          'borders' => array(
            'allborders' => array(
              //'style' => PHPExcel_Style_Border::BORDER_THIN,
              'color' => array('rgb' => '000000')
            )
          ),
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          )
      );
    $styleParDefaut = array(
  'font' => array(
      'name'   => 'Arial',
      'size'   => 10,
      'italic' => false,
      'bold'   => true,
  ),
  'alignment' => array(
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
      'wraptext' => false
    )
  );

  $styleParDefaut1 = array(
    'font' => array(
        'name'   => 'Arial',
        'size'   => 16,
        'italic' => false,
        'bold'   => true,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'wraptext' => false
      )
    );

    $stil=array(
      'borders' => array(
        'allborders' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN,
        'color' => array('rgb' => '000000')
        )
      ),
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
      )
    );
    $objPHPExcel->getActiveSheet()->getStyle('A1:B1')->applyFromArray($stil);
    if($this->input->post("annee")==null|| $this->input->post("annee")=="")
    {
        $tf = $this->stagiaire_model->afficher_evaluation_hot(date('Y')); 
        $annee = date('Y');
    }
    else{
      $tf = $this->stagiaire_model->afficher_evaluation_hot($this->input->post("annee")); 
      $annee = $this->input->post("annee");
    }
    $data = $this->stagiaire_model->afficher_thematique($annee);

    // Merge Cells
    $objPHPExcel->getActiveSheet()->mergeCells('A1:B1');
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'STATISTIQUES DU '.$annee);
    $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleParDefaut1);
    

  $x = 3;
  $somme = 0;
  $y = 1;
  $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Nom thématique');
  $objPHPExcel->getActiveSheet()->setCellValue('B2', 'Nombre d\'heure par thème');
  
  foreach ($data as $row) {
    $somme += $this->stagiaire_model->nombre_heure_par_theme($row->nom_thematique,$annee);
            
            
            
        
     // echo $row->nomencaissement;
    
     $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y), $row->nom_thematique);
     $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y), $this->stagiaire_model->nombre_heure_par_theme($row->nom_thematique,$annee));

    $x++;
 
  }
  $t = $this->stagiaire_model->formateur_actif($annee);
  $d = $this->stagiaire_model->nombre_stagiaires($annee);

  $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y+1), 'Total heure:');
  $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y+2), 'Nombre de formateur actif :');
  $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y+3), 'Nombre de stagiaire :');
  $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y+4), 'Taux de satisfaction :');
  $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y+5), 'Taux de réussite :');

  $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y+1), $somme);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y+2), $t);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y+3), $d);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y+4), $tf);

 
  $objPHPExcel->getActiveSheet()->setTitle('Les statistiques');
		
		
        // Save Excel xls File
        $filename="les_statistique_du_".$annee.".xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        ob_end_clean();
        header('Content-type: application/vnd.ms-excel');
	    //headerlvdt('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename='.$filename);
        $objWriter->save('php://output');


    }

    public function afficher_evaluation_hots()
    {
      echo $this->stagiaire_model->afficher_evaluation_hot(2023);
    }

    public function formateur_actif()
    {
      echo $this->stagiaire_model->formateur_actif();
    }

    public function supprimer_themes()
    {
      $this->stagiaire_model->supprimer_themes();
    }

public function afficher_programmes()
{
  print_r($this->stagiaire_model->afficher_programmes());

}

public function nombre_heure_par_theme()
{
  echo $this->stagiaire_model->nombre_heure_par_theme("MAR 30", date("Y"));
}


    public function modifier_dhau()
    {
      $this->stagiaire_model->modifier_dhau();
    }

    public function affiche_convention()
    {
      print_r($this->stagiaire_model->affiche_convention());
    }

    public function verifier_date_conventions()
    {
     echo  $this->stagiaire_model->verifier_date_convention('date_convention_2','2024-02-29','MORET','Hugues');
    }

    public function modifier_dhaus()
    {
      $this->stagiaire_model->modifier_dhaus();
    }
    public function supprimer_landelle()
    {
      $this->stagiaire_model->supprimer_landelle('LANDELLE');
      echo "Supprimer";
    }

public function telechargePage()
{
  $cheminFichier = 'https://maf-formation.org/cias/assets/Aide/AIDE_CIAS.html';

// Vérifier si le fichier existe
//if (file_exists($cheminFichier)) {
    // Définir les en-têtes pour le téléchargement
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($cheminFichier) . '"');
   // header('Content-Length: ' . filesize($cheminFichier));
    readfile($cheminFichier);
//} else {
    // Gérer le cas où le fichier n'existe pas
 //   show_404('Le fichier aide.html n\'existe pas.');
//}

}

public function modifier_nom_boreil()
{
  $this->stagiaire_model->modifier_nom_boreil();
}

   public function modifier_table_conventionsss()
   {
    $this->table_model->modifier_table_conventionsss();
   }
   
    public function fiche_client()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $data = $this->stagiaire_model->fiche_client();
      $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th class="border-primary">Nom et prénom</th>
                    <th class="border-primary">Téléphone</th>
                    <th class="border-primary col-md-6">Entreprise</th>
                    <th class="border-primary">Siret</th>
                    <th class="border-primary col-md-6">Adresse</th>
                    <th class="border-primary col-md-6">Activite</th>
                    <th class="border-primary col-md-6">Code NAF</th>
                    <th class="border-primary col-md-6">Sexe</th>
                    
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
              $sex ='';
              if($row->monsieur)
                $sex = 'M';
              if($row->madame)
                $sex = 'Mme';

                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->prenom_stagiaire.' '.$row->nom_stagiaire.'</td>
                       
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->telephone.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->nom_entreprise.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->numero_siret.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->rue.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->activite.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->code_naf.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$sex.'</td>
                       
                       
                       
                        


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;

        
    }

    public function modifier_representant()
    {
      $this->table_model->modifier_representant();
    }
  
    public function fiche_clients()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $data = $this->stagiaire_model->fiche_clients($this->input->post("nom_stagiaire"));
      $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th class="border-primary">Nom et prénom</th>
                    <th class="border-primary">Téléphone</th>
                    <th class="border-primary col-md-6">Entreprise</th>
                    <th class="border-primary">Siret</th>
                    <th class="border-primary col-md-6">Adresse</th>
                    <th class="border-primary col-md-6">Activite</th>
                    <th class="border-primary col-md-6">Code NAF</th>
                    
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->prenom_stagiaire.' '.$row->nom_stagiaire.'</td>
                       
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->telephone.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->nom_entreprise.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->numero_siret.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->rue.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->activite.'</td>
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->code_naf.'</td>
                       
                       
                       
                        


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;

        
    }
   
    

    public function afficher_signature_1($nom_formateur,$prenom_formateur)
  {
 $formateurs = $this->stagiaire_model->afficher_signature_1(urldecode($nom_formateur),urldecode($prenom_formateur));
    echo json_encode($formateurs);
  }

  public function verifier_date_convention()
  {
    echo $this->stagiaire_model->verifier_date_convention('date_convention_1','2023-12-11','CANO','PHILIPPE');
  }
  public function test_colonne()
  {
    $nom_formateur = 'QUENTIN';
    //$prenom_formateur = 'François';
    print_r($this->stagiaire_model->recherche_colonne_doublons($nom_formateur));
  }

  public function verifier_conventions()
  {
    $nom_formateur = 'QUENTIN';
    print_r($this->stagiaire_model->verifier_convention($nom_formateur));
  }

  public function get_all_values()
  {
    print_r($this->stagiaire_model->get_all_values('CANO'));
  }

  public function doublonss()
{
    $nom_formateur = 'CANO';
    $result = $this->stagiaire_model->recherche_doublons_dates($nom_formateur);

    $data = $result['data'];
    $doublonsIndices = $result['doublonsIndices'];
    $datesColumns = ['date_convention_1', 'date_convention_2', 'date_convention_3', 'date_convention_4', 'date_convention_5','date_convention_6', 'date_convention_7', 'date_convention_8','date_convention_9','date_convention_10'];
    $this->load->view('stagiaire/doublons', ['data' => $data, 'doublonsIndices' => $doublonsIndices,'datesColumns' => $datesColumns]);
}

  public function doublons()
  {

    echo "<style>.class{backgound-color : red}</style>";
    $nom_formateur = 'QUENTIN';
    $prenom_formateur = 'François';

    $result = $this->stagiaire_model->recherche_colonne_doublons($nom_formateur);
    $datesColumns = ['date_convention_1', 'date_convention_2', 'date_convention_3', 'date_convention_4', 'date_convention_5','date_convention_6', 'date_convention_7', 'date_convention_8','date_convention_9','date_convention_10'];
    $data = $result['data'];
    $doublonsIndices = $result['doublonsIndices'];
    // Vérifier si $data contient des éléments
    if (!empty($data)) {
    //    $datesColumns = array_keys($data[0]);
        $output = "";
        $output .= '<table border="1">
            <tr>
                <th>Nom Formateur</th>
                <th>Prénom Formateur</th>
                <th>Date 1</th>
                <th>Date 2</th>
                <th>Date 3</th>
                <th>Date 4</th>
                <th>Date 6</th>
                <th>Date 7</th>
                <th>Date 8</th>
                <th>Date 9</th>
                <th>Date 10</th>
            </tr>';

        foreach ($data as $index => $row) {
            $output .= '<tr>
                <td>' . $row["nom_formateur"] . '</td>
                <td>' . $row["prenom_formateur"] . '</td>';

                foreach ($datesColumns as $column) {
                  $class = in_array($index, $doublonsIndices) ? "duplicate" : "";

                  $output .= '<td class="'.$class.'"><'.$row[$column].'></td>';
            }

            $output .= '</tr>';
        }

        $output .= '</table>';
        echo $output;
    } else {
        echo "Aucune donnée trouvée."; // Message si aucune donnée n'est trouvée
    }
  }

  public function recherche_declaration()
  {
    echo $this->stagiaire_model->recherche_declaration("MAF SAS");
  }

  public function modifier_table_conventionss()
  {
    $this->table_model->modifier_table_conventionss();
    echo "OK";
  }

    public function f_plus_de_dix_ans()
    {
      $this->stagiaire_model->f_plus_de_dix_ans();
      echo "OK";
    }

    public function modifier_madame()
    {
      $this->stagiaire_model->modifier_madame("ROYER","CATHERINE");
    }


    public function ajouter_support_satgiaire()
    {
      // <td class="border-primary">'.$row->id_formation.'</td>
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $data = $this->stagiaire_model->ajouter_support_satgiaire();
      $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th class="border-primary">Nom et prénom</th>
                   
                    <th class="border-primary col-md-6">Support</th>
                    
                    
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->prenom_stagiaire.' '.$row->nom_stagiaire.'</td>
                       
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->programme.'</td>
                       
                       
                       
                        <td class="border-primary"><button type="button" class="btn_telecharger btn btn-primary btn-sm"  data-programme="'.$row->programme.'" data-organisme = "'.$row->organisme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                       

                        <td class="border-primary"><a href="'.base_url()."/assets/upload/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
    }

    public function ajouter_support_satgiaires()
    {
      // <td class="border-primary">'.$row->id_formation.'</td>
      $data = $this->stagiaire_model->ajouter_support_satgiaires($this->input->post("nom_stagiaire"));
      $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th class="border-primary">Nom et prénom</th>
                   
                    <th class="border-primary col-md-6">Support</th>
                    
                    
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->prenom_stagiaire.' '.$row->nom_stagiaire.'</td>
                       
                        <td class="border-primary"  style ="word-wrap: break-word; width:200px; ">'.$row->programme.'</td>
                       
                       
                       
                        <td class="border-primary"><button type="button" class="btn_telecharger btn btn-primary btn-sm"  data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                       

                        <td class="border-primary"><a href="'.base_url()."/assets/upload/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        $output .= '</table>';
        echo $output;
    }

    public function afficher_programmess()
    {
      print_r($this->stagiaire_model->afficher_programmess());
    }

    public function modifier_stagiairessss($nom_stagiaire,$prenom_stagiaire,$date_naissance,$numero_secu,$tel,$mail,$diplome)
  {
    $this->stagiaire_model->modifier_stagiairessss($this->input->post("nom_stagiaires"), $this->input->post("prenom_stagiaires"), $this->input->post("date_naissance"), $this->input->post("numero_secu"), $this->input->post("tel"), $this->input->post("mail"), $this->input->post("diplome"));
  }

  public function modifier_entre_quatre_et_dix_ans()
  {
    $this->stagiaire_model->modifier_entre_quatre_et_dix_ans("FRUCTUOSO","BEATRICE");
  }

    public function base_qcm()
    {
      $this->stagiaire_model->creation_base_qcm();
      echo "OK";
    }

    public function enregistrer_base_qcm(){
      $data = array('fichier'=>'QCM_MANAGEMENT.json', 'id_formation'=>'F-MANAG', 'nom_formation'=>'MANAGEMENT');
      $this->stagiaire_model->enregistrer_base_qcm($data);
    }

    public function creation_table_qcm_depart()
    {
      $this->stagiaire_model->creation_table_qcm_depart();
      $this->stagiaire_model->creation_table_reponse_qcm_depart();
      echo "OK";
    }

    public function afficher_royer()
    {
      print_r($this->stagiaire_model->afficher_royer("ROYER"));
    }

    public function listes_convention()
    {
      print_r($this->stagiaire_model->listes_convention());
    }

    public function modifier_formateur_convention()
    {
      $this->stagiaire_model->modifier_formateur_convention();
      echo "OK";
    }

    public function lire_questionnaire()
    {
      print_r($this->stagiaire_model->lire_questionnaire());
    }

    public function lire_reponse()
    {
      print_r($this->stagiaire_model->lire_reponse());
    }
    public function lire_json()
    {
      $data = $this->stagiaire_model->lire_base_qcm();
      foreach($data as $row)
      {
      $json = file_get_contents($row->fichier);

      //var_dump(json_decode($json));

      $parsed_json = json_decode($json);
      for($a=0;$a<count($parsed_json->{'questions'});$a++)
      {
     // echo $parsed_json->{'questions'}[$a]->{'question'}."<br>";
     // $q2 = $parsed_json->{'questions'}[1]->{'question'};
     // $r1 = $parsed_json->{'questions'}[0]->{'options'}[0];
     // echo $q1 ." ". $q2."<br>";
     $data1 = array('question'=>$parsed_json->{'questions'}[$a]->{'question'},
                    'id_formation' => $row->id_formation
      );
      $this->stagiaire_model->enregistrer_question_depart($data1);
      for($i=0;$i<count($parsed_json->{'questions'}[0]->{'options'});$i++)
      {
       // echo $parsed_json->{'questions'}[$a]->{'options'}[$i]." ---- ".$parsed_json->{'questions'}[$a]->{'correct_answer'}[$i]."<br>";
        $data2 = array('id_questionnaire' => $this->stagiaire_model->maximum_depart(),
        'libelle_reponse' => $parsed_json->{'questions'}[$a]->{'options'}[$i],
        'reponse' => $parsed_json->{'questions'}[$a]->{'correct_answer'}[$i]
      );
          $this->stagiaire_model->enregistrer_reponse_depart($data2);
        //echo "Reponse :".."<br>";
      }
      
    }
    echo "TERMINER";
      //echo $r1;
  }// $heure_cac40 = $parsed_json->{'cotation_bourse'}[0]->{'bourse'}->{'heure'};

    }
public function modifier_formateurs()
{
  $this->stagiaire_model->modifier_formateurs();
}
    public function supprimer_conventions()
    {
      $this->stagiaire_model->supprimer_conventions_id($this->input->post("id"),$this->input->post("organisme"));
      //$this->stagiaire_model->supprimer_conventions($this->input->post("nom_stagiaire"),$this->input->post("prenom_stagiaire"));
   /*   $taskTitle = "Supprimer convention";
      $description = "Supprimer convention";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);*/
    }

    public function liste_formations()
    {
      $data = $this->stagiaire_model->liste_formations();
      if($this->input->post("annee")==null)
      {
        $daty = date('Y');
      }
      else{
      if($this->input->post("annee")!= date('Y'))
      {
        $daty = $this->input->post("annee");
      }
      else{
        $daty = date('Y');
      }
    }
      $output = '';
      $query = '';
      $output .= '
          <div class="table-responsive text-left">
              <table id="maTable" class="table table-bordered table-striped">
              <tr>
                 
                  <th class="border-primary">ID Formation</th>
                  <th class="border-primary">Formation</th>
                  <th class="border-primary">Nombres stagiaires</th>
                  <th class="border-primary">Nombres d\'heures</th>

                 
                  
              </tr>
      
      ';
  $texte = '';
  $x = 0;
  $y = 0;
          foreach($data as $row)
          {
            $x = $x + $this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty);
            $y = $y + ($this->stagiaire_model->nombre_heure($row->id_formation)*$this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty));
              $output .= '
                  <tr>
                      <td class="border-primary">'.$row->id_formation.'</td>
                      <td class="border-primary">'.$row->nom_formation.'</td>
                      <td class="border-primary">'.$this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty).'</td>
                      <td class="border-primary">'.$this->stagiaire_model->nombre_heure($row->id_formation)*$this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty).'</td>
                      
                      
                      
                      </tr>';
          }
          $output .= '<tr><td colspan=2><b>TOTAL </b></td><td><b>'.$x.'</b></td><td><b>'.$y.'</b></td></tr></table></div>';

          echo $output;

    }

    public function nombre_stagiaire()
    {
      $data = $this->stagiaire_model->nombre_stagiaire(2023);
      $output = '';
      $query = '';
      $output .= '
          <div class="table-responsive text-left">
              <table id="maTable" class="table table-bordered table-striped">
              <tr>
                 
                  <th class="border-primary">Formation</th>
                  <th class="border-primary">Nombre</th>
                 
                  
              </tr>
      
      ';
  $texte = '';
          foreach($data as $row)
          {
              $output .= '
                  <tr>
                      <td class="border-primary">'.$row->id_formation.'</td>
                      <td class="border-primary">'.$row->nombre.'</td></tr>';
          }
          $output .= '</table></div>';

          echo $output;
            
    }

    public function modifier_payer()
    {
      $this->stagiaire_model->modifier_payer($this->input->post("nom_stagiaire"), $this->input->post("prenom_stagiaire"), $this->input->post("id_formation"), $this->input->post("paye"));
      $taskTitle = "Modifier Payement";
      $description = "Modifier Payement";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
    }

    public function controle_date()
    {
      //echo $this->stagiaire_model->peremption_dossier("LEYN","JEROME","MAR 30");
    
      $origin = date('Y-m-d');
      	
     
      $target = $this->stagiaire_model->peremption_dossier("LEYN","JEROME","MAR 30");
     // $interval = date_diff(new DateTime($origin), new DateTime($target));
      //$y = $interval->format('%R%a');
      //$x = $y - 15;
     // echo intval($interval);

      $start_date = new DateTime($origin);
      $end_date = new DateTime($target);
 
      $interval = $start_date->diff($end_date);
      echo "$interval->y years, $interval->m months, $interval->d days";
      
    }

    public function ajouter_organisme()
    {
      $this->global['pageTitle'] = 'Enregistrer organisme';
      // $data['donnee'] = $this->table->recuperer();
        
       $this->loadViews("stagiaire/ajouter_organisme", $this->global, NULL , NULL);
      // $this->load->view("stagiaire/aide");
    }

    public function nombre_heure()
    {
      $this->global['pageTitle'] = 'Statistique';
      // $data['donnee'] = $this->table->recuperer();
        
       $this->loadViews("stagiaire/nombre_heure", $this->global, NULL , NULL);
      // $this->load->view("stagiaire/aide");
    }

    public function afficher_client()
    {
      $this->global['pageTitle'] = 'Listes des stagiaires';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();     
       $this->loadViews("stagiaire/afficher_client", $this->global, $data , NULL);
      // $this->load->view("stagiaire/aide");
    }


    public function statistique_nombre_heure()
    {
        // Si requête AJAX (POST avec année), retourner les données JSON
        if ($this->input->post('annee')) {
            $annee = $this->input->post('annee');
            
            if (empty($annee)) {
                echo json_encode(['error' => 'Année non spécifiée']);
                return;
            }
            
            $this->load->model('Table_model');
            $data = $this->Table_model->recuperer_statistiques_annuelles($annee);
            echo json_encode($data);
            return;
        }
        
        // Sinon, afficher la page normale
        $this->global['pageTitle'] = 'STATISTIQUES';
        $this->loadViews("stagiaire/statistique_nombre_heure", $this->global, NULL , NULL);
    }

    public function aide()
    {
      $this->global['pageTitle'] = 'Aide';
      // $data['donnee'] = $this->table->recuperer();
        
       $this->loadViews("general/aide", $this->global, NULL , NULL);
      // $this->load->view("stagiaire/aide");
    }

    public function aides()
    {
      $this->global['pageTitle'] = 'Aide';
      // $data['donnee'] = $this->table->recuperer();
        
       $this->loadViews("stagiaire/aides", $this->global, NULL , NULL);
      // $this->load->view("stagiaire/aide");
    }

    public function aidess()
    {
     // $this->global['pageTitle'] = 'Aide';
      // $data['donnee'] = $this->table->recuperer();
        
      // $this->loadViews("stagiaire/aide", $this->global, NULL , NULL);
       $this->load->view("stagiaire/aide");
    }

    public function afficher_id_formation()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

     // curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/afficher_id_formation");
     curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/display_formations_qualiopi");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=MOLINIER&prenom_stagiaire=SYLVIE");
      //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);

      echo $result;
    }

    public function enregistrer_support_qualiopi(){

      $curl = curl_init();
      /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
       'nom_formateur' => $this->input->post("nom_formateur"),
       'nom_stagiaire' => $this->input->post("nom_stagiaire")
       
     );*/
 
       curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/add_support_apprenants");
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($curl, CURLOPT_POST, 1);
       curl_setopt($curl, CURLOPT_POSTFIELDS, 'support='.$this->input->post("support").'&apprenant='.$this->input->post("id_formation").'');
       //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
       //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
     // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
     //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
      // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));
 
       $result = curl_exec($curl);
       curl_close($curl);
 
       echo $result;
    }

    public function display_formation()
    {
     /* error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

    /*  curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/display_formations");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
    //  curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=MOLINIER&prenom_stagiaire=SYLVIE");
      //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);

      echo $result;*/

      $data = $this->stagiaire_model->afficher_qualiopi();
      $output = '';
      $query = '';
      $output .= '
        <div class="table-responsive text-left">
          <table id="maTable" class="table table-bordered table-striped">
          <tr>
             
            <th>ID Formation</th>
            <th>Nom et Prénom</th>
            <th>Prof</th>
            <th>Cours</th>				   
            
          </tr>
      
      ';
    
        foreach($data as $row)
        {
          $output .= '<tr><td>'.$row->id_formation.'</td><td>'.$row->nom_et_prenom.'</td><td>'.$row->prof.'</td><td>'.$row->formation.'</td>';
          $output .= '<td><button class="btn_support btn btn-success" data-id="'.$row->id_formation.'">Support</button></td>';
          $output .= '<td><button class="btn_support_video btn btn-warning" data-id="'.$row->id_formation.'">Support vidéo</button></td>';
          
          
          $output .= '</tr>';
        }
        $output .= '</table>';
        echo $output;
    }

        public function display_formations()
    {
      $nom_stagiaire = $this->input->post("nom_stagiaire");
      
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/display_formations_qualiopi");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
      if($nom_stagiaire) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=" . urlencode($nom_stagiaire));
      }
      $result = curl_exec($curl);
      curl_close($curl);

      // Filtrer le HTML si nom_stagiaire est fourni
      if($nom_stagiaire && strlen($nom_stagiaire) > 0) {
        $filtered = "";
        $lines_html = explode("</tr>", $result);
        $header_done = false;
        foreach($lines_html as $line) {
          if(!$header_done) {
            $filtered .= $line . "</tr>";
            if(strpos($line, "</th>") !== false) $header_done = true;
            continue;
          }
          if(stripos($line, $nom_stagiaire) !== false) {
            $filtered .= $line . "</tr>";
          }
        }
        $filtered .= "</table>";
        echo $filtered;
      } else {
        echo $result;
      }
    }

    public function display_formation_qualiopi()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/display_formations_qualiopi");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
    //  curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=MOLINIER&prenom_stagiaire=SYLVIE");
      //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);

      echo $result;
    }

    public function ajouter_formations()
    {
      //error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/ajouter_formation");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_formation=".$this->input->post("nom_formation")."&nom_formateur=".$this->input->post("nom_formateur")."&nom_stagiaire=".$this->input->post("nom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);

      echo $result;

    }

    public function enregistrer_support_video()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/enregistrer_support_video");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "id_formation=".$this->input->post("id_formation")."&titre=".$this->input->post("titre")."&utilisateur=".$this->input->post("utilisateur")."&motdepasse=".$this->input->post("motdepasse")."&support_video=".$this->input->post("support_video")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);

      echo $result;

    }

    public function ajouter_formationss()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/ajouter_formation");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "id_formation=".$this->input->post("id_formation")."&nom_formateur=".$this->input->post("nom_formateur")."&nom_stagiaire=".$this->input->post("nom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);

      echo $result;

    }
  

    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
       $this->global['pageTitle'] = 'Saisie des stagiaires';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/ajout_stagiaire", $this->global, NULL , NULL);
        
    }

    public function afficher_ajouter_support_stagiaire()
    {
       $this->global['pageTitle'] = 'Supports stagiaires';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("stagiaire/ajouter_support_satgiaire", $this->global, $data , NULL);
        
    }

    public function recuperer_organisme()
    {
      print_r($this->stagiaire_model->recuperer_organisme());
    }

public function ajouter_entreprise()
{
   $this->global['pageTitle'] = 'Enregistrer entreprise';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/ajout_entreprise", $this->global, NULL , NULL);
}

public function liste_entre_deux_dates()
{
   $this->global['pageTitle'] = 'Liste entre deux dates';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/liste_entre_deux_dates", $this->global, NULL , NULL);
}

public function ajout_stagiaires()
{
   $this->global['pageTitle'] = 'Enregistrer participant';
   $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("stagiaire/ajout_stagiaires", $this->global, $data , NULL);
}

public function modifier_emargements()
{
   $this->global['pageTitle'] = 'Modification emargement';
      // $data['donnee'] = $this->table->recuperer();
        $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        $this->loadViews("stagiaire/liste_emargements", $this->global, $data , NULL);
}

public function statistique()
{
   $this->global['pageTitle'] = 'Statistique';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/statistique", $this->global, NULL , NULL);
}
     public function convention()
    {
       $this->global['pageTitle'] = 'Saisie des convention';
       $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("stagiaire/ajout_convention", $this->global, $data , NULL);
        
    }

      public function apercu_formulaire()
    {
       $this->global['pageTitle'] = 'Formulaire';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/apercu_formulaire", $this->global, NULL , NULL);
        
    }

    public function modifier_formation_stagiaire()
{
  $id = $this->input->post("id");
  $id_formation = $this->input->post("id_formation");
  $nom_formateur = $this->input->post("nom_formateur");
  $prenom_formateur = $this->input->post("prenom_formateur");

  $this->stagiaire_model->modifier_formation_stagiaire($id,$id_formation,$nom_formateur,$prenom_formateur);
  echo "Modification OK";
  
}
 public function modifier_convention()
    {
       $this->global['pageTitle'] = 'Saisie des convention';
      // $data['donnee'] = $this->table->recuperer();
      $data['formations'] = $this->stagiaire_model->afficher_formationss();
        
        $this->loadViews("stagiaire/liste_convention", $this->global, $data, NULL);
        
    }

    public function statistique_stages()
    {
      $this->global['pageTitle'] = 'Saisie des convention';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/statistique_formation", $this->global, NULL , NULL);
    }

    public function ajout_emargements()
    {
      $this->global['pageTitle'] = 'Saisie des émargements';
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("stagiaire/ajout_emargements", $this->global, $data , NULL);
    }

     public function liste_convention_groupe()
    {
       $this->global['pageTitle'] = 'Groupe';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/liste_convention_groupe", $this->global, NULL , NULL);
        
    }
     public function facture()
    {
       $this->global['pageTitle'] = 'ENREGISTREMENT FACTURE';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("stagiaire/liste_facture", $this->global, $data  , NULL);
        
    }

    public function ajouter_nouvelle_facture()
    {
       $this->global['pageTitle'] = 'ENREGISTREMENT FACTURE';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/ajouter_nouvelle_facture", $this->global, NULL , NULL);
        
    }

       public function liste_modification_facture()
    {
       $this->global['pageTitle'] = 'MODIFICATION FACTURE';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        $this->loadViews("stagiaire/liste_modification_facture", $this->global, $data , NULL);
        
    }

        public function intervention()
    {
       $this->global['pageTitle'] = 'INTERVENTIONS DES FORMATEURS';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        $this->loadViews("stagiaire/intervention", $this->global, $data , NULL);
        
    }

      public function emargement()
    {
       $this->global['pageTitle'] = 'Saisie émargement';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/ajout_emargement", $this->global, NULL , NULL);
        
    }

    public function liste_formation_qualiopi()
    {
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/get_supportss");
    //  curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/getSupports");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
    //  curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_formation=".$this->input->post("nom_formation")."&nom_formateur=".$this->input->post("nom_formateur")."&nom_stagiaire=".$this->input->post("nom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
    //  echo $result;
      curl_close($curl);

      $curl1 = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl1, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/get_support_videos");
      curl_setopt($curl1, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl1, CURLOPT_POST, 1);
    //  curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_formation=".$this->input->post("nom_formation")."&nom_formateur=".$this->input->post("nom_formateur")."&nom_stagiaire=".$this->input->post("nom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result1 = curl_exec($curl1);
      curl_close($curl1);


      //echo $result;
       $this->global['pageTitle'] = 'Les formations dans qualiopi';
     $data['supports'] = $result;
     $data['supports_video'] = $result1;
        
        $this->loadViews("stagiaire/liste_formation_qualiopi", $this->global, $data , NULL);
        
    }

    public function afficher_id_qualiopi()
    {
      $curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/get_supportss");
     //curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/getSupports");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
    //  curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_formation=".$this->input->post("nom_formation")."&nom_formateur=".$this->input->post("nom_formateur")."&nom_stagiaire=".$this->input->post("nom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);
      
     

      $curl1 = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

      curl_setopt($curl1, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/get_support_videos");
      curl_setopt($curl1, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl1, CURLOPT_POST, 1);
    //  curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_formation=".$this->input->post("nom_formation")."&nom_formateur=".$this->input->post("nom_formateur")."&nom_stagiaire=".$this->input->post("nom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result1 = curl_exec($curl1);
      curl_close($curl1);


      //echo $result;
       $this->global['pageTitle'] = 'Les formations dans qualiopi';
    $data['supports'] = $result;
    $data['supports_video'] = $result1;
        
        $this->loadViews("stagiaire/afficher_id_qualiopi", $this->global, $data , NULL);
        
    }


     public function modifier_stagiaire()
    {
       $this->global['pageTitle'] = 'Modifier Formulaire';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        $this->loadViews("stagiaire/liste_modification_stagiaire", $this->global, $data , NULL);
        
    }

     public function afficher_liste_stagiaire()
    {
       $this->global['pageTitle'] = 'DEMANDE DE PRISE EN CHARGE';
        $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("stagiaire/liste_stagiaire", $this->global, $data , NULL);
        
    }

     public function afficher_liste_emargement()
    {
       $this->global['pageTitle'] = 'EMARGEMENT';
      // $data['donnee'] = $this->table->recuperer();
        $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        $this->loadViews("stagiaire/liste_emargement", $this->global, $data , NULL);
        
    }

    public function liste_stagiaire_expirations()
    {
       $this->global['pageTitle'] = 'PEREMPTIONS DES DOSSIERS';
      // $data['donnee'] = $this->table->recuperer();
      $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("stagiaire/liste_stagiaire_expiration", $this->global, $data , NULL);
        
    }

public function recherche_facture()
{
  print_r($this->stagiaire_model->recherche_facture());
}

    function get_autocomplete(){
       if (isset($_GET['term'])) {
            $result = $this->stagiaire_model->search_stagiaire($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nom_stagiaire,
                );
                echo json_encode($arr_result);
            }
        }

      
    }

     function get_autocomplete_formateur(){
        if (isset($_GET['term'])) {
            $result = $this->stagiaire_model->search_formateur($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nom_formateur,
                );
                echo json_encode($arr_result);
            }
        }
    }

    public function Afficher_accueil()
    {
       // $this->load->model('elevemodel');
        //$nomeleve = $this->input->post("nomeleve");
        //$nomeleve = 59;
        $num_accueil = $this->input->post("num_accueil");
        echo $this->table_model->Recherche_accueil($num_accueil);
    }

     public function Afficher_stagiaires()
    {
       // $this->load->model('elevemodel');
        //$nomeleve = $this->input->post("nomeleve");
        //$nomeleve = 59;
        $nom_stagiaire = $this->input->post("nom_stagiaire");
       // $organisme = $this->input->post("organisme");

       //     $nom_stagiaire = "HULIN";
        echo $this->stagiaire_model->Recherche_stagiaires($nom_stagiaire);
    }

    public function Recherche_formation_convention()
    {
      $nom_stagiaire = $this->input->post("nom_stagiaire");
     // $organisme = $this->input->post("organisme");
       // $nom_stagiaire = "DOREMUS";
        echo $this->stagiaire_model->Recherche_formation_convention($nom_stagiaire);

    }

    public function Recherche_formation_conventions()
    {
      $nom_stagiaire = $this->input->post("nom_stagiaire");
      $id_formation = $this->input->post("id_formation");
      // $nom_stagiaire = "DOREMUS";
       echo $this->stagiaire_model->Recherche_formation_conventions($nom_stagiaire,$id_formation);
    }

    public function Recherche_formation_conventionss()
    {
      $nom_stagiaire = $this->input->post("nom_stagiaire");
      $id_formation = $this->input->post("id_formation");
      // $nom_stagiaire = "DOREMUS";
       echo $this->stagiaire_model->Recherche_formation_conventionss($nom_stagiaire,$id_formation);
    }

      public function Afficher_stagiairess()
    {
       // $this->load->model('elevemodel');
        //$nomeleve = $this->input->post("nomeleve");
        //$nomeleve = 59;
        $nom_stagiaire = $this->input->post("nom_stagiaire");
       //     $nom_stagiaire = "HULIN";
        echo $this->stagiaire_model->Recherche_stagiairess($nom_stagiaire);
    }

    public function initialisation_facture()
    {
      $data = array('num_facture' => 1297, 'date_facture'=> '2023-06-08');
       $this->stagiaire_model->inserer_facture($data);
       echo "OK";
    }

    public function supprimer_facture()
    {
      $this->stagiaire_model->supprimer_facture();
    }

    public function supprimer_emargements()
    {
      $this->stagiaire_model->supprimer_emargements($this->input->post("id"));
    }

 public function supprimer_conventionss()
    {
      $this->stagiaire_model->supprimer_conventions($this->input->post("nom_stagiaire"),$this->input->post("prenom_stagiaire"),$this->input->post("id_formation"));


    }

    public function modifier_emargementss()
    {
       $this->stagiaire_model->modifier_emargementss($this->input->post("nom_stagiaire"),$this->input->post("prenom_stagiaire"),$this->input->post("id_formation"),
       implode('-',array_reverse  (explode('-',$this->input->post('date_signature_1')))), implode('-',array_reverse  (explode('-',$this->input->post('date_signature_2')))), implode('-',array_reverse  (explode('-',$this->input->post('date_signature_3')))));

    }



public function insertion_facture()
{
   // Log pour debug
   $log_file = FCPATH . 'facture_debug.log';
   file_put_contents($log_file, date('Y-m-d H:i:s') . " - Début insertion_facture\n", FILE_APPEND);
   
   try {
       // Récupérer les données du formulaire
       $nom_stagiaire = $this->input->post("nom_stagiaire");
       $prenom_stagiaire = $this->input->post("prenom_stagiaire");
       $id_formation = $this->input->post("id_formation");
       $num_facture = $this->input->post("num_facture");
       $date_facture = $this->input->post("date_facture");
       
       file_put_contents($log_file, "Données reçues: $nom_stagiaire, $prenom_stagiaire, $id_formation, $num_facture, $date_facture\n", FILE_APPEND);
       
       // NOUVEAU : Enregistrer la facture en base de données
       $data_facture = array(
           'num_facture' => $num_facture,
           'nom_stagiaire' => $nom_stagiaire,
           'prenom_stagiaire' => $prenom_stagiaire,
           'id_formation' => $id_formation,
           'date_facture' => implode('-', array_reverse(explode('-', $date_facture))), // Convertir dd-mm-yyyy en yyyy-mm-dd
           'statut' => 'generee'
       );
       
       file_put_contents($log_file, "Avant insert\n", FILE_APPEND);
       
       // Insérer dans la table Facture
       $insert_result = $this->db->insert('Facture', $data_facture);
       
       file_put_contents($log_file, "Insert result: " . ($insert_result ? "OK" : "FAIL") . "\n", FILE_APPEND);
       file_put_contents($log_file, "DB Error: " . $this->db->error()['message'] . "\n", FILE_APPEND);
       
       // Générer l'URL du PDF
       // URL: stagiaire/imprimer_facture/NOM/PRENOM/ID_FORMATION/pdf
       $url = base_url("stagiaire/imprimer_facture/" . 
                       urlencode($nom_stagiaire) . "/" . 
                       urlencode($prenom_stagiaire) . "/" . 
                       urlencode($id_formation) . "/pdf");
       
       // Retourner l'URL pour que JavaScript puisse ouvrir le PDF
       // Ajouter timestamp pour éviter le cache du navigateur
       $url_with_cache_buster = $url . '?t=' . time();
       echo json_encode(array('success' => true, 'pdf_url' => $url_with_cache_buster, 'message' => 'Facture enregistrée'));
       
   } catch (Exception $e) {
       file_put_contents($log_file, "Exception: " . $e->getMessage() . "\n", FILE_APPEND);
       echo json_encode(array('success' => false, 'message' => 'Erreur: ' . $e->getMessage()));
   }
}

// BACKDOOR SUPPRIMÉE LE 2026-03-23 - exposait les mots de passe utilisateurs
    public function afficher_mot_de_passes()
    {
        redirect('/login');
    }

// BACKDOOR SUPPRIMÉE LE 2026-03-23 - écrasait le compte admin
    public function modifier_mot_de_passe()
    {
        redirect('/login');
    }

public function afficher_mot_de_passe()
{
  print_r($this->stagiaire_model->afficher_mot_de_passe());
}

public function modifier_support()
{
  $this->stagiaire_model->modifier_support(1);
  $this->stagiaire_model->modifier_support(2);
  $this->stagiaire_model->modifier_support(3);
  $this->stagiaire_model->modifier_support(4);
  echo "OK";
}
public function inserer_emargement()
    {
        error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{
        // Initialiser toutes les variables de signature à NULL pour éviter les erreurs "Undefined variable"
        $x = $y = $a = $b = $c = $d = $e = $f = $g = $h = NULL;
        $i = $j = $k = $l = $m = $n = $o = $p = $q = $r = NULL;
        $aa = $bb = $cc = $dd = $ee = $ff = $gg = $hh = $ii = $jj = NULL;
        $kk = $ll = $mm = $nn = $oo = $pp = $qq = $rr = $ss = $tt = NULL;
        
        $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("signature_1")){

           
            $data = array('upload_data' => $this->upload->data());
           $x = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_2")){

           
            $data = array('upload_data' => $this->upload->data());
           $y = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_3")){

           
            $data = array('upload_data' => $this->upload->data());
           $a = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_4")){

           
            $data = array('upload_data' => $this->upload->data());
           $b = $data['upload_data']['file_name'];



        
          };
          if($this->upload->do_upload("signature_5")){

           
            $data = array('upload_data' => $this->upload->data());
           $c = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_6")){

           
            $data = array('upload_data' => $this->upload->data());
           $d = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_7")){

           
            $data = array('upload_data' => $this->upload->data());
           $e = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_8")){

           
            $data = array('upload_data' => $this->upload->data());
           $f = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_9")){

           
            $data = array('upload_data' => $this->upload->data());
           $g = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_10")){

           
            $data = array('upload_data' => $this->upload->data());
           $h = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_11")){

           
            $data = array('upload_data' => $this->upload->data());
           $i = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_12")){

           
            $data = array('upload_data' => $this->upload->data());
           $j = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_13")){

           
            $data = array('upload_data' => $this->upload->data());
           $k = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_14")){

           
            $data = array('upload_data' => $this->upload->data());
           $l = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_15")){

           
            $data = array('upload_data' => $this->upload->data());
           $m = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_16")){

           
            $data = array('upload_data' => $this->upload->data());
           $n = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_17")){

           
            $data = array('upload_data' => $this->upload->data());
           $o = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_18")){

           
            $data = array('upload_data' => $this->upload->data());
           $p = $data['upload_data']['file_name'];



        
          };
           if($this->upload->do_upload("signature_19")){

           
            $data = array('upload_data' => $this->upload->data());
           $q = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_20")){

           
            $data = array('upload_data' => $this->upload->data());
           $r = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_formateur_1")){

           
            $data = array('upload_data' => $this->upload->data());
           $aa = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_2")){

           
            $data = array('upload_data' => $this->upload->data());
           $bb = $data['upload_data']['file_name'];



        
          };

if($this->upload->do_upload("signature_formateur_3")){

           
            $data = array('upload_data' => $this->upload->data());
           $cc = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_4")){

           
            $data = array('upload_data' => $this->upload->data());
           $dd = $data['upload_data']['file_name'];



        
          };
          if($this->upload->do_upload("signature_formateur_5")){

           
            $data = array('upload_data' => $this->upload->data());
           $ee = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_6")){

           
            $data = array('upload_data' => $this->upload->data());
           $ff = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_7")){

           
            $data = array('upload_data' => $this->upload->data());
           $gg = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_8")){

           
            $data = array('upload_data' => $this->upload->data());
           $hh = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_9")){

           
            $data = array('upload_data' => $this->upload->data());
           $ii = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_10")){

           
            $data = array('upload_data' => $this->upload->data());
           $jj = $data['upload_data']['file_name'];



        
          };

if($this->upload->do_upload("signature_formateur_11")){

           
            $data = array('upload_data' => $this->upload->data());
           $kk = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_12")){

           
            $data = array('upload_data' => $this->upload->data());
           $ll = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_13")){

           
            $data = array('upload_data' => $this->upload->data());
           $mm = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_14")){

           
            $data = array('upload_data' => $this->upload->data());
           $nn = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_formateur_15")){

           
            $data = array('upload_data' => $this->upload->data());
           $oo = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_16")){

           
            $data = array('upload_data' => $this->upload->data());
           $pp = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_formateur_17")){

           
            $data = array('upload_data' => $this->upload->data());
           $qq = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_18")){

           
            $data = array('upload_data' => $this->upload->data());
           $rr = $data['upload_data']['file_name'];



        
          };
           if($this->upload->do_upload("signature_formateur_19")){

           
            $data = array('upload_data' => $this->upload->data());
           $ss = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_formateur_20")){

           
            $data = array('upload_data' => $this->upload->data());
           $tt = $data['upload_data']['file_name'];



        
          };
         // $id =  $this->table_model->recherche_id($this->input->post('nom_formation'));
           $id =  $this->input->post('nom_formation');
          $datas = array(
              'nom_stagiaire' => $this->input->post("nom_stagiaire"),
               'prenom_stagiaire' => $this->input->post("prenom_stagiaire"),
               'id_formation' => $id,

              'signature_1' => $x,
              'signature_2' => $y,
              'signature_3' => $a,
              'signature_4' => $b,
              'signature_5' => $c,
              'signature_6' => $d,
               'signature_7' => $e,
              'signature_8' => $f,
               'signature_9' => $g,
              'signature_10' => $h,
               'signature_11' => $i,
              'signature_12' => $j,
              'signature_13' => $k,
              'signature_14' => $l,
              'signature_15' => $m,
              'signature_16' => $n,
              'signature_17' => $o,
              'signature_18' => $p,
               'signature_19' => $q,
              'signature_20' => $r,
              'signature_formateur_1' => $aa,
              'signature_formateur_2' => $bb,
              'signature_formateur_3' => $cc,
              'signature_formateur_4' => $dd,
              'signature_formateur_5' => $ee,
              'signature_formateur_6' => $ff,
               'signature_formateur_7' => $gg,
              'signature_formateur_8' => $hh,
               'signature_formateur_9' => $ii,
              'signature_formateur_10' => $jj,
               'signature_formateur_11' => $kk,
              'signature_formateur_12' => $ll,
                'signature_formateur_13' => $mm,
              'signature_formateur_14' => $nn,
              'signature_formateur_15' => $oo,
              'signature_formateur_16' => $pp,
              'signature_formateur_17' => $qq,
              'signature_formateur_18' => $rr,
               'signature_formateur_19' => $ss,
              'signature_formateur_20' => $tt,
              'date_signature_1' => implode('-',array_reverse  (explode('-',$this->input->post('date_signature_1')))),
              'date_signature_2' => implode('-',array_reverse  (explode('-',$this->input->post('date_signature_2')))),
              'date_signature_3' => implode('-',array_reverse  (explode('-',$this->input->post('date_signature_3')))),


          );
          $this->stagiaire_model->inserer_emargement($datas); //perform qu

          redirect("stagiaire/afficher_liste_emargement");


        }
          catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
            

    }

    public function modifier_emargementsss()
    {
      $nom_stagiaire = $this->input->post("nom_stagiaire");
      $prenom_stagiaire = $this->input->post("prenom_stagiaire");
    //  $id_formation = $this->input->post("id_formation");
      $id_formation = $this->table_model->recherche_id($this->input->post('id_formation'));
      $ds1 = implode('-',array_reverse  (explode('-',$this->input->post('date_signature_1'))));
      $ds2 = implode('-',array_reverse  (explode('-',$this->input->post('date_signature_2'))));
      $ds3 = implode('-',array_reverse  (explode('-',$this->input->post('date_signature_3'))));
      if($this->stagiaire_model->recherche_emargementsss($nom_stagiaire,$prenom_stagiaire,$id_formation))
      {
        $this->stagiaire_model->modifier_emargementsss($nom_stagiaire,$prenom_stagiaire,$id_formation,$ds1,$ds2,$ds3);
        echo "Modification OK";
      }
      else{
        $datas = array(
            'nom_stagiaire' => $nom_stagiaire,
            'prenom_stagiaire' => $prenom_stagiaire,
            'id_formation' =>  $id_formation

        );
        $this->stagiaire_model->inserer_emargement($datas); //
        $this->stagiaire_model->modifier_emargementsss($nom_stagiaire,$prenom_stagiaire,$id_formation,$ds1,$ds2,$ds3);
        echo "Enregistrement OK";
      }

    }

    public function inserer_loi()
    {
      $datas = array(
        'nom_stagiaire' => 'MARTINET',
         'prenom_stagiaire' => 'RENAUD',
         'id_formation' => 'F-LOI-ALUR',
         'date_signature_1' => '2024-02-22' ,
         'date_signature_2' => '2024-02-28',
    

      );
      $this->stagiaire_model->inserer_emargement($datas); 

    }
    
    public function inserer_emargementss()
    {
        error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{
        $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("signature_1")){

           
            $data = array('upload_data' => $this->upload->data());
           $x = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_2")){

           
            $data = array('upload_data' => $this->upload->data());
           $y = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_3")){

           
            $data = array('upload_data' => $this->upload->data());
           $a = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_4")){

           
            $data = array('upload_data' => $this->upload->data());
           $b = $data['upload_data']['file_name'];



        
          };
          if($this->upload->do_upload("signature_5")){

           
            $data = array('upload_data' => $this->upload->data());
           $c = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_6")){

           
            $data = array('upload_data' => $this->upload->data());
           $d = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_7")){

           
            $data = array('upload_data' => $this->upload->data());
           $e = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_8")){

           
            $data = array('upload_data' => $this->upload->data());
           $f = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_9")){

           
            $data = array('upload_data' => $this->upload->data());
           $g = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_10")){

           
            $data = array('upload_data' => $this->upload->data());
           $h = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_11")){

           
            $data = array('upload_data' => $this->upload->data());
           $i = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_12")){

           
            $data = array('upload_data' => $this->upload->data());
           $j = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_13")){

           
            $data = array('upload_data' => $this->upload->data());
           $k = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_14")){

           
            $data = array('upload_data' => $this->upload->data());
           $l = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_15")){

           
            $data = array('upload_data' => $this->upload->data());
           $m = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_16")){

           
            $data = array('upload_data' => $this->upload->data());
           $n = $data['upload_data']['file_name'];



        
          };

           if($this->upload->do_upload("signature_17")){

           
            $data = array('upload_data' => $this->upload->data());
           $o = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_18")){

           
            $data = array('upload_data' => $this->upload->data());
           $p = $data['upload_data']['file_name'];



        
          };
           if($this->upload->do_upload("signature_19")){

           
            $data = array('upload_data' => $this->upload->data());
           $q = $data['upload_data']['file_name'];



        
          };

          if($this->upload->do_upload("signature_20")){

           
            $data = array('upload_data' => $this->upload->data());
           $r = $data['upload_data']['file_name'];



        
          };


          $aa = $this->input->post("signature_formateur_1");
          $bb = $this->input->post("signature_formateur_2");
          $cc = $this->input->post("signature_formateur_3");
          $dd = $this->input->post("signature_formateur_4");
          $ee = $this->input->post("signature_formateur_5");
          $ff = $this->input->post("signature_formateur_6");
          $gg = $this->input->post("signature_formateur_7");
          $hh = $this->input->post("signature_formateur_8");

          $ii = $this->input->post("signature_formateur_9");
          $jj = $this->input->post("signature_formateur_10");
          $kk = $this->input->post("signature_formateur_11");
          $ll = $this->input->post("signature_formateur_12");
          $mm = $this->input->post("signature_formateur_13");
          $nn = $this->input->post("signature_formateur_14");
          $oo = $this->input->post("signature_formateur_15");
          $pp = $this->input->post("signature_formateur_16");
          $qq = $this->input->post("signature_formateur_17");

          $rr = $this->input->post("signature_formateur_18");
          $ss = $this->input->post("signature_formateur_19");
          $tt = $this->input->post("signature_formateur_20");

         // $id =  $this->table_model->recherche_id($this->input->post('nom_formation'));
           $id =  $this->input->post('nom_formation');
          $datas = array(
              'nom_stagiaire' => $this->input->post("nom_stagiaire"),
               'prenom_stagiaire' => $this->input->post("prenom_stagiaire"),
               'id_formation' => $id,

              'signature_1' => $x,
              'signature_2' => $y,
              'signature_3' => $a,
              'signature_4' => $b,
              'signature_5' => $c,
              'signature_6' => $d,
               'signature_7' => $e,
              'signature_8' => $f,
               'signature_9' => $g,
              'signature_10' => $h,
               'signature_11' => $i,
              'signature_12' => $j,
              'signature_13' => $k,
              'signature_14' => $l,
              'signature_15' => $m,
              'signature_16' => $n,
              'signature_17' => $o,
              'signature_18' => $p,
               'signature_19' => $q,
              'signature_20' => $r,
              'signature_formateur_1' => $aa,
              'signature_formateur_2' => $bb,
              'signature_formateur_3' => $cc,
              'signature_formateur_4' => $dd,
              'signature_formateur_5' => $ee,
              'signature_formateur_6' => $ff,
               'signature_formateur_7' => $gg,
              'signature_formateur_8' => $hh,
               'signature_formateur_9' => $ii,
              'signature_formateur_10' => $jj,
               'signature_formateur_11' => $kk,
              'signature_formateur_12' => $ll,
                'signature_formateur_13' => $mm,
              'signature_formateur_14' => $nn,
              'signature_formateur_15' => $oo,
              'signature_formateur_16' => $pp,
              'signature_formateur_17' => $qq,
              'signature_formateur_18' => $rr,
               'signature_formateur_19' => $ss,
              'signature_formateur_20' => $tt,
              'date_signature_1' => implode('-',array_reverse  (explode('-',$this->input->post('date_signature_1')))),
              'date_signature_2' => implode('-',array_reverse  (explode('-',$this->input->post('date_signature_2')))),
              'date_signature_3' => implode('-',array_reverse  (explode('-',$this->input->post('date_signature_3')))),


          );
          $this->stagiaire_model->inserer_emargement($datas); //perform qu

          redirect("stagiaire/afficher_liste_emargement");


        }
          catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
            

    }
    




    public function display_stagiaire()
    {
      print_r($this->stagiaire_model->display_stagiaire());
    }
    public function afficher_emargement()
    {
      print_r($this->stagiaire_model->afficher_emargement());
    }


    public function inserer_organisme()
    {
error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{


          if($this->stagiaire_model->recherche_oganisme($this->input->post('raison_social'))==false)
          {
            $this->load->library('form_validation');
            $this->load->helper('form_helper');
            $this->form_validation->set_rules('raison_social','Raison social','trim|required');
           // $this->form_validation->set_rules('prenom_stagiaire','Prénom stagiaire','trim|required');
         //    $this->form_validation->set_rules('numero_siret','Numéro siret','trim|required');
            
            if($this->form_validation->run()==TRUE)
            {

       
         if($this->input->post('responsable') == "Mmeresponsable")
            {
                $a = "X";
            }
            else
            {
                 if($this->input->post('responsable') == "Mrresponsable")
                 {
                    $b = "X";
                 }
            }

             if($this->input->post('contact') == "Mmecontact")
            {
                $c = "X";
            }
            else
            {
                 if($this->input->post('contact') == "Mrcontact")
                 {
                    $d = "X";
                 }
               
                

                 
            }
       
     
        $datas = array(
            //'nomeleve'=>$this->input->post('nomeleve'),
            'raison_social'=>$this->input->post('raison_social'),
            'num_declaration'=>$this->input->post('num_declaration'),

        //  'prenomeleve'=>$this->input->post('prenomeleve'),
            'num_siret'=>$this->input->post('num_siret'),
            'adresse'=>$this->input->post('adresse'),
             'code_postal'=>$this->input->post('code_postal'),
             'ville'=>$this->input->post('ville'),
            'nom_responsable'=>$this->input->post('nom_responsable'),
            
            'prenom_responsable'=>$this->input->post('prenom_responsable'),
            'tel_responsable'=>$this->input->post('tel_responsable'),
            'mail_resonsable'=>$this->input->post('mail_responsable'),
            'madame_responsable'=>$a,
            'monsieur_responsable'=>$b,
            'madame_contact'=>$c,
            'monsieur_contact'=>$d,
            'nom_contact'=>$this->input->post('nom_contact'),
            'prenom_contact'=>$this->input->post('prenom_contact'),
            'tel_contact'=>$this->input->post('tel_contact'),
            'mail_contact'=>$this->input->post('mail_contact'),
           
            
        );
        
      

        
                $this->stagiaire_model->inserer_organisme($datas); //perform query
                redirect('/stagiaire/ajouter_organisme');
          
        
        }
      
      else
      {
        $this->global['pageTitle'] = 'Enregistrement organisme';
            $this->loadViews("stagiaire/ajouter_organisme", "Saisie organisme", NULL , NULL);
      }
    }
    else{
      $this->global['pageTitle'] = 'Enregistrement organisme';
            $this->loadViews("stagiaire/ajouter_organisme", "Saisie organisme", NULL , NULL);
    }
      
      
    

      
    }
        catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
        /*$data["daty"] = date('Y-m-d');
        $this->load->view('admin/headerassociation');
        $this->load->view('admin/enfant/ajouterenfant',$data);
        $this->load->view('admin/footer');*/
        
    }



    public function inserer_stagiaires()
    {
error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{


          if($this->stagiaire_model->recherche_stagiairesss($this->input->post('nom_stagiaire'),$this->input->post('prenom_stagiaire'))==false)
          {
            $this->load->library('form_validation');
            $this->load->helper('form_helper');
            $this->form_validation->set_rules('nom_stagiaire','Nom stagiaire','trim|required|min_length[2]');
            $this->form_validation->set_rules('prenom_stagiaire','Prénom stagiaire','trim|required');
         //    $this->form_validation->set_rules('numero_siret','Numéro siret','trim|required');
            
            if($this->form_validation->run()==TRUE)
            {

        $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = FALSE;
         if($this->input->post('sexe') == "Mme")
            {
                $a = "X";
            }
            else
            {
                 if($this->input->post('sexe') == "Mr")
                 {
                    $b = "X";
                 }
            }

             if($this->input->post('duree') == "Moin un ans")
            {
                $c = "X";
            }
            else
            {
                 if($this->input->post('duree') == "Mois trois ans")
                 {
                    $d = "X";
                 }
                 else{
                         if($this->input->post('duree') == "Entre quatre et dix ans")
                            {
                                $e = "X";
                            }
                        else
                        {
                             if($this->input->post('duree') == "Plus de dix ans")
                                {
                                    $f = "X";
                                }

                        }


                 }
            }
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){

           
            $data = array('upload_data' => $this->upload->data());
        $datas = array(
            //'nomeleve'=>$this->input->post('nomeleve'),
            'nom_stagiaire'=>$this->input->post('nom_stagiaire'),
            'prenom_stagiaire'=>$this->input->post('prenom_stagiaire'),

        //  'prenomeleve'=>$this->input->post('prenomeleve'),
            'date_naissance'=>implode('-',array_reverse  (explode('-',$this->input->post('date_naissance')))),
            'nom_naissance'=>$this->input->post('nom_naissance'),
             'numero_secu'=>$this->input->post('numero_secu'),
             'diplome'=>$this->input->post('diplomes'),
            'mail'=>$this->input->post('mail'),
            
            'monsieur'=>$b,
            'madame'=>$a,
            'moins_un_an'=>$c,
            'entre_un_et_trois_ans'=>$d,
            'entre_quatre_et_dix_ans'=>$e,
            'plus_de_dix_ans'=>$f,
            'telephone'=>$this->input->post('telephone'),
            'formation_entreprise'=>'X',
            'signature'=>$data['upload_data']['file_name'],
     //       'organisme' => $this->input->post('organisme'),
           
            //'num_accueil' => $this->input->post('num_accueil')
        );
        
        //echo "Fichier : ".$data['upload_data']['file_name'];
        //$affected = $this->elevemodel->insert_eleve($datas);

        
                $this->stagiaire_model->inserer_stagiaire($datas); //perform query
                redirect('/stagiaire/ajouter_entreprise');
          
        
        }
        else{
            $datas = array(
            //'nomeleve'=>$this->input->post('nomeleve'),
            'nom_stagiaire'=>$this->input->post('nom_stagiaire'),
            'prenom_stagiaire'=>$this->input->post('prenom_stagiaire'),

        //  'prenomeleve'=>$this->input->post('prenomeleve'),
            'date_naissance'=>implode('-',array_reverse  (explode('-',$this->input->post('date_naissance')))),
            'nom_naissance'=>$this->input->post('nom_naissance'),
             'numero_secu'=>$this->input->post('numero_secu'),
             'diplome'=>$this->input->post('diplomes'),
            'mail'=>$this->input->post('mail'),
            'monsieur'=>$b,
            'madame'=>$a,
            'moins_un_an'=>$c,
            'entre_un_et_trois_ans'=>$d,
            'entre_quatre_et_dix_ans'=>$e,
             'plus_de_dix_ans'=>$f,
            'telephone'=>$this->input->post('telephone'),
            'formation_entreprise'=>'X',
       //     'organisme' => $this->input->post('organisme'),
           
            
        );
        
        //echo "Fichier : ".$data['upload_data']['file_name'];
        //$affected = $this->elevemodel->insert_eleve($datas);

          $this->stagiaire_model->inserer_stagiaire($datas); 
         redirect('/stagiaire/ajouter_entreprise');
              
        }
      }
      else
      {
            $this->loadViews("stagiaire/ajout_stagiaires", "Saisie participant", NULL , NULL);
      }
        }
      
    

      else{
        $this->global['pageTitle'] = 'Enregistrement participant';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/stagiaire_enregister", $this->global, NULL , NULL);

      }
    }
        catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
        /*$data["daty"] = date('Y-m-d');
        $this->load->view('admin/headerassociation');
        $this->load->view('admin/enfant/ajouterenfant',$data);
        $this->load->view('admin/footer');*/
        
    }



    public function inserer_stagiaire()
    {
error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{


          if($this->stagiaire_model->recherche_stagiairesss($this->input->post('nom_stagiaire'),$this->input->post('prenom_stagiaire'))==false)
          {
            $this->load->library('form_validation');
            $this->load->helper('form_helper');
            $this->form_validation->set_rules('nom_stagiaire','Nom stagiaire','trim|required');
            $this->form_validation->set_rules('prenom_stagiaire','Prénom stagiaire','trim|required');
         //    $this->form_validation->set_rules('numero_siret','Numéro siret','trim|required');
            
            if($this->form_validation->run()==TRUE)
            {

        $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = FALSE;
         if($this->input->post('sexe') == "Mme")
            {
                $a = "X";
            }
            else
            {
                 if($this->input->post('sexe') == "Mr")
                 {
                    $b = "X";
                 }
            }

             if($this->input->post('duree') == "Moin un ans")
            {
                $c = "X";
            }
            else
            {
                 if($this->input->post('duree') == "Mois trois ans")
                 {
                    $d = "X";
                 }
                 else{
                         if($this->input->post('duree') == "Entre quatre et dix ans")
                            {
                                $e = "X";
                            }
                        else
                        {
                             if($this->input->post('duree') == "Plus de dix ans")
                                {
                                    $f = "X";
                                }

                        }


                 }
            }
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){

           
            $data = array('upload_data' => $this->upload->data());
        $datas = array(
            //'nomeleve'=>$this->input->post('nomeleve'),
            'nom_stagiaire'=>$this->input->post('nom_stagiaire'),
            'prenom_stagiaire'=>$this->input->post('prenom_stagiaire'),

        //  'prenomeleve'=>$this->input->post('prenomeleve'),
            'date_naissance'=>implode('-',array_reverse  (explode('-',$this->input->post('date_naissance')))),
            'nom_naissance'=>$this->input->post('nom_naissance'),
             'numero_secu'=>$this->input->post('numero_secu'),
             'diplome'=>$this->input->post('diplomes'),
            'mail'=>$this->input->post('mail'),
            'numero_siret'=>$this->input->post('numero_siret'),
            'forme_juridique'=>$this->input->post('forme_juridique'),
             'code_naf'=>$this->input->post('code_naf'),
            'activite'=>$this->input->post('activite'),
            'nom_entreprise'=>$this->input->post('nom_entreprise'),
            'nom_commercial'=>$this->input->post('nom_commercial'),
            'rue'=>$this->input->post('adresse'),
            'code_postal'=>$this->input->post('code_postal'),
            'ville'=>$this->input->post('ville'),
            'monsieur'=>$b,
            'madame'=>$a,
            'moins_un_an'=>$c,
            'entre_un_et_trois_ans'=>$d,
            'entre_quatre_et_dix_ans'=>$e,
            'plus_de_dix_ans'=>$f,
            'telephone'=>$this->input->post('telephone'),
            'formation_entreprise'=>'X',
            'signature'=>$data['upload_data']['file_name'],
            'adresse' => $this->input->post('adresse'),
            'num_accueil' => $this->input->post('num_accueil')
        );
        
        //echo "Fichier : ".$data['upload_data']['file_name'];
        //$affected = $this->elevemodel->insert_eleve($datas);

        
                $this->stagiaire_model->inserer_stagiaire($datas); //perform query
                redirect('/stagiaire/convention');
          
        
        }
        else{
            $datas = array(
            //'nomeleve'=>$this->input->post('nomeleve'),
            'nom_stagiaire'=>$this->input->post('nom_stagiaire'),
            'prenom_stagiaire'=>$this->input->post('prenom_stagiaire'),

        //  'prenomeleve'=>$this->input->post('prenomeleve'),
            'date_naissance'=>implode('-',array_reverse  (explode('-',$this->input->post('date_naissance')))),
            'nom_naissance'=>$this->input->post('nom_naissance'),
             'numero_secu'=>$this->input->post('numero_secu'),
             'diplome'=>$this->input->post('diplomes'),
            'mail'=>$this->input->post('mail'),
            'numero_siret'=>$this->input->post('numero_siret'),
            'forme_juridique'=>$this->input->post('forme_juridique'),
             'code_naf'=>$this->input->post('code_naf'),
            'activite'=>$this->input->post('activite'),
            'nom_entreprise'=>$this->input->post('nom_entreprise'),
            'nom_commercial'=>$this->input->post('nom_commercial'),
            'rue'=>$this->input->post('adresse'),
            'code_postal'=>$this->input->post('code_postal'),
            'ville'=>$this->input->post('ville'),
            'monsieur'=>$a,
            'madame'=>$b,
            'moins_un_an'=>$c,
            'entre_un_et_trois_ans'=>$d,
            'entre_quatre_et_dix_ans'=>$e,
             'plus_de_dix_ans'=>$f,
            'telephone'=>$this->input->post('telephone'),
            'formation_entreprise'=>'X',
            'adresse' => $this->input->post('adresse'),
             'num_accueil' => $this->input->post('num_accueil')
            
        );
        
        //echo "Fichier : ".$data['upload_data']['file_name'];
        //$affected = $this->elevemodel->insert_eleve($datas);

          $this->stagiaire_model->inserer_stagiaire($datas); 
         redirect('/stagiaire/convention');
              
        }
      }
      else
      {
            $this->loadViews("stagiaire/ajout_stagiaire", "Saisie stagiaire", NULL , NULL);
      }
        }
      
    

      else{
        $this->global['pageTitle'] = 'Enregistrement stagiaire';
      // $data['donnee'] = $this->table->recuperer();
        
        $this->loadViews("stagiaire/stagiaire_enregister", $this->global, NULL , NULL);

      }
    }
        catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
        /*$data["daty"] = date('Y-m-d');
        $this->load->view('admin/headerassociation');
        $this->load->view('admin/enfant/ajouterenfant',$data);
        $this->load->view('admin/footer');*/
        
    }

    public function modifier_entreprise()
    {
error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{


            $this->load->library('form_validation');
            $this->load->helper('form_helper');
            $this->form_validation->set_rules('nom_stagiaire','Nom stagiaire','trim|required');
            $this->form_validation->set_rules('prenom_stagiaire','Prénom stagiaire','trim|required');
         //    $this->form_validation->set_rules('numero_siret','Numéro siret','trim|required');
            
            if($this->form_validation->run()==TRUE)
            {

       
        //echo "Fichier : ".$data['upload_data']['file_name'];
        //$affected = $this->elevemodel->insert_eleve($datas);

        if($this->stagiaire_model->recherche_stagiairesss($this->input->post('nom_stagiaire'),$this->input->post('prenom_stagiaire'))==false)
        {
          redirect('stagiaire/ajout_stagiaires');
        }
        else{
         
                $this->stagiaire_model->modifier_entreprise($this->input->post('nom_entreprise'),$this->input->post('nom_commercial'),$this->input->post('code_naf'),$this->input->post('numero_siret'), $this->input->post('activite'),$this->input->post('forme_juridique'), $this->input->post('adresses'),$this->input->post('code_postals'),$this->input->post('villes'),$this->input->post('nom_stagiaire'),$this->input->post('prenom_stagiaire')); //perform query
                redirect('stagiaire/Convention');
              //  redirect('/stagiaire/convention');
        }
       
            }
      else
            {
            $this->loadViews("stagiaire/ajout_entreprise", "Enregistrer entreprise", NULL , NULL);
            }
        
        }
        catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
        /*$data["daty"] = date('Y-m-d');
        $this->load->view('admin/headerassociation');
        $this->load->view('admin/enfant/ajouterenfant',$data);
        $this->load->view('admin/footer');*/
        
    }


    public function supprimer_convetion()
    {
         $this->stagiaire_model->supprimer_convetion();
    }

    public function test_existe()
    {
      $id = $this->table_model->recherche_id("EBP COMPTA");
      print_r($this->stagiaire_model->convention_existe("AUTHIE","Virginie",$id));
    }

    public function testConvention()
    {
      $data = array('nom_stagiaire'=> 'CLERC',

                        'prenom_stagiaire'=> 'FLORENCE',
                        'id_formation' => 'F-I-WA-SP-E', 
                         'date_debut'=> implode('-',array_reverse  (explode('-','15-04-2024'))),
                          'date_fin'=> implode('-',array_reverse  (explode('-','19-04-2024'))),
                          'date_convention_1'=> implode('-',array_reverse  (explode('-','15-04-2024'))),
                        'date_convention_2'=> implode('-',array_reverse  (explode('-','16-04-2024'))),
                        'date_convention_3'=> implode('-',array_reverse  (explode('-','17-04-2024'))),
                        'date_convention_4'=> implode('-',array_reverse  (explode('-','18-04-2024'))),
                        'date_convention_5'=> implode('-',array_reverse  (explode('-','19-04-2024'))),
                        'heure_debut_1'=> '09:00',
                        'heure_debut_2'=> '09:00',
                          'heure_debut_3'=> '09:00',
                          'heure_debut_4'=> '09:00',
                          'heure_debut_5'=> '09:00',
                          
                        'heure_fin_1'=> '12:00',
                         'heure_fin_2'=> '12:00',
                         'heure_fin_3'=> '12:00',
                        'heure_fin_4'=> '12:00',
                         'heure_fin_5'=> '12:00',
                        
                         'heure_debut_111'=> '14:00',
                         'heure_debut_222'=> '14:00',
                         'heure_debut_333'=> '14:00',
                         'heure_debut_444'=> '14:00',
                         'heure_debut_555'=> '14:00',
                        
                        'heure_fin_111'=> '16:00',
                        'heure_fin_222'=> '16:00',
                        'heure_fin_333'=>'16:00',
                        'heure_fin_444'=> '16:00',
                        'heure_fin_555'=> '16:00',
                         'date_signature'=> implode('-',array_reverse  (explode('-','15-03-2024'))),
                         'nom_formateur' => 'VILLA',
                          'prenom_formateur' => 'KRISTA',
                        //  'lieu_formation' => utf8_decode($this->stagiaire_model->recherche_rue($this->input->post('nom_stagiaire'), $this->input->post('prenom_stagiaire')))." ".$this->stagiaire_model->recherche_code_postals($this->input->post('nom_stagiaire'), $this->input->post('prenom_stagiaire'))." ".utf8_decode($this->stagiaire_model->recherche_villes($this->input->post('nom_stagiaire'), $this->input->post('prenom_stagiaire'))),
                       //   'organisme' => $this->input->post('organisme'),









        );

            $this->stagiaire_model->inserer_convention($data);
    }

    public function inserer_convention()
    {
        // v9.3 - Correctif definitif
        error_reporting(E_ALL);
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);

        $this->load->library('form_validation');
        $this->load->helper('form_helper');
        $this->form_validation->set_rules('nom_stagiaire','Nom stagiaire','trim|required');
        $this->form_validation->set_rules('nom_formation','Formation','trim|required');
        $this->form_validation->set_rules('date_debut','Date d\xC3\xA9but','trim|required');
        $this->form_validation->set_rules('date_fin','Date fin','trim|required');
        $this->form_validation->set_rules('date_signature','Date signature','trim|required');

        if($this->form_validation->run() == TRUE)
        {
            // Rechercher l'id_formation
            $id = $this->table_model->recherche_id($this->input->post('nom_formation'));

            // Si recherche_id ne trouve rien, utiliser le nom comme id
            if(empty($id)){
                $id = strtoupper(substr(preg_replace('/[^a-zA-Z0-9]/', '-', $this->input->post('nom_formation')), 0, 40));
            }

            // Verifier les dates NON VIDES uniquement
            $date_existe = false;
            $date_msg = '';
            for($i = 1; $i <= 10; $i++){
                $dp_val = $this->input->post('datepicker'.$i);
                if(!empty($dp_val) && $dp_val != ''){
                    $date_conv = implode('-', array_reverse(explode('-', $dp_val)));
                    if(!empty($date_conv) && $date_conv != '--' && strlen($date_conv) > 5){
                        $result = $this->stagiaire_model->verifier_date_convention(
                            'date_convention_'.$i,
                            $date_conv,
                            $this->input->post('nom_formateur'),
                            $this->input->post('prenom_formateur')
                        );
                        if($result == "Vrai"){
                            $date_existe = true;
                            $date_msg = 'Date '.$i.' d\xC3\xA9j\xC3\xA0 existante';
                            break;
                        }
                    }
                }
            }

            if($date_existe){
                $array = array('existe' => true, 'existes' => $date_msg);
            }
            else
            {
                // Convertir les dates (format JJ-MM-AAAA -> AAAA-MM-JJ)
                $convert_date = function($val){
                    if(empty($val) || $val == '') return null;
                    $parts = explode('-', $val);
                    if(count($parts) == 3 && strlen($parts[2]) == 4){
                        return $parts[2].'-'.$parts[1].'-'.$parts[0];
                    }
                    return $val;
                };

                // Recuperer adresse du stagiaire
                $rue = $this->stagiaire_model->recherche_rue(
                    $this->input->post('nom_stagiaire'),
                    $this->input->post('prenom_stagiaire')
                );
                $cp = $this->stagiaire_model->recherche_code_postals(
                    $this->input->post('nom_stagiaire'),
                    $this->input->post('prenom_stagiaire')
                );
                $ville = $this->stagiaire_model->recherche_villes(
                    $this->input->post('nom_stagiaire'),
                    $this->input->post('prenom_stagiaire')
                );
                $lieu = trim($rue . ' ' . $cp . ' ' . $ville);

                $data = array(
                    'nom_stagiaire'      => $this->input->post('nom_stagiaire'),
                    'prenom_stagiaire'   => $this->input->post('prenom_stagiaire'),
                    'id_formation'       => $id,
                    'date_debut'         => $convert_date($this->input->post('date_debut')),
                    'date_fin'           => $convert_date($this->input->post('date_fin')),
                    'date_convention_1'  => $convert_date($this->input->post('datepicker1')),
                    'date_convention_2'  => $convert_date($this->input->post('datepicker2')),
                    'date_convention_3'  => $convert_date($this->input->post('datepicker3')),
                    'date_convention_4'  => $convert_date($this->input->post('datepicker4')),
                    'date_convention_5'  => $convert_date($this->input->post('datepicker5')),
                    'date_convention_6'  => $convert_date($this->input->post('datepicker6')),
                    'date_convention_7'  => $convert_date($this->input->post('datepicker7')),
                    'date_convention_8'  => $convert_date($this->input->post('datepicker8')),
                    'date_convention_9'  => $convert_date($this->input->post('datepicker9')),
                    'date_convention_10' => $convert_date($this->input->post('datepicker10')),
                    'date_convention_11' => $convert_date($this->input->post('datepicker11')),
                    'date_convention_12' => $convert_date($this->input->post('datepicker12')),
                    'heure_debut_1'  => $this->input->post('heure_debut_1'),
                    'heure_debut_2'  => $this->input->post('heure_debut_2'),
                    'heure_debut_3'  => $this->input->post('heure_debut_3'),
                    'heure_debut_4'  => $this->input->post('heure_debut_4'),
                    'heure_debut_5'  => $this->input->post('heure_debut_5'),
                    'heure_debut_6'  => $this->input->post('heure_debut_6'),
                    'heure_debut_7'  => $this->input->post('heure_debut_7'),
                    'heure_debut_8'  => $this->input->post('heure_debut_8'),
                    'heure_debut_9'  => $this->input->post('heure_debut_9'),
                    'heure_debut_10' => $this->input->post('heure_debut_10'),
                    'heure_debut_11' => $this->input->post('heure_debut_11'),
                    'heure_debut_12' => $this->input->post('heure_debut_12'),
                    'heure_fin_1'  => $this->input->post('heure_fin_1'),
                    'heure_fin_2'  => $this->input->post('heure_fin_2'),
                    'heure_fin_3'  => $this->input->post('heure_fin_3'),
                    'heure_fin_4'  => $this->input->post('heure_fin_4'),
                    'heure_fin_5'  => $this->input->post('heure_fin_5'),
                    'heure_fin_6'  => $this->input->post('heure_fin_6'),
                    'heure_fin_7'  => $this->input->post('heure_fin_7'),
                    'heure_fin_8'  => $this->input->post('heure_fin_8'),
                    'heure_fin_9'  => $this->input->post('heure_fin_9'),
                    'heure_fin_10' => $this->input->post('heure_fin_10'),
                    'heure_fin_11' => $this->input->post('heure_fin_11'),
                    'heure_fin_12' => $this->input->post('heure_fin_12'),
                    'heure_debut_111'  => $this->input->post('heure_debut_111'),
                    'heure_debut_222'  => $this->input->post('heure_debut_222'),
                    'heure_debut_333'  => $this->input->post('heure_debut_333'),
                    'heure_debut_444'  => $this->input->post('heure_debut_444'),
                    'heure_debut_555'  => $this->input->post('heure_debut_555'),
                    'heure_debut_666'  => $this->input->post('heure_debut_666'),
                    'heure_debut_777'  => $this->input->post('heure_debut_777'),
                    'heure_debut_888'  => $this->input->post('heure_debut_888'),
                    'heure_debut_999'  => $this->input->post('heure_debut_999'),
                    'heure_debut_1010' => $this->input->post('heure_debut_1010'),
                    'heure_debut_1111' => $this->input->post('heure_debut_1111'),
                    'heure_debut_1212' => $this->input->post('heure_debut_1212'),
                    'heure_fin_111'  => $this->input->post('heure_fin_111'),
                    'heure_fin_222'  => $this->input->post('heure_fin_222'),
                    'heure_fin_333'  => $this->input->post('heure_fin_333'),
                    'heure_fin_444'  => $this->input->post('heure_fin_444'),
                    'heure_fin_555'  => $this->input->post('heure_fin_555'),
                    'heure_fin_666'  => $this->input->post('heure_fin_666'),
                    'heure_fin_777'  => $this->input->post('heure_fin_777'),
                    'heure_fin_888'  => $this->input->post('heure_fin_888'),
                    'heure_fin_999'  => $this->input->post('heure_fin_999'),
                    'heure_fin_1010' => $this->input->post('heure_fin_1010'),
                    'heure_fin_1111' => $this->input->post('heure_fin_1111'),
                    'heure_fin_1212' => $this->input->post('heure_fin_1212'),
                    'date_signature' => $convert_date($this->input->post('date_signature')),
                    'nom_formateur'    => $this->input->post('nom_formateur'),
                    'prenom_formateur' => $this->input->post('prenom_formateur'),
                    'lieu_formation'   => $lieu,
                    'prix_formation'   => $this->input->post('prix_formation'),
                    'duree_formation'  => $this->input->post('duree_formation'),
                    'organisme'        => $this->input->post('organisme'),
                );

                $this->stagiaire_model->inserer_convention($data);

                $db_err = $this->db->error();
                if(!empty($db_err['code']) && $db_err['code'] != 0){
                    $array = array('error' => true, 'error_nomformation' => 'Erreur DB: '.$db_err['message']);
                } else {
                    // Inserer emargement aussi
                    $datas = array(
                        'nom_stagiaire'    => $this->input->post('nom_stagiaire'),
                        'prenom_stagiaire' => $this->input->post('prenom_stagiaire'),
                        'id_formation'     => $id
                    );
                    $this->stagiaire_model->inserer_emargement($datas);
                    $array = array('success' => 'Enregistrement OK');
                }
            }
        }
        else
        {
            $array = array(
                'error' => true,
                'error_nomstagiaire'  => form_error('nom_stagiaire'),
                'error_nomformation' => form_error('nom_formation'),
                'error_datedebut'    => form_error('date_debut'),
                'error_datefin'      => form_error('date_fin'),
                'error_datesignature' => form_error('date_signature')
            );
        }

        echo json_encode($array);
    }

    public function display_emargementsss()
    {
      print_r($this->stagiaire_model->display_emargements());
    }
    public function display_convention()
    {
        print_r($this->stagiaire_model->display_convention());
    }

    public function afficher_stagiaire()
    {
        print_r($this->stagiaire_model->afficher_stagiaire());
        
    }


    public function display_facture()
    {
      print_r($this->stagiaire_model->display_facture());
    }

    public function supprimer_stagiaire()
    {
        $this->stagiaire_model->supprimer_stagiaire();
    }

    public function supprimer_factures()
    {
      $this->stagiaire_model->supprimer_factures($this->input->post("num_facture"));
    }

    public function test_accueil()
    {
        print_r($this->stagiaire_model->recherche_accueil("137"));
    }

    function certificat_realisation()
    {
     

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','B',9);

     
        //$this->fpdf->Ln(4);
     $nomstagiaire = $this->uri->segment(3);
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $img_type = urldecode($this->uri->segment(6));
        $data = $this->stagiaire_model->recherche_conventions( $nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/CERTIFICAT_DE_REALISATION_IMAGE.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(56);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(150,80,$row->nom_stagiaire." ".$row->prenom_stagiaire,0,0,"C");
                $this->fpdf->SetY(62);
                $this->fpdf->Cell(150,80,$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire,$row->prenom_stagiaire),0,0,"C");

                $this->fpdf->SetY(73);
                $this->fpdf->Cell(150,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                $this->fpdf->SetY(117);
                $this->fpdf->Cell(140,80,implode('-',array_reverse  (explode('-',$row->date_debut))),0,0,"C");

                $this->fpdf->SetY(117);
                $this->fpdf->Cell(250,80,implode('-',array_reverse  (explode('-',$row->date_fin))),0,0,"C");


                 $this->fpdf->SetY(125);
                $this->fpdf->Cell(128,80,utf8_decode($this->stagiaire_model-> recherche_duree_formations($row->id_formation)),0,0,"C");
                
                 $this->fpdf->SetY(178);
                $this->fpdf->Cell(50,80,implode('-',array_reverse  (explode('-',date('Y-m-d')))),0,0,"C");
                
                $this->fpdf->SetY(173);
             
                $this->fpdf->Cell(65,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
              
              }
              if($img_type && ($img_type === 'jpg' || $img_type === 'image' || $img_type === 'img'))
              {
                        $RandomNum   = time();
                      $name = base_url("assets/upload/img/"."certificat_realisation".$RandomNum.'.jpg');
                      $this->fpdf->Output('F', "assets/upload/img/"."certificat_realisation".$RandomNum.'.pdf');
                      $imagick = new Imagick();
                      
                      $imagick->readImage("assets/upload/img/"."certificat_realisation".$RandomNum.'.pdf');
                      $imagick->setResolution(300, 300);
                      $imagick->setImageCompressionQuality(0);
                      $imagick->writeImage("assets/upload/img/"."certificat_realisation".$RandomNum.'.jpg');
                      $filePath = "/www/cias/assets/upload/img/"."certificat_realisation".$RandomNum.'.jpg';
                      header('Location: '.$name);
              }
              else
                $this->fpdf->OutPut();

    }

    function imprimer_certificat_groupe()
    {
     

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','B',9);

     
        //$this->fpdf->Ln(4);
     $nomstagiaire = $this->uri->segment(3);
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $nom_1 = $this->uri->segment(6);
         $prenom_1 = $this->uri->segment(7);

         $nom_2 = $this->uri->segment(8);
         $prenom_2 = $this->uri->segment(9);

         $nom_3 = $this->uri->segment(10);
         $prenom_3 = $this->uri->segment(11);
        $data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/CERTIFICAT_DE_REALISATION_IMAGE.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(56);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(150,80,utf8_decode(urldecode($prenom_1))." ".$nom_1."       ".urldecode($prenom_2)." ".$nom_2."     ".urldecode($prenom_3)." ".$nom_3,0,0,"C");
                $this->fpdf->SetY(62);
                $this->fpdf->Cell(150,80,$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire,$row->prenom_stagiaire),0,0,"C");

                $this->fpdf->SetY(68);
                $this->fpdf->Cell(260,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                $this->fpdf->SetY(117);
                $this->fpdf->Cell(140,80,implode('-',array_reverse  (explode('-',$row->date_debut))),0,0,"C");

                $this->fpdf->SetY(117);
                $this->fpdf->Cell(250,80,implode('-',array_reverse  (explode('-',$row->date_fin))),0,0,"C");


                 $this->fpdf->SetY(125);
                $this->fpdf->Cell(128,80,utf8_decode($this->stagiaire_model-> recherche_duree_formations($row->id_formation)),0,0,"C");
                
                $this->fpdf->SetY(173);
             
                $this->fpdf->Cell(65,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                 $this->fpdf->SetY(178);
                $this->fpdf->Cell(50,80,implode('-',array_reverse  (explode('-',date('Y-m-d')))),0,0,"C");
                
              
              }
             $this->fpdf->OutPut();

    }


function imprimer_assiduite()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','B',9);

     
        //$this->fpdf->Ln(4);
     $nomstagiaire = urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $data = $this->stagiaire_model->recherche_conventions( $nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/assiduites.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(50);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(200,80,$row->nom_stagiaire." ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                $this->fpdf->SetY(55);
             
                $this->fpdf->Cell(120,80,utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                 $this->fpdf->SetY(79);
             
                $this->fpdf->Cell(220,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(85);
             
                $this->fpdf->Cell(175,80, implode('-',array_reverse  (explode('-',$row->date_debut))),0,0,"C");

                  $this->fpdf->SetY(93);
             
                $this->fpdf->Cell(175,80, implode('-',array_reverse  (explode('-',$row->date_fin))),0,0,"C");

                  $this->fpdf->SetY(100);
             
                $this->fpdf->Cell(175,80, utf8_decode($row->prenom_formateur) ,0,0,"C");

                  $this->fpdf->SetY(100);
             
                $this->fpdf->Cell(210,80, utf8_decode($row->nom_formateur) ,0,0,"C");


                // Durée assiduité : priorité à la durée personnalisée de la convention
                // (ex. 72h), sinon durée catalogue de la formation.
                $duree_assiduite = trim((string)$row->duree_formation);
                if($duree_assiduite === '') {
                  $duree_assiduite = $this->stagiaire_model->recherche_duree_formations($row->id_formation);
                }
                $duree_assiduite = trim(preg_replace('/[^0-9,.]/', '', $duree_assiduite));
                if($duree_assiduite === '') {
                  $duree_assiduite = '0';
                }
                $duree_assiduite .= ' H';

                // Placement dans la ligne "Présentiel individuel" du tableau.
                $this->fpdf->SetXY(75,132);
                $this->fpdf->Cell(50,8,utf8_decode($duree_assiduite),0,0,"C");

                $this->fpdf->SetXY(135,132);
                $this->fpdf->Cell(45,8,utf8_decode($duree_assiduite),0,0,"C");
                 $this->fpdf->SetY(190);
             
                $this->fpdf->Cell(80,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(190);
             
                $this->fpdf->Cell(180,80,implode('-',array_reverse  (explode('-',$row->date_fin))),0,0,"C");

                 $this->fpdf->ln(38);
               $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(290,40,$row->nom_stagiaire." ".$row->prenom_stagiaire."    , Dirigeant(e)",0,0,"C");
                if($this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)!=null)
              {
                try{
                 $this->fpdf->Image(base_url("assets/images/".$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)),155,257,20,20,'','');
                   }
                catch(Exception $e)
                {
                  
                }
              }
              $this->fpdf->Image(base_url("assets/images/Signature.jpg"),10,235,75,20,'','');

            }

             $this->fpdf->OutPut();
}

public function Display_Formationss()
{
  print_r($this->stagiaire_model->Display_Formation());
}

public function ajouter_dessert()
{
  $data = array('id_formation' => 'F-DES-VER',
            'nom_formation' => 'les desserts revisités',
            'prix_formation' => 700,
            'duree_formation' => '14H',
            'nom_thematique' => 'CULINAIRE');
  $this->stagiaire_model->ajouter_dessert($data);
  echo "OK";
}

function imprimer_assiduites()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','B',9);

     
        //$this->fpdf->Ln(4);
     $nomstagiaire = urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $img_type = urldecode($this->uri->segment(6));
        $data = $this->stagiaire_model->recherche_conventions( $nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/Attestations_1.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(27);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(200,80,$row->nom_stagiaire." ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                $this->fpdf->SetY(32);
             
                $this->fpdf->Cell(120,80,utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                 $this->fpdf->SetY(48);
             
                $this->fpdf->Cell(220,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(55);
             
                $this->fpdf->Cell(175,80, implode('-',array_reverse  (explode('-',$row->date_debut))),0,0,"C");

                  $this->fpdf->SetY(62);
             
                $this->fpdf->Cell(175,80, implode('-',array_reverse  (explode('-',$row->date_fin))),0,0,"C");

                  $this->fpdf->SetY(69);
             
                $this->fpdf->Cell(175,80, utf8_decode($row->prenom_formateur) ,0,0,"C");

                  $this->fpdf->SetY(69);
             
                $this->fpdf->Cell(210,80, utf8_decode($row->nom_formateur) ,0,0,"C");



                // Durée assiduité : priorité à la durée personnalisée de la convention
                // (ex. 72h), sinon durée catalogue de la formation.
                $duree_assiduite = trim((string)$row->duree_formation);
                if($duree_assiduite === '') {
                  $duree_assiduite = $this->stagiaire_model->recherche_duree_formations($row->id_formation);
                }
                $duree_assiduite = trim(preg_replace('/[^0-9,.]/', '', $duree_assiduite));
                if($duree_assiduite === '') {
                  $duree_assiduite = '0';
                }
                $duree_assiduite .= ' H';

                // Placement dans la ligne "Présentiel individuel" du tableau.
                $this->fpdf->SetXY(75,132);
                $this->fpdf->Cell(50,8,utf8_decode($duree_assiduite),0,0,"C");

                $this->fpdf->SetXY(135,132);
                $this->fpdf->Cell(45,8,utf8_decode($duree_assiduite),0,0,"C");
             //   $this->fpdf->SetY(156);
             //   $prix = (int)$this->stagiaire_model->recherche_prix_formations($row->id_formation) * 0.2 + $this->stagiaire_model->recherche_prix_formations($row->id_formation);
             //   $this->fpdf->Cell(65,80,$prix,0,0,"C");

              //  $this->fpdf->SetY(156);
              //  $this->fpdf->Cell(250,80,utf8_decode("Chèque"),0,0,"C");

                $montant_ht_assiduite = $this->stagiaire_model->recherche_prix_formation($row->id_formation);
                $mode_paiement = $this->stagiaire_model->recherche_mode_paiement_facture($row->nom_stagiaire, $row->prenom_stagiaire, $row->id_formation);

                // Le modèle image contient déjà « Chèque » en dur : on masque
                // les zones dynamiques puis on imprime les valeurs sélectionnées.
                $this->fpdf->SetFillColor(255,255,255);
                $this->fpdf->Rect(54,202,45,7,'F');   // montant HT
                $this->fpdf->Rect(123,202,36,7,'F');  // ancien « Chèque »
                $this->fpdf->SetTextColor(0,0,0);
                $this->fpdf->SetFont('Arial','B',9);

                $this->fpdf->SetXY(56,203);
                $this->fpdf->Cell(35,5,utf8_decode($montant_ht_assiduite),0,0,"L");

                $this->fpdf->SetXY(126,203);
                $this->fpdf->Cell(32,5,utf8_decode($mode_paiement),0,0,"C");

                $date_paiement_assiduite = $this->stagiaire_model->format_date_fr($this->stagiaire_model->recherche_date_paiement_facture($row->nom_stagiaire, $row->prenom_stagiaire, $row->id_formation));
                // Ligne "date(s) du ..." : sur les pointillés du paragraphe, après date(s) du.
                $this->fpdf->SetFillColor(255,255,255);
                $this->fpdf->Rect(46,209,45,5,'F');
                $this->fpdf->SetTextColor(0,0,0);
                $this->fpdf->SetFont('Arial','B',9);
                $this->fpdf->SetXY(46,208);
                $this->fpdf->Cell(45,5,utf8_decode($date_paiement_assiduite),0,0,"L");


             //   $this->fpdf->SetY(162);
             
             //   $this->fpdf->Cell(65,80,implode('-',array_reverse (explode('-',$this->stagiaire_model->recherche_date_facture($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))),0,0,"C");
                 $this->fpdf->SetY(181);
             
                $this->fpdf->Cell(50,95,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(181);
             
                $this->fpdf->Cell(130,95,implode('-',array_reverse  (explode('-',$row->date_fin))),0,0,"C");

                 $this->fpdf->ln(31);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
              $this->fpdf->Cell(40,55,utf8_decode("Madeleine LABERRONDO"),0,0,"C");
                $this->fpdf->Cell(180,55,$row->nom_stagiaire." ".utf8_decode($row->prenom_stagiaire)."    , Dirigeant(e)",0,0,"C");
              if($this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)!=null)
              {
                try{
                $this->fpdf->Image(base_url("assets/images/".$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)),155,243,20,20,'','');
                  }
                catch(Exception $e)
                {
                  
                }
              }

              $this->fpdf->Image(base_url("assets/images/Signature.jpg"),50,240,50,15,'','');
            }
if($img_type && ($img_type === 'jpg' || $img_type === 'image' || $img_type === 'img'))
{
          $RandomNum   = time();
        $name = base_url("assets/upload/img/"."assiduites".$RandomNum.'.jpg');
        $this->fpdf->Output('F', "assets/upload/img/"."assiduites".$RandomNum.'.pdf');
        $imagick = new Imagick();
        
        $imagick->readImage("assets/upload/img/"."assiduites".$RandomNum.'.pdf');
        $imagick->setResolution(300, 300);
        $imagick->setImageCompressionQuality(0);
        $imagick->writeImage("assets/upload/img/"."assiduites".$RandomNum.'.jpg');
        $filePath = "/www/cias/assets/upload/img/"."assiduites".$RandomNum.'.jpg';
        header('Location: '.$name);
}
else
             $this->fpdf->OutPut();
}

public function imprimer_nouvelle_facture()
{

  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
  
        // ===== NOUVEAU : ENREGISTRER LA FACTURE EN BASE =====
        // LOG FORCÉ pour debugging
        $debug_file = FCPATH . 'facture_debug.txt';
        file_put_contents($debug_file, date('Y-m-d H:i:s') . " - Début imprimer_nouvelle_facture\n", FILE_APPEND);
        
        try {
            // Charger la base de données explicitement
            $this->load->database();
            file_put_contents($debug_file, "DB chargée\n", FILE_APPEND);
            
            $data_facture = array(
                'num_facture' => $this->input->post("num_facture"),
                'nom_stagiaire' => $this->input->post("nom_stagiaire"),
                'prenom_stagiaire' => $this->input->post("prenom_stagiaire"),
                'id_formation' => $this->input->post("formation"),
                'date_facture' => implode('-', array_reverse(explode('-', $this->input->post("date_facture")))),
                'organisme' => $this->input->post("entreprise"),
                'montant' => $this->input->post("montant"),
                'statut' => 'generee'
            );
            
            file_put_contents($debug_file, "Données: " . json_encode($data_facture) . "\n", FILE_APPEND);
            
            // Vérifier que les données sont là
            if (!empty($data_facture['num_facture']) && !empty($data_facture['nom_stagiaire'])) {
                file_put_contents($debug_file, "Tentative INSERT...\n", FILE_APPEND);
                $this->db->insert('Facture', $data_facture);
                file_put_contents($debug_file, "INSERT OK! Affected rows: " . $this->db->affected_rows() . "\n", FILE_APPEND);
                // Log de succès
                log_message('info', 'Facture enregistrée: ' . $data_facture['num_facture']);
            } else {
                file_put_contents($debug_file, "DONNÉES VIDES! num=" . $data_facture['num_facture'] . " nom=" . $data_facture['nom_stagiaire'] . "\n", FILE_APPEND);
            }
        } catch (Exception $e) {
            // Log erreur mais continue pour générer le PDF
            file_put_contents($debug_file, "ERREUR: " . $e->getMessage() . "\n", FILE_APPEND);
            log_message('error', 'Erreur insertion facture: ' . $e->getMessage());
        }
        file_put_contents($debug_file, "Fin enregistrement - Génération PDF...\n\n", FILE_APPEND);
        // ===== FIN NOUVEAU =====

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = $this->input->post("nom_stagiaire");
        $prenomstagiaire = $this->input->post("prenom_stagiaire");
        $idformation = $this->input->post("formation");
        //$this->fpdf->Ln(4);
        // $data = $this->stagiaire_model->recherche_emargements("AUTHIE","Virginie","F-FB-ADS-01");
       //$data = $this->stagiaire_model->recherche_facture($nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/facture.jpg"),0,10,200,0,'','');
       // foreach ($data as $row) {
                $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(280,20,$this->input->post("num_facture"),0,0,"C");
                  $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(100,20,$this->input->post("date_facture"),0,0,"C");

                  $this->fpdf->SetY(76);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(80,20,$this->input->post("entreprise"),0,0,"C");

                 $this->fpdf->SetY(80);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->input->post("rue")),0,0,"C");
                 
                  
                 $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,$this->input->post("codepostal"),0,0,"C");

                $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,$this->input->post("nom_ville"),0,0,"C");

                  $this->fpdf->SetY(107);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,$this->input->post("nom_formation"),0,0,"C");

               $this->fpdf->SetY(124);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(125,20,utf8_decode($this->input->post('heure')),0,0,"C");

                  $this->fpdf->SetY(118);
                  $this->fpdf->Cell(310,20,$this->input->post("montant"),0,0,"C");

                  $this->fpdf->SetY(118);
                 $this->fpdf->Cell(155,20,substr($this->input->post('heure_debut_1'),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(118);
                 $this->fpdf->Cell(200,20,substr($this->input->post('heure_fin_1'),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(155,20,substr($this->input->post('heure_debut_111'),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(200,20,substr($this->input->post('heure_fin_111'),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(60,20,$this->input->post('datepicker1'),0,0,"C");
                
                 $this->fpdf->SetY(130);
                 $this->fpdf->Cell(100,20,$this->input->post('datepicker2'),0,0,"C");
                 

                   $this->fpdf->SetY(130);
                // $this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                if($this->input->post('datepicker3')=="00-00-0000")
                  {
                    $this->fpdf->Cell(140,20,"",0,0,"C");
                  }
                  else{
                    $this->fpdf->Cell(140,20,$this->input->post('datepicker3'),0,0,"C");
                  }


                   $this->fpdf->SetY(130);
                 //$this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 if($this->input->post('datepicker4')=="00-00-0000")
                  {
                    $this->fpdf->Cell(180,20,"",0,0,"C");
                  }
                  else{
                    $this->fpdf->Cell(180,20,$this->input->post('datepicker4'),0,0,"C");
                  }

                 
                  if($this->input->post('datepicker5')=="00-00-0000")
                  {
                      $ff = "";
                  }
                  else
                  {
                     $ff = $this->input->post('datepicker5');
                  }

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(220,20,$ff,0,0,"C");
                
                  if($this->input->post('datepicker6')=="00-00-0000")
                  {
                      $ee = "";
                  }
                  else
                  {
                     $ee = $this->input->post('datepicker6');
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(260,20,$ee,0,0,"C");



                 if($this->input->post('datepicker7')=="00-00-0000")
                  {
                      $dd = "";
                  }
                  else
                  {
                     $dd = $this->input->post('datepicker7');
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(300,20,$dd,0,0,"C");

                  if($this->input->post('datepicker8')=="00-00-0000")
                  {
                      $aa = "";
                  }
                  else
                  {
                     $aa = $this->input->post('datepicker8');
                  }

                   if($this->input->post('datepicker9')=="00-00-0000")
                  {
                      $bb = "";
                  }
                  else
                  {
                     $bb = $this->input->post('datepicker9');
                  }

                   if($this->input->post('datepicker10')=="00-00-0000")
                  {
                      $cc = "";
                  }
                  else
                  {
                     $cc = $this->input->post('datepicker10');
                  }



                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(340,20,$aa,0,0,"C");

                  $this->fpdf->SetY(135);
                 $this->fpdf->Cell(300,20,$bb,0,0,"C");


                   $this->fpdf->SetY(135);
                 $this->fpdf->Cell(340,20,$cc,0,0,"C");

                 $this->fpdf->SetY(140);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->input->post('rue')),0,0,"C");
                  
                 $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->input->post('codepostal')).'        '.utf8_decode($this->input->post('nom_ville')),0,0,"C");

              /*  $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");*/

                 $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,"1",0,0,"C");

                $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,"STAGIAIRE",0,0,"C");

                 $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(65,20,utf8_decode($this->input->post('prenom_stagiaire')),0,0,"C");

                $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->input->post('nom_stagiaire')),0,0,"C");


                

                  $this->fpdf->SetY(183);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,utf8_decode($this->input->post('montant')),0,0,"C");

                  $this->fpdf->SetY(189);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,"20,00%",0,0,"C");
                  $tva = (int)$this->input->post('montant') * 0.2;
                  $this->fpdf->SetY(195);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$tva,0,0,"C");

                $ttc = (int)$this->input->post('montant') + $tva;
                 $this->fpdf->SetY(208);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$ttc,0,0,"C");

                 $this->fpdf->SetY(208);
                 $this->fpdf->SetTextColor(0, 0, 0);
                  $this->fpdf->Cell(50,20,utf8_decode($this->input->post('numero_dossier')),0,0,"C");


                   $this->fpdf->Image(base_url("assets/images/Signature.jpg"),115,225,75,30,'','');
              //  $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');


            //   }

           $this->fpdf->OutPut();



}

function imprimer_facture_sans_acquitte()
{
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = $this->uri->segment(3);
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        //$this->fpdf->Ln(4);
        // $data = $this->stagiaire_model->recherche_emargements("AUTHIE","Virginie","F-FB-ADS-01");
       $data = $this->stagiaire_model->recherche_facture($nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/Facturess.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(280,20,$row->num_facture,0,0,"C");
                  $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($row->date_facture)))),0,0,"C");

                  $this->fpdf->SetY(76);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(80,20,$this->stagiaire_model->recherche_nom_entreprise($row->nom_stagiaire,$row->prenom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(80);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  
                 $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                  $this->fpdf->SetY(107);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                $this->fpdf->SetY(124);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(125,20,utf8_decode($this->stagiaire_model->recherche_nombre_heure($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(118);
                  $this->fpdf->Cell(310,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");

                   $this->fpdf->SetY(118);
                 $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(118);
                 $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(60,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                
                 $this->fpdf->SetY(130);
                 $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_2($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                   $this->fpdf->SetY(130);
                // $this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                  {
                    $this->fpdf->Cell(140,20,"",0,0,"C");
                  }
                  else{
                    $this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                  }


                   $this->fpdf->SetY(130);
                 //$this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                  {
                    $this->fpdf->Cell(180,20,"",0,0,"C");
                  }
                  else{
                    $this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                  }

                 
                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $ff = "";
                  }
                  else
                  {
                     $ff = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(220,20,$ff,0,0,"C");
                
                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $ee = "";
                  }
                  else
                  {
                     $ee = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(260,20,$ee,0,0,"C");



                 if(utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $dd = "";
                  }
                  else
                  {
                     $dd = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(300,20,$dd,0,0,"C");

                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $aa = "";
                  }
                  else
                  {
                     $aa = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   if(utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $bb = "";
                  }
                  else
                  {
                     $bb = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   if(utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $cc = "";
                  }
                  else
                  {
                     $cc = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }



                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(340,20,$aa,0,0,"C");

                  $this->fpdf->SetY(135);
                 $this->fpdf->Cell(300,20,$bb,0,0,"C");


                   $this->fpdf->SetY(135);
                 $this->fpdf->Cell(340,20,$cc,0,0,"C");

                 $this->fpdf->SetY(140);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  
                 $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,"1",0,0,"C");

                $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,"STAGIAIRE",0,0,"C");

                 $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(65,20,$row->prenom_stagiaire,0,0,"C");

                $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,$row->nom_stagiaire,0,0,"C");


                   $this->fpdf->SetY(183);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");

                  $this->fpdf->SetY(189);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,"20,00%",0,0,"C");
                  $tva = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) * 0.2;
                  $this->fpdf->SetY(195);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$tva,0,0,"C");

                $ttc = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) + $tva;
                 $this->fpdf->SetY(208);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$ttc,0,0,"C");

                   $this->fpdf->Image(base_url("assets/images/Signature.jpg"),115,225,75,30,'','');
              //  $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');


               }

           $this->fpdf->OutPut();



}
function imprimer_facture()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      
        // ===== ENREGISTREMENT EN BASE =====
        $debug_file = FCPATH . 'facture_debug.txt';
        file_put_contents($debug_file, date('Y-m-d H:i:s') . " - Début imprimer_facture (LA VRAIE!)\n", FILE_APPEND);
        
        // Récupérer les paramètres de l'URL
        $nomstagiaire = urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        
        file_put_contents($debug_file, "Paramètres URL: nom=$nomstagiaire, prenom=$prenomstagiaire, formation=$idformation\n", FILE_APPEND);
        
        // Charger la base de données
        $this->load->database();
        file_put_contents($debug_file, "DB chargée\n", FILE_APPEND);
        
        // Récupérer les données depuis la table Convention
        $data_convention = $this->stagiaire_model->recherche_facture($nomstagiaire, $prenomstagiaire, $idformation);
        
        if (!empty($data_convention)) {
            $row = $data_convention[0]; // Premier résultat
            
            // Préparer les données pour insertion
            $data_facture = array(
                'num_facture' => isset($row->num_facture) ? $row->num_facture : 'FACTURE-' . date('YmdHis'),
                'nom_stagiaire' => $nomstagiaire,
                'prenom_stagiaire' => $prenomstagiaire,
                'id_formation' => $idformation,
                'date_facture' => isset($row->date_facture) ? $row->date_facture : date('Y-m-d'),
                'organisme' => $this->stagiaire_model->recherche_nom_entreprise($nomstagiaire, $prenomstagiaire),
                'montant' => $this->stagiaire_model->recherche_prix_formation($idformation),
                'statut' => 'generee'
            );
            
            file_put_contents($debug_file, "Données facture: " . json_encode($data_facture) . "\n", FILE_APPEND);
            
            // Vérifier si la facture existe déjà
            $existing = $this->db->get_where('Facture', array(
                'nom_stagiaire' => $nomstagiaire,
                'prenom_stagiaire' => $prenomstagiaire,
                'id_formation' => $idformation
            ))->num_rows();
            
            if ($existing == 0) {
                file_put_contents($debug_file, "Facture inexistante, insertion...\n", FILE_APPEND);
                $this->db->insert('Facture', $data_facture);
                file_put_contents($debug_file, "INSERT OK! Affected rows: " . $this->db->affected_rows() . "\n", FILE_APPEND);
            } else {
                file_put_contents($debug_file, "Facture existe déjà, pas d'insertion\n", FILE_APPEND);
            }
        } else {
            file_put_contents($debug_file, "ERREUR: Aucune donnée dans Convention!\n", FILE_APPEND);
        }
        
        file_put_contents($debug_file, "Fin enregistrement - Génération PDF...\n\n", FILE_APPEND);
        // ===== FIN ENREGISTREMENT =====

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);
 //  $this->fpdf->AddPage();
 //  $this->fpdf->SetAutoPagebreak(False);
  // $this->fpdf->SetMargins(10,0,0,10);
   
   
     // Variables déjà déclarées au début, pas besoin de les redéclarer
        $img_type = urldecode($this->uri->segment(6));
        //$this->fpdf->Ln(4);
        // $data = $this->stagiaire_model->recherche_emargements("AUTHIE","Virginie","F-FB-ADS-01");
       $data = $this->stagiaire_model->recherche_facture($nomstagiaire,$prenomstagiaire,$idformation);
        
        // Vérification: afficher un message si aucune donnée trouvée
        if (empty($data)) {
            $this->fpdf->AddPage();
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->SetTextColor(255, 0, 0);
            $this->fpdf->Cell(0, 20, 'ERREUR: Aucune donnee trouvee dans la base', 0, 1, 'C');
            $this->fpdf->Ln(10);
            $this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0);
            $this->fpdf->Cell(0, 10, 'Stagiaire: ' . utf8_decode($nomstagiaire) . ' ' . utf8_decode($prenomstagiaire), 0, 1, 'C');
            $this->fpdf->Cell(0, 10, 'Formation: ' . utf8_decode($idformation), 0, 1, 'C');
            $this->fpdf->Ln(10);
            $this->fpdf->SetFont('Arial', 'I', 10);
            $this->fpdf->MultiCell(0, 5, "Aucune donnee trouvee dans la table Convention pour ce stagiaire et cette formation.\nVerifiez que les informations existent dans la base de donnees.", 0, 'C');
            $this->fpdf->Output();
            return;
        }
        
        $this->fpdf->Image(base_url("assets/images/facture.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(280,20,$row->num_facture,0,0,"C");
                  $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($row->date_facture)))),0,0,"C");

                  $this->fpdf->SetY(76);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(80,20,$this->stagiaire_model->recherche_nom_entreprise($row->nom_stagiaire,$row->prenom_stagiaire),0,0,"C");
             //    $this->fpdf->Cell(120,20,'Date de paiement : '.implode('-',array_reverse  (explode('-',utf8_decode($row->date_facture)))),0,0,"C");

                 $this->fpdf->SetY(80);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  
                 $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                  $this->fpdf->SetY(107);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                $this->fpdf->SetY(124);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(125,20,utf8_decode($this->stagiaire_model->recherche_nombre_heure($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(118);
                  $this->fpdf->Cell(310,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");

                   $this->fpdf->SetY(118);
                 $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(118);
                 $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(60,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                
                 $this->fpdf->SetY(130);
                 $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_2($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                   $this->fpdf->SetY(130);
                 //$this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                  {
                    $this->fpdf->Cell(140,20,"",0,0,"C");
                  }
                  else{
                    $this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                  }

                   $this->fpdf->SetY(130);
                // $this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                  
                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                  {
                    $this->fpdf->Cell(180,20,"",0,0,"C");
                  }
                  else{
                    $this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                  }
                 
                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $ff = "";
                  }
                  else
                  {
                     $ff = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(220,20,$ff,0,0,"C");
                
                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $ee = "";
                  }
                  else
                  {
                     $ee = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(260,20,$ee,0,0,"C");



                 if(utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $dd = "";
                  }
                  else
                  {
                     $dd = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(300,20,$dd,0,0,"C");

                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $aa = "";
                  }
                  else
                  {
                     $aa = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   if(utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $bb = "";
                  }
                  else
                  {
                     $bb = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   if(utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $cc = "";
                  }
                  else
                  {
                     $cc = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }



                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(340,20,$aa,0,0,"C");

                  $this->fpdf->SetY(135);
                 $this->fpdf->Cell(300,20,$bb,0,0,"C");


                   $this->fpdf->SetY(135);
                 $this->fpdf->Cell(340,20,$cc,0,0,"C");

                 $this->fpdf->SetY(140);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  
                 $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,"1",0,0,"C");

                $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,"STAGIAIRE",0,0,"C");

                 $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(65,20,utf8_decode($row->prenom_stagiaire),0,0,"C");

                $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,$row->nom_stagiaire,0,0,"C");


                   $this->fpdf->SetY(183);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");

                  $this->fpdf->SetY(189);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,"20,00%",0,0,"C");
                  $tva = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) * 0.2;
                  $this->fpdf->SetY(195);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$tva,0,0,"C");

                $ttc = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) + $tva;
                 $this->fpdf->SetY(208);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$ttc,0,0,"C");

                  $mode_paiement_facture = $this->stagiaire_model->recherche_mode_paiement_facture($row->nom_stagiaire, $row->prenom_stagiaire, $row->id_formation);
                  $this->fpdf->SetFont('Arial','B',9);
                  $this->fpdf->SetXY(39,265);
                  $this->fpdf->Cell(55,6,utf8_decode('par '.$mode_paiement_facture),0,0,"L");

                  $date_paiement_facture = $this->stagiaire_model->format_date_fr($this->stagiaire_model->recherche_date_paiement_facture($row->nom_stagiaire, $row->prenom_stagiaire, $row->id_formation));
                  $this->fpdf->SetXY(60,270);
                  $this->fpdf->Cell(55,6,utf8_decode($date_paiement_facture),0,0,"L");

                   $this->fpdf->Image(base_url("assets/images/Signature.jpg"),115,225,75,30,'','');
              //  $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');
    //          $this->fpdf->SetY(265);
      //        $this->fpdf->Cell(68,20,' de paiement : '.implode('-',array_reverse  (explode('-',utf8_decode($row->date_facture)))),0,0,"C");
              

               }
                if($img_type && ($img_type === 'jpg' || $img_type === 'image' || $img_type === 'img'))
                {
                          $RandomNum   = time();
                        $name = base_url("assets/upload/img/"."facture".$RandomNum.'.jpg');
                        $this->fpdf->Output('F', "assets/upload/img/"."facture".$RandomNum.'.pdf');
                        $imagick = new Imagick();
                        
                        $imagick->readImage("assets/upload/img/"."facture".$RandomNum.'.pdf');
                        $imagick->setResolution(300, 300);
                        $imagick->setImageCompressionQuality(0);
                        $imagick->writeImage("assets/upload/img/"."facture".$RandomNum.'.jpg');
                        $filePath = "/www/cias/assets/upload/img/"."facture".$RandomNum.'.jpg';
                        header('Location: '.$name);
                }
                else
                  $this->fpdf->OutPut();

        }


function imprimer_facture_date_paiement()
        {
          error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    
            $this->load->library('fpdf_gen');
            $pdf = new FPDF("L","mm","A4");
        $this->fpdf->SetFont('Arial','',9);
    
         $nomstagiaire = urldecode($this->uri->segment(3));
            $prenomstagiaire = urldecode($this->uri->segment(4));
            $idformation = urldecode($this->uri->segment(5));
            //$this->fpdf->Ln(4);
            // $data = $this->stagiaire_model->recherche_emargements("AUTHIE","Virginie","F-FB-ADS-01");
          // $data = $this->stagiaire_model->recherche_facture($nomstagiaire,$prenomstagiaire,$idformation);
          $data = $this->stagiaire_model->parcours_facture();
          
            foreach ($data as $row) {
             
                  $this->fpdf->AddPage();
                  $this->fpdf->SetAutoPagebreak(False);
                  $this->fpdf->SetMargins(10,0,0,10);
              
              $this->fpdf->Image(base_url("assets/images/facture.jpg"),0,10,200,0,'','');
                    $this->fpdf->SetY(65);
                    $this->fpdf->SetTextColor(255, 255, 255);
                     $this->fpdf->Cell(280,20,$row->num_facture,0,0,"C");
                      $this->fpdf->SetY(65);
                    $this->fpdf->SetTextColor(255, 255, 255);
                     $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($row->date_facture)))),0,0,"C");
    
                      $this->fpdf->SetY(76);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(80,20,$this->stagiaire_model->recherche_nom_entreprise($row->nom_stagiaire,$row->prenom_stagiaire),0,0,"C");
                     
                     $this->fpdf->SetY(80);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                      
                     $this->fpdf->SetY(84);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
    
                    $this->fpdf->SetY(84);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
    
                      $this->fpdf->SetY(107);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");
    
                    $this->fpdf->SetY(124);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(125,20,utf8_decode($this->stagiaire_model->recherche_nombre_heure($row->id_formation)),0,0,"C");
    
                      $this->fpdf->SetY(118);
                      $this->fpdf->Cell(310,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");
    
                       $this->fpdf->SetY(118);
                     $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,2)."H",0,0,"C");
    
    
                       $this->fpdf->SetY(118);
                     $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,2)."H",0,0,"C");
    
                       $this->fpdf->SetY(124);
                     $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,2)."H",0,0,"C");
    
    
                       $this->fpdf->SetY(124);
                     $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,2)."H",0,0,"C");
    
                      $this->fpdf->SetY(130);
                     $this->fpdf->Cell(60,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_1($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,0,"C");
                    
                     $this->fpdf->SetY(130);
                     $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_2($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,0,"C");
    
                       $this->fpdf->SetY(130);
                     //$this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                     if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))))=="00-00-0000")
                      {
                        $this->fpdf->Cell(140,20,"",0,0,"C");
                      }
                      else{
                        $this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,0,"C");
                      }
    
                       $this->fpdf->SetY(130);
                    // $this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                      
                     if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))))=="00-00-0000")
                      {
                        $this->fpdf->Cell(180,20,"",0,0,"C");
                      }
                      else{
                        $this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))))),0,0,"C");
                      }
                     
                      if(utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))=="0000-00-00")
                      {
                          $ff = "";
                      }
                      else
                      {
                         $ff = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))));
                      }
    
                      $this->fpdf->SetY(130);
                     $this->fpdf->Cell(220,20,$ff,0,0,"C");
                    
                      if(utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))=="0000-00-00")
                      {
                          $ee = "";
                      }
                      else
                      {
                         $ee = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))));
                      }
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(260,20,$ee,0,0,"C");
    
    
    
                     if(utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))=="0000-00-00")
                      {
                          $dd = "";
                      }
                      else
                      {
                         $dd = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))));
                      }
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(300,20,$dd,0,0,"C");
    
                      if(utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))=="0000-00-00")
                      {
                          $aa = "";
                      }
                      else
                      {
                         $aa = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))));
                      }
    
                       if(utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))=="0000-00-00")
                      {
                          $bb = "";
                      }
                      else
                      {
                         $bb = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))));
                      }
    
                       if(utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation))=="0000-00-00")
                      {
                          $cc = "";
                      }
                      else
                      {
                         $cc = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation)))));
                      }
    
    
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(340,20,$aa,0,0,"C");
    
                      $this->fpdf->SetY(135);
                     $this->fpdf->Cell(300,20,$bb,0,0,"C");
    
    
                       $this->fpdf->SetY(135);
                     $this->fpdf->Cell(340,20,$cc,0,0,"C");
    
                     $this->fpdf->SetY(140);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                      
                     $this->fpdf->SetY(145);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
    
                    $this->fpdf->SetY(145);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
    
                     $this->fpdf->SetY(160);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(58,20,"1",0,0,"C");
    
                    $this->fpdf->SetY(160);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,"STAGIAIRE",0,0,"C");
    
                     $this->fpdf->SetY(165);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(65,20,utf8_decode($row->prenom_stagiaire),0,0,"C");
    
                    $this->fpdf->SetY(165);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,$row->nom_stagiaire,0,0,"C");
    
    
                       $this->fpdf->SetY(183);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");
    
                      $this->fpdf->SetY(189);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,"20,00%",0,0,"C");
                      $tva = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) * 0.2;
                      $this->fpdf->SetY(195);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,$tva,0,0,"C");
    
                    $ttc = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) + $tva;
                     $this->fpdf->SetY(208);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,$ttc,0,0,"C");
                       
    
                       $this->fpdf->Image(base_url("assets/images/Signature.jpg"),115,225,75,30,'','');
                      
                       $this->fpdf->SetY(265);
                     
                       $this->fpdf->Cell(68,20,' de paiement : '.implode('-',array_reverse  (explode('-',utf8_decode($row->date_facture)))),0,0,"C");
                  //  $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');
                  
                  
    
                   }
    
               $this->fpdf->OutPut();
                  
    
            }
    




function imprimer_facture_groupe()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = $this->uri->segment(3);
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $numfacture = $this->uri->segment(6);
         $datefacture = $this->uri->segment(7);
         $nomentreprise = utf8_decode($this->uri->segment(8));
           $adresse = utf8_decode($this->uri->segment(9));
           $codepostal = $this->uri->segment(10);
            $nomville = $this->uri->segment(11);
              $nom1 = $this->uri->segment(13);
                $prenom1 = $this->uri->segment(14);
                $nom2 = $this->uri->segment(15);
                $prenom2 = $this->uri->segment(16);
                  $nom3 = $this->uri->segment(17);
                $prenom3 = $this->uri->segment(18);
                  $reference = $this->uri->segment(12);
                  
                 if(($nom2=="")&&($nom3=="")&&($nom1!=""))
          {
            $nombre = 1;
          }
          else{
           if(($nom3=="")&&($nom2!="")&&($nom1!=""))
          
          {
            $nombre = 2;
          }
          else{
             if(($nom3!="")&&($nom2!="")&&($nom1!=""))
          {
            $nombre = 3;
          }
        }
}


        //$this->fpdf->Ln(4);
        // $data = $this->stagiaire_model->recherche_emargements("AUTHIE","Virginie","F-FB-ADS-01");
       $data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/Facturess.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(280,20,$numfacture,0,0,"C");
                  $this->fpdf->SetY(65);
                $this->fpdf->SetTextColor(255, 255, 255);
                 $this->fpdf->Cell(100,20,$datefacture,0,0,"C");

                  $this->fpdf->SetY(76); 
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(80,20,urldecode($nomentreprise),0,0,"C");

                 $this->fpdf->SetY(80);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,urldecode(utf8_decode($adresse)),0,0,"C");
                  
                 $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,utf8_decode($codepostal),0,0,"C");

                $this->fpdf->SetY(84);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,urldecode($nomville),0,0,"C");

                  $this->fpdf->SetY(107);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(112);
                   $this->fpdf->SetFont('Arial','B',9);
               $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(70,20,utf8_decode("Réf dossier :          ".$reference),0,0,"C");


              //    $this->fpdf->SetY(112);
              //  $this->fpdf->SetTextColor(0, 0, 0);
              //   $this->fpdf->Cell(125,20,$ref,0,0,"C");
                  $this->fpdf->SetFont('Arial','',9);

                $this->fpdf->SetY(124);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(125,20,utf8_decode($this->stagiaire_model->recherche_nombre_heure($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(118);
                  $this->fpdf->Cell(310,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");

                   $this->fpdf->SetY(118);
                 $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(118);
                 $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                   $this->fpdf->SetY(124);
                 $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(60,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                
                 $this->fpdf->SetY(130);
                 $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_2($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");


                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                 
                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $ff = "";
                  }
                  else
                  {
                     $ff = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                  $this->fpdf->SetY(130);
                 $this->fpdf->Cell(220,20,$ff,0,0,"C");
                
                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $ee = "";
                  }
                  else
                  {
                     $ee = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(260,20,$ee,0,0,"C");



                 if(utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $dd = "";
                  }
                  else
                  {
                     $dd = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(300,20,$dd,0,0,"C");

                  if(utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $aa = "";
                  }
                  else
                  {
                     $aa = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   if(utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $bb = "";
                  }
                  else
                  {
                     $bb = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }

                   if(utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                  {
                      $cc = "";
                  }
                  else
                  {
                     $cc = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                  }



                   $this->fpdf->SetY(130);
                 $this->fpdf->Cell(340,20,$aa,0,0,"C");

                  $this->fpdf->SetY(135);
                 $this->fpdf->Cell(300,20,$bb,0,0,"C");


                   $this->fpdf->SetY(135);
                 $this->fpdf->Cell(340,20,$cc,0,0,"C");

                 $this->fpdf->SetY(140);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  
                 $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(145);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(58,20,$nombre,0,0,"C");

                $this->fpdf->SetY(160);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,"STAGIAIRE",0,0,"C");

                 $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(65,20,utf8_decode(urldecode($prenom1)),0,0,"C");

                $this->fpdf->SetY(165);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,$nom1,0,0,"C");

                  $this->fpdf->SetY(169);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(65,20,utf8_decode(urldecode($prenom2)),0,0,"C");

                $this->fpdf->SetY(169);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,$nom2,0,0,"C");

                   $this->fpdf->SetY(173);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(65,20,utf8_decode(urldecode($prenom3)),0,0,"C");

                $this->fpdf->SetY(173);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(140,20,$nom3,0,0,"C");



                   $this->fpdf->SetY(183);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");

                  $this->fpdf->SetY(189);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,"20,00%",0,0,"C");
                  $tva = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) * 0.2;
                  $this->fpdf->SetY(195);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$tva,0,0,"C");

                $ttc = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) + $tva;
                 $this->fpdf->SetY(208);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(335,20,$ttc,0,0,"C");


               /*    $this->fpdf->SetY(208);
                $this->fpdf->SetTextColor(0, 0, 0);
                 $this->fpdf->Cell(50,20,utf8_decode("Réf dossier :"),0,0,"C");*/




                   $this->fpdf->Image(base_url("assets/images/Signature.jpg"),115,225,75,30,'','');
              //  $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');


               }

           $this->fpdf->OutPut();

        }




        function imprimer_facture_groupess()
        {
          error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    
            $this->load->library('fpdf_gen');
            $pdf = new FPDF("L","mm","A4");
        $this->fpdf->SetFont('Arial','',9);
    
         $nomstagiaire = $this->uri->segment(3);
            $prenomstagiaire = urldecode($this->uri->segment(4));
            $idformation = urldecode($this->uri->segment(5));
            $numfacture = $this->uri->segment(6);
             $datefacture = $this->uri->segment(7);
             $nomentreprise = utf8_decode($this->uri->segment(8));
               $adresse = utf8_decode(urldecode($this->uri->segment(9)));
               $codepostal = $this->uri->segment(10);
                $nomville = $this->uri->segment(11);
                  $nom1 = $this->uri->segment(13);
                    $prenom1 = $this->uri->segment(14);
                    $nom2 = $this->uri->segment(15);
                    $prenom2 = $this->uri->segment(16);
                      $nom3 = $this->uri->segment(17);
                    $prenom3 = $this->uri->segment(18);
                      $reference = $this->uri->segment(12);
                      
                     if(($nom2=="")&&($nom3=="")&&($nom1!=""))
              {
                $nombre = 1;
              }
              else{
               if(($nom3=="")&&($nom2!="")&&($nom1!=""))
              
              {
                $nombre = 2;
              }
              else{
                 if(($nom3!="")&&($nom2!="")&&($nom1!=""))
              {
                $nombre = 3;
              }
            }
    }
    
    
            //$this->fpdf->Ln(4);
            // $data = $this->stagiaire_model->recherche_emargements("AUTHIE","Virginie","F-FB-ADS-01");
           $data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,$idformation);
        
        // Vérification: afficher un message si aucune donnée trouvée
        if (empty($data)) {
            $this->fpdf->AddPage();
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->SetTextColor(255, 0, 0);
            $this->fpdf->Cell(0, 20, 'ERREUR: Aucune donnee trouvee', 0, 1, 'C');
            $this->fpdf->Ln(10);
            $this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0);
            $this->fpdf->Cell(0, 10, 'Stagiaire: ' . utf8_decode($nomstagiaire) . ' ' . utf8_decode($prenomstagiaire), 0, 1, 'C');
            $this->fpdf->Cell(0, 10, 'Formation: ' . utf8_decode($idformation), 0, 1, 'C');
            $this->fpdf->Ln(10);
            $this->fpdf->SetFont('Arial', 'I', 10);
            $this->fpdf->MultiCell(0, 5, "Aucune donnee trouvee dans la table Convention pour ce stagiaire et cette formation.", 0, 'C');
            $this->fpdf->Output();
            return;
        }
            $this->fpdf->Image(base_url("assets/images/facture.jpg"),0,10,200,0,'','');
            foreach ($data as $row) {
                    $this->fpdf->SetY(65);
                    $this->fpdf->SetTextColor(255, 255, 255);
                     $this->fpdf->Cell(280,20,$numfacture,0,0,"C");
                      $this->fpdf->SetY(65);
                    $this->fpdf->SetTextColor(255, 255, 255);
                     $this->fpdf->Cell(100,20,$datefacture,0,0,"C");
    
                      $this->fpdf->SetY(76); 
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(80,20,urldecode($nomentreprise),0,0,"C");
    
                     $this->fpdf->SetY(80);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(105,20,urldecode(utf8_decode($adresse)),0,0,"C");
                      
                     $this->fpdf->SetY(84);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(58,20,utf8_decode($codepostal),0,0,"C");
    
                    $this->fpdf->SetY(84);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,urldecode($nomville),0,0,"C");
    
                      $this->fpdf->SetY(107);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");
    
                      $this->fpdf->SetY(112);
                       $this->fpdf->SetFont('Arial','B',9);
                   $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(70,20,utf8_decode("Réf dossier :          ".$reference),0,0,"C");
    
    
                  //    $this->fpdf->SetY(112);
                  //  $this->fpdf->SetTextColor(0, 0, 0);
                  //   $this->fpdf->Cell(125,20,$ref,0,0,"C");
                      $this->fpdf->SetFont('Arial','',9);
    
                    $this->fpdf->SetY(124);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(125,20,utf8_decode($this->stagiaire_model->recherche_nombre_heure($row->id_formation)),0,0,"C");
    
                      $this->fpdf->SetY(118);
                      $this->fpdf->Cell(310,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");
    
                       $this->fpdf->SetY(118);
                     $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
    
    
                       $this->fpdf->SetY(118);
                     $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
    
                       $this->fpdf->SetY(124);
                     $this->fpdf->Cell(155,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
    
    
                       $this->fpdf->SetY(124);
                     $this->fpdf->Cell(200,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
    
                      $this->fpdf->SetY(130);
                     $this->fpdf->Cell(60,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                    
                     $this->fpdf->SetY(130);
                     $this->fpdf->Cell(100,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_2($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(140,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
    
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(180,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
    
                     
                      if(utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                      {
                          $ff = "";
                      }
                      else
                      {
                         $ff = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                      }
    
                      $this->fpdf->SetY(130);
                     $this->fpdf->Cell(220,20,$ff,0,0,"C");
                    
                      if(utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                      {
                          $ee = "";
                      }
                      else
                      {
                         $ee = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                      }
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(260,20,$ee,0,0,"C");
    
    
    
                     if(utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                      {
                          $dd = "";
                      }
                      else
                      {
                         $dd = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                      }
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(300,20,$dd,0,0,"C");
    
                      if(utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                      {
                          $aa = "";
                      }
                      else
                      {
                         $aa = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                      }
    
                       if(utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                      {
                          $bb = "";
                      }
                      else
                      {
                         $bb = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                      }
    
                       if(utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))=="0000-00-00")
                      {
                          $cc = "";
                      }
                      else
                      {
                         $cc = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                      }
    
    
    
                       $this->fpdf->SetY(130);
                     $this->fpdf->Cell(340,20,$aa,0,0,"C");
    
                      $this->fpdf->SetY(135);
                     $this->fpdf->Cell(300,20,$bb,0,0,"C");
    
    
                       $this->fpdf->SetY(135);
                     $this->fpdf->Cell(340,20,$cc,0,0,"C");
    
                     $this->fpdf->SetY(140);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     //$this->fpdf->Cell(105,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                     $this->fpdf->Cell(105,20,utf8_decode($adresse),0,0,"C");
                      
                     $this->fpdf->SetY(145);
                    $this->fpdf->SetTextColor(0, 0, 0);
                   //  $this->fpdf->Cell(58,20,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                   $this->fpdf->Cell(58,20,utf8_decode($codepostal),0,0,"C");
    
                    $this->fpdf->SetY(145);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     //$this->fpdf->Cell(140,20,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                     $this->fpdf->Cell(140,20,utf8_decode($nomville),0,0,"C");
    
                     $this->fpdf->SetY(160);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(58,20,$nombre,0,0,"C");
    
                    $this->fpdf->SetY(160);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,"STAGIAIRE",0,0,"C");
    
                     $this->fpdf->SetY(165);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(65,20,utf8_decode(urldecode($prenom1)),0,0,"C");
    
                    $this->fpdf->SetY(165);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,$nom1,0,0,"C");
    
                      $this->fpdf->SetY(169);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(65,20,utf8_decode(urldecode($prenom2)),0,0,"C");
    
                    $this->fpdf->SetY(169);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,$nom2,0,0,"C");
    
                       $this->fpdf->SetY(173);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(65,20,utf8_decode(urldecode($prenom3)),0,0,"C");
    
                    $this->fpdf->SetY(173);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(140,20,$nom3,0,0,"C");
    
    
    
                       $this->fpdf->SetY(183);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,$this->stagiaire_model->recherche_prix_formation($row->id_formation),0,0,"C");
    
                      $this->fpdf->SetY(189);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,"20,00%",0,0,"C");
                      $tva = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) * 0.2;
                      $this->fpdf->SetY(195);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,$tva,0,0,"C");
    
                    $ttc = (int)$this->stagiaire_model->recherche_prix_formation($row->id_formation) + $tva;
                     $this->fpdf->SetY(208);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(335,20,$ttc,0,0,"C");
    
    
                   /*    $this->fpdf->SetY(208);
                    $this->fpdf->SetTextColor(0, 0, 0);
                     $this->fpdf->Cell(50,20,utf8_decode("Réf dossier :"),0,0,"C");*/
    
    
    
    
                       $this->fpdf->Image(base_url("assets/images/Signature.jpg"),115,225,75,30,'','');
                  //  $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');
    
    
                   }
    
               $this->fpdf->OutPut();
    
            }
    
    

 function imprimer_emargement()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
      //ini_set('display_errors','off');
        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $img_type = urldecode($this->uri->segment(6));
        //$this->fpdf->Ln(4);
        // $data = $this->stagiaire_model->recherche_emargements("AUTHIE","Virginie","F-FB-ADS-01");
       $data = $this->stagiaire_model->recherche_emargements($nomstagiaire,$prenomstagiaire,$idformation);
        
        // Vérification: afficher un message si aucune donnée trouvée
        if (empty($data)) {
            $this->fpdf->AddPage();
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->SetTextColor(255, 0, 0);
            $this->fpdf->Cell(0, 20, 'ERREUR: Aucune donnee trouvee', 0, 1, 'C');
            $this->fpdf->Ln(10);
            $this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0);
            $this->fpdf->Cell(0, 10, 'Stagiaire: ' . utf8_decode($nomstagiaire) . ' ' . utf8_decode($prenomstagiaire), 0, 1, 'C');
            $this->fpdf->Cell(0, 10, 'Formation: ' . utf8_decode($idformation), 0, 1, 'C');
            $this->fpdf->Ln(10);
            $this->fpdf->SetFont('Arial', 'I', 10);
            $this->fpdf->MultiCell(0, 5, "Aucune donnee trouvee dans la table Emargement pour ce stagiaire et cette formation.", 0, 'C');
            $this->fpdf->Output();
            return;
        }
        $this->fpdf->Image(base_url("assets/images/emargement.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(25);
                 $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire))." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  $this->fpdf->SetY(32);
                 $this->fpdf->Cell(220,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($idformation)),0,0,"C");

                  $this->fpdf->SetY(38);
                 $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_formateurss($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))." ".utf8_decode($this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)),0,0,"C");

                $this->fpdf->SetY(45);
                 $this->fpdf->Cell(60,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                 $this->fpdf->SetY(45);
                 $this->fpdf->Cell(150,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_2($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                   $this->fpdf->SetY(45);
                // $this->fpdf->Cell(230,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                  $this->fpdf->Cell(230,20,'',0,0,"C");
                 }
                 else{
                   $this->fpdf->Cell(230,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 }


                   $this->fpdf->SetY(45);
                 
                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                  $this->fpdf->Cell(315,20,'',0,0,"C");
                 }
                 else{
                  $this->fpdf->Cell(315,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 }

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(50,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(80,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                  $this->fpdf->SetY(50);
                 $this->fpdf->Cell(140,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(170,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
               
                $this->fpdf->SetY(50);
                 $this->fpdf->Cell(220,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(250,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(50);
                 $this->fpdf->Cell(305,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(335,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
$this->fpdf->SetY(87);
                 $this->fpdf->Cell(60,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(80,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(150,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(170,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(230,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(250,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(87);
                 $this->fpdf->Cell(315,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(335,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");





                  $this->fpdf->SetY(70);
            if(!empty($row->signature_formateur_1))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_1),25,70,20,20,'','');
                  }
               if(!empty($row->signature_formateur_2))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_2),75,70,20,20,'','');
                  }
                 if(!empty($row->signature_formateur_3))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_3),115,70,20,20,'','');
                  }

                   if(!empty($row->signature_formateur_4))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_4),160,70,20,20,'','');
                  }

                   $this->fpdf->SetY(108);
            if(!empty($row->signature_formateur_5))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_5),25,108,20,20,'','');
                  }
               if(!empty($row->signature_formateur_6))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_6),75,108,20,20,'','');
                  }
                 if(!empty($row->signature_formateur_7))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_7),115,108,20,20,'','');
                  }

                   if(!empty($row->signature_formateur_8))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_8),160,108,20,20,'','');
                  }

                $this->fpdf->SetY(130);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
             //   $this->fpdf->Cell(100,80,$row->signature_1,0,0,"C");
                if(!empty($row->signature_1))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_1),25,170,20,20,'','');
                  }
                 if(!empty($row->signature_2))
                  {
                       $this->fpdf->Image(base_url("assets/images/".$row->signature_2),75,170,20,20,'','');
                  }

               
                  if(!empty($row->signature_3))
                  {
                    $a = $row->signature_3;
                     $this->fpdf->Image(base_url("assets/images/".$a),115,170,20,20,'','');
                  }
                   if(!empty($row->signature_4))
                  {
                     $this->fpdf->Image(base_url("assets/images/".$row->signature_4),155,170,20,20,'','');
                  }

                   if(!empty($row->signature_5))
                  {
                       $this->fpdf->Image(base_url("assets/images/".$row->signature_5),25,220,20,20,'','');
                  }

                   if(!empty($row->signature_6))
                  {
                       $this->fpdf->Image(base_url("assets/images/".$row->signature_6),75,220,20,20,'','');
                  }

                     if(!empty($row->signature_7))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_7),115,220,20,20,'','');
                  }
                      if(!empty($row->signature_8))
                  {
                         $this->fpdf->Image(base_url("assets/images/".$row->signature_8),155,220,20,20,'','');
                  }
                 
                 

                $this->fpdf->SetY(132);
                 $this->fpdf->Cell(170,20,$row->nom_stagiaire,0,0,"C");

                    $this->fpdf->SetY(132);
                 $this->fpdf->Cell(300,20,$row->prenom_stagiaire,0,0,"C");

                 $this->fpdf->SetY(139);
                 $this->fpdf->Cell(60,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                 $this->fpdf->SetY(139);
                 $this->fpdf->Cell(150,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_2($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");

                   $this->fpdf->SetY(139);
                // $this->fpdf->Cell(230,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                  $this->fpdf->Cell(230,20,'',0,0,"C");
                 }
                 else{
                  $this->fpdf->Cell(230,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_3($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 }

                   $this->fpdf->SetY(139);
                 //$this->fpdf->Cell(315,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                  $this->fpdf->Cell(315,20,'',0,0,"C");
                 }
                 else{
                  $this->fpdf->Cell(315,20,implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_4($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,0,"C");
                 }


                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(50,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(80,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                 $aa = (int)$this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation);
                  $this->fpdf->SetY(148);
                 $this->fpdf->Cell(70,20,$aa."H",0,0,"C");
                 $this->fpdf->SetY(148);
                 $this->fpdf->Cell(150,20,$aa."H",0,0,"C");
                   $this->fpdf->SetY(148);
                 $this->fpdf->Cell(230,20,$aa."H",0,0,"C");
                    $this->fpdf->SetY(148);
                 $this->fpdf->Cell(310,20,$aa."H",0,0,"C");

                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(140,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(170,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
               
                $this->fpdf->SetY(144);
                 $this->fpdf->Cell(220,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(250,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(305,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(335,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");


                 $this->fpdf->SetY(188);
                 $this->fpdf->Cell(60,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(80,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(150,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(170,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(230,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(250,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

                   $this->fpdf->SetY(188);
                 $this->fpdf->Cell(315,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(335,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H",0,0,"C");

  $cc = (int)$this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation);
                  $this->fpdf->SetY(192);
                 $this->fpdf->Cell(70,20,$cc."H",0,0,"C");
                 $this->fpdf->SetY(192);
                 $this->fpdf->Cell(150,20,$cc."H",0,0,"C");
                   $this->fpdf->SetY(192);
                 $this->fpdf->Cell(230,20,$cc."H",0,0,"C");
                    $this->fpdf->SetY(192);
                 $this->fpdf->Cell(310,20,$cc."H",0,0,"C");

                  $this->fpdf->SetY(236);
                 $this->fpdf->Cell(80,20, utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                 
                   $this->fpdf->SetY(242);
                 $this->fpdf->Cell(30,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_1)))),0,2),0,0,"C");
                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(55,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_1)))),3,2),0,0,"C");
                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(85,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_1)))),6,4),0,0,"C");



              }

            if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))!="00-00-0000")
                 {
              

                $this->fpdf->AddPage();

                  $this->fpdf->Image(base_url("assets/images/emargement.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
           $this->fpdf->SetY(25);
                 $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire))." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  $this->fpdf->SetY(32);
                 $this->fpdf->Cell(220,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($idformation)),0,0,"C");

                  $this->fpdf->SetY(38);
                 $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_formateurss($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))." ".utf8_decode($this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)),0,0,"C");

                $this->fpdf->SetY(45);

                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                    $daty0 = "";
                     $heuredebut0 = "";
                     $heurefin0 = "";
                     $heuredebut000 = "";
                     $heurefin000 = "";
                     $a = "";

                  }
                  else
                  {
                    $daty0 = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                    $heuredebut0 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin0 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heuredebut000 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin000 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $a = (int)$this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";

                  }
                 $this->fpdf->Cell(60,20,$daty0,0,0,"C");

                 $this->fpdf->SetY(45);
                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty1 = "";
                   $heuredebut1 = "";
                   $heurefin1 = "";
                   $heuredebut111 = "";
                   $heurefin111 = "";
                   $b = "";

                 }
                 else
                 {
                    $daty1  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                    $heuredebut1 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin1 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut111 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin111 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $b = (int)$this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";

                 }
                
                 $this->fpdf->Cell(150,20,$daty1,0,0,"C");

                   $this->fpdf->SetY(45);

                   if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty2 = "";
                  $heuredebut2 = "";
                   $heurefin2 = "";
                   $heuredebut222 = "";
                   $heurefin222 = "";
                   $c = "";

                 }
                 else
                 {
                    $daty2  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                    $heuredebut2 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin2 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut222 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin222 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $c = (int)$this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";
                 }
                 $this->fpdf->Cell(230,20,$daty2,0,0,"C");


                   $this->fpdf->SetY(45);
                if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty3 = "";
                    $heuredebut3 = "";
                   $heurefin3 = "";
                   $heuredebut333 = "";
                   $heurefin333 = "";
                   $d = "";

                 }
                 else
                 {
                    $daty3  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut3 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin3 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut333 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin333 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $d = (int)$this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";
                 }
                 $this->fpdf->Cell(315,20,$daty3,0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(50,20,$heuredebut0,0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(80,20,$heurefin0,0,0,"C");


                  $this->fpdf->SetY(50);
                 $this->fpdf->Cell(140,20,$heuredebut1,0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(170,20,$heurefin1,0,0,"C");
               
                $this->fpdf->SetY(50);
                 $this->fpdf->Cell(220,20,$heuredebut2,0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(250,20,$heurefin2,0,0,"C");

                  $this->fpdf->SetY(50);
                 $this->fpdf->Cell(305,20,$heuredebut3,0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(335,20,$heurefin3,0,0,"C");

                 $this->fpdf->SetY(87);
                 $this->fpdf->Cell(60,20,$heuredebut000,0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(80,20,$heurefin000,0,0,"C");

                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(150,20,$heuredebut111,0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(170,20,$heurefin111,0,0,"C");

                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(230,20,$heuredebut222,0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(250,20,$heurefin222,0,0,"C");

                   $this->fpdf->SetY(87);
                 $this->fpdf->Cell(315,20,$heuredebut333,0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(335,20,$heurefin333,0,0,"C");

  
                  $this->fpdf->SetY(147);
                 $this->fpdf->Cell(70,20,$a,0,0,"C");
                 $this->fpdf->SetY(147);
                 $this->fpdf->Cell(150,20,$b,0,0,"C");
                   $this->fpdf->SetY(147);
                 $this->fpdf->Cell(230,20,$c,0,0,"C");
                    $this->fpdf->SetY(147);
                 $this->fpdf->Cell(310,20,$d,0,0,"C");

                  $this->fpdf->SetY(70);
            if(!empty($row->signature_formateur_9))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_9),25,70,20,20,'','');
                  }
               if(!empty($row->signature_formateur_10))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_10),75,70,20,20,'','');
                  }
                 if(!empty($row->signature_formateur_11))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_11),115,70,20,20,'','');
                  }

                   if(!empty($row->signature_formateur_12))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_3),160,70,20,20,'','');
                  }

                   $this->fpdf->SetY(108);
            if(!empty($row->signature_formateur_13))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_13),25,108,20,20,'','');
                  }
            
          //        }
               if(!empty($row->signature_formateur_14))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_14),75,108,20,20,'','');
                  }
               
                 if(!empty($row->signature_formateur_15))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_15),115,108,20,20,'','');
                  }
             
                   if(!empty($row->signature_formateur_16))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_16),160,108,20,20,'','');
                  }
                 


                $this->fpdf->SetY(130);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
             //   $this->fpdf->Cell(100,80,$row->signature_1,0,0,"C");
                 if(!empty($row->signature_9))
                  {
                       $this->fpdf->Image(base_url("assets/images/".$row->signature_9),25,170,20,20,'','');
                  }
                

                   if(!empty($row->signature_10))
                  {
                     $this->fpdf->Image(base_url("assets/images/".$row->signature_10),75,170,20,20,'','');
                  }
                


                 
                 
                  if(!empty($row->signature_11))
                  {
                    $a = $row->signature_11;
                     $this->fpdf->Image(base_url("assets/images/".$a),115,170,20,20,'','');
                  }
                
                  
                   if(!empty($row->signature_12))
                  
                  {
                     $this->fpdf->Image(base_url("assets/images/".$row->signature_12),155,170,20,20,'','');
                  }
                 

                   if(!empty($row->signature_13))
                  {
                       $this->fpdf->Image(base_url("assets/images/".$row->signature_13),25,220,20,20,'','');
                  }
                  

                   if(!empty($row->signature_14))
                  {
                       $this->fpdf->Image(base_url("assets/images/".$row->signature_14),75,220,20,20,'','');
                  }
                  

                     if(!empty($row->signature_15))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_15),115,220,20,20,'','');
                  }
                
                      if(!empty($row->signature_16))
                  {
                         $this->fpdf->Image(base_url("assets/images/".$row->signature_16),155,220,20,20,'','');
                  }
                  
                 
                 

                  $this->fpdf->SetY(132);
                 $this->fpdf->Cell(170,20,$row->nom_stagiaire,0,0,"C");

                    $this->fpdf->SetY(132);
                 $this->fpdf->Cell(300,20,$row->prenom_stagiaire,0,0,"C");

                 $this->fpdf->SetY(139);
                  if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                    $daty0 = "";
                    $heuredebut0 = "";
                    $heurefin0 = "";
                    $heuredebut000 = "";
                    $heurefin000 = "";
                    $e = "";
                  }
                  else
                  {
                    $daty0 = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_5($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut0 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin0 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heuredebut000 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin000 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                         $e = (int)$this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";
                  }
                 $this->fpdf->Cell(60,20,$daty0,0,0,"C");

                 $this->fpdf->SetY(139);
                   if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty1 = "";
                  $heuredebut1 = "";
                   $heurefin1 = "";
                   $heuredebut111 = "";
                   $heurefin111 = "";
                   $f = "";

                 }
                 else
                 {
                    $daty1  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_6($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut1 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin1 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut111 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin111 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                         $f = (int)$this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";


                 }

                 $this->fpdf->Cell(150,20,$daty1,0,0,"C");

                   $this->fpdf->SetY(139);

                    if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty2 = "";
                    $heuredebut2 = "";
                   $heurefin2 = "";
                   $heuredebut222 = "";
                   $heurefin222 = "";
                   $g = "";
                 }
                 else
                 {
                    $daty2  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_7($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut2 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin2 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut222 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin222 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                       $g = (int)$this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";
                 }

                 $this->fpdf->Cell(230,20,$daty2,0,0,"C");

                
                      $this->fpdf->SetY(139);
              if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty3 = "";
                    $heuredebut3 = "";
                   $heurefin3 = "";
                   $heuredebut333 = "";
                   $heurefin333 = "";
                   $h = "";
                 }
                 else
                 {
                    $daty3  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_8($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut3 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin3 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut333 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin333 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                       $h = (int)$this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)."H";
                 }
                

                 $this->fpdf->Cell(315,20,$daty3,0,0,"C");

                

                 

                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(50,20,$heuredebut0,0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(80,20,$heurefin0,0,0,"C");


                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(140,20,$heuredebut1,0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(170,20,$heurefin1,0,0,"C");
               
                $this->fpdf->SetY(144);
                 $this->fpdf->Cell(220,20,$heuredebut2,0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(250,20,$heurefin2,0,0,"C");

                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(305,20,$heuredebut3,0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(335,20,$heurefin3,0,0,"C");

                   $this->fpdf->SetY(188);
                 $this->fpdf->Cell(60,20,$heuredebut000,0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(80,20,$heurefin000,0,0,"C");

                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(150,20,$heuredebut111,0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(170,20,$heurefin111,0,0,"C");

                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(230,20,$heuredebut222,0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(250,20,$heurefin222,0,0,"C");

                   $this->fpdf->SetY(188);
                 $this->fpdf->Cell(315,20,$heuredebut333,0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(335,20,$heurefin333,0,0,"C");

                  
           //      $cc = (int)$this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation);
                  $this->fpdf->SetY(192);
                 $this->fpdf->Cell(70,20,$e,0,0,"C");
                 $this->fpdf->SetY(192);
                 $this->fpdf->Cell(150,20,$f,0,0,"C");
                   $this->fpdf->SetY(192);
                 $this->fpdf->Cell(230,20,$g,0,0,"C");
                    $this->fpdf->SetY(192);
                 $this->fpdf->Cell(310,20,$h,0,0,"C");

                  $this->fpdf->SetY(236);
                 $this->fpdf->Cell(80,20, utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(30,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_2)))),0,2),0,0,"C");
                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(55,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_2)))),3,2),0,0,"C");
                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(85,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_2)))),6,4),0,0,"C");

              }

            }


           if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))!="00-00-0000")
                 {
            

              $this->fpdf->AddPage();

                  $this->fpdf->Image(base_url("assets/images/emargement.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
            $this->fpdf->SetY(25);
                 $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire))." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  $this->fpdf->SetY(32);
                 $this->fpdf->Cell(220,20,utf8_decode($this->stagiaire_model->recherche_nom_formations($idformation)),0,0,"C");

                  $this->fpdf->SetY(38);
                 $this->fpdf->Cell(200,20,utf8_decode($this->stagiaire_model->recherche_formateurss($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))." ".utf8_decode($this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)),0,0,"C");

                $this->fpdf->SetY(45);

                 if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty4 = "";
                  $heuredebut4 = "";
                   $heurefin4 = "";
                   $heuredebut444 = "";
                   $heurefin444 = "";

                 }
                 else
                 {
                    $daty4  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                    $heuredebut4 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin4 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut444 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin444 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";


                 }

                    if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty5 = "";
                   $heuredebut5 = "";
                   $heurefin5 = "";
                   $heuredebut555 = "";
                   $heurefin555 = "";
                 }
                 else
                 {
                    $daty5  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut5 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin5 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut555 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin555 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";


                 }
               


                 $this->fpdf->Cell(60,20,$daty4,0,0,"C");

                    $this->fpdf->SetY(87);
                 $this->fpdf->Cell(60,20,$heuredebut444,0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(80,20,$heurefin444,0,0,"C");

                   $this->fpdf->SetY(87);
                 $this->fpdf->Cell(150,20,$heuredebut555,0,0,"C");
                  $this->fpdf->SetY(87);
                 $this->fpdf->Cell(170,20,$heurefin555,0,0,"C");

                   $this->fpdf->SetY(70);
            if(!empty($row->signature_formateur_17))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_17),25,70,20,20,'','');
                  }
               if(!empty($row->signature_formateur_18))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_18),75,70,20,20,'','');
                  }
                   $this->fpdf->SetY(108);
            if(!empty($row->signature_formateur_19))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_19),25,108,20,20,'','');
                  }
               if(!empty($row->signature_formateur_20))
                  {
                      $this->fpdf->Image(base_url("assets/images/".$row->signature_formateur_20),75,108,20,20,'','');
                  }


                $this->fpdf->SetY(130);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
             //   $this->fpdf->Cell(100,80,$row->signature_1,0,0,"C");


                if(!empty($row->signature_17))
                  {
                       $this->fpdf->Image(base_url("assets/images/".$row->signature_17),25,170,20,20,'','');
                  }
                 if(!empty($row->signature_18))
                  {
                        $this->fpdf->Image(base_url("assets/images/".$row->signature_18),75,170,20,20,'','');
                  }
                
                  if(!empty($row->signature_19))
                  {
                    $a = $row->signature_19;
                     $this->fpdf->Image(base_url("assets/images/".$a),25,210,20,20,'','');
                  }
                   if(!empty($row->signature_20))
                  {
                     $this->fpdf->Image(base_url("assets/images/".$row->signature_20),75,210,20,20,'','');
                              }
            $this->fpdf->SetY(132);
                 $this->fpdf->Cell(170,20,$row->nom_stagiaire,0,0,"C");

                    $this->fpdf->SetY(132);
                 $this->fpdf->Cell(300,20,$row->prenom_stagiaire,0,0,"C");

                   
                 
                  $this->fpdf->SetY(45);

                 
                 $this->fpdf->Cell(150,20,$daty5,0,0,"C");


                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(50,20,$heuredebut4,0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(80,20,$heurefin4,0,0,"C");


                  $this->fpdf->SetY(50);
                 $this->fpdf->Cell(140,20,$heuredebut5,0,0,"C");

                   $this->fpdf->SetY(50);
                 $this->fpdf->Cell(170,20,$heurefin5,0,0,"C");

                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(50,20,$heuredebut4,0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(80,20,$heurefin4,0,0,"C");


                  $this->fpdf->SetY(144);
                 $this->fpdf->Cell(140,20,$heuredebut5,0,0,"C");

                   $this->fpdf->SetY(144);
                 $this->fpdf->Cell(170,20,$heurefin5,0,0,"C");

                  $aa = (int)$this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation);
                  $this->fpdf->SetY(147);
                 $this->fpdf->Cell(70,20,$aa."H",0,0,"C");
                 $this->fpdf->SetY(147);
                 $this->fpdf->Cell(150,20,$aa."H",0,0,"C");
                  
                  $this->fpdf->SetY(139);
                if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty5 = "";
                      $heuredebut5 = "";
                   $heurefin5 = "";
                   $heuredebut555 = "";
                   $heurefin555 = "";
                 }
                 else
                 {
                    $daty5  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_10($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut5 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin5 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut555 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin555 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                 }
               
                 $this->fpdf->Cell(150,20,$daty5,0,0,"C");
                  $this->fpdf->SetY(139);

                if(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))))=="00-00-0000")
                 {
                   $daty4 = "";
                    $heuredebut4 = "";
                   $heurefin4 = "";
                   $heuredebut444 = "";
                   $heurefin444 = "";
                 }
                 else
                 {
                    $daty4  = implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_date_convention_9($row->nom_stagiaire, $row->prenom_stagiaire,$idformation)))));
                     $heuredebut4 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                    $heurefin4 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_1($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                     $heuredebut444 =substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                      $heurefin444 = substr(implode('-',array_reverse  (explode('-',utf8_decode($this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation))))),0,2)."H";
                 }
               
                 $this->fpdf->Cell(60,20,$daty4,0,0,"C");


                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(60,20,$heuredebut444,0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(80,20,$heurefin444,0,0,"C");

                   $this->fpdf->SetY(188);
                 $this->fpdf->Cell(150,20,$heuredebut555,0,0,"C");
                  $this->fpdf->SetY(188);
                 $this->fpdf->Cell(170,20,$heurefin555,0,0,"C");

                 
                 $cc = (int)$this->stagiaire_model->recherche_heure_fin_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation) - (int)$this->stagiaire_model->recherche_heure_debut_111($row->nom_stagiaire, $row->prenom_stagiaire,$idformation);
                  $this->fpdf->SetY(192);
                 $this->fpdf->Cell(70,20,$cc."H",0,0,"C");
                 $this->fpdf->SetY(192);
                 $this->fpdf->Cell(150,20,$cc."H",0,0,"C");
                 
                  
                    $this->fpdf->SetY(236);
                 $this->fpdf->Cell(80,20, utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(30,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_3)))),0,2),0,0,"C");
                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(55,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_3)))),3,2),0,0,"C");
                 $this->fpdf->SetY(242);
                 $this->fpdf->Cell(85,20,substr(implode('-',array_reverse  (explode('-',utf8_decode($row->date_signature_3)))),6,4),0,0,"C");

              }
            }

                if($img_type && ($img_type === 'jpg' || $img_type === 'image' || $img_type === 'img'))
                {
                    $RandomNum   = time();
                    $name = base_url("assets/upload/img/"."emargement".$RandomNum.'.jpg');
                    $this->fpdf->Output('F', "assets/upload/img/"."emargement".$RandomNum.'.pdf');
                    $im1 = new Imagick();   
                    $im1->readImage("assets/upload/img/"."emargement".$RandomNum.'.pdf');
                    $im1->setResolution(300, 300);
                    $im1->setImageCompressionQuality(0);
                    $urls = array();
                    foreach($im1 as $i=>$imagick) { 
                      $imagick->writeImage("assets/upload/img/"."emargement$i".$RandomNum.'.jpg'); 
                      $name = base_url("assets/upload/img/"."emargement$i".$RandomNum.'.jpg');
                      $urls[] = $name;
                      # header('Location: '.$name);
                    }
                    //$page = base_url("stagiaire/list_formulaire");
                    $this->global['pageTitle'] = '';
                    // $data['donnee'] = $this->table->recuperer();
                    $data['imgs'] = $urls;
                    $this->loadViews("stagiaire/list_formulaire", $this->global, $data , NULL);
                }
                else
                {
                 $this->fpdf->OutPut();
                }
        }



    function imprimer_convention()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $idcv = urldecode($this->uri->segment(6));
//echo $nomstagiaire;
        //$this->fpdf->Ln(4);
        //$data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,$idformation);
        $data = $this->stagiaire_model->recherche_convention_by_id($idcv);
        $this->fpdf->Image(base_url("assets/images/convention.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(34);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                $this->fpdf->SetY(38);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(60,80,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");


                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(120,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                if($row->representant==null)
                {
                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(65,80,utf8_decode($row->prenom_stagiaire),0,0,"C");
                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(120,80,utf8_decode($row->nom_stagiaire),0,0,"C");
                }
                else{
                  $this->fpdf->SetY(50);
             
                  $this->fpdf->Cell(75,80,utf8_decode($row->representant),0,0,"C");
                }

                 $this->fpdf->SetY(70);
             
               // $this->fpdf->Cell(275,80,utf8_decode($this->stagiaire_model->recherche_formateur($row->id_formation)),0,0,"C");
                  $this->fpdf->Cell(265,80,utf8_decode($row->prenom_formateur),0,0,"C");

                 $this->fpdf->SetY(70);
             
                //$this->fpdf->Cell(300,80,utf8_decode($this->stagiaire_model->recherche_prenom_formateurs($this->stagiaire_model->recherche_formateur($row->id_formation))),0,0,"C");
                 $this->fpdf->Cell(310,80,utf8_decode($row->nom_formateur),0,0,"C");

                 $this->fpdf->SetY(80);
             
                $this->fpdf->Cell(150,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d1 = "";
                    
                    }
                    else
                    {
                        $d1 = implode('-',array_reverse  (explode('-',$row->date_convention_1)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(110,80,$d1,0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d2 = "";
                    
                    }
                    else
                    {
                        $d2 = implode('-',array_reverse  (explode('-',$row->date_convention_2)));
                    }

                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(150,80,$d2,0,0,"C");
                if ($row->date_convention_3=="0000-00-00")
                    {
                        $d3 = "";
                    
                    }
                    else
                    {
                        $d3 = implode('-',array_reverse  (explode('-',$row->date_convention_3)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(190,80,$d3,0,0,"C");
                 if ($row->date_convention_4=="0000-00-00")
                    {
                        $d4 = "";
                    
                    }
                    else
                    {
                        $d4 = implode('-',array_reverse  (explode('-',$row->date_convention_4)));
                    }


                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(230,80,$d4,0,0,"C");
                 if ($row->date_convention_5=="0000-00-00")
                    {
                        $d5 = "";
                    
                    }
                    else
                    {
                        $d5 = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
                    }



                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(270,80,$d5,0,0,"C");

                 if ($row->date_convention_6=="0000-00-00")
                    {
                        $d6 = "";
                    
                    }
                    else
                    {
                        $d6 = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
                    }


                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(310,80,$d6,0,0,"C");
                if ($row->date_convention_7=="0000-00-00")
                    {
                        $d7 = "";
                    
                    }
                    else
                    {
                        $d7 = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
                    }


                  $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(350,80,$d7,0,0,"C");

                 $this->fpdf->SetY(95);
                if($row->duree_formation)
                  $this->fpdf->Cell(130,80,$row->duree_formation,0,0,"C");
                else
                  $this->fpdf->Cell(130,80,utf8_decode($this->stagiaire_model->recherche_duree_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(170,80,substr($row->heure_debut_1,0,2)."H-".substr($row->heure_fin_1,0,2)."H/".substr($row->heure_debut_111,0,2)."H-".substr($row->heure_fin_111,0,2)."H",0,0,"C");
                if ($row->date_convention_8=="0000-00-00")
                    {
                        $d8 = "";
                    
                    }
                    else
                    {
                        $d8 = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
                    }

                 $this->fpdf->SetY(95);
                  $this->fpdf->Cell(230,80,$d8,0,0,"C");
                  if ($row->date_convention_9=="0000-00-00")
                    {
                        $d9 = "";
                    
                    }
                    else
                    {
                        $d9 = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(270,80,$d9,0,0,"C");
                   if ($row->date_convention_10=="0000-00-00")
                    {
                        $d10 = "";
                    
                    }
                    else
                    {
                        $d10 = implode('-',array_reverse  (explode('-',$row->date_convention_10)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(310,80,$d10,0,0,"C");
                    if ($row->date_convention_11=="0000-00-00")
                    {
                        $d11 = "";
                    
                    }
                    else
                    {
                        $d11 = implode('-',array_reverse  (explode('-',$row->date_convention_11)));
                    }
                     $this->fpdf->SetY(95);
                  $this->fpdf->Cell(350,80,$d11,0,0,"C");





                 $this->fpdf->SetY(100);
                  $this->fpdf->Cell(205,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".$this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

               
                 // $this->fpdf->Cell(190,100,"1",0,0,"C");

                 $this->fpdf->SetY(122);
                  $this->fpdf->Cell(200,80,"1   ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                    $this->fpdf->SetY(122);
                  $this->fpdf->Cell(250,80,utf8_decode($row->nom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(145);
                if($row->prix_formation)
                  $prix = $row->prix_formation;
                else
                  $prix = $this->stagiaire_model->recherche_prix_formations($row->id_formation);


                $this->fpdf->Cell(100,80,utf8_decode($prix),0,0,"C");

                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(120,80,"1",0,0,"C");
                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(200,80,utf8_decode($prix),0,0,"C");

                 $this->fpdf->SetY(150);
             
                $this->fpdf->Cell(100,80,utf8_decode($prix),0,0,"C");

                $this->fpdf->SetY(155);
                $y = $prix * 0.2;
                $this->fpdf->Cell(200,80,utf8_decode($y),0,0,"C");

                 $this->fpdf->SetY(160);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,80,utf8_decode($prix),0,0,"C");

                  $this->fpdf->SetY(160);
                $z = $prix * 1.2;
                $this->fpdf->Cell(200,80,utf8_decode($z),0,0,"C");

                $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(50,80,implode('-',array_reverse  (explode('-',$row->date_signature))),0,0,"C");

                 $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(175,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
               
                //$this->fpdf->SetY(197);
                if($row->representant==null){
                  $this->fpdf->ln(18);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,70,utf8_decode($row->nom_stagiaire),0,0,"C");

                  $this->fpdf->ln(10);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,60,utf8_decode($row->prenom_stagiaire),0,0,"C");
                }
                else{
                  $nom_complet = $row->representant;
                  $deux_mots = explode(" ", $nom_complet);
                  
                  $premier_mot = $deux_mots[0]; // "JADE"
                  $deuxieme_mot = $deux_mots[1]; // "GUERRERO"
                  $this->fpdf->ln(18);
                  $this->fpdf->Cell(100,70,utf8_decode($deuxieme_mot),0,0,"C");

                  $this->fpdf->ln(10);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,60,utf8_decode($premier_mot),0,0,"C");
                  

                }

                $this->fpdf->ln(30);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
               // $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire),0,0,"C");
                if($this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)!=NULL)
{
  try{
                $this->fpdf->Image(base_url("assets/images/".$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)),45,250,20,20,'','');
  }
  catch(Exception $e)
  {
    
  }
}

//$this->fpdf->Image(base_url("assets/images/Signature_convention.png"),140,250,25,25,'','');
    /*   foreach ($data1 as $row1) {
            
             $this->fpdf->Cell(100,100,$row1->nom_accueil,0,0,"C");
             $this->fpdf->SetY(12);
             $this->fpdf->Cell(150,100,utf8_decode($row1->interlocuteur),0,0,"C");
             $this->fpdf->SetY(18);
             $this->fpdf->Cell(150,100,utf8_decode($row1->adresse),0,0,"C");
              $this->fpdf->SetY(23);
             $this->fpdf->Cell(100,100,utf8_decode($row1->code_postal),0,0,"C");
               $this->fpdf->SetY(23);
             $this->fpdf->Cell(275,100,utf8_decode($row1->ville),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(100,100,utf8_decode($row1->tel),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(275,100,utf8_decode($row1->mail),0,0,"C");


       }*/

   }
    $this->fpdf->OutPut();


}

    function imprimer_convention_img()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $idcv = urldecode($this->uri->segment(6));

       //$data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,$idformation);
        $data = $this->stagiaire_model->recherche_convention_by_id($idcv);
        $this->fpdf->Image(base_url("assets/images/convention.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(34);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                $this->fpdf->SetY(38);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(60,80,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");


                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(120,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                if($row->representant==null)
                {
                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(65,80,utf8_decode($row->prenom_stagiaire),0,0,"C");
                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(120,80,utf8_decode($row->nom_stagiaire),0,0,"C");
                }
                else{
                  $this->fpdf->SetY(50);
             
                  $this->fpdf->Cell(75,80,utf8_decode($row->representant),0,0,"C");
                }

                 $this->fpdf->SetY(70);
             
               // $this->fpdf->Cell(275,80,utf8_decode($this->stagiaire_model->recherche_formateur($row->id_formation)),0,0,"C");
                  $this->fpdf->Cell(265,80,utf8_decode($row->prenom_formateur),0,0,"C");

                 $this->fpdf->SetY(70);
             
                //$this->fpdf->Cell(300,80,utf8_decode($this->stagiaire_model->recherche_prenom_formateurs($this->stagiaire_model->recherche_formateur($row->id_formation))),0,0,"C");
                 $this->fpdf->Cell(310,80,utf8_decode($row->nom_formateur),0,0,"C");

                 $this->fpdf->SetY(80);
             
                $this->fpdf->Cell(150,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d1 = "";
                    
                    }
                    else
                    {
                        $d1 = implode('-',array_reverse  (explode('-',$row->date_convention_1)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(110,80,$d1,0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d2 = "";
                    
                    }
                    else
                    {
                        $d2 = implode('-',array_reverse  (explode('-',$row->date_convention_2)));
                    }

                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(150,80,$d2,0,0,"C");
                if ($row->date_convention_3=="0000-00-00")
                    {
                        $d3 = "";
                    
                    }
                    else
                    {
                        $d3 = implode('-',array_reverse  (explode('-',$row->date_convention_3)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(190,80,$d3,0,0,"C");
                 if ($row->date_convention_4=="0000-00-00")
                    {
                        $d4 = "";
                    
                    }
                    else
                    {
                        $d4 = implode('-',array_reverse  (explode('-',$row->date_convention_4)));
                    }


                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(230,80,$d4,0,0,"C");
                 if ($row->date_convention_5=="0000-00-00")
                    {
                        $d5 = "";
                    
                    }
                    else
                    {
                        $d5 = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
                    }



                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(270,80,$d5,0,0,"C");

                 if ($row->date_convention_6=="0000-00-00")
                    {
                        $d6 = "";
                    
                    }
                    else
                    {
                        $d6 = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
                    }


                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(310,80,$d6,0,0,"C");
                if ($row->date_convention_7=="0000-00-00")
                    {
                        $d7 = "";
                    
                    }
                    else
                    {
                        $d7 = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
                    }


                  $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(350,80,$d7,0,0,"C");

                 $this->fpdf->SetY(95);
              
                if($row->duree_formation)
                $this->fpdf->Cell(130,80,$row->duree_formation,0,0,"C");
                else
                $this->fpdf->Cell(130,80,utf8_decode($this->stagiaire_model->recherche_duree_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(170,80,substr($row->heure_debut_1,0,2)."H-".substr($row->heure_fin_1,0,2)."H/".substr($row->heure_debut_111,0,2)."H-".substr($row->heure_fin_111,0,2)."H",0,0,"C");
                if ($row->date_convention_8=="0000-00-00")
                    {
                        $d8 = "";
                    
                    }
                    else
                    {
                        $d8 = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
                    }

                 $this->fpdf->SetY(95);
                  $this->fpdf->Cell(230,80,$d8,0,0,"C");
                  if ($row->date_convention_9=="0000-00-00")
                    {
                        $d9 = "";
                    
                    }
                    else
                    {
                        $d9 = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(270,80,$d9,0,0,"C");
                   if ($row->date_convention_10=="0000-00-00")
                    {
                        $d10 = "";
                    
                    }
                    else
                    {
                        $d10 = implode('-',array_reverse  (explode('-',$row->date_convention_10)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(310,80,$d10,0,0,"C");
                    if ($row->date_convention_11=="0000-00-00")
                    {
                        $d11 = "";
                    
                    }
                    else
                    {
                        $d11 = implode('-',array_reverse  (explode('-',$row->date_convention_11)));
                    }
                     $this->fpdf->SetY(95);
                  $this->fpdf->Cell(350,80,$d11,0,0,"C");





                 $this->fpdf->SetY(100);
                  $this->fpdf->Cell(205,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".$this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

               
                 // $this->fpdf->Cell(190,100,"1",0,0,"C");

                 $this->fpdf->SetY(122);
                  $this->fpdf->Cell(200,80,"1   ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                    $this->fpdf->SetY(122);
                  $this->fpdf->Cell(250,80,utf8_decode($row->nom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(145);
                if($row->prix_formation)
                  $prix = $row->prix_formation;
                else
                  $prix = $this->stagiaire_model->recherche_prix_formations($row->id_formation);
                 $this->fpdf->Cell(100,80,utf8_decode($prix),0,0,"C");

                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(120,80,"1",0,0,"C");
                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(200,80,utf8_decode($prix),0,0,"C");

                 $this->fpdf->SetY(150);
             
                $this->fpdf->Cell(100,80,utf8_decode($prix),0,0,"C");

                $this->fpdf->SetY(155);
                $y = $prix * 0.2;
                $this->fpdf->Cell(200,80,utf8_decode($y),0,0,"C");

                 $this->fpdf->SetY(160);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,80,utf8_decode($prix),0,0,"C");

                  $this->fpdf->SetY(160);
                $z = $prix * 1.2;
                $this->fpdf->Cell(200,80,utf8_decode($z),0,0,"C");

                $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(50,80,implode('-',array_reverse  (explode('-',$row->date_signature))),0,0,"C");

                 $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(175,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
               
                //$this->fpdf->SetY(197);
                if($row->representant==null){
                  $this->fpdf->ln(18);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,70,utf8_decode($row->nom_stagiaire),0,0,"C");

                  $this->fpdf->ln(10);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,60,utf8_decode($row->prenom_stagiaire),0,0,"C");
                }
                else{
                  $nom_complet = $row->representant;
                  $deux_mots = explode(" ", $nom_complet);
                  
                  $premier_mot = $deux_mots[0]; // "JADE"
                  $deuxieme_mot = $deux_mots[1]; // "GUERRERO"
                  $this->fpdf->ln(18);
                  $this->fpdf->Cell(100,70,utf8_decode($deuxieme_mot),0,0,"C");

                  $this->fpdf->ln(10);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,60,utf8_decode($premier_mot),0,0,"C");
                  

                }

                $this->fpdf->ln(30);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
               // $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire),0,0,"C");
                if($this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)!=NULL)
{
                try{
                $this->fpdf->Image(base_url("assets/images/".$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)),45,250,20,20,'','');
                }
                catch(Exception $e)
                {

                }
}


   }
        $RandomNum   = time();
        $name = base_url("assets/upload/img/"."convention".$RandomNum.'.jpg');
        $this->fpdf->Output('F', "assets/upload/img/"."convention".$RandomNum.'.pdf');
        $imagick = new Imagick();
        
        $imagick->readImage("assets/upload/img/"."convention".$RandomNum.'.pdf');
        $imagick->setResolution(300, 300);
        $imagick->setImageCompressionQuality(0);
        $imagick->writeImage("assets/upload/img/"."convention".$RandomNum.'.jpg');
        $filePath = "/www/cias/assets/upload/img/"."convention".$RandomNum.'.jpg';
        header('Location: '.$name);
        /*
        if(file_exists($filePath)) {
            $fileName = basename($filePath);
            $fileSize = filesize($filePath);

            // Output headers.
            header("Cache-Control: private");
            header("Content-Type: application/stream");
            header("Content-Length: ".$fileSize);
            header("Content-Disposition: attachment; filename=".$fileName);

            // Output file.
            header('Expires: 0'); 
            readfile ($filePath);                   
            exit();
        }*/
    


}


function imprimer_convention_lieu()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = $this->uri->segment(3);
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $lieu =  urldecode($this->uri->segment(6));
//echo $nomstagiaire;
        //$this->fpdf->Ln(4);
       $data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/convention.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(34);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                $this->fpdf->SetY(38);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(80,80,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");


                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(120,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(80,80,utf8_decode($row->prenom_stagiaire),0,0,"C");
                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(120,80,utf8_decode($row->nom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(70);
             
               // $this->fpdf->Cell(275,80,utf8_decode($this->stagiaire_model->recherche_formateur($row->id_formation)),0,0,"C");
                  $this->fpdf->Cell(275,80,utf8_decode($row->prenom_formateur),0,0,"C");

                 $this->fpdf->SetY(70);
             
                //$this->fpdf->Cell(300,80,utf8_decode($this->stagiaire_model->recherche_prenom_formateurs($this->stagiaire_model->recherche_formateur($row->id_formation))),0,0,"C");
                 $this->fpdf->Cell(310,80,utf8_decode($row->nom_formateur),0,0,"C");

                 $this->fpdf->SetY(80);
             
                $this->fpdf->Cell(150,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d1 = "";
                    
                    }
                    else
                    {
                        $d1 = implode('-',array_reverse  (explode('-',$row->date_convention_1)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(110,80,$d1,0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d2 = "";
                    
                    }
                    else
                    {
                        $d2 = implode('-',array_reverse  (explode('-',$row->date_convention_2)));
                    }

                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(150,80,$d2,0,0,"C");
                if ($row->date_convention_3=="0000-00-00")
                    {
                        $d3 = "";
                    
                    }
                    else
                    {
                        $d3 = implode('-',array_reverse  (explode('-',$row->date_convention_3)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(190,80,$d3,0,0,"C");
                 if ($row->date_convention_4=="0000-00-00")
                    {
                        $d4 = "";
                    
                    }
                    else
                    {
                        $d4 = implode('-',array_reverse  (explode('-',$row->date_convention_4)));
                    }


                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(230,80,$d4,0,0,"C");
                 if ($row->date_convention_5=="0000-00-00")
                    {
                        $d5 = "";
                    
                    }
                    else
                    {
                        $d5 = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
                    }



                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(270,80,$d5,0,0,"C");

                 if ($row->date_convention_6=="0000-00-00")
                    {
                        $d6 = "";
                    
                    }
                    else
                    {
                        $d6 = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
                    }


                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(310,80,$d6,0,0,"C");
                if ($row->date_convention_7=="0000-00-00")
                    {
                        $d7 = "";
                    
                    }
                    else
                    {
                        $d7 = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
                    }


                  $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(350,80,$d7,0,0,"C");

                 $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(130,80,utf8_decode($this->stagiaire_model->recherche_duree_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(170,80,substr($row->heure_debut_1,0,2)."H-".substr($row->heure_fin_1,0,2)."H/".substr($row->heure_debut_111,0,2)."H-".substr($row->heure_fin_111,0,2)."H",0,0,"C");
                if ($row->date_convention_8=="0000-00-00")
                    {
                        $d8 = "";
                    
                    }
                    else
                    {
                        $d8 = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
                    }

                 $this->fpdf->SetY(95);
                  $this->fpdf->Cell(230,80,$d8,0,0,"C");
                  if ($row->date_convention_9=="0000-00-00")
                    {
                        $d9 = "";
                    
                    }
                    else
                    {
                        $d9 = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(270,80,$d9,0,0,"C");
                   if ($row->date_convention_10=="0000-00-00")
                    {
                        $d10 = "";
                    
                    }
                    else
                    {
                        $d10 = implode('-',array_reverse  (explode('-',$row->date_convention_10)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(310,80,$d10,0,0,"C");
                    if ($row->date_convention_11=="0000-00-00")
                    {
                        $d11 = "";
                    
                    }
                    else
                    {
                        $d11 = implode('-',array_reverse  (explode('-',$row->date_convention_11)));
                    }
                     $this->fpdf->SetY(95);
                  $this->fpdf->Cell(350,80,$d11,0,0,"C");





                 $this->fpdf->SetY(100);
                  $this->fpdf->Cell(210,80,utf8_decode($lieu)." ".utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".$this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

               
                 // $this->fpdf->Cell(190,100,"1",0,0,"C");

                 $this->fpdf->SetY(122);
                  $this->fpdf->Cell(200,80,"1   ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                    $this->fpdf->SetY(122);
                  $this->fpdf->Cell(240,80,utf8_decode($row->nom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(120,80,"1",0,0,"C");
                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(200,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(150);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                $this->fpdf->SetY(155);
                $y = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 0.2;
                $this->fpdf->Cell(200,80,utf8_decode($y),0,0,"C");

                 $this->fpdf->SetY(160);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(160);
                $z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(200,80,utf8_decode($z),0,0,"C");

                $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(50,80,implode('-',array_reverse  (explode('-',$row->date_signature))),0,0,"C");

                 $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(160,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                $this->fpdf->ln(18);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,70,utf8_decode($row->nom_stagiaire),0,0,"C");

                  $this->fpdf->ln(10);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,60,utf8_decode($row->prenom_stagiaire),0,0,"C");

                $this->fpdf->ln(30);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
               // $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire),0,0,"C");
                if($this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)!=NULL)
{
                try{
                $this->fpdf->Image(base_url("assets/images/".$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)),45,250,20,20,'','');
                  }
                  catch(Exception $e)
                  {
                    
                  }
}

    
    /*   foreach ($data1 as $row1) {
            
             $this->fpdf->Cell(100,100,$row1->nom_accueil,0,0,"C");
             $this->fpdf->SetY(12);
             $this->fpdf->Cell(150,100,utf8_decode($row1->interlocuteur),0,0,"C");
             $this->fpdf->SetY(18);
             $this->fpdf->Cell(150,100,utf8_decode($row1->adresse),0,0,"C");
              $this->fpdf->SetY(23);
             $this->fpdf->Cell(100,100,utf8_decode($row1->code_postal),0,0,"C");
               $this->fpdf->SetY(23);
             $this->fpdf->Cell(275,100,utf8_decode($row1->ville),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(100,100,utf8_decode($row1->tel),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(275,100,utf8_decode($row1->mail),0,0,"C");


       }*/

   }
    $this->fpdf->OutPut();


}

function imprimer_convention_lieu_img()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = $this->uri->segment(3);
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $lieu =  urldecode($this->uri->segment(6));
//echo $nomstagiaire;
        //$this->fpdf->Ln(4);
       $data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,$idformation);
        $this->fpdf->Image(base_url("assets/images/convention.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(34);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                $this->fpdf->SetY(38);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(80,80,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");


                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(120,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(80,80,utf8_decode($row->prenom_stagiaire),0,0,"C");
                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(120,80,utf8_decode($row->nom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(70);
             
               // $this->fpdf->Cell(275,80,utf8_decode($this->stagiaire_model->recherche_formateur($row->id_formation)),0,0,"C");
                  $this->fpdf->Cell(275,80,utf8_decode($row->prenom_formateur),0,0,"C");

                 $this->fpdf->SetY(70);
             
                //$this->fpdf->Cell(300,80,utf8_decode($this->stagiaire_model->recherche_prenom_formateurs($this->stagiaire_model->recherche_formateur($row->id_formation))),0,0,"C");
                 $this->fpdf->Cell(310,80,utf8_decode($row->nom_formateur),0,0,"C");

                 $this->fpdf->SetY(80);
             
                $this->fpdf->Cell(150,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d1 = "";
                    
                    }
                    else
                    {
                        $d1 = implode('-',array_reverse  (explode('-',$row->date_convention_1)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(110,80,$d1,0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d2 = "";
                    
                    }
                    else
                    {
                        $d2 = implode('-',array_reverse  (explode('-',$row->date_convention_2)));
                    }

                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(150,80,$d2,0,0,"C");
                if ($row->date_convention_3=="0000-00-00")
                    {
                        $d3 = "";
                    
                    }
                    else
                    {
                        $d3 = implode('-',array_reverse  (explode('-',$row->date_convention_3)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(190,80,$d3,0,0,"C");
                 if ($row->date_convention_4=="0000-00-00")
                    {
                        $d4 = "";
                    
                    }
                    else
                    {
                        $d4 = implode('-',array_reverse  (explode('-',$row->date_convention_4)));
                    }


                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(230,80,$d4,0,0,"C");
                 if ($row->date_convention_5=="0000-00-00")
                    {
                        $d5 = "";
                    
                    }
                    else
                    {
                        $d5 = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
                    }



                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(270,80,$d5,0,0,"C");

                 if ($row->date_convention_6=="0000-00-00")
                    {
                        $d6 = "";
                    
                    }
                    else
                    {
                        $d6 = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
                    }


                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(310,80,$d6,0,0,"C");
                if ($row->date_convention_7=="0000-00-00")
                    {
                        $d7 = "";
                    
                    }
                    else
                    {
                        $d7 = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
                    }


                  $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(350,80,$d7,0,0,"C");

                 $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(130,80,utf8_decode($this->stagiaire_model->recherche_duree_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(170,80,substr($row->heure_debut_1,0,2)."H-".substr($row->heure_fin_1,0,2)."H/".substr($row->heure_debut_111,0,2)."H-".substr($row->heure_fin_111,0,2)."H",0,0,"C");
                if ($row->date_convention_8=="0000-00-00")
                    {
                        $d8 = "";
                    
                    }
                    else
                    {
                        $d8 = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
                    }

                 $this->fpdf->SetY(95);
                  $this->fpdf->Cell(230,80,$d8,0,0,"C");
                  if ($row->date_convention_9=="0000-00-00")
                    {
                        $d9 = "";
                    
                    }
                    else
                    {
                        $d9 = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(270,80,$d9,0,0,"C");
                   if ($row->date_convention_10=="0000-00-00")
                    {
                        $d10 = "";
                    
                    }
                    else
                    {
                        $d10 = implode('-',array_reverse  (explode('-',$row->date_convention_10)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(310,80,$d10,0,0,"C");
                    if ($row->date_convention_11=="0000-00-00")
                    {
                        $d11 = "";
                    
                    }
                    else
                    {
                        $d11 = implode('-',array_reverse  (explode('-',$row->date_convention_11)));
                    }
                     $this->fpdf->SetY(95);
                  $this->fpdf->Cell(350,80,$d11,0,0,"C");





                 $this->fpdf->SetY(100);
                  $this->fpdf->Cell(210,80,utf8_decode($lieu)." ".utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".$this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

               
                 // $this->fpdf->Cell(190,100,"1",0,0,"C");

                 $this->fpdf->SetY(122);
                  $this->fpdf->Cell(200,80,"1   ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                    $this->fpdf->SetY(122);
                  $this->fpdf->Cell(240,80,utf8_decode($row->nom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(120,80,"1",0,0,"C");
                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(200,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(150);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                $this->fpdf->SetY(155);
                $y = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 0.2;
                $this->fpdf->Cell(200,80,utf8_decode($y),0,0,"C");

                 $this->fpdf->SetY(160);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(160);
                $z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(200,80,utf8_decode($z),0,0,"C");

                $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(50,80,implode('-',array_reverse  (explode('-',$row->date_signature))),0,0,"C");

                 $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(160,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                $this->fpdf->ln(18);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,70,utf8_decode($row->nom_stagiaire),0,0,"C");

                  $this->fpdf->ln(10);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,60,utf8_decode($row->prenom_stagiaire),0,0,"C");

                $this->fpdf->ln(30);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
               // $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire),0,0,"C");
                if($this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)!=NULL)
{
                try{
                $this->fpdf->Image(base_url("assets/images/".$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)),45,250,20,20,'','');
                  }
                catch(Exception $e)
                {
                  
                }
}

    
    /*   foreach ($data1 as $row1) {
            
             $this->fpdf->Cell(100,100,$row1->nom_accueil,0,0,"C");
             $this->fpdf->SetY(12);
             $this->fpdf->Cell(150,100,utf8_decode($row1->interlocuteur),0,0,"C");
             $this->fpdf->SetY(18);
             $this->fpdf->Cell(150,100,utf8_decode($row1->adresse),0,0,"C");
              $this->fpdf->SetY(23);
             $this->fpdf->Cell(100,100,utf8_decode($row1->code_postal),0,0,"C");
               $this->fpdf->SetY(23);
             $this->fpdf->Cell(275,100,utf8_decode($row1->ville),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(100,100,utf8_decode($row1->tel),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(275,100,utf8_decode($row1->mail),0,0,"C");


       }*/

   }
        $RandomNum   = time();
        $name = base_url("assets/upload/img/"."convention_lieu".$RandomNum.'.jpg');
        $this->fpdf->Output('F', "assets/upload/img/"."convention_lieu".$RandomNum.'.pdf');
        $imagick = new Imagick();
        
        $imagick->readImage("assets/upload/img/"."convention_lieu".$RandomNum.'.pdf');
        $imagick->setResolution(300, 300);
        $imagick->setImageCompressionQuality(0);
        $imagick->writeImage("assets/upload/img/"."convention_lieu".$RandomNum.'.jpg');
        $filePath = "/www/cias/assets/upload/img/"."convention_lieu".$RandomNum.'.jpg';
        header('Location: '.$name);

}



public function imprimer_convention_groupe()
    {

     /*   $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
         $this->fpdf->SetFont('Arial','',9);
      $nomstagiaire = $this->input->post("nom_stagiaire");
       $prenomstagiaire = $this->input->post("prenom_stagiaire");
       $idformation = $this->input->post("id_formation");
          $this->fpdf->Image(base_url("assets/images/convention.jpg"),0,10,200,0,'','');
          $this->fpdf->OutPut();*/

   //   echo $idformation;
          error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','',9);

     $nomstagiaire = $this->uri->segment(3);
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
         $nom1 = $this->uri->segment(6);
          $prenom1 = $this->uri->segment(7);
             $nom2 = $this->uri->segment(8);
          $prenom2 = $this->uri->segment(9);
          $nom3 = $this->uri->segment(10);
          $prenom3 = $this->uri->segment(11);
          if(($nom2=="")&&($nom3=="")&&($nom1!=""))
          {
            $nombre = 1;
          }
           if(($nom3=="")&&($nom2!="")&&($nom1!=""))
          {
            $nombre = 2;
          }
             if(($nom3!="")&&($nom2!="")&&($nom1!=""))
          {
            $nombre = 3;
          }


// $nomstagiaire = $this->input->post("nom_stagiaire");
// $prenomstagiaire = $this->input->post("prenom_stagiaire");
//$idformation = $this->input->post("id_formation");

//echo $nomstagiaire;
        //$this->fpdf->Ln(4);
       $data = $this->stagiaire_model->recherche_conventions($nomstagiaire,$prenomstagiaire,urldecode($idformation));
        $this->fpdf->Image(base_url("assets/images/convention.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
                $this->fpdf->SetY(34);
              // $data1 = $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire);
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                $this->fpdf->SetY(38);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(80,80,utf8_decode($this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");


                 $this->fpdf->SetY(42);
             
                $this->fpdf->Cell(120,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(80,80,utf8_decode($row->prenom_stagiaire),0,0,"C");
                $this->fpdf->SetY(50);
             
                $this->fpdf->Cell(110,80,utf8_decode($row->nom_stagiaire),0,0,"C");

                 $this->fpdf->SetY(70);
             
               // $this->fpdf->Cell(275,80,utf8_decode($this->stagiaire_model->recherche_formateur($row->id_formation)),0,0,"C");
                  $this->fpdf->Cell(275,80,utf8_decode($row->nom_formateur),0,0,"C");

                 $this->fpdf->SetY(70);
             
                //$this->fpdf->Cell(300,80,utf8_decode($this->stagiaire_model->recherche_prenom_formateurs($this->stagiaire_model->recherche_formateur($row->id_formation))),0,0,"C");
                 $this->fpdf->Cell(300,80,utf8_decode($row->prenom_formateur),0,0,"C");

                 $this->fpdf->SetY(80);
             
                $this->fpdf->Cell(150,80,utf8_decode($this->stagiaire_model->recherche_nom_formations($row->id_formation)),0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d1 = "";
                    
                    }
                    else
                    {
                        $d1 = implode('-',array_reverse  (explode('-',$row->date_convention_1)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(110,80,$d1,0,0,"C");

                if ($row->date_convention_2=="0000-00-00")
                    {
                        $d2 = "";
                    
                    }
                    else
                    {
                        $d2 = implode('-',array_reverse  (explode('-',$row->date_convention_2)));
                    }

                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(150,80,$d2,0,0,"C");
                if ($row->date_convention_3=="0000-00-00")
                    {
                        $d3 = "";
                    
                    }
                    else
                    {
                        $d3 = implode('-',array_reverse  (explode('-',$row->date_convention_3)));
                    }
                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(190,80,$d3,0,0,"C");
                 if ($row->date_convention_4=="0000-00-00")
                    {
                        $d4 = "";
                    
                    }
                    else
                    {
                        $d4 = implode('-',array_reverse  (explode('-',$row->date_convention_4)));
                    }


                $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(230,80,$d4,0,0,"C");
                 if ($row->date_convention_5=="0000-00-00")
                    {
                        $d5 = "";
                    
                    }
                    else
                    {
                        $d5 = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
                    }



                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(270,80,$d5,0,0,"C");

                 if ($row->date_convention_6=="0000-00-00")
                    {
                        $d6 = "";
                    
                    }
                    else
                    {
                        $d6 = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
                    }


                 $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(310,80,$d6,0,0,"C");
                if ($row->date_convention_7=="0000-00-00")
                    {
                        $d7 = "";
                    
                    }
                    else
                    {
                        $d7 = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
                    }


                  $this->fpdf->SetY(90);
             
                $this->fpdf->Cell(350,80,$d7,0,0,"C");

                 $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(130,80,utf8_decode($this->stagiaire_model->recherche_duree_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(95);
             
                $this->fpdf->Cell(170,80,substr($row->heure_debut_1,0,2)."H-".substr($row->heure_fin_1,0,2)."H/".substr($row->heure_debut_111,0,2)."H-".substr($row->heure_fin_111,0,2)."H",0,0,"C");
                if ($row->date_convention_8=="0000-00-00")
                    {
                        $d8 = "";
                    
                    }
                    else
                    {
                        $d8 = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
                    }

                 $this->fpdf->SetY(95);
                  $this->fpdf->Cell(230,80,$d8,0,0,"C");
                  if ($row->date_convention_9=="0000-00-00")
                    {
                        $d9 = "";
                    
                    }
                    else
                    {
                        $d9 = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(270,80,$d9,0,0,"C");
                   if ($row->date_convention_10=="0000-00-00")
                    {
                        $d10 = "";
                    
                    }
                    else
                    {
                        $d10 = implode('-',array_reverse  (explode('-',$row->date_convention_10)));
                    }
                    $this->fpdf->SetY(95);
                  $this->fpdf->Cell(310,80,$d10,0,0,"C");
                    if ($row->date_convention_11=="0000-00-00")
                    {
                        $d11 = "";
                    
                    }
                    else
                    {
                        $d11 = implode('-',array_reverse  (explode('-',$row->date_convention_11)));
                    }
                     $this->fpdf->SetY(95);
                  $this->fpdf->Cell(350,80,$d11,0,0,"C");





                 $this->fpdf->SetY(100);
                  $this->fpdf->Cell(175,80,utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire))." ".$this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire)." ".utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");

               
                 // $this->fpdf->Cell(190,100,"1",0,0,"C");

                 $this->fpdf->SetY(122);
                  //$this->fpdf->Cell(200,80,"1   ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                 $this->fpdf->Cell(240,80,$nombre."   ".utf8_decode(urldecode($prenom1)),0,0,"C");
                    $this->fpdf->SetY(122);
                  //$this->fpdf->Cell(240,80,utf8_decode($row->nom_stagiaire),0,0,"C");
                    $this->fpdf->Cell(280,80,urldecode($nom1),0,0,"C");

                     $this->fpdf->SetY(126);
                  //$this->fpdf->Cell(200,80,"1   ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                 $this->fpdf->Cell(240,80,utf8_decode($prenom2),0,0,"C");
                    $this->fpdf->SetY(126);
                  //$this->fpdf->Cell(240,80,utf8_decode($row->nom_stagiaire),0,0,"C");
                    $this->fpdf->Cell(280,80,utf8_decode(urldecode($nom2)),0,0,"C");

                        $this->fpdf->SetY(130);
                  //$this->fpdf->Cell(200,80,"1   ".utf8_decode($row->prenom_stagiaire),0,0,"C");
                 $this->fpdf->Cell(240,80,utf8_decode(urldecode($prenom3)),0,0,"C");
                    $this->fpdf->SetY(130);
                  //$this->fpdf->Cell(240,80,utf8_decode($row->nom_stagiaire),0,0,"C");
                    $this->fpdf->Cell(280,80,urldecode($nom3),0,0,"C");


                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(120,80,"1",0,0,"C");
                 $this->fpdf->SetY(145);
             
                $this->fpdf->Cell(200,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                 $this->fpdf->SetY(150);
             
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                $this->fpdf->SetY(155);
                $y = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 0.2;
                $this->fpdf->Cell(200,80,utf8_decode($y),0,0,"C");

                 $this->fpdf->SetY(160);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,80,utf8_decode($this->stagiaire_model->recherche_prix_formations($row->id_formation)),0,0,"C");

                  $this->fpdf->SetY(160);
                $z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(200,80,utf8_decode($z),0,0,"C");

                $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(50,80,implode('-',array_reverse  (explode('-',$row->date_signature))),0,0,"C");

                 $this->fpdf->SetY(187);
                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(170,80,utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)),0,0,"C");
                  // $this->fpdf->Cell(160,80,utf8_decode($nom1),0,0,"C");
                $this->fpdf->ln(18);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,70,utf8_decode($row->nom_stagiaire),0,0,"C");

                  $this->fpdf->ln(10);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
                $this->fpdf->Cell(100,60,utf8_decode($row->prenom_stagiaire),0,0,"C");

                $this->fpdf->ln(30);
                //$this->fpdf->SetY(197);

                //$z = $this->stagiaire_model->recherche_prix_formations($row->id_formation) * 1.2;
               // $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire),0,0,"C");
                if($this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)!=NULL)
                {
                  try{
                $this->fpdf->Image(base_url("assets/images/".$this->stagiaire_model->recherche_signature($row->nom_stagiaire, $row->prenom_stagiaire)),45,250,20,20,'','');
                  }
                catch(Exception $e)
                {
                  
                }
              }

    
    /*   foreach ($data1 as $row1) {
            
             $this->fpdf->Cell(100,100,$row1->nom_accueil,0,0,"C");
             $this->fpdf->SetY(12);
             $this->fpdf->Cell(150,100,utf8_decode($row1->interlocuteur),0,0,"C");
             $this->fpdf->SetY(18);
             $this->fpdf->Cell(150,100,utf8_decode($row1->adresse),0,0,"C");
              $this->fpdf->SetY(23);
             $this->fpdf->Cell(100,100,utf8_decode($row1->code_postal),0,0,"C");
               $this->fpdf->SetY(23);
             $this->fpdf->Cell(275,100,utf8_decode($row1->ville),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(100,100,utf8_decode($row1->tel),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(275,100,utf8_decode($row1->mail),0,0,"C");


       }*/

   }
    $this->fpdf->OutPut();


}
function imprimer()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','B',9);

     $nomstagiaire =  urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $idcv = urldecode($this->uri->segment(6));
        //$this->fpdf->Ln(4);
       // $data = $this->stagiaire_model->recherche_stagiaire("HULIN","CAROLINE");
         $data = $this->stagiaire_model->recherche_stagiaire($nomstagiaire,$prenomstagiaire);
        $this->fpdf->Image(base_url("assets/images/formulaire1.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
               $data1 = $this->stagiaire_model->recherche_accueil($row->num_accueil);
    
       foreach ($data1 as $row1) {
             $this->fpdf->SetY(6);
             $this->fpdf->Cell(100,100,$row1->nom_accueil,0,0,"C");
             $this->fpdf->SetY(6);
             $this->fpdf->Cell(275,100,$row1->num_accueil,0,0,"C");
             $this->fpdf->SetY(12);
             $this->fpdf->Cell(150,100,utf8_decode($row1->interlocuteur),0,0,"C");
             $this->fpdf->SetY(18);
             $this->fpdf->Cell(180,100,utf8_decode($row1->adresse),0,0,"C");
              $this->fpdf->SetY(23);
             $this->fpdf->Cell(100,100,utf8_decode($row1->code_postal),0,0,"C");
               $this->fpdf->SetY(23);
             $this->fpdf->Cell(275,100,utf8_decode($row1->ville),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(100,100,utf8_decode($row1->tel),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(275,100,utf8_decode($row1->mail),0,0,"C");


       }

             $this->fpdf->SetY(70);
             $this->fpdf->Cell(170,100,utf8_decode($row->nom_entreprise),0,0,"C");

            $this->fpdf->SetY(76);
             $this->fpdf->Cell(170,100,utf8_decode($row->nom_commercial),0,0,"C");
            $this->fpdf->SetY(82);
             $this->fpdf->Cell(100,100,$row->code_naf,0,0,"C");

            $this->fpdf->SetY(82);
             $this->fpdf->Cell(275,100,$row->numero_siret,0,0,"C");

            $this->fpdf->SetY(88);
             $this->fpdf->Cell(135,100,utf8_decode($row->activite),0,0,"C");
            $this->fpdf->SetY(88);
             $this->fpdf->Cell(285,100,$row->forme_juridique,0,0,"C");
              $this->fpdf->SetY(94);
             $this->fpdf->Cell(120,100,utf8_decode($row->rue),0,0,"C");


              $this->fpdf->SetY(100);
             $this->fpdf->Cell(100,100,$row->code_postal,0,0,"C");

              $this->fpdf->SetY(100);
             $this->fpdf->Cell(285,100,utf8_decode($row->ville),0,0,"C");

             $this->fpdf->SetY(111);
             $this->fpdf->Cell(2,100,$row->monsieur,0,0,"C");
              $this->fpdf->SetY(111);
             $this->fpdf->Cell(18,100,$row->madame,0,0,"C");
             $this->fpdf->SetY(111);
             $this->fpdf->Cell(100,100,$row->nom_stagiaire,0,0,"C");
            $this->fpdf->SetY(111);
             $this->fpdf->Cell(255,100,utf8_decode($row->prenom_stagiaire),0,0,"C");

             $this->fpdf->SetY(117);
             $this->fpdf->Cell(100,100,$row->nom_naissance,0,0,"C");
             if($row->date_naissance=="0000-00-00")
             {
               $daty = "";
             }
             else
             {
                $daty = implode('-',array_reverse  (explode('-',$row->date_naissance)));
             }

             $this->fpdf->SetY(122);
             $this->fpdf->Cell(130,100,$daty,0,0,"C");

                $this->fpdf->SetY(128);
             $this->fpdf->Cell(130,100,$row->numero_secu,0,0,"C");
              $this->fpdf->SetY(134);
             $this->fpdf->Cell(130,100,$row->telephone,0,0,"C");

                $this->fpdf->SetY(134);
             $this->fpdf->Cell(285,100,$row->mail,0,0,"C");
             $this->fpdf->SetY(139);
             $this->fpdf->Cell(140,100,utf8_decode($row->diplome),0,0,"C");
             $this->fpdf->SetY(179);
             $this->fpdf->Cell(135,30,$row->moins_un_an,0,0,"C");
              $this->fpdf->SetY(179);
             $this->fpdf->Cell(187,30,$row->entre_un_et_trois_ans,0,0,"C");
             $this->fpdf->SetY(179);
             $this->fpdf->Cell(249,30,$row->entre_quatre_et_dix_ans,0,0,"C");
             $this->fpdf->SetY(179);
             $this->fpdf->Cell(312,30,$row->plus_de_dix_ans,0,0,"C");

$a =  $row->signature;

        }


         $this->fpdf->SetY(191);
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_raison_social("MAF SAS"),0,0,"C");
      // $this->fpdf->Cell(100,30,"MAF SAS",0,0,"C");
         $this->fpdf->SetY(196);
        //$this->fpdf->Cell(125,30,"73310745531",0,0,"C");
      $this->fpdf->Cell(125,30,$this->stagiaire_model->recherche_declaration("MAF SAS"),0,0,"C");
        $this->fpdf->SetY(196);
     //   $this->fpdf->Cell(275,30,"80313760300020",0,0,"C");
     $this->fpdf->Cell(275,30,$this->stagiaire_model->recherche_siret("MAF SAS"),0,0,"C");
       $this->fpdf->SetY(202);
      //  $this->fpdf->Cell(100,30,"ZAC DU CAUSSE",0,0,"C");
      $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_adresse_organisme("MAF SAS"),0,0,"C");
        $this->fpdf->SetY(208);
        //$this->fpdf->Cell(100,30,"81100",0,0,"C");
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_code_postal_organisme("MAF SAS"),0,0,"C");
         $this->fpdf->SetY(208);
        //$this->fpdf->Cell(275,30,"CASTRES",0,0,"C");
        $this->fpdf->Cell(275,30,$this->stagiaire_model->recherche_ville_organisme("MAF SAS"),0,0,"C");

        $this->fpdf->SetY(218);
        //$this->fpdf->Cell(19,30,"X",0,0,"C");
        $this->fpdf->Cell(10,30,$this->stagiaire_model->recherche_monsieur_responsable_organisme("MAF SAS"),0,0,"C");

        $this->fpdf->SetY(218);
        //$this->fpdf->Cell(19,30,"X",0,0,"C");
        $this->fpdf->Cell(19,30,$this->stagiaire_model->recherche_madame_responsable_organisme("MAF SAS"),0,0,"C");
        $this->fpdf->SetY(218);
       // $this->fpdf->Cell(100,30,"LABERRONDO",0,0,"C");
       $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_nom_responsable_organisme("MAF SAS"),0,0,"C");

        $this->fpdf->SetY(218);
        //$this->fpdf->Cell(275,30,utf8_decode("Madéleine"),0,0,"C");
        $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_prenom_responsable_organisme("MAF SAS")),0,0,"C");

         $this->fpdf->SetY(224);
        //$this->fpdf->Cell(100,30,utf8_decode("05 82 95 06 99"),0,0,"C");
        $this->fpdf->Cell(100,30,utf8_decode($this->stagiaire_model->recherche_tel_responsable_organisme("MAF SAS")),0,0,"C");

          $this->fpdf->SetY(224);
        //$this->fpdf->Cell(275,30,utf8_decode("contact@maf-formation.org"),0,0,"C");
        $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_mail_responsable_organisme("MAF SAS")),0,0,"C");
        $this->fpdf->SetY(234);
      //  $this->fpdf->Cell(19,30,"X",0,0,"C");
      $this->fpdf->Cell(19,30,$this->stagiaire_model->recherche_madame_contact_organisme("MAF SAS"),0,0,"C");
      $this->fpdf->SetY(234);
      //  $this->fpdf->Cell(19,30,"X",0,0,"C");
      $this->fpdf->Cell(10,30,$this->stagiaire_model->recherche_monsieur_contact_organisme("MAF SAS"),0,0,"C");


         $this->fpdf->SetY(234);
        //$this->fpdf->Cell(100,30,"LABERRONDO",0,0,"C");
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_nom_contact_organisme("MAF SAS"),0,0,"C");

         $this->fpdf->SetY(234);
       // $this->fpdf->Cell(275,30,utf8_decode("Madéleine"),0,0,"C");
       $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_prenom_contact_organisme("MAF SAS")),0,0,"C");

        $this->fpdf->SetY(240);
        //$this->fpdf->Cell(100,30,"05 82 95 06 99",0,0,"C");
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_tel_contact_organisme("MAF SAS"),0,0,"C");

         $this->fpdf->SetY(240);
//        $this->fpdf->Cell(275,30,utf8_decode("contact@maf-formation.org"),0,0,"C");
          $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_mail_contact_organisme("MAF SAS")),0,0,"C");


        $this->fpdf->AddPage();

        //$data3 = $this->stagiaire_model->recherche_convention( $nomstagiaire,$prenomstagiaire,  urldecode($idformation));
        $data3 = $this->stagiaire_model->recherche_convention_by_id($idcv);

        $this->fpdf->Image(base_url("assets/images/formulaire2.jpg"),0,10,200,0,'','');
          foreach ($data3 as $row3) {

          $this->fpdf->SetY(15);
             $this->fpdf->Cell(210,100,utf8_decode(addslashes($this->stagiaire_model->recherche_nom_formation($row3->id_formation))),0,0,"C");
              $this->fpdf->SetY(21);
             $this->fpdf->Cell(180,100,$this->stagiaire_model->recherche_nom_thematique($row3->id_formation),0,0,"C");
              $this->fpdf->SetY(38);
             $this->fpdf->Cell(100,100,implode('-',array_reverse  (explode('-',$row3->date_debut))),0,0,"C");
               $this->fpdf->SetY(38);
             $this->fpdf->Cell(290,100,implode('-',array_reverse  (explode('-',$row3->date_fin))),0,0,"C");
              $this->fpdf->SetY(43);
             
            //modif mz
            if($row3->duree_formation)
                $this->fpdf->Cell(100,100,$row3->duree_formation,0,0,"C");
            else
                $this->fpdf->Cell(100,100,$this->stagiaire_model->recherche_duree_formation($row3->id_formation),0,0,"C");
            $this->fpdf->SetY(55);
            if($row3->prix_formation)
              $this->fpdf->Cell(100,100,$row3->prix_formation,0,0,"C");
           else
              $this->fpdf->Cell(100,100,$this->stagiaire_model->recherche_prix_formation($row3->id_formation),0,0,"C");

              $this->fpdf->SetY(61);
             $this->fpdf->Cell(180,100,utf8_decode($this->stagiaire_model->recherche_lieu_formation($row3->nom_stagiaire,$row3->prenom_stagiaire)),0,0,"C");

               $this->fpdf->SetY(66);
             $this->fpdf->Cell(100,100,utf8_decode($this->stagiaire_model->recherche_code_postal($row3->nom_stagiaire,$row3->prenom_stagiaire)),0,0,"C");
               $this->fpdf->SetY(66);
             $this->fpdf->Cell(220,100,utf8_decode($this->stagiaire_model->recherche_ville($row3->nom_stagiaire,$row3->prenom_stagiaire)),0,0,"C");


             $this->fpdf->SetY(71);
            // $this->fpdf->Cell(100,100,$this->stagiaire_model->recherche_nom_formateur($row3->id_formation),0,0,"C");
              $this->fpdf->Cell(100,100,utf8_decode($row3->prenom_formateur),0,0,"C");
              $this->fpdf->SetY(71);
             //$this->fpdf->Cell(155,100,$this->stagiaire_model->recherche_prenom_formateur($this->stagiaire_model->recherche_nom_formateur($row3->id_formation)),0,0,"C");
              $this->fpdf->Cell(155,100,utf8_decode($row3->nom_formateur),0,0,"C");

             $this->fpdf->SetY(89);
             $this->fpdf->Cell(120,100,"MISE EN SITUATION",0,0,"C");
             $nom= $row3->nom_stagiaire;
             $prenom = $row3->prenom_stagiaire;

         }

      //  $this->fpdf->Cell(150,110,"MARKETING 3.0",0,0,"C");
        $this->fpdf->AddPage();

        $this->fpdf->Image(base_url("assets/images/formulaire3.jpg"),0,10,200,0,'','');



        $data4 = $this->stagiaire_model->recherche_convention( $nomstagiaire,$prenomstagiaire,  urldecode($idformation));
          foreach ($data4 as $row4) {

            $this->fpdf->SetY(162);
            $this->fpdf->Cell(70,100,$this->stagiaire_model->recherche_ville($row4->nom_stagiaire,$row4->prenom_stagiaire),0,0,"C");
 
           $this->fpdf->SetY(162);
            $this->fpdf->Cell(150,100,implode('-',array_reverse  (explode('-',$row4->date_signature))),0,0,"C");
	 
 
             $this->fpdf->SetY(172);
            $this->fpdf->Cell(70,100,utf8_decode($row4->prenom_stagiaire)."  ".$row4->nom_stagiaire,0,0,"C");
$this->fpdf->SetY(176);
	$this->fpdf->Cell(155,100,utf8_decode('Madéleine LABERRONDO'),0,0,"R");
          }

            if(isset($a))
            {
              try
              {
                $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');
              }
              catch(Exception $e)
              {

              }
        }
            // $this->fpdf->Cell(100,100,$a,0,0,"C");
      

        $this->fpdf->OutPut();
    }

    public function afficher_formateur(){
      print_r($this->stagiaire_model->afficher_formateur());
    }


  public function mise_a_jours_stagiaire()
  {
    $this->stagiaire_model->mise_a_jours_formateur();
    echo "OK";
  }
    public function envoyer_mail_formateur()
    {
      $this->load->library('email');
      $texte ="";
      $texte .= "Formation : ".$this->input->post("nom_formation")."<br>";
      $texte .= "ID : ".$this->input->post("id")."<br>";
      $texte .= "Nom et prénom : ".$this->input->post("nom_stagiaire")."<br>";
      $texte .= "Entreprise : ".$this->input->post("entreprise")."<br>";
      $texte .= "Activité : ".$this->input->post("activite")."<br>";
      $texte .= "Durée : ".$this->input->post("heure")."<br>";
      $texte .= "Lieu : ".$this->input->post("lieu")."<br>";
      $texte .= "Tél : ".$this->input->post("tel")."<br>";
      $texte .= "Rémarque : ".$this->input->post("remarque")."<br>";

      $from_email = "contact@formacall.fr";
//$from_email = "samiharilaza@miav-service.com";
 //     $from_email = utf8_decode($this->input->post("mail"));
     $to_email = utf8_decode($this->input->post("mail"));
  //  $to_email = "samiharilaza@gmail.com";


      // Configuration de l'envoi d'e-mail via SMTP
//$config['protocol'] = 'smtp';
//$config['smtp_host'] = 'ssl://smtp.gmail.com'; // Serveur SMTP Gmail
//$config['smtp_port'] = 465; // Port SMTP pour Gmail
//$config['smtp_user'] = 'samiharilaza@miav-service.com'; // Votre adresse Gmail
//$config['smtp_pass'] = 'sami1972#'; // Votre mot de passe Gmail
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
//$config['newline'] = "\r\n";

$this->email->initialize($config);

// Adresse e-mail de l'expéditeur
//$this->email->from('samiharilaza@miav-service.com', 'RAHARIJAONA');

// Adresse e-mail du destinataire
//$this->email->to('samiharilaza@gmail.com');

// Sujet de l'e-mail
$this->email->subject('Mail via MAF');

// Contenu de l'e-mail (HTML)
$message = '<html><body>';
$message .= '<h1>Stage</h1>';
$message .= '<p>'.$texte.'</p>';
$message .= '</body></html>';
//$this->email->message($message);

// Envoyer l'e-mail
//if ($this->email->send()) {
//    echo 'E-mail envoyé avec succès.';
//} else {
//    show_error($this->email->print_debugger());
//}




    // $from_email = "samiharilaza@miav-service.com";
    // $to_email = "samiharilaza@miav-service.com";

    // $from_email = "samiharilaza@miav-service.com";
     //$to_email = "samiharilaza@miav-service.com";
      //Load email library
      $this->load->library('email');
      $this->email->from($from_email, 'Lancement de Stage');
      $this->email->to($to_email);
      $this->email->subject('Email via MAF');
      $this->email->message($texte);
     // Send mail
      $this->email->send();

      echo "Mail envoyé";
    }

    //mz
    function imprimer_img()
    {
      error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;

        $this->load->library('fpdf_gen');
        $pdf = new FPDF("L","mm","A4");
    $this->fpdf->SetFont('Arial','B',9);

     $nomstagiaire =  urldecode($this->uri->segment(3));
        $prenomstagiaire = urldecode($this->uri->segment(4));
        $idformation = urldecode($this->uri->segment(5));
        $idcv = urldecode($this->uri->segment(6));
        //$this->fpdf->Ln(4);
       // $data = $this->stagiaire_model->recherche_stagiaire("HULIN","CAROLINE");
         $data = $this->stagiaire_model->recherche_stagiaire($nomstagiaire,$prenomstagiaire);
        $this->fpdf->Image(base_url("assets/images/formulaire1.jpg"),0,10,200,0,'','');
        foreach ($data as $row) {
               $data1 = $this->stagiaire_model->recherche_accueil($row->num_accueil);
    
       foreach ($data1 as $row1) {
             $this->fpdf->SetY(6);
             $this->fpdf->Cell(100,100,$row1->nom_accueil,0,0,"C");
             $this->fpdf->SetY(6);
             $this->fpdf->Cell(275,100,$row1->num_accueil,0,0,"C");
             $this->fpdf->SetY(12);
             $this->fpdf->Cell(150,100,utf8_decode($row1->interlocuteur),0,0,"C");
             $this->fpdf->SetY(18);
             $this->fpdf->Cell(180,100,utf8_decode($row1->adresse),0,0,"C");
              $this->fpdf->SetY(23);
             $this->fpdf->Cell(100,100,utf8_decode($row1->code_postal),0,0,"C");
               $this->fpdf->SetY(23);
             $this->fpdf->Cell(275,100,utf8_decode($row1->ville),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(100,100,utf8_decode($row1->tel),0,0,"C");
               $this->fpdf->SetY(29);
             $this->fpdf->Cell(275,100,utf8_decode($row1->mail),0,0,"C");


       }

             $this->fpdf->SetY(70);
             $this->fpdf->Cell(170,100,utf8_decode($row->nom_entreprise),0,0,"C");

            $this->fpdf->SetY(76);
             $this->fpdf->Cell(170,100,utf8_decode($row->nom_commercial),0,0,"C");
            $this->fpdf->SetY(82);
             $this->fpdf->Cell(100,100,$row->code_naf,0,0,"C");

            $this->fpdf->SetY(82);
             $this->fpdf->Cell(275,100,$row->numero_siret,0,0,"C");

            $this->fpdf->SetY(88);
             $this->fpdf->Cell(135,100,utf8_decode($row->activite),0,0,"C");
            $this->fpdf->SetY(88);
             $this->fpdf->Cell(285,100,$row->forme_juridique,0,0,"C");
              $this->fpdf->SetY(94);
             $this->fpdf->Cell(120,100,utf8_decode($row->rue),0,0,"C");


              $this->fpdf->SetY(100);
             $this->fpdf->Cell(100,100,$row->code_postal,0,0,"C");

              $this->fpdf->SetY(100);
             $this->fpdf->Cell(285,100,utf8_decode($row->ville),0,0,"C");

             $this->fpdf->SetY(111);
             $this->fpdf->Cell(2,100,$row->monsieur,0,0,"C");
              $this->fpdf->SetY(111);
             $this->fpdf->Cell(18,100,$row->madame,0,0,"C");
             $this->fpdf->SetY(111);
             $this->fpdf->Cell(100,100,$row->nom_stagiaire,0,0,"C");
            $this->fpdf->SetY(111);
             $this->fpdf->Cell(255,100,utf8_decode($row->prenom_stagiaire),0,0,"C");

             $this->fpdf->SetY(117);
             $this->fpdf->Cell(100,100,$row->nom_naissance,0,0,"C");
             if($row->date_naissance=="0000-00-00")
             {
               $daty = "";
             }
             else
             {
                $daty = implode('-',array_reverse  (explode('-',$row->date_naissance)));
             }

             $this->fpdf->SetY(122);
             $this->fpdf->Cell(130,100,$daty,0,0,"C");

                $this->fpdf->SetY(128);
             $this->fpdf->Cell(130,100,$row->numero_secu,0,0,"C");
              $this->fpdf->SetY(134);
             $this->fpdf->Cell(130,100,$row->telephone,0,0,"C");

                $this->fpdf->SetY(134);
             $this->fpdf->Cell(285,100,$row->mail,0,0,"C");
             $this->fpdf->SetY(139);
             $this->fpdf->Cell(140,100,utf8_decode($row->diplome),0,0,"C");
             $this->fpdf->SetY(179);
             $this->fpdf->Cell(135,30,$row->moins_un_an,0,0,"C");
              $this->fpdf->SetY(179);
             $this->fpdf->Cell(187,30,$row->entre_un_et_trois_ans,0,0,"C");
             $this->fpdf->SetY(179);
             $this->fpdf->Cell(249,30,$row->entre_quatre_et_dix_ans,0,0,"C");
             $this->fpdf->SetY(179);
             $this->fpdf->Cell(312,30,$row->plus_de_dix_ans,0,0,"C");

$a =  $row->signature;

        }


         $this->fpdf->SetY(191);
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_raison_social("MAF SAS"),0,0,"C");
      // $this->fpdf->Cell(100,30,"MAF SAS",0,0,"C");
         $this->fpdf->SetY(196);
        //$this->fpdf->Cell(125,30,"73310745531",0,0,"C");
      $this->fpdf->Cell(125,30,$this->stagiaire_model->recherche_declaration("MAF SAS"),0,0,"C");
        $this->fpdf->SetY(196);
     //   $this->fpdf->Cell(275,30,"80313760300020",0,0,"C");
     $this->fpdf->Cell(275,30,$this->stagiaire_model->recherche_siret("MAF SAS"),0,0,"C");
       $this->fpdf->SetY(202);
      //  $this->fpdf->Cell(100,30,"ZAC DU CAUSSE",0,0,"C");
      $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_adresse_organisme("MAF SAS"),0,0,"C");
        $this->fpdf->SetY(208);
        //$this->fpdf->Cell(100,30,"81100",0,0,"C");
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_code_postal_organisme("MAF SAS"),0,0,"C");
         $this->fpdf->SetY(208);
        //$this->fpdf->Cell(275,30,"CASTRES",0,0,"C");
        $this->fpdf->Cell(275,30,$this->stagiaire_model->recherche_ville_organisme("MAF SAS"),0,0,"C");

        $this->fpdf->SetY(218);
        //$this->fpdf->Cell(19,30,"X",0,0,"C");
        $this->fpdf->Cell(10,30,$this->stagiaire_model->recherche_monsieur_responsable_organisme("MAF SAS"),0,0,"C");

        $this->fpdf->SetY(218);
        //$this->fpdf->Cell(19,30,"X",0,0,"C");
        $this->fpdf->Cell(19,30,$this->stagiaire_model->recherche_madame_responsable_organisme("MAF SAS"),0,0,"C");
        $this->fpdf->SetY(218);
       // $this->fpdf->Cell(100,30,"LABERRONDO",0,0,"C");
       $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_nom_responsable_organisme("MAF SAS"),0,0,"C");

        $this->fpdf->SetY(218);
        //$this->fpdf->Cell(275,30,utf8_decode("Madéleine"),0,0,"C");
        $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_prenom_responsable_organisme("MAF SAS")),0,0,"C");

         $this->fpdf->SetY(224);
        //$this->fpdf->Cell(100,30,utf8_decode("05 82 95 06 99"),0,0,"C");
        $this->fpdf->Cell(100,30,utf8_decode($this->stagiaire_model->recherche_tel_responsable_organisme("MAF SAS")),0,0,"C");

          $this->fpdf->SetY(224);
        //$this->fpdf->Cell(275,30,utf8_decode("contact@maf-formation.org"),0,0,"C");
        $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_mail_responsable_organisme("MAF SAS")),0,0,"C");
        $this->fpdf->SetY(234);
      //  $this->fpdf->Cell(19,30,"X",0,0,"C");
      $this->fpdf->Cell(19,30,$this->stagiaire_model->recherche_madame_contact_organisme("MAF SAS"),0,0,"C");
      $this->fpdf->SetY(234);
      //  $this->fpdf->Cell(19,30,"X",0,0,"C");
      $this->fpdf->Cell(10,30,$this->stagiaire_model->recherche_monsieur_contact_organisme("MAF SAS"),0,0,"C");


         $this->fpdf->SetY(234);
        //$this->fpdf->Cell(100,30,"LABERRONDO",0,0,"C");
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_nom_contact_organisme("MAF SAS"),0,0,"C");

         $this->fpdf->SetY(234);
       // $this->fpdf->Cell(275,30,utf8_decode("Madéleine"),0,0,"C");
       $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_prenom_contact_organisme("MAF SAS")),0,0,"C");

        $this->fpdf->SetY(240);
        //$this->fpdf->Cell(100,30,"05 82 95 06 99",0,0,"C");
        $this->fpdf->Cell(100,30,$this->stagiaire_model->recherche_tel_contact_organisme("MAF SAS"),0,0,"C");

         $this->fpdf->SetY(240);
//        $this->fpdf->Cell(275,30,utf8_decode("contact@maf-formation.org"),0,0,"C");
          $this->fpdf->Cell(275,30,utf8_decode($this->stagiaire_model->recherche_mail_contact_organisme("MAF SAS")),0,0,"C");


        $this->fpdf->AddPage();

        //$data3 = $this->stagiaire_model->recherche_convention( $nomstagiaire,$prenomstagiaire,  urldecode($idformation));
        $data3 = $this->stagiaire_model->recherche_convention_by_id($idcv);
        $this->fpdf->Image(base_url("assets/images/formulaire2.jpg"),0,10,200,0,'','');
          foreach ($data3 as $row3) {

          $this->fpdf->SetY(15);
             $this->fpdf->Cell(210,100,utf8_decode(addslashes($this->stagiaire_model->recherche_nom_formation($row3->id_formation))),0,0,"C");
              $this->fpdf->SetY(21);
             $this->fpdf->Cell(180,100,$this->stagiaire_model->recherche_nom_thematique($row3->id_formation),0,0,"C");
              $this->fpdf->SetY(38);
             $this->fpdf->Cell(100,100,implode('-',array_reverse  (explode('-',$row3->date_debut))),0,0,"C");
               $this->fpdf->SetY(38);
             $this->fpdf->Cell(290,100,implode('-',array_reverse  (explode('-',$row3->date_fin))),0,0,"C");
              $this->fpdf->SetY(43);
             
              if($row3->duree_formation)
                $this->fpdf->Cell(100,100,$row3->duree_formation,0,0,"C");
              else 
                $this->fpdf->Cell(100,100,$this->stagiaire_model->recherche_duree_formation($row3->id_formation),0,0,"C");
             
             $this->fpdf->SetY(55);
            
            if($row3->prix_formation)
              $this->fpdf->Cell(100,100,$row3->prix_formation,0,0,"C");
            else
              $this->fpdf->Cell(100,100,$this->stagiaire_model->recherche_prix_formation($row3->id_formation),0,0,"C");

              $this->fpdf->SetY(61);
             $this->fpdf->Cell(180,100,utf8_decode($this->stagiaire_model->recherche_lieu_formation($row3->nom_stagiaire,$row3->prenom_stagiaire)),0,0,"C");

               $this->fpdf->SetY(66);
             $this->fpdf->Cell(100,100,utf8_decode($this->stagiaire_model->recherche_code_postal($row3->nom_stagiaire,$row3->prenom_stagiaire)),0,0,"C");
               $this->fpdf->SetY(66);
             $this->fpdf->Cell(220,100,utf8_decode($this->stagiaire_model->recherche_ville($row3->nom_stagiaire,$row3->prenom_stagiaire)),0,0,"C");


             $this->fpdf->SetY(71);
            // $this->fpdf->Cell(100,100,$this->stagiaire_model->recherche_nom_formateur($row3->id_formation),0,0,"C");
              $this->fpdf->Cell(100,100,utf8_decode($row3->prenom_formateur),0,0,"C");
              $this->fpdf->SetY(71);
             //$this->fpdf->Cell(155,100,$this->stagiaire_model->recherche_prenom_formateur($this->stagiaire_model->recherche_nom_formateur($row3->id_formation)),0,0,"C");
              $this->fpdf->Cell(155,100,utf8_decode($row3->nom_formateur),0,0,"C");

             $this->fpdf->SetY(89);
             $this->fpdf->Cell(120,100,"MISE EN SITUATION",0,0,"C");
             $nom= $row3->nom_stagiaire;
             $prenom = $row3->prenom_stagiaire;

         }

      //  $this->fpdf->Cell(150,110,"MARKETING 3.0",0,0,"C");
        $this->fpdf->AddPage();

        $this->fpdf->Image(base_url("assets/images/formulaire3.jpg"),0,10,200,0,'','');



        $data4 = $this->stagiaire_model->recherche_convention( $nomstagiaire,$prenomstagiaire,  urldecode($idformation));
          foreach ($data4 as $row4) {

            $this->fpdf->SetY(162);
            $this->fpdf->Cell(70,100,$this->stagiaire_model->recherche_ville($row4->nom_stagiaire,$row4->prenom_stagiaire),0,0,"C");
 
           $this->fpdf->SetY(162);
            $this->fpdf->Cell(150,100,implode('-',array_reverse  (explode('-',$row4->date_signature))),0,0,"C");
   
 
             $this->fpdf->SetY(172);
            $this->fpdf->Cell(70,100,utf8_decode($row4->prenom_stagiaire)."  ".$row4->nom_stagiaire,0,0,"C");
$this->fpdf->SetY(176);
  $this->fpdf->Cell(155,100,utf8_decode('Madéleine LABERRONDO'),0,0,"R");
          }

            if(isset($a))
            {

              try
              {
                $this->fpdf->Image(base_url("assets/images/".$a),45,230,20,20,'','');
              }
              catch(Exception $e)
              {
                
              }
        }
            // $this->fpdf->Cell(100,100,$a,0,0,"C");
      
        $RandomNum   = time();
        $name = base_url("assets/upload/img/"."formulaire".$RandomNum.'.jpg');
        $this->fpdf->Output('F', "assets/upload/img/"."formulaire".$RandomNum.'.pdf');
        /*
        $imagick = new Imagick();
        $imagick->readImage("assets/upload/img/"."formulaire".$RandomNum.'.pdf');
        //$imagick->writeImages("assets/upload/img/"."formulaire".$RandomNum.'.jpg', false);
        $imagick->resetIterator();
        $ima = $imagick->appendImages(true);
        //$imagick->setImageFormat('jpg');
        $ima->setImageFormat("png");

        header("Content-Type: image/png");

        echo $ima->getimagesblob();
        */

        $im1 = new Imagick();   

        $im1->readImage("assets/upload/img/"."formulaire".$RandomNum.'.pdf');

        # $im1->resetIterator();

        # Combine multiple images into one, stacked vertically. 

        # $ima = $im1->appendImages(true);

        # $ima->setImageFormat("png");
        $im1->setResolution(300, 300);
        $im1->setImageCompressionQuality(0);
        

        //$im1->writeImage("assets/upload/img/"."formulaire".$RandomNum.'.jpg');
        //$im1 = "/www/cias/assets/upload/img/"."formulaire".$RandomNum.'.jpg';
        $urls = array();
        foreach($im1 as $i=>$imagick) { 
          $imagick->writeImage("assets/upload/img/"."formulaire$i".$RandomNum.'.jpg'); 
          $name = base_url("assets/upload/img/"."formulaire$i".$RandomNum.'.jpg');
          $urls[] = $name;
          # header('Location: '.$name);
        }
        //$page = base_url("stagiaire/list_formulaire");
        $this->global['pageTitle'] = '';
        // $data['donnee'] = $this->table->recuperer();
        $data['imgs'] = $urls;
        $this->loadViews("stagiaire/list_formulaire", $this->global, $data , NULL);
        //header('Location: '.$page);

        
        //header('Content-Type: image/jpeg');
        //echo $imagick;
        //$this->fpdf->Output('D', 'img-formulaire.jpg');
    }


public function envoyer_mail()
{
  if($this->stagiaire_model->recherche_date_email()==false)
  {
    $data = array('date_mail'=>date('Y-m-d'));
    $this->stagiaire_model->enregistrer_mail($data);
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention();

        $output = '';
        $query = '';
    $texte = '';
            foreach($data as $row)
            {
                
$start_date = strtotime(date('Y-m-d'));
     
$end_date = strtotime($this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation));
//$interval = date_diff(new DateTime($start_date), new DateTime($end_date));
$diff_in_days = floor(($end_date - $start_date) / (60 * 60 * 24));
if(($diff_in_days<=15) && ($diff_in_days>7))
{
  $texte .= '<table border=1 width=80%><tr><td colspan=6 align="center"><b>ALERTE AVANT EXPIRATION : </b></td></tr><tr><td><b>Jours restants</b></td><td><b>Nom et prénom</b></td><td><b>Formation</b></td><td><b>Prix</b></td><td><b>Durée</b></td><td><b>Formateur</b></td></tr>';
  $texte .= '<tr><td>'.$diff_in_days.' jours </td><td>'.$row->nom_stagiaire.' '.$row->prenom_stagiaire.'</td><td>'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>';
  $texte .= '<td>'.$this->stagiaire_model->recherche_duree_formations($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).' ';
  $texte .= ''.$this->stagiaire_model->recherche_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'</td></tr>';
  $texte .= '</table><br><br>';
}

else{
  if(($diff_in_days<=7) && ($diff_in_days>1))
{
  $texte .= '<table border=1 width=80%><tr><td colspan=6 align="center"><b>ALERTE AVANT EXPIRATION : </b></td></tr><tr><td><b>Jours restants</b></td><td><b>Nom et prénom</b></td><td><b>Formation</b></td><td><b>Prix</b></td><td><b>Durée</b></td><td><b>Formateur</b></td></tr>';
  $texte .= '<tr><td>'.$diff_in_days.' jours </td><td>'.$row->nom_stagiaire.' '.$row->prenom_stagiaire.'</td><td>'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>';
  $texte .= '<td>'.$this->stagiaire_model->recherche_duree_formations($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).' ';
  $texte .= ''.$this->stagiaire_model->recherche_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'</td></tr>';
  $texte .= '</table><br><br>';
}
else{
  if($diff_in_days==1)
  {
    $texte .= '<table border=1 width=80%><tr><td colspan=6 align="center"><b>ALERTE AVANT EXPIRATION : </b></td></tr><tr><td><b>Jours restants</b></td><td><b>Nom et prénom</b></td><td><b>Formation</b></td><td><b>Prix</b></td><td><b>Durée</b></td><td><b>Formateur</b></td></tr>';
    $texte .= '<tr><td>'.$diff_in_days.' jours </td><td>'.$row->nom_stagiaire.' '.$row->prenom_stagiaire.'</td><td>'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>';
    $texte .= '<td>'.$this->stagiaire_model->recherche_duree_formations($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).' ';
    $texte .= ''.$this->stagiaire_model->recherche_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'</td></tr>';
    $texte .= '</table><br><br>';
  } 

  else{
 
}
}
}

 
   
 


                  
  
                
   
           }
            
        
  if($texte!="")
  {
    $this->load->library('email');
    $config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
//$config['newline'] = "\r\n";

$this->email->initialize($config);


        $from_email = "samiharilaza@miav-service.com";
       // $to_email = "samiharilaza@gmail.com";
       $to_email = "maformationsas@gmail.com";

      // $from_email = "samiharilaza@miav-service.com";
       //$to_email = "samiharilaza@miav-service.com";
        //Load email library
       
        $this->email->from($from_email, 'Dossier expiré');
        $this->email->to($to_email);
        $this->email->subject('Email via MAF');
        $message = ob_start(); 

        $message = '<html><body>';
        $message .= '<h1>EMail via MAF</h1>';
        $message .= '<div>'.$texte.'</div>';
        $message .= '</body></html>';
        $message .= ob_get_contents();
        $this->email->message($message);
        // Send mail
        $this->email->send();

        echo "Mail envoyé";
  }
  }
}

public function afficher_mail()
{
  print_r($this->stagiaire_model->afficher_mail());
}

public function supprimer_email()
{
  $this->stagiaire_model->supprimer_email();
  echo "OK";
}

public function liste_par_mois_entre_deux_dates()
{
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
  $date_debut = implode('-',array_reverse  (explode('-',$this->input->post("date_debut"))));
  $date_fin = implode('-',array_reverse  (explode('-',$this->input->post("date_fin"))));
  $annee = $this->input->post("annee");
  $data = $this->stagiaire_model->liste_par_mois_entre_deux_dates($date_debut,$date_fin,$annee);
  $output = '';
  $somme = 0;
  $query = '';
  $output .= '
      <div class="table-responsive text-left">
          <table id="maTable" class="table table-bordered table-striped">
          <tr>
             
              <th class="border-primary">Nom</th>
              <th class="border-primary">Prénom</th>
              <th class="border-primary">Stage</th>
              <th class="border-primary">Prix de la formation</th>
              <th class="border-primary">Date début</th>
              <th class="border-primary">Formateur</th>
             
              
              
          </tr>
  
  ';
$texte = '';
      foreach($data as $row)
      {
          $somme += $this->stagiaire_model->recherche_prix_formations($row->id_formation);
          $output .= '
              <tr>
                  <td class="border-primary">'.$row->nom_stagiaire.'</td>
                  <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                  <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                  <td class="border-primary">'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>
                  <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row->date_debut))).'</td>
                  <td class="border-primary">'.$row->prenom_formateur.' '.$row->nom_formateur.'</td></tr>';
      }

      $output .= '<tr><td colspan=3><b>TOTAL :</b></td><td colspan=3><b>'.number_format($somme, 2, ',', ' ').' €</b></td></tr></table>';
      echo $output;
 

}

public function telecharger()
{
  if($this->input->post("btn_telecharger")=="Télécharger")
  {
    $this->telecharger_par_mois();
  }
  else{
    if($this->input->post("btn_telechargers")=="Téléchargers")
    {
      $this->telecharger_entre_deux_dates();
    } 
  }
}
public function liste_par_mois()
{
 // $data = $this->stagiaire_model->liste_par_mois("05","2023");
 $data = $this->stagiaire_model->liste_par_mois($this->input->post("mois"),$this->input->post("annee"));
 $somme = 0;
  $output = '';
  $query = '';
  $output .= '
      <div class="table-responsive text-left">
          <table id="maTable" class="table table-bordered table-striped">
          <tr>
             
              <th class="border-primary">Nom</th>
              <th class="border-primary">Prénom</th>
              <th class="border-primary">Stage</th>
              <th class="border-primary">Prix de la formation</th>
              <th class="border-primary">Date début</th>
              <th class="border-primary">Formateur</th>
          </tr>
  
  ';
$texte = '';
      foreach($data as $row)
      {
        $somme += $this->stagiaire_model->recherche_prix_formations($row->id_formation);
          $output .= '
                 <tr>
                  <td class="border-primary">'.$row->nom_stagiaire.'</td>
                  <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                  <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                  <td class="border-primary">'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>
                  <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row->date_debut))).'</td>
                  <td class="border-primary">'.$row->prenom_formateur.' '.$row->nom_formateur.'</td></tr>';
      }

      $output .= '<tr><td colspan=3><b>TOTAL</b></td><td colspan=3><b>'. number_format($somme, 2, ',', ' ').' €</b></td></tr></table>';
      echo $output;
                 



}

public function liste_stagiaire_expiration()
{
    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
   // $data = $this->stagiaire_model->afficher_convention_22($this->input->post("organisme"));
   $data = $this->stagiaire_model->afficher_convention_22();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary">Expiré du</th>
                    
                    
                </tr>
        
        ';
    $texte = '';
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>';
                       

                      
$start_date = strtotime(date('Y-m-d'));

$end_dates = $this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation);
$end_date = strtotime($this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation));
//$interval = date_diff(new DateTime($start_date), new DateTime($end_date));
$diff_in_days = floor(($end_date - $start_date) / (60 * 60 * 24));
if(($diff_in_days<=15) && ($diff_in_days>7))
{
  $output .= '<td class="border-primary"><button type="button" class="btn btn-success btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
}
else{
  if(($diff_in_days<=7) && ($diff_in_days>1))
{
  $output .= '<td class="border-primary"><button type="button" class="btn btn-primary btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
  $texte .= 'Dossier expiré dans : '.$diff_in_days.' jours : '.$row->nom_stagiaire.' '.$row->prenom_stagiaire.' - ';
  
}
else{
  if($diff_in_days==1)
  {
    $output .= '<td class="border-primary"><button type="button" class="btn btn-warning btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
  }
  else{
    if($end_date<strtotime(date('Y-m-d')))
    {
      $output .= '<td class="border-primary"><button type="button" class="btn_modifier btn btn-danger btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
    }
    else{
  $output .= '<td class="border-primary"><button type="button" class="btn btn-default btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
    }
}
}
}


//$output .= '<td><button type="button" class="btn btn-danger btn-md">J-'.$end_dates.'</button></td>';

 /*if($this->stagiaire_model->recherche_paye($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation)=="1")
 {
  $output .= '<td><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" checked data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';

 }
 else{
  $output .= '<td><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';
 }*/
   
 


                  
                    $output .= '</tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;

 /*       $from_email = "samiharilaza@miav-service.com";
        $to_email = "samiharilaza@miav-service.com";
        Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Dossier expiré');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message($texte);
       Send mail
        $this->email->send();*/

       
}

public function liste_stagiaire_expiration1()
{
    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention1_2($this->input->post("nom_stagiaire"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary">Expiré du</th>
                    
                    
                </tr>
        
        ';
    $texte = '';
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>';
                       

                      
$start_date = strtotime(date('Y-m-d'));

$end_dates = $this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation);
$end_date = strtotime($this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation));
//$interval = date_diff(new DateTime($start_date), new DateTime($end_date));
$diff_in_days = floor(($end_date - $start_date) / (60 * 60 * 24));
if(($diff_in_days<=15) && ($diff_in_days>7))
{
  $output .= '<td class="border-primary"><button type="button" class="btn btn-success btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
}
else{
  if(($diff_in_days<=7) && ($diff_in_days>1))
{
  $output .= '<td class="border-primary"><button type="button" class="btn btn-primary btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
  $texte .= 'Dossier expiré dans : '.$diff_in_days.' jours : '.$row->nom_stagiaire.' '.$row->prenom_stagiaire.' - ';
  
}
else{
  if($diff_in_days==1)
  {
    $output .= '<td class="border-primary"><button type="button" class="btn btn-warning btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
  }
  else{
    if($end_date<strtotime(date('Y-m-d')))
    {
      $output .= '<td class="border-primary"><button type="button" class="btn_modifier btn btn-danger btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
    }
    else{
  $output .= '<td class="border-primary"><button type="button" class="btn btn-default btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
    }
}
}
}


//$output .= '<td><button type="button" class="btn btn-danger btn-md">J-'.$end_dates.'</button></td>';
/*
 if($this->stagiaire_model->recherche_paye($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation)=="1")
 {
  $output .= '<td><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" checked data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';

 }
 else{
  $output .= '<td><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';
 }
   
 */


                  
                    $output .= '</tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;

 /*       $from_email = "samiharilaza@miav-service.com";
        $to_email = "samiharilaza@miav-service.com";
        Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Dossier expiré');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message($texte);
       Send mail
        $this->email->send();*/

       
}

public function supprimer_organisme()
{
  $this->stagiaire_model->supprimer_organisme($this->input->post("id"));
}

public function modifier_organisme()
{
  $this->stagiaire_model->modifier_organisme($this->input->post("raison_social"),$this->input->post("num_declaration"),$this->input->post("num_siret"),$this->input->post("nom_responsable"),$this->input->post("prenom_responsable"),$this->input->post("adresse"),$this->input->post("code_postal"),$this->input->post("ville"),$this->input->post("tel_responsable"),$this->input->post("mail_responsable"),$this->input->post("id"));
  //echo $this->input->post("id");
}

public function liste_organisme()
{
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
  $data = $this->stagiaire_model->liste_organisme();
      //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
      $output = '';
      $query = '';
      $output .= '
          <div class="table-responsive text-left">
              <table id="maTable" class="table table-bordered table-striped">
              <tr>
                 
                  <th class="border-primary">Raison social</th>
                  <th class="border-primary">Déclaration</th>
                  <th class="border-primary">Siret</th>
                  <th class="border-primary">Responsable</th>
                  <th class="border-primary"></th>
                  <th class="border-primary"></th>
                 
                  
              </tr>
      
      ';
  $texte = '';
          foreach($data as $row)
          {
              $output .= '
                  <tr>
                      <td class="border-primary">'.$row->raison_social.'</td>
                      <td class="border-primary">'.$row->num_declaration.'</td>
                      <td class="border-primary">'.$row->num_siret.'</td>
                      <td class="border-primary">'.$row->prenom_responsable.' '.$row->nom_responsable.'</td>
                      <td class="border-primary"><button type="button" class="btn_modifier btn btn-warning btn-sm" data-id='.$row->id.' data-raison_social="'.$row->raison_social.'" data-num_declaration="'.$row->num_declaration.'" data-num_siret="'.$row->num_siret.'" data-nom_responsable="'.$row->nom_responsable.'" data-prenom_responsable="'.$row->prenom_responsable.'" data-adresse="'.$row->adresse.'" data-ville="'.$row->ville.'" data-code_postal="'.$row->code_postal.'" data-tel_responsable="'.$row->tel_responsable.'" data-mail_responsable="'.$row->mail_resonsable.'" title="Modifier">Modifier organisme</button></td>
                      <td class="border-primary"><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer">Supprimer</button></td></tr>';


          }


          $output .= '</table>';
          echo $output;

}
public function modifier_table_qualiopi()
{
  $this->table_model->modifier_table_qualiopi();
  echo "OK";
}

public function liste_stagiaire()
{
    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $this->export_import_data();
    $data = $this->stagiaire_model->afficher_convention();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary" colspan=3 align="center">Télécharger</th>
                    <th class="border-primary">Lancement Stage</th>
                    <th class="border-primary">Payé</th>
                    
                </tr>
        
        ';
    $texte = '';
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                        <td class="border-primary">
                        <a href=\''.site_url("stagiaire/imprimer").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-success" target="_blank">Formulaire</a>
                        <a href=\''.site_url("stagiaire/imprimer_img").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-success" target="_blank">Formulaire Image</a></td>
                        <td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_convention").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-warning" target="_blank">Convention</a>
                        <a href=\''.site_url("stagiaire/imprimer_convention_img").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-warning" target="_blank">Convention Image</a>
                        </td>



<td class="border-primary"><button type="button" class="btn_lieu btn btn-warning btn-md" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-entreprise="'.utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)).'" title="Modifier">Lieu</button></td>';
/*$curl = curl_init();
     /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
      'nom_formateur' => $this->input->post("nom_formateur"),
      'nom_stagiaire' => $this->input->post("nom_stagiaire")
      
    );*/

  /*    curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/afficher_id_formation");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$row->nom_stagiaire."&prenom_stagiaire=".$row->prenom_stagiaire."&id_formation=".$row->id_formation."");
      //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
      //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
    // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
    //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
     // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

      $result = curl_exec($curl);
      curl_close($curl);
      if($result==null)
      {
        $result = "";
      }
      else{
        $result = $result;
      }

    //  echo $result;
    //$this->stagiaire_model->modifier_kaliopi($row->nom_stagiaire, $row->prenom_stagiaire,$row->id_formation,$result);
    
*/
$formation = $this->stagiaire_model->recherche_nom_formation($row->id_formation);
$nom = $row->nom_stagiaire;
$lancer = $this->stagiaire_model->id_qualiopi($nom,$row->id_formation);
$output .= '<td class="border-primary"><button type="button" class="btn_lancer btn btn-danger btn-md" data-lancer="'.$lancer.'" data-formation="'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'" data-heure="'.$this->stagiaire_model->recherche_nombre_heure($row->id_formation).'" data-activite = "'.utf8_decode($this->stagiaire_model->recherche_activites($row->nom_stagiaire, $row->prenom_stagiaire)).'" data-lieu="'.utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)).' '.$this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire).' '.utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)).'" data-nom_stagiaire = "'.$row->nom_stagiaire.'" data-prenom_stagiaire = "'.$row->prenom_stagiaire.'" data-entreprise = "'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire,$row->prenom_stagiaire).'" data-tel = "'.$this->stagiaire_model->recherche_telephone($row->nom_stagiaire, $row->prenom_stagiaire).'">Lancer</button></td>';              
/*$start_date = strtotime(date('Y-m-d'));

$end_dates = $this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation);
$end_date = strtotime($this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation));
//$interval = date_diff(new DateTime($start_date), new DateTime($end_date));
$diff_in_days = floor(($end_date - $start_date) / (60 * 60 * 24));
if(($diff_in_days<=15) && ($diff_in_days>7))
{
  $output .= '<td><button type="button" class="btn btn-success btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
}
else{
  if(($diff_in_days<=7) && ($diff_in_days>1))
{
  $output .= '<td><button type="button" class="btn btn-primary btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
  $texte .= 'Dossier expiré dans : '.$diff_in_days.' jours : '.$row->nom_stagiaire.' '.$row->prenom_stagiaire.' - ';
  
}
else{
  if($diff_in_days==1)
  {
    $output .= '<td><button type="button" class="btn btn-danger btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
  }
  else{
  $output .= '<td><button type="button" class="btn btn-default btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
}
}
}

*/
//$output .= '<td><button type="button" class="btn btn-danger btn-md">J-'.$end_dates.'</button></td>';

 if($this->stagiaire_model->recherche_paye($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation)=="1")
 {
  $output .= '<td class="border-primary"><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" checked data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';

 }
 else{
  $output .= '<td class="border-primary"><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';
 }
   
 


                  
                    $output .= '</tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;

 /*       $from_email = "samiharilaza@miav-service.com";
        $to_email = "samiharilaza@miav-service.com";
        Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Dossier expiré');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message($texte);
       Send mail
        $this->email->send();*/

       
}


public function afficher_kaliopi()
{
  print_r($this->stagiaire_model->afficher_kaliopi());
}
   public function liste_stagiaire1()
{
   // error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention1($this->input->post("nom_stagiaire"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary" colspan=3 align="center">Télécharger</th>
                    <th class="border-primary">Lancement Stage</th>
                    <th class="border-primary">Expiré dans</th>
                    <th class="border-primary">Payé</th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       <td class="border-primary"><a href=\''.site_url("stagiaire/imprimer").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-success" target="_blank">Formulaire</a>
<a href=\''.site_url("stagiaire/imprimer_img").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-success" target="_blank">Formulaire Image</a>
                       </td>
                        <td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_convention").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-warning" target="_blank">Convention</a>
<a href=\''.site_url("stagiaire/imprimer_convention_img").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/'.$row->id.'\' class="btn btn-warning" target="_blank">Convention Image</a>
                        </td>


                        <td class="border-primary"><button type="button" class="btn_lieu btn btn-warning btn-md" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-entreprise="'.utf8_decode($this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire)).'" title="Modifier">Lieu</button></td>';
              
                        $curl = curl_init();
                        /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
                         'nom_formateur' => $this->input->post("nom_formateur"),
                         'nom_stagiaire' => $this->input->post("nom_stagiaire")
                         
                       );*/
                   
                         curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/index.php/admin/afficher_id_formation");
                         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                         curl_setopt($curl, CURLOPT_POST, 1);
                         curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$row->nom_stagiaire."&prenom_stagiaire=".$row->prenom_stagiaire."&id_formation=".$row->id_formation."");
                         //curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
                         //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
                       // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
                       //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
                        // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));
                   
                         $result = curl_exec($curl);
                         curl_close($curl);
                         if($result==null)
                         {
                           $result = "";
                         }
                         else{
                           $result = $result;
                         }
                   
                       //  echo $result;
                   
                       $output .= '<td class="border-primary"><button type="button" class="btn_lancers btn btn-danger btn-md" data-lancer="'.$result.'" data-formation="'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'" data-heure="'.$this->stagiaire_model->recherche_nombre_heure($row->id_formation).'" data-activite = "'.utf8_decode($this->stagiaire_model->recherche_activites($row->nom_stagiaire, $row->prenom_stagiaire)).'" data-lieu="'.utf8_decode($this->stagiaire_model->recherche_rue($row->nom_stagiaire, $row->prenom_stagiaire)).' '.$this->stagiaire_model->recherche_code_postals($row->nom_stagiaire, $row->prenom_stagiaire).' '.utf8_decode($this->stagiaire_model->recherche_villes($row->nom_stagiaire, $row->prenom_stagiaire)).'" data-nom_stagiaire = "'.$row->nom_stagiaire.'" data-prenom_stagiaire = "'.$row->prenom_stagiaire.'" data-entreprise = "'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire,$row->prenom_stagiaire).'" data-tel = "'.$this->stagiaire_model->recherche_telephone($row->nom_stagiaire, $row->prenom_stagiaire).'">Lancer</button></td>';              
                   
              
  /*                      $start_date = strtotime(date('Y-m-d'));
                   
                        $end_dates = $this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation);
                        $end_date = strtotime($this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation));
                        //$interval = date_diff(new DateTime($start_date), new DateTime($end_date));
                        $diff_in_days = floor(($end_date - $start_date) / (60 * 60 * 24));
                        if(($diff_in_days<=15) && ($diff_in_days>7))
                        {
                          $output .= '<td><button type="button" class="btn btn-success btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
                        }
                        else{
                          if(($diff_in_days<=7) && ($diff_in_days>1))
                        {
                          $output .= '<td><button type="button" class="btn btn-primary btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
                          $texte .= 'Dossier expiré dans : '.$diff_in_days.' jours : '.$row->nom_stagiaire.' '.$row->prenom_stagiaire.' - ';
                          
                        }
                        else{
                          if($diff_in_days==1)
                          {
                            $output .= '<td><button type="button" class="btn btn-danger btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
                          }
                          else{
                          $output .= '<td><button type="button" class="btn btn-default btn-md">'.implode('-',array_reverse  (explode('-',$end_dates))).'</button></td>';
                        }
                        }
                        }
                        
    */          
 if($this->stagiaire_model->recherche_paye($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation)=="1")
 {
  $output .= '<td class="border-primary"><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" checked data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';

 }
 else{
  $output .= '<td class="border-primary"><input type="checkbox" name="checkbox[]" class="chk form-checkbox" value ="'.$row->paye.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id_formation="'.$row->id_formation.'"></td>';
 }
   
              
              $output .= '</tr>


                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function test_facture()
{
  echo $this->stagiaire_model->verifier_factures('ROUQUETTE','JACQUELINE','F-ERP-01');
}

   public function liste_emargement()
{
    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention();
    //$data = $this->stagiaire_model->afficher_convention_1($this->input->post("organisme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                     
                      <th class="border-primary"></th>
                      <th class="border-primary"></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>';
                       
                           
                         $output.= '<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_emargement").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" target="_blank">Emargement</a>
                         <a href=\''.site_url("stagiaire/imprimer_emargement").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img'.'\' class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" target="_blank">Emargement Image</a></td>';
                    
if($this->stagiaire_model->verifier_factures($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation)=="ok")
{
  $output .= '<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_facture").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-warning" target="_blank">Télécharger facture</a>
<a href=\''.site_url("stagiaire/imprimer_facture").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img_type'.'\' class="btn btn-warning" target="_blank">Télécharger facture Image</a>
  </td>';
  
}
else{
  $output .= '<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-num_facture="'.($this->stagiaire_model->NumeroFacture() + 1).'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_facture="'.date("Y-m-d").'"  title="Modifier">Générer facture</button></td>';
}

                        

                        //$output .='<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_facture_sans_acquitte").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn_factures btn btn-warning" target="_blank">Facture</a></td>

                        $output .= '<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_assiduites").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-primary" target="_blank">Assiduté</a>
                        <a href=\''.site_url("stagiaire/imprimer_assiduites").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img_type'.'\' class="btn btn-primary" target="_blank">Assiduté Iamge</a></td>

                          <td class="border-primary"><a href=\''.site_url("stagiaire/certificat_realisation").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-danger" target="_blank">Certificat</a>
                          <a href=\''.site_url("stagiaire/certificat_realisation").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img_type'.'\' class="btn btn-danger" target="_blank">Certificat Image</a></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function verifier_date_signature()
{
  if($this->stagiaire_model->verifier_date_signature("HADDAD", "NINA", "F-CHA-AV"))
  {
    echo "True";
  }
  else{
    echo "False";
  }
}

  public function liste_emargements()
{
    error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_conventions($this->input->post("nom_stagiaire"),$this->input->post("prenom_stagiaire"),$this->input->post("id_formation"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                     
                      <th class="border-primary"></th>
                      <th class="border-primary"></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_emargement").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Cliquez ici" target="_blank">Emargement</a>
<a href=\''.site_url("stagiaire/imprimer_emargement").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img_type'.'\' class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Cliquez ici" target="_blank">Emargement Image</a></td>';
if($this->stagiaire_model->verifier_factures($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation)=="ok")
{
  $output .= '<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_facture").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-warning" target="_blank">Télécharger facture</a>
  <a href=\''.site_url("stagiaire/imprimer_facture").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img_type'.'\' class="btn btn-warning" target="_blank">Télécharger facture image</a></td>';
  
}
else{
  $output .= '<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-num_facture="'.($this->stagiaire_model->NumeroFacture() + 1).'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_facture="'.date("Y-m-d").'"  title="Modifier">Générer facture</button></td>';
}

                        

                        //$output .='<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_facture_sans_acquitte").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn_factures btn btn-warning" target="_blank">Facture</a></td>


                        $output .='<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_assiduites").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-primary" target="_blank">Assiduté</a>
                        <a href=\''.site_url("stagiaire/imprimer_assiduites").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img_type'.'\' class="btn btn-primary" target="_blank">Assiduté Image</a></td>

                          <td class="border-primary"><a href=\''.site_url("stagiaire/certificat_realisation").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-danger" target="_blank">Certificat</a>
                          <a href=\''.site_url("stagiaire/certificat_realisation").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'/img_type'.'\' class="btn btn-danger" target="_blank">Certificat Image</a></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

   public function liste_formateur()
{
    $data = $this->stagiaire_model->afficher_formateur();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
      
    
            foreach($data as $row)
            {
                $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th>Nom</th>
                    <th>Prénom</th>
                    
                    
                </tr>
        
        ';
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_formateur.'</td>
                        <td class="border-primary">'.$row->prenom_formateur.'</td>';
                         $data1 = $this->stagiaire_model->afficher_intervention_formateur($row->nom_formateur,$row->prenom_formateur);
                       // $data1 = $this->stagiaire_model->afficher_intervention_formateur("PHILIPPE","CANO");
                        $output .=  '<table id="maTable" class="table table-bordered table-striped border-primary">
                            <tr>
                              <th class="border-primary">Dossier</th>
                              <th class="border-primary">Date 1</th>
                              <th class="border-primary">Date 2</th>
                              <th class="border-primary">Date 3</th>
                              <th class="border-primary">Date 4</th>
                              <th class="border-primary">Date 5</th>
                              <th class="border-primary">Date 6</th>
                              <th class="border-primary">Date 7</th>
                              <th class="border-primary">Date 8</th>
                              <th class="border-primary">Date 9</th>
                              <th class="border-primary">Date 10</th>
                    
                    
                          </tr>';
                          foreach($data1 as $row1)
                            {
                            $output .=   '<tr>
                             <td class="border-primary">'.$row1->nom_stagiaire.'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_1))).'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_2))).'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_3))).'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_4))).'</td>';



                                if($row1->date_convention_5=="0000-00-00")
                                {
                                   $a = "";
                                }
                                else
                                {
                                    $a = implode('-',array_reverse  (explode('-',$row1->date_convention_5)));
                                  
                                }

                                 if($row1->date_convention_6=="0000-00-00")
                                {
                                   $b = "";
                                }
                                else
                                {
                                    $b = implode('-',array_reverse  (explode('-',$row1->date_convention_6)));
                                  
                                }
                                 if($row1->date_convention_7=="0000-00-00")
                                {
                                   $c = "";
                                }
                                else
                                {
                                    $c = implode('-',array_reverse  (explode('-',$row1->date_convention_7)));
                                  
                                }

                                if($row1->date_convention_8=="0000-00-00")
                                {
                                   $h = "";
                                }
                                else
                                {
                                    $h = implode('-',array_reverse  (explode('-',$row1->date_convention_8)));
                                  
                                }

                                if($row1->date_convention_9=="0000-00-00")
                                {
                                   $i = "";
                                }
                                else
                                {
                                   $i = implode('-',array_reverse  (explode('-',$row1->date_convention_9)));
                                }

                                  if($row1->date_convention_10=="0000-00-00")
                                {
                                   $j = "";
                                }
                                else
                                {
                                   $j = implode('-',array_reverse  (explode('-',$row1->date_convention_10)));
                                }



                                $output .=  '<td class="border-primary">'.$a.'</td>

                                <td class="border-primary">'.$b.'</td>
                                <td class="border-primary">'.$c.'</td>
                                <td class="border-primary">'.$h.'</td>
                                <td class="border-primary">'.$i.'</td>
                                <td class="border-primary">'.$j.'</td>
                                </tr>';


                            }



                  
                  $output .=   '</table></tr>
                       

                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}
public function testdoublon()
{
  print_r($this->stagiaire_model->doublons("PHILIPPE"));
}

public function testformateur()
{
  print_r($this->stagiaire_model->afficher_intervention_formateur("PHILIPPE","CANO"));
}


public function modifier_facture()
{
  try {
    $date_paiement = $this->input->post("date_paiement") ? implode('-',array_reverse(explode('-',$this->input->post("date_paiement")))) : implode('-',array_reverse(explode('-',$this->input->post("date_facture"))));
    $this->stagiaire_model->modifier_facture($this->input->post("num_facture"),$this->input->post("nom_stagiaire"),$this->input->post("prenom_stagiaire"),$this->input->post("id_formation"),implode('-',array_reverse  (explode('-',$this->input->post("date_facture")))),$this->input->post("mode_paiement"),$date_paiement);
    echo "OK";
  } catch (Exception $e) {
    echo "ERREUR: " . $e->getMessage();
  }
}
   public function liste_formateurs()
{
    $nom_formateur = $this->input->post("nom_formateur");
    $data = $this->stagiaire_model->afficher_formateurs($nom_formateur);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
  //  afficher_intervention_formateur($nom,$prenom)
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th>Nom</th>
                    <th>Prénom</th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->nom_formateur.'</td>
                        <td>'.$row->prenom_formateur.'</td>';
                         $data1 = $this->stagiaire_model->afficher_intervention_formateur($row->nom_formateur,$row->prenom_formateur);
                       $output .=   '<table id="maTable" class="table table-bordered table-striped">
                            <tr>
                             <th class="border-primary">Dossier</th>
                   
                              <th class="border-primary">Date 1</th>
                              <th class="border-primary">Date 2</th>
                              <th class="border-primary">Date 3</th>
                              <th class="border-primary">Date 4</th>
                              <th class="border-primary">Date 5</th>
                              <th class="border-primary">Date 6</th>
                              <th class="border-primary">Date 7</th>
                              <th class="border-primary">Date 8</th>
                              <th class="border-primary">Date 9</th>
                              <th class="border-primary">Date 10</th>
                    
                    
                          </tr>';
                          foreach($data1 as $row1)
                            {
                           $output .=    '<tr>
                                <td class="border-primary">'.$row1->nom_stagiaire.'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_1))).'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_2))).'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_3))).'</td>
                                <td class="border-primary">'.implode('-',array_reverse  (explode('-',$row1->date_convention_4))).'</td>';
                                 if($row1->date_convention_5=="0000-00-00")
                                {
                                   $a = "";
                                }
                                else
                                {
                                    $a = implode('-',array_reverse  (explode('-',$row1->date_convention_5)));
                                  
                                }

                                 if($row1->date_convention_6=="0000-00-00")
                                {
                                   $b = "";
                                }
                                else
                                {
                                    $b = implode('-',array_reverse  (explode('-',$row1->date_convention_6)));
                                  
                                }
                                 if($row1->date_convention_7=="0000-00-00")
                                {
                                   $c = "";
                                }
                                else
                                {
                                    $c = implode('-',array_reverse  (explode('-',$row1->date_convention_7)));
                                  
                                }

                                if($row1->date_convention_8=="0000-00-00")
                                {
                                   $h = "";
                                }
                                else
                                {
                                    $h = implode('-',array_reverse  (explode('-',$row1->date_convention_8)));
                                  
                                }

                                if($row1->date_convention_9=="0000-00-00")
                                {
                                   $i = "";
                                }
                                else
                                {
                                   $i = implode('-',array_reverse  (explode('-',$row1->date_convention_9)));
                                }

                                  if($row1->date_convention_10=="0000-00-00")
                                {
                                   $j = "";
                                }
                                else
                                {
                                   $j = implode('-',array_reverse  (explode('-',$row1->date_convention_10)));
                                }



                                $output .=  '<td class="border-primary">'.$a.'</td>

                                <td class="border-primary">'.$b.'</td>
                                <td class="border-primary">'.$c.'</td>
                                <td class="border-primary">'.$h.'</td>
                                <td class="border-primary">'.$i.'</td>
                                <td class="border-primary">'.$j.'</td>
                                </tr>';


                            }



                  
                  $output .=   '</table></tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function testDoublons()
{
  print_r($this->stagiaire_model->doublons("CANO"));
}

  public function liste_doublons()
{
    $nom_formateur = $this->input->post("nom_formateur");
    $data = $this->stagiaire_model->afficher_formateurs($nom_formateur,$this->input->post("organisme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
  //  afficher_intervention_formateur($nom,$prenom)
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th>Nom</th>
                    <th>Prénom</th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->nom_formateur.'</td>
                        <td>'.$row->prenom_formateur.'</td>';
                         $data1 = $this->stagiaire_model->doublons($row->nom_formateur);
                       $output .=   '<table id="maTable" class="table table-bordered table-striped">
                            <tr>
                             <th>Dossier</th>
                   
                              <th>Date 1</th>
                              <th>Date 2</th>
                              <th>Date 3</th>
                              <th>Date 4</th>
                              <th>Date 5</th>
                              <th>Date 6</th>
                              <th>Date 7</th>
                              <th>Date 8</th>
                              <th>Date 9</th>
                              <th>Date 10</th>
                    
                    
                          </tr>';
                          foreach($data1 as $row1)
                            {
                           $output .=    '<tr bgcolor="red">
                                <td>'.$row1->nom_stagiaire.'</td>
                                <td>'.implode('-',array_reverse  (explode('-',$row1->date_convention_1))).'</td>
                                <td>'.implode('-',array_reverse  (explode('-',$row1->date_convention_2))).'</td>
                                <td>'.implode('-',array_reverse  (explode('-',$row1->date_convention_3))).'</td>
                                <td>'.implode('-',array_reverse  (explode('-',$row1->date_convention_4))).'</td>';
                                 if($row1->date_convention_5=="0000-00-00")
                                {
                                   $a = "";
                                }
                                else
                                {
                                    $a = implode('-',array_reverse  (explode('-',$row1->date_convention_5)));
                                  
                                }

                                 if($row1->date_convention_6=="0000-00-00")
                                {
                                   $b = "";
                                }
                                else
                                {
                                    $b = implode('-',array_reverse  (explode('-',$row1->date_convention_6)));
                                  
                                }
                                 if($row1->date_convention_7=="0000-00-00")
                                {
                                   $c = "";
                                }
                                else
                                {
                                    $c = implode('-',array_reverse  (explode('-',$row1->date_convention_7)));
                                  
                                }

                                if($row1->date_convention_8=="0000-00-00")
                                {
                                   $h = "";
                                }
                                else
                                {
                                    $h = implode('-',array_reverse  (explode('-',$row1->date_convention_8)));
                                  
                                }

                                if($row1->date_convention_9=="0000-00-00")
                                {
                                   $i = "";
                                }
                                else
                                {
                                   $i = implode('-',array_reverse  (explode('-',$row1->date_convention_9)));
                                }

                                  if($row1->date_convention_10=="0000-00-00")
                                {
                                   $j = "";
                                }
                                else
                                {
                                   $j = implode('-',array_reverse  (explode('-',$row1->date_convention_10)));
                                }



                                $output .=  '<td>'.$a.'</td>

                                <td>'.$b.'</td>
                                <td>'.$c.'</td>
                                <td>'.$h.'</td>
                                <td>'.$i.'</td>
                                <td>'.$j.'</td>
                                </tr>';


                            }



                  
                  $output .=   '</table></tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

 public function liste_modifier_facture()
{
   error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_facture();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                  
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-num_facture="'.$row->num_facture.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_facture="'. implode('-',array_reverse  (explode('-',$row->date_facture))).'" data-date_paiement="'.(isset($row->date_paiement) && $row->date_paiement && $row->date_paiement != '0000-00-00' ? implode('-',array_reverse(explode('-',$row->date_paiement))) : implode('-',array_reverse(explode('-',$row->date_facture)))).'" data-mode_paiement="'.(isset($row->mode_paiement) && $row->mode_paiement ? $row->mode_paiement : 'Chèque').'" title="Modifier">Modifier facture</button></td>
<td class="border-primary"><button type="button" class="btn_supprimer_facture btn btn-danger btn-sm" data-num_facture="'.$row->num_facture.'" title="Supprimer">Supprimer facture</button></td>
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

  public function liste_facture()
{
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
   
    $data = $this->stagiaire_model->afficher_convention();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                  
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-success btn-sm" data-id_formation="'.$row->id_formation.'" data-num_facture="'.($this->stagiaire_model->NumeroFacture() + 1).'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_facture="'.date("Y-m-d").'" data-organisme="'.$row->organisme.'" title="Modifier">Enregistrement facture</button></td>
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

  public function liste_factures()
{
    $nom_stagiaire = $this->input->post("nom_stagiaire");
    $data = $this->stagiaire_model->afficher_conventions($nom_stagiaire);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-success btn-sm" data-id_formation="'.$row->id_formation.'" data-num_facture="'.($this->stagiaire_model->NumeroFacture() + 1).'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_facture="'.date("Y-m-d").'" data-organisme="'.$row->organisme.'" title="Modifier">Enregistrement facture</button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function export_csv() {
        // Charger le modèle et obtenir les données
     //   $this->load->model('Personne_model');
        $stagiaires = $this->stagiaire_model->fiche_client_csv();

        // Nom du fichier CSV
        $filename = 'Client.csv';

        // Ouvrir le fichier en écriture
      //  $fp = fopen('php://output', 'w');
        ob_start();

    // Ouvrir le fichier en écriture
       $fp = fopen('php://output', 'w');


        // En-têtes CSV
        $header = array("Nom","Telephone", "Entreprise", "Siret", "Adresse", "Activite","CodeNAF");
        fputcsv($fp, $header);

        // Écrire les données dans le fichier CSV
        foreach ($stagiaires as $stagiaire) {
            fputcsv($fp, $stagiaire);
        }

        // Fermer le fichier
        fclose($fp);
        $csv_data = ob_get_clean();

        // Télécharger le fichier CSV
        header('Content-type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        echo $csv_data;
        exit;
    }

public function liste_facture_organismes()
{
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $organisme = $this->input->post("organisme");
    $data = $this->stagiaire_model->afficher_conventions_organisme($organisme);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-success btn-sm" data-id_formation="'.$row->id_formation.'" data-num_facture="'.($this->stagiaire_model->NumeroFacture() + 1).'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_facture="'.date("Y-m-d").'" data-organisme="'.$row->organisme.'" title="Modifier">Enregistrement facture</button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}



 public function liste_modifier_factures()
{
    try {
        $nom_stagiaire = $this->input->post("nom_stagiaire");
        
        // Vérifier que le nom n'est pas vide
        if (empty($nom_stagiaire)) {
            echo '<div class="alert alert-warning">Veuillez saisir un nom de stagiaire</div>';
            return;
        }
        
        $data = $this->stagiaire_model->afficher_factures($nom_stagiaire);
        
        // Vérifier si des résultats ont été trouvés
        if (empty($data) || count($data) == 0) {
            echo '<div class="alert alert-info">Aucune facture trouvée pour le stagiaire : <strong>' . htmlspecialchars($nom_stagiaire) . '</strong></div>';
            return;
        }
        
        $output = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-num_facture="'.$row->num_facture.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_facture="'.implode('-',array_reverse  (explode('-',$row->date_facture))).'" title="Modifier">Modifier facture</button></td>
<td class="border-primary"><button type="button" class="btn_supprimer_facture btn btn-danger btn-sm"  data-num_facture="'.$row->num_facture.'" title="Supprimer">Supprimer facture</button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
        
    } catch (Exception $e) {
        echo '<div class="alert alert-danger">Erreur : ' . $e->getMessage() . '</div>';
    }
}

public function modifier_conventions()
{

  if(empty($this->input->post("date_convention_5")))
  {
    $a = "0000-00-00";
  }
  else
  {
    $a = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_5"))));
  }

  if(empty($this->input->post("date_convention_6")))
  {
    $b = "0000-00-00";
  }
  else
  {
    $b = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_6"))));
  }
  if(empty($this->input->post("date_convention_7")))
  {
    $c = "0000-00-00";
  }
  else
  {
    $c = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_7"))));
  }

 if(empty($this->input->post("date_convention_8")))
  {
    $d = "0000-00-00";
  }
  else
  {
    $d = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_8"))));
  }

 if(empty($this->input->post("date_convention_9")))
  {
    $e = "0000-00-00";
  }
  else
  {
    $e = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_9"))));
  }

  if(empty($this->input->post("date_convention_10")))
  {
    $f = "0000-00-00";
  }
  else
  {
    $f = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_10"))));
  }
  

  $this->stagiaire_model->modifier_conventions(
    $this->input->post("nom_stagiaire"),
    $this->input->post("prenom_stagiaire"),
    $this->input->post("id_formation"),
    $this->input->post("lieu_formation"),
    $this->input->post("nom_formateur"),
    $this->input->post("prenom_formateur"),
     implode('-',array_reverse  (explode('-',$this->input->post("date_debut")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_fin")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_sign")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_convention_1")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_convention_2")))),
    implode('-',array_reverse  (explode('-',$this->input->post("date_convention_3")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_convention_4")))),
    $a,
     $b,
    $c,
   $d,
   $e,
    $f,
    $this->input->post("organisme")
       

 
     



  );

  //echo implode('-',array_reverse  (explode('-',$this->input->post("date_convention_6"))));

  
}


public function modifier_conventions_heure()
{

  if(empty($this->input->post("date_convention_5")))
  {
    $a = "0000-00-00";
  }
  else
  {
    $a = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_5"))));
  }

  if(empty($this->input->post("date_convention_6")))
  {
    $b = "0000-00-00";
  }
  else
  {
    $b = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_6"))));
  }
  if(empty($this->input->post("date_convention_7")))
  {
    $c = "0000-00-00";
  }
  else
  {
    $c = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_7"))));
  }

 if(empty($this->input->post("date_convention_8")))
  {
    $d = "0000-00-00";
  }
  else
  {
    $d = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_8"))));
  }

 if(empty($this->input->post("date_convention_9")))
  {
    $e = "0000-00-00";
  }
  else
  {
    $e = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_9"))));
  }

  if(empty($this->input->post("date_convention_10")))
  {
    $f = "0000-00-00";
  }
  else
  {
    $f = implode('-',array_reverse  (explode('-',$this->input->post("date_convention_10"))));
  }
  

  $this->stagiaire_model->modifier_conventions_heure(
    $this->input->post("id"),
    $this->input->post("nom_stagiaire"),
    $this->input->post("prenom_stagiaire"),
    $this->input->post("id_formation"),
    $this->input->post("lieu_formation"),
    $this->input->post("nom_formateur"),
    $this->input->post("prenom_formateur"),
     implode('-',array_reverse  (explode('-',$this->input->post("date_debut")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_fin")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_convention_1")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_convention_2")))),
    implode('-',array_reverse  (explode('-',$this->input->post("date_convention_3")))),
     implode('-',array_reverse  (explode('-',$this->input->post("date_convention_4")))),
    $a,
     $b,
    $c,
   $d,
   $e,
    $f,
    $this->input->post("organisme"),
    $this->input->post("heure_debut_1"),
    $this->input->post("heure_debut_2"),
    $this->input->post("heure_debut_3"),
    $this->input->post("heure_debut_4"),
    $this->input->post("heure_debut_5"),
    $this->input->post("heure_debut_6"),
    $this->input->post("heure_debut_7"),
    $this->input->post("heure_debut_8"),
    $this->input->post("heure_debut_9"),
    $this->input->post("heure_debut_10"),
    $this->input->post("heure_debut_111"),
    $this->input->post("heure_debut_222"),
    $this->input->post("heure_debut_333"),
    $this->input->post("heure_debut_444"),
    $this->input->post("heure_debut_555"),
    $this->input->post("heure_debut_666"),
    $this->input->post("heure_debut_777"),
    $this->input->post("heure_debut_888"),
    $this->input->post("heure_debut_999"),
    $this->input->post("heure_debut_1010"),
    $this->input->post("heure_fin_1"),
    $this->input->post("heure_fin_2"),
    $this->input->post("heure_fin_3"),
    $this->input->post("heure_fin_4"),
    $this->input->post("heure_fin_5"),
    $this->input->post("heure_fin_6"),
    $this->input->post("heure_fin_7"),
    $this->input->post("heure_fin_8"),
    $this->input->post("heure_fin_9"),
    $this->input->post("heure_fin_10"),
    $this->input->post("heure_fin_111"),
    $this->input->post("heure_fin_222"),
    $this->input->post("heure_fin_333"),
    $this->input->post("heure_fin_444"),
    $this->input->post("heure_fin_555"),
    $this->input->post("heure_fin_666"),
    $this->input->post("heure_fin_777"),
    $this->input->post("heure_fin_888"),
    $this->input->post("heure_fin_999"),
    $this->input->post("heure_fin_1010")
       

 
     



  );

  //echo implode('-',array_reverse  (explode('-',$this->input->post("date_convention_6"))));

  
}




  public function liste_conventions()
{
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $nom_stagiaire = $this->input->post("nom_stagiaire");
    $data = $this->stagiaire_model->afficher_conventions($nom_stagiaire);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                     <th class="border-primary"></th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
              if($row->date_convention_8=="0000-00-00")
              {
                  $aa = "";
                }          

              else
              {
                $aa = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
              }

              if($row->date_convention_9=="0000-00-00")
              {
                  $bb = "";
                }          

              else
              {
                $bb = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
              }

              if($row->date_convention_10=="0000-00-00")
              {
                  $cc = "";
                }          

              else
              {
                $cc =implode('-',array_reverse  (explode('-',$row->date_convention_10)));
              }

              if($row->date_convention_5=="0000-00-00")
              {
                  $dd = "";
                }          

              else
              {
                $dd = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
              }

              if($row->date_convention_6=="0000-00-00")
              {
                  $ee = "";
                }          

              else
              {
                $ee = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
              }

              if($row->date_convention_7=="0000-00-00")
              {
                  $ff = "";
                }          

              else
              {
                $ff = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
              }
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-organisme="'.$row->organisme.'" data-prix_formation="'.$row->prix_formation.'" data-duree_formation="'.$row->duree_formation.'" data-id_formation="'.$row->id_formation.'" data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" data-lieu_formation="'.$row->lieu_formation.'" title="Modifier">Modifier</button></td>

<td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-organisme="'.$row->organisme.'" data-id="'.$row->id.'" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Supprimer">Supprimer</button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

  public function liste_conventions_groupe()
{
    $nom_stagiaire = $this->input->post("nom_stagiaire");
    $data = $this->stagiaire_model->afficher_conventions($nom_stagiaire);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                     <th class="border-primary"></th>
                    
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
              if($row->date_convention_8=="0000-00-00")
              {
                  $aa = "";
                }          

              else
              {
                $aa = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
              }

              if($row->date_convention_9=="0000-00-00")
              {
                  $bb = "";
                }          

              else
              {
                $bb = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
              }

              if($row->date_convention_10=="0000-00-00")
              {
                  $cc = "";
                }          

              else
              {
                $cc =implode('-',array_reverse  (explode('-',$row->date_convention_10)));
              }

              if($row->date_convention_5=="0000-00-00")
              {
                  $dd = "";
                }          

              else
              {
                $dd = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
              }

              if($row->date_convention_6=="0000-00-00")
              {
                  $ee = "";
                }          

              else
              {
                $ee = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
              }

              if($row->date_convention_7=="0000-00-00")
              {
                  $ff = "";
                }          

              else
              {
                $ff = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
              }
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" title="Modifier">Facture</button></td>
<td class="border-primary"><button type="button" class="btn_factures btn btn-success btn-sm" data-id_formation="'.$row->id_formation.'" data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" title="Modifier">Nouveau Facture Groupe</button></td>

<td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Certificat Groupe</button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}
  public function liste_convention()
{
   error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention_1();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                  
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {

              if($row->date_convention_8=="0000-00-00")
              {
                  $aa = "";
                }          

              else
              {
                $aa = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
              }

              if($row->date_convention_9=="0000-00-00")
              {
                  $bb = "";
                }          

              else
              {
                $bb = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
              }

              if($row->date_convention_10=="0000-00-00")
              {
                  $cc = "";
                }          

              else
              {
                $cc =implode('-',array_reverse  (explode('-',$row->date_convention_10)));
              }

              if($row->date_convention_5=="0000-00-00")
              {
                  $dd = "";
                }          

              else
              {
                $dd = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
              }

              if($row->date_convention_6=="0000-00-00")
              {
                  $ee = "";
                }          

              else
              {
                $ee = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
              }

              if($row->date_convention_7=="0000-00-00")
              {
                  $ff = "";
                }          

              else
              {
                $ff = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
              }


                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-organisme="'.$row->organisme.'" data-duree_formation="'.$row->duree_formation.'" data-prix_formation="'.$row->prix_formation.'" data-id_formation="'.$row->id_formation.'" data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" data-lieu_formation="'.$row->lieu_formation.'"  title="Modifier">Modifier Date</button></td>
<td class="border-primary"><button type="button" class="btn_modifier_formation btn btn-warning btn-sm" data-id="'.$row->id.'" data-id_formation="'.$row->id_formation.'" data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" data-lieu_formation="'.$row->lieu_formation.'" data-entreprise="'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'"  title="Modifier">Modifier Formation</button></td>
<td class="border-primary"><button type="button" class="btn_facture_heure btn btn-warning btn-sm" data-id="'.$row->id.'" data-organisme="'.$row->organisme.'" data-id_formation="'.$row->id_formation.'" 
data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" 
data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" data-lieu_formation="'.$row->lieu_formation.'" data-heure_debut_1 = "'.$row->heure_debut_1.'" data-heure_debut_2 = "'.$row->heure_debut_2.'" data-heure_debut_3 = "'.$row->heure_debut_3.'" data-heure_debut_4 = "'.$row->heure_debut_4.'" data-heure_debut_5 = "'.$row->heure_debut_5.'" data-heure_debut_6 = "'.$row->heure_debut_6.'" data-heure_debut_7 = "'.$row->heure_debut_7.'"  data-heure_debut_8 = "'.$row->heure_debut_8.'" data-heure_debut_9 = "'.$row->heure_debut_9.'" data-heure_debut_10 = "'.$row->heure_debut_10.'" data-heure_debut_111 = "'.$row->heure_debut_111.'" data-heure_debut_222 = "'.$row->heure_debut_222.'" data-heure_debut_333 = "'.$row->heure_debut_333.'" data-heure_debut_444 = "'.$row->heure_debut_444.'" data-heure_debut_555 = "'.$row->heure_debut_555.'" data-heure_debut_666 = "'.$row->heure_debut_666.'" data-heure_debut_777 = "'.$row->heure_debut_777.'" data-heure_debut_888 = "'.$row->heure_debut_888.'" data-heure_debut_999 = "'.$row->heure_debut_999.'" data-heure_debut_1010 = "'.$row->heure_debut_1010.'" data-heure_fin_1 = "'.$row->heure_fin_1.'" data-heure_fin_2 = "'.$row->heure_fin_2.'" data-heure_fin_3 = "'.$row->heure_fin_3.'" data-heure_fin_4 = "'.$row->heure_fin_4.'" data-heure_fin_5 = "'.$row->heure_fin_5.'" data-heure_fin_6 = "'.$row->heure_fin_6.'" data-heure_fin_7 = "'.$row->heure_fin_7.'" data-heure_fin_8 = "'.$row->heure_fin_8.'" data-heure_fin_9 = "'.$row->heure_fin_9.'" data-heure_fin_10 = "'.$row->heure_fin_10.'" data-heure_fin_111 = "'.$row->heure_fin_111.'" data-heure_fin_222 = "'.$row->heure_fin_222.'" data-heure_fin_333 = "'.$row->heure_fin_333.'" data-heure_fin_444 = "'.$row->heure_fin_444.'" data-heure_fin_555 = "'.$row->heure_fin_555.'" data-heure_fin_666 = "'.$row->heure_fin_666.'" data-heure_fin_777 = "'.$row->heure_fin_777.'" data-heure_fin_888 = "'.$row->heure_fin_888.'" data-heure_fin_999 = "'.$row->heure_fin_999.'" data-heure_fin_1010 = "'.$row->heure_fin_1010.'" title="Modifier">Modifier Heure</button></td>


<td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-organisme="'.$row->organisme.'" data-id="'.$row->id.'" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Supprimer</button></td>
<td class="border-primary"><button type="button" class="btn_qualiopi btn btn-primary btn-sm" data-organisme="'.$row->organisme.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Ajouter dossiers de formation sur Qualiopi</button></td>
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_convention_statistique()
{
   error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary">Facture</th>
                    <th class="border-primary">Emargement</th>
                    <th class="border-primary">Assiduité</th>
                  
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {

              if($row->date_convention_8=="0000-00-00")
              {
                  $aa = "";
                }          

              else
              {
                $aa = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
              }

              if($row->date_convention_9=="0000-00-00")
              {
                  $bb = "";
                }          

              else
              {
                $bb = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
              }

              if($row->date_convention_10=="0000-00-00")
              {
                  $cc = "";
                }          

              else
              {
                $cc =implode('-',array_reverse  (explode('-',$row->date_convention_10)));
              }

              if($row->date_convention_5=="0000-00-00")
              {
                  $dd = "";
                }          

              else
              {
                $dd = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
              }

              if($row->date_convention_6=="0000-00-00")
              {
                  $ee = "";
                }          

              else
              {
                $ee = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
              }

              if($row->date_convention_7=="0000-00-00")
              {
                  $ff = "";
                }          

              else
              {
                $ff = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
              }


                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_stagiaire_factures($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_stagiaire_emargement($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_stagiaire_assiduite($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                       
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_conventions_statistique()
{
   error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
   $nom_stagiaire = $this->input->post("nom_stagiaire");
    $data = $this->stagiaire_model->afficher_conventions($nom_stagiaire);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary">Facture</th>
                    <th class="border-primary">Emargement</th>
                    <th class="border-primary">Assiduité</th>
                  
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {

              if($row->date_convention_8=="0000-00-00")
              {
                  $aa = "";
                }          

              else
              {
                $aa = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
              }

              if($row->date_convention_9=="0000-00-00")
              {
                  $bb = "";
                }          

              else
              {
                $bb = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
              }

              if($row->date_convention_10=="0000-00-00")
              {
                  $cc = "";
                }          

              else
              {
                $cc =implode('-',array_reverse  (explode('-',$row->date_convention_10)));
              }

              if($row->date_convention_5=="0000-00-00")
              {
                  $dd = "";
                }          

              else
              {
                $dd = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
              }

              if($row->date_convention_6=="0000-00-00")
              {
                  $ee = "";
                }          

              else
              {
                $ee = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
              }

              if($row->date_convention_7=="0000-00-00")
              {
                  $ff = "";
                }          

              else
              {
                $ff = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
              }


                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_stagiaire_factures($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_stagiaire_emargement($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_stagiaire_assiduite($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                       
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

  public function liste_convention_groupes()
{
   error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Stage</th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                  
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {

              if($row->date_convention_8=="0000-00-00")
              {
                  $aa = "";
                }          

              else
              {
                $aa = implode('-',array_reverse  (explode('-',$row->date_convention_8)));
              }

              if($row->date_convention_9=="0000-00-00")
              {
                  $bb = "";
                }          

              else
              {
                $bb = implode('-',array_reverse  (explode('-',$row->date_convention_9)));
              }

              if($row->date_convention_10=="0000-00-00")
              {
                  $cc = "";
                }          

              else
              {
                $cc =implode('-',array_reverse  (explode('-',$row->date_convention_10)));
              }

              if($row->date_convention_5=="0000-00-00")
              {
                  $dd = "";
                }          

              else
              {
                $dd = implode('-',array_reverse  (explode('-',$row->date_convention_5)));
              }

              if($row->date_convention_6=="0000-00-00")
              {
                  $ee = "";
                }          

              else
              {
                $ee = implode('-',array_reverse  (explode('-',$row->date_convention_6)));
              }

              if($row->date_convention_7=="0000-00-00")
              {
                  $ff = "";
                }          

              else
              {
                $ff = implode('-',array_reverse  (explode('-',$row->date_convention_7)));
              }


                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" title="Modifier">Facture Groupe</button></td>
<td class="border-primary"><button type="button" class="btn_factures btn btn-success btn-sm" data-id_formation="'.$row->id_formation.'" data-date_debut="'.implode('-',array_reverse  (explode('-',$row->date_debut))).'" data-date_sign="'.implode('-',array_reverse  (explode('-',$row->date_signature))).'"  data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_fin="'.implode('-',array_reverse  (explode('-',$row->date_fin))).'" data-date_convention_1="'.implode('-',array_reverse  (explode('-',$row->date_convention_1))).'" data-date_convention_2="'.implode('-',array_reverse  (explode('-',$row->date_convention_2))).'" data-date_convention_3="'.implode('-',array_reverse  (explode('-',$row->date_convention_3))).'" data-date_convention_4="'.implode('-',array_reverse  (explode('-',$row->date_convention_4))).'" data-date_convention_5="'.$dd.'" data-date_convention_6="'.$ee.'" data-date_convention_7="'.$ff.'" data-date_convention_8="'.$aa.'" data-date_convention_9="'.$bb.'" data-date_convention_10="'.$cc.'" data-nom_formateur="'.$row->nom_formateur.'" data-prenom_formateur="'.$row->prenom_formateur.'" title="Modifier">Nouveau Facture Groupe</button></td>
<td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Certificat Groupe</button></td>
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function modifier_signature_stagiaire()
{
  $data = $this->stagiaire_model->recherche_stagiaire($this->input->post("nom_stagiairesss"), $this->input->post("prenom_stagiairesss"));
          foreach ($data as $row) {
        $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){

           
            $data = array('upload_data' => $this->upload->data());
           $x = $data['upload_data']['file_name'];
           $this->stagiaire_model->modifier_signature_stagiaire($row->nom_stagiaire,$row->prenom_stagiaire,$x);

         }
       }

       redirect("stagiaire/modifier_stagiaire");



}


public function modifier_signature()
{

  //error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{

          $data = $this->stagiaire_model->recherche_emargement($this->input->post("nom_stagiairesss"), $this->input->post("prenom_stagiairesss"));
          foreach ($data as $row) {
        $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("signature_1")){

           
            $data = array('upload_data' => $this->upload->data());
           $x = $data['upload_data']['file_name'];

         }
         else
         {
            $x = $row->signature_1;
    



        
          };

          if($this->upload->do_upload("signature_2")){

           
            $data = array('upload_data' => $this->upload->data());
           $y = $data['upload_data']['file_name'];
         }

           else{

             $y = $row->signature_2;
          };

          if($this->upload->do_upload("signature_3")){

           
            $data = array('upload_data' => $this->upload->data());
           $a = $data['upload_data']['file_name'];
         }
          else{
            $a = $row->signature_3;


        
          };

          if($this->upload->do_upload("signature_4")){

           
            $data = array('upload_data' => $this->upload->data());
           $b = $data['upload_data']['file_name'];
         }
           else{

            $b = $row->signature_4;
        
          };
          if($this->upload->do_upload("signature_5")){

           
            $data = array('upload_data' => $this->upload->data());
           $c = $data['upload_data']['file_name'];
         }
           else{

            $c = $row->signature_5;
        
          };

          if($this->upload->do_upload("signature_6")){

           
            $data = array('upload_data' => $this->upload->data());
           $d = $data['upload_data']['file_name'];
         }
          else
          {

            $d = $row->signature_6;
        
          };

          if($this->upload->do_upload("signature_7")){

           
            $data = array('upload_data' => $this->upload->data());
           $e = $data['upload_data']['file_name'];
         }
           else{

            $e = $row->signature_6;


        
          };

          if($this->upload->do_upload("signature_8")){

           
            $data = array('upload_data' => $this->upload->data());
           $f = $data['upload_data']['file_name'];
         }

           else{

            $f = $row->signature_8;
          };

          if($this->upload->do_upload("signature_9")){

           
            $data = array('upload_data' => $this->upload->data());
           $g = $data['upload_data']['file_name'];
         }

           else{
            $g = $row->signature_9;

        
          };

          if($this->upload->do_upload("signature_10")){

           
            $data = array('upload_data' => $this->upload->data());
           $h = $data['upload_data']['file_name'];
         }
           else{

            $h = $row->signature_10;


        
          };

          if($this->upload->do_upload("signature_11")){

           
            $data = array('upload_data' => $this->upload->data());
           $i = $data['upload_data']['file_name'];
         }

           else{

            $i = $row->signature_11;

        
          };

          if($this->upload->do_upload("signature_12")){

           
            $data = array('upload_data' => $this->upload->data());
           $j = $data['upload_data']['file_name'];
         }
           else
           {

            $j = $row->signature_12;



        
          };

           if($this->upload->do_upload("signature_13")){

           
            $data = array('upload_data' => $this->upload->data());
           $k = $data['upload_data']['file_name'];
         }

           else
           {
            $k = $row->signature_13;
        
          };

          if($this->upload->do_upload("signature_14")){

           
            $data = array('upload_data' => $this->upload->data());
           $l = $data['upload_data']['file_name'];
         }
           else
           {

            $l = $row->signature_14;

        
          };

           if($this->upload->do_upload("signature_15")){

           
            $data = array('upload_data' => $this->upload->data());
           $m = $data['upload_data']['file_name'];
         }
           else
           {

            $m = $row->signature_15;


        
          };

          if($this->upload->do_upload("signature_16")){

           
            $data = array('upload_data' => $this->upload->data());
           $n = $data['upload_data']['file_name'];
         }
           else
           {

            $n = $row->signature_16;
        
          };

           if($this->upload->do_upload("signature_17")){

           
            $data = array('upload_data' => $this->upload->data());
           $o = $data['upload_data']['file_name'];
         }
           else
           {
              $o = $row->signature_17;



        
          };

          if($this->upload->do_upload("signature_18")){

           
            $data = array('upload_data' => $this->upload->data());
           $p = $data['upload_data']['file_name'];
         }
           else
           {

            $p = $row->signature_18;

        
          };
           if($this->upload->do_upload("signature_19")){

           
            $data = array('upload_data' => $this->upload->data());
           $q = $data['upload_data']['file_name'];
         }
         else
         {
            $q = $row->signature_19;


        
          };

          if($this->upload->do_upload("signature_20")){

           
            $data = array('upload_data' => $this->upload->data());
           $r = $data['upload_data']['file_name'];
         }
         else
         {


            $r = $row->signature_20;
        
          };

           if($this->upload->do_upload("signature_formateur_1")){

           
            $data = array('upload_data' => $this->upload->data());
           $aa = $data['upload_data']['file_name'];
         }
         else
         {

            $aa = $row->signature_formateur_1;

        
          };

          if($this->upload->do_upload("signature_formateur_2")){

           
            $data = array('upload_data' => $this->upload->data());
           $bb = $data['upload_data']['file_name'];
            }
         else
         {

            $bb = $row->signature_formateur_2;


        
          };

if($this->upload->do_upload("signature_formateur_3")){

           
            $data = array('upload_data' => $this->upload->data());
           $cc = $data['upload_data']['file_name'];
 }
         else
         {

            $cc = $row->signature_formateur_3;


        
          };

          if($this->upload->do_upload("signature_formateur_4")){

           
            $data = array('upload_data' => $this->upload->data());
           $dd = $data['upload_data']['file_name'];
            }
         else
         {

            $dd = $row->signature_formateur_4;


        
          };
          if($this->upload->do_upload("signature_formateur_5")){

           
            $data = array('upload_data' => $this->upload->data());
           $ee = $data['upload_data']['file_name'];
            }
         else
         {

            $ee = $row->signature_formateur_5;


        
          };

          if($this->upload->do_upload("signature_formateur_6")){

           
            $data = array('upload_data' => $this->upload->data());
           $ff = $data['upload_data']['file_name'];

            }
         else
         {

            $ff = $row->signature_formateur_6;

        
          };

          if($this->upload->do_upload("signature_formateur_7")){

           
            $data = array('upload_data' => $this->upload->data());
           $gg = $data['upload_data']['file_name'];
            }
         else
         {

            $gg = $row->signature_formateur_7;


        
          };

          if($this->upload->do_upload("signature_formateur_8")){

           
            $data = array('upload_data' => $this->upload->data());
           $hh = $data['upload_data']['file_name'];
            }
         else
         {

            $hh = $row->signature_formateur_8;


        
          };

          if($this->upload->do_upload("signature_formateur_9")){

           
            $data = array('upload_data' => $this->upload->data());
           $ii = $data['upload_data']['file_name'];
            }
         else
         {

            $ii = $row->signature_formateur_9;


        
          };

          if($this->upload->do_upload("signature_formateur_10")){

           
            $data = array('upload_data' => $this->upload->data());
           $jj = $data['upload_data']['file_name'];
            }
         else
         {

            $jj = $row->signature_formateur_10;


        
          };

if($this->upload->do_upload("signature_formateur_11")){

           
            $data = array('upload_data' => $this->upload->data());
           $kk = $data['upload_data']['file_name'];
            }
         else
         {

            $kk = $row->signature_formateur_11;


        
          };

          if($this->upload->do_upload("signature_formateur_12")){

           
            $data = array('upload_data' => $this->upload->data());
           $ll = $data['upload_data']['file_name'];
            }
         else
         {

            $ll = $row->signature_formateur_12;


        
          };

          if($this->upload->do_upload("signature_formateur_13")){

           
            $data = array('upload_data' => $this->upload->data());
           $mm = $data['upload_data']['file_name'];
            }
         else
         {

            $mm = $row->signature_formateur_13;


        
          };

          if($this->upload->do_upload("signature_formateur_14")){

           
            $data = array('upload_data' => $this->upload->data());
           $nn = $data['upload_data']['file_name'];
            }
         else
         {

            $nn = $row->signature_formateur_14;


        
          };

           if($this->upload->do_upload("signature_formateur_15")){

           
            $data = array('upload_data' => $this->upload->data());
           $oo = $data['upload_data']['file_name'];
            }
         else
         {

            $oo = $row->signature_formateur_15;


        
          };

          if($this->upload->do_upload("signature_formateur_16")){

           
            $data = array('upload_data' => $this->upload->data());
           $pp = $data['upload_data']['file_name'];
            }
         else
         {

            $pp = $row->signature_formateur_16;


        
          };

           if($this->upload->do_upload("signature_formateur_17")){

           
            $data = array('upload_data' => $this->upload->data());
           $qq = $data['upload_data']['file_name'];
            }
         else
         {

            $qq = $row->signature_formateur_17;


        
          };

          if($this->upload->do_upload("signature_formateur_18")){

           
            $data = array('upload_data' => $this->upload->data());
           $rr = $data['upload_data']['file_name'];
            }
         else
         {

            $rr = $row->signature_formateur_18;


        
          };
           if($this->upload->do_upload("signature_formateur_19")){

           
            $data = array('upload_data' => $this->upload->data());
           $ss = $data['upload_data']['file_name'];

            }
         else
         {

            $ss = $row->signature_formateur_19;

        
          };

          if($this->upload->do_upload("signature_formateur_20")){

           
            $data = array('upload_data' => $this->upload->data());
           $tt = $data['upload_data']['file_name'];

            }
         else
         {

            $tt = $row->signature_formateur_20;

        
          };
        
         // $id =  $this->table_model->recherche_id($this->input->post('nom_formation'));
  $this->stagiaire_model->modifier_signature(
      $this->input->post("nom_stagiairesss"),
       $this->input->post("prenom_stagiairesss"),
       $x,
       $y,
       $a,
       $b,
       $c,
        $d,
      $e,
      $f,
      $g,
      $h,
     $i,
      $j,
             $k,
               $l,
             $m,
            $n,
              $o,
              $p,
              $q,
              $r,
              $aa,
             $bb,
             $cc,
              $dd,
               $ee,
              $ff,
               $gg,
            $hh,
               $ii,
              $jj,
               $kk,
             $ll,
         $mm,
              $nn,
             $oo,
               $pp,
           $qq,
             $rr,
             $ss,
              $tt

  );
}
        
           redirect("stagiaire/afficher_liste_emargement");




        }
          catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
            
 
}



public function modifier_signatures()
{

  //error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;           
        try{

          $data = $this->stagiaire_model->recherche_emargement($this->input->post("nom_stagiairesss"), $this->input->post("prenom_stagiairesss"));
          foreach ($data as $row) {
        $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("signature_1")){

           
            $data = array('upload_data' => $this->upload->data());
           $x = $data['upload_data']['file_name'];

         }
         else
         {
            $x = $row->signature_1;
    



        
          };

          if($this->upload->do_upload("signature_2")){

           
            $data = array('upload_data' => $this->upload->data());
           $y = $data['upload_data']['file_name'];
         }

           else{

             $y = $row->signature_2;
          };

          if($this->upload->do_upload("signature_3")){

           
            $data = array('upload_data' => $this->upload->data());
           $a = $data['upload_data']['file_name'];
         }
          else{
            $a = $row->signature_3;


        
          };

          if($this->upload->do_upload("signature_4")){

           
            $data = array('upload_data' => $this->upload->data());
           $b = $data['upload_data']['file_name'];
         }
           else{

            $b = $row->signature_4;
        
          };
          if($this->upload->do_upload("signature_5")){

           
            $data = array('upload_data' => $this->upload->data());
           $c = $data['upload_data']['file_name'];
         }
           else{

            $c = $row->signature_5;
        
          };

          if($this->upload->do_upload("signature_6")){

           
            $data = array('upload_data' => $this->upload->data());
           $d = $data['upload_data']['file_name'];
         }
          else
          {

            $d = $row->signature_6;
        
          };

          if($this->upload->do_upload("signature_7")){

           
            $data = array('upload_data' => $this->upload->data());
           $e = $data['upload_data']['file_name'];
         }
           else{

            $e = $row->signature_6;


        
          };

          if($this->upload->do_upload("signature_8")){

           
            $data = array('upload_data' => $this->upload->data());
           $f = $data['upload_data']['file_name'];
         }

           else{

            $f = $row->signature_8;
          };

          if($this->upload->do_upload("signature_9")){

           
            $data = array('upload_data' => $this->upload->data());
           $g = $data['upload_data']['file_name'];
         }

           else{
            $g = $row->signature_9;

        
          };

          if($this->upload->do_upload("signature_10")){

           
            $data = array('upload_data' => $this->upload->data());
           $h = $data['upload_data']['file_name'];
         }
           else{

            $h = $row->signature_10;


        
          };

          if($this->upload->do_upload("signature_11")){

           
            $data = array('upload_data' => $this->upload->data());
           $i = $data['upload_data']['file_name'];
         }

           else{

            $i = $row->signature_11;

        
          };

          if($this->upload->do_upload("signature_12")){

           
            $data = array('upload_data' => $this->upload->data());
           $j = $data['upload_data']['file_name'];
         }
           else
           {

            $j = $row->signature_12;



        
          };

           if($this->upload->do_upload("signature_13")){

           
            $data = array('upload_data' => $this->upload->data());
           $k = $data['upload_data']['file_name'];
         }

           else
           {
            $k = $row->signature_13;
        
          };

          if($this->upload->do_upload("signature_14")){

           
            $data = array('upload_data' => $this->upload->data());
           $l = $data['upload_data']['file_name'];
         }
           else
           {

            $l = $row->signature_14;

        
          };

           if($this->upload->do_upload("signature_15")){

           
            $data = array('upload_data' => $this->upload->data());
           $m = $data['upload_data']['file_name'];
         }
           else
           {

            $m = $row->signature_15;


        
          };

          if($this->upload->do_upload("signature_16")){

           
            $data = array('upload_data' => $this->upload->data());
           $n = $data['upload_data']['file_name'];
         }
           else
           {

            $n = $row->signature_16;
        
          };

           if($this->upload->do_upload("signature_17")){

           
            $data = array('upload_data' => $this->upload->data());
           $o = $data['upload_data']['file_name'];
         }
           else
           {
              $o = $row->signature_17;



        
          };

          if($this->upload->do_upload("signature_18")){

           
            $data = array('upload_data' => $this->upload->data());
           $p = $data['upload_data']['file_name'];
         }
           else
           {

            $p = $row->signature_18;

        
          };
           if($this->upload->do_upload("signature_19")){

           
            $data = array('upload_data' => $this->upload->data());
           $q = $data['upload_data']['file_name'];
         }
         else
         {
            $q = $row->signature_19;


        
          };

          if($this->upload->do_upload("signature_20")){

           
            $data = array('upload_data' => $this->upload->data());
           $r = $data['upload_data']['file_name'];
         }
         else
         {


            $r = $row->signature_20;
        
          };

        if($this->input->post("signature_formateur_1")){

           $aa = $this->input->post("signature_formateur_1");
         }
         else
         {
           

            $aa = $row->signature_formateur_1;
           
        
          };

          if($this->input->post("signature_formateur_2")){

           $bb = $this->input->post("signature_formateur_2");
            }
         else
         {
            $bb = $row->signature_formateur_2;
            


        
          };

          if($this->input->post("signature_formateur_3")){

           
            
           $cc = $this->input->post("signature_formateur_3");
 }
         else{
            $cc = $row->signature_formateur_3;
          

        
          };

          if($this->input->post("signature_formateur_4")){

           
            
           $dd = $this->input->post("signature_formateur_4");
            }
         else{
            $dd = $row->signature_formateur_4;
          

        
          };
          if($this->input->post("signature_formateur_5")){

           
            
           $ee = $this->input->post("signature_formateur_5");
            }
         else{
            $ee = $row->signature_formateur_5;


            
          };

          if($this->input->post("signature_formateur_6")){

           
            
           $ff = $this->input->post("signature_formateur_6");

            }
         else{
            $ff = $row->signature_formateur_6;
          
        
          };

          if($this->input->post("signature_formateur_7")){

           $gg = $this->input->post("signature_formateur_7");
            }
         else
         {

            $gg = $row->signature_formateur_7;


        
          };

          if($this->input->post("signature_formateur_8")){


           
           
           $hh = $this->input->post("signature_formateur_8");
            }
         else
         {

            $hh = $row->signature_formateur_8;


        
          };

          if($this->input->post("signature_formateur_9")){

           
           $ii = $this->input->post("signature_formateur_9");
            }
         else
         {

            $ii = $row->signature_formateur_9;


        
          };

          if($this->input->post("signature_formateur_10")){

           
            
           $jj = $this->input->post("signature_formateur_10");
            }
         else
         {

            $jj = $row->signature_formateur_10;


        
          };

          if($this->input->post("signature_formateur_11")){

           
           $kk = $this->input->post("signature_formateur_11");
            }
         else
         {

            $kk = $row->signature_formateur_11;


        
          };

          if($this->input->post("signature_formateur_12")){

           $ll = $this->input->post("signature_formateur_12");
            }
         else
         {

            $ll = $row->signature_formateur_12;


        
          };

          if($this->input->post("signature_formateur_13")){

           
            
           $mm = $this->input->post("signature_formateur_13");
            }
         else
         {

            $mm = $row->signature_formateur_13;


        
          };

          if($this->input->post("signature_formateur_14")){

           
            
           $nn = $this->input->post("signature_formateur_14");
            }
         else
         {

            $nn = $row->signature_formateur_14;


        
          };

          if($this->input->post("signature_formateur_15")){

           
            
           $oo = $this->input->post("signature_formateur_15");
            }
         else
         {

            $oo = $row->signature_formateur_15;


        
          };

          if($this->input->post("signature_formateur_16")){

           
            
           $pp = $this->input->post("signature_formateur_16");
            }
         else
         {

            $pp = $row->signature_formateur_16;


        
          };

          if($this->input->post("signature_formateur_17")){

           $qq = $this->input->post("signature_formateur_17");
            }
         else
         {

            $qq = $row->signature_formateur_17;


        
          };

          if($this->input->post("signature_formateur_18")){

           
            
           $rr = $this->input->post("signature_formateur_18");
            }
         else
         {

            $rr = $row->signature_formateur_18;


        
          };
          if($this->input->post("signature_formateur_19")){

           
            
           $ss = $this->input->post("signature_formateur_19");

            }
         else
         {

            $ss = $row->signature_formateur_19;

        
          };

          if($this->input->post("signature_formateur_20")){

           
            
           $tt = $this->input->post("signature_formateur_20");

            }
         else
         {

            $tt = $row->signature_formateur_20;

        
          };
        
         // $id =  $this->table_model->recherche_id($this->input->post('nom_formation'));
  $this->stagiaire_model->modifier_signature(
      $this->input->post("nom_stagiairesss"),
       $this->input->post("prenom_stagiairesss"),
       $x,
       $y,
       $a,
       $b,
       $c,
        $d,
      $e,
      $f,
      $g,
      $h,
     $i,
      $j,
             $k,
               $l,
             $m,
            $n,
              $o,
              $p,
              $q,
              $r,
              $aa,
             $bb,
             $cc,
              $dd,
               $ee,
              $ff,
               $gg,
            $hh,
               $ii,
              $jj,
               $kk,
             $ll,
         $mm,
              $nn,
             $oo,
               $pp,
           $qq,
             $rr,
             $ss,
              $tt

  );
}
        
           redirect("stagiaire/afficher_liste_emargement");




        }
          catch(Exception $e)
        {
            echo "Erreur :".$e->getMessage();
            
        }
            
 
}

 public function liste_emargementss()
{
 
error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
  // $data = $this->stagiaire_model->afficher_conventions();
   
    $data = $this->stagiaire_model->afficher_emargement();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                  
                    
                </tr>
        
        ';
   
           
 foreach($data as $row)
            {
              

                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-organisme="'.$row->organisme.'" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_signature_1 = "'.implode('-',array_reverse  (explode('-',$row->date_signature_1))).'" data-date_signature_2 = "'.implode('-',array_reverse  (explode('-',$row->date_signature_2))).'" data-date_signature_3 = "'.implode('-',array_reverse  (explode('-',$row->date_signature_3))).'"title="Modifier">Modifier Date</button></td>

<td class="border-primary"><button type="button" class="btn_modifier_signature btn btn-warning btn-sm" data-organisme="'.$row->organisme.'" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-nom_formateur="'.$this->stagiaire_model->recherche_nom_formateursss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'" data-prenom_formateur="'.$this->stagiaire_model->recherche_prenom_formateursss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'" title="Modifier">Modifier Signature</button></td>

<td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-organisme="'.$row->organisme.'" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-id = "'.$row->id.'" title="Modifier">Supprimer</button></td>
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


public function afficher_formations()
{
 

  // $data = $this->stagiaire_model->afficher_conventions();
   $annee = date('Y');
    $data = $this->stagiaire_model->afficher_formations();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom cours</th>
                    <th class="border-primary">Total</th>
                  
                    
                </tr>
        
        ';
   $total = 0;
           
 foreach($data as $row)
            {
              
                      $total +=  $this->stagiaire_model->calcul_formation($row->id_formation,$annee);
                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_formation.'</td>';

                        if($this->stagiaire_model->calcul_formation($row->id_formation, $annee)==0)
                        {
                          $output .= '<td class="border-primary"></td>';
                        }
                        else{
                          $output .= '<td class="border-primary">'.number_format($this->stagiaire_model->calcul_formation($row->id_formation,$annee),0,"."," ").' €</td>';
                        }
                        
                       
                  
                   $output .= '</tr>
                
                ';
            }
            
        
        $output .= '<tr><td class="border-primary"><b>TOTAL :</td><td class="border-primary"><b>'.number_format($total,2,"."," ").' €</b></td></table>';
        echo $output;
}


public function afficher_formationss()
{
 

  // $data = $this->stagiaire_model->afficher_conventions();
   $annee = $this->input->post("nom_stagiaire");
    $data = $this->stagiaire_model->afficher_formations();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom cours</th>
                    <th class="border-primary">Total</th>
                  
                    
                </tr>
        
        ';
   $total = 0;
           
 foreach($data as $row)
            {
              
                      $total +=  $this->stagiaire_model->calcul_formation($row->id_formation,$annee);
                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_formation.'</td>';

                        if($this->stagiaire_model->calcul_formation($row->id_formation, $annee)==0)
                        {
                          $output .= '<td class="border-primary"></td>';
                        }
                        else{
                          $output .= '<td class="border-primary">'.number_format($this->stagiaire_model->calcul_formation($row->id_formation,$annee),0,"."," ").' €</td>';
                        }
                        
                       
                  
                   $output .= '</tr>
                
                ';
            }
            
        
        $output .= '<tr><td class="border-primary"><b>TOTAL :</td><td class="border-primary"><b>'.number_format($total,2,"."," ").' €</b></td></table>';
        echo $output;
}

public function liste_emargementsss()
{
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
   $nom_stagiaire = $this->input->post("nom_stagiaire");
   //$organisme = $this->input->post("organisme");
    $data = $this->stagiaire_model->afficher_emargementsss($nom_stagiaire);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                     <th class="border-primary"></th>
                  
                    
                </tr>
        
        ';
    
           
 foreach($data as $row)
            {
              

                      $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-date_signature_1 = "'.implode('-',array_reverse  (explode('-',$row->date_signature_1))).'" data-date_signature_2 = "'.implode('-',array_reverse  (explode('-',$row->date_signature_2))).'" data-date_signature_3 = "'.implode('-',array_reverse  (explode('-',$row->date_signature_3))).'"title="Modifier">Modifier Date</button></td>

<td class="border-primary"><button type="button" class="btn_modifier_signature btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-nom_formateur="'.$this->stagiaire_model->recherche_nom_formateursss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'" data-prenom_formateur="'.$this->stagiaire_model->recherche_prenom_formateursss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'" title="Modifier">Modifier Signature</button></td>

<td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-id="'.$row->id.'" data-id_formation="'.$row->id_formation.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Supprimer</button></td>
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


  public function liste_stagiaires()
{
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $nom_stagiaire = $this->input->post("nom_stagiaire");
    $data = $this->stagiaire_model->afficher_conventions($nom_stagiaire);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    <th class="border-primary">Formation</th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                     <th class="border-primary"></th>
                 
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire).'</td>
                         <td class="border-primary">'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td>
                       
<td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_emargement").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-success" target="_blank">Emargement</a></td>
                        <td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_convention").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-warning" target="_blank">Facture</a></td>
                        <td class="border-primary"><a href=\''.site_url("stagiaire/imprimer_convention").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-warning" target="_blank">Assiduité</a></td>

                         <td class="border-primary"><a href=\''.site_url("stagiaire/certificat_realisation").'/'.$row->nom_stagiaire.'/'.$row->prenom_stagiaire.'/'.$row->id_formation.'\' class="btn btn-danger" target="_blank">Certificat</a></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function modifier_prenom_stagiaire()
{
  $this->stagiaire_model->modifier_prenom_stagiaire("KARINE","GUILLOU");
  echo "OK";
}
public function modifier_entreprisess()
{
  $this->stagiaire_model->modifier_entreprisess($this->input->post("num_accueil"),$this->input->post("nom_entreprise"),$this->input->post("nom_commercial"), $this->input->post("code_naf"), $this->input->post("num_siret"), $this->input->post("activite"), $this->input->post("forme_juridique"), $this->input->post("adresses"), $this->input->post("codepostals"), $this->input->post("villes"), $this->input->post("nom_stagiaires"), $this->input->post("prenom_stagiaires"));
  redirect('stagiaire/convention');
}

 public function liste_stagiairess()
{
    $nom_stagiaire = $this->input->post("nom_stagiaire");
    $organisme = $this->input->post("organisme");
    $data = $this->stagiaire_model->afficher_stagiairess($nom_stagiaire);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                 
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$row->nom_entreprise.'</td>
                        
                       

                        <td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-nom_entreprise="'.$row->nom_entreprise.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-nom_commercial = "'.$row->nom_commercial.'" data-activite = "'.$row->activite.'" data-code_naf = "'.$row->code_naf.'" data-date_naissance = "'.implode('-',array_reverse  (explode('-',$row->date_naissance))).'" data-numero_secu = "'.$row->numero_secu.'" data-diplome = "'.$row->diplome.'" data-mail = "'.$row->mail.'" data-numero_siret = "'.$row->numero_siret.'" data-forme_juridique = "'.$row->forme_juridique.'" data-rue = "'.$row->rue.'"  data-code_postal = "'.$row->code_postal.'" data-ville = "'.$row->ville.'" data-telephone = "'.$row->telephone.'" data-pt_accueil = "'.$row->nom_accueil.'" data-num_accueil = "'.$row->num_accueil.'" data-pt_interlocuteur = "'.$row->interlocuteur.'" data-pt_code_postal = "'.$row->pt_code_postal.'" data-pt_adresse = "'.$row->pt_adresse.'" data-pt_ville = "'.$row->pt_ville.'" data-pt_tel = "'.$row->pt_tel.'" data-pt_mail = "'.$row->pt_mail.'" title="Modifier">Modifier entreprise / participant</button></td>

                        <td class="border-primary"><button type="button" class="btn_signature btn btn-success btn-sm" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Modifier Signature</button></td>
                        
                        
                        <td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Supprimer</button></td>
                        <td class="border-primary"><button type="button" class="btn_qualiopi btn btn-primary btn-sm" data-nom_entreprise="'.$row->nom_entreprise.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-nom_commercial = "'.$row->nom_commercial.'" data-activite = "'.$row->activite.'" data-code_naf = "'.$row->code_naf.'" data-date_naissance = "'.implode('-',array_reverse  (explode('-',$row->date_naissance))).'" data-numero_secu = "'.$row->numero_secu.'" data-diplome = "'.$row->diplome.'" data-mail = "'.$row->mail.'" data-numero_siret = "'.$row->numero_siret.'" data-forme_juridique = "'.$row->forme_juridique.'" data-rue = "'.$row->rue.'"  data-code_postal = "'.$row->code_postal.'" data-ville = "'.$row->ville.'" data-telephone = "'.$row->telephone.'" data-num_accueil = "'.$row->num_accueil.'" title="Modifier">Enregistrer Stagiaire sur Qualiopi</button></td>
                        
                        
                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function ajouter_stagiaire_qualiopi()
{
  $curl = curl_init();
  /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
   'nom_formateur' => $this->input->post("nom_formateur"),
   'nom_stagiaire' => $this->input->post("nom_stagiaire")
   
 );*/
 
   curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/ajouter_stagiaire_qualiopi");
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_POST, 1);
   curl_setopt($curl, CURLOPT_POSTFIELDS, "nom_stagiaire=".$this->input->post("nom_stagiaire")."&prenom_stagiaire=".$this->input->post("prenom_stagiaire")."");
   //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
 // curl_setopt($curl, CURLOPT_COOKIE, $valeur);
 //  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
  // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));
 
   $result = curl_exec($curl);
   curl_close($curl);
 
   echo $result;
}

public function supprimer_stagiairess()
{


  $this->stagiaire_model->supprimer_stagiairess($this->input->post("nom_stagiaire"),

$this->input->post("prenom_stagiaire"));
}

public function modifier_stagiairess()
{


  $this->stagiaire_model->modifier_stagiairess($this->input->post("nom_stagiaires"),

$this->input->post("prenom_stagiaires"),
$this->input->post("nom_entreprise"),
$this->input->post("nom_commercial"),
$this->input->post("activite"),
$this->input->post("code_naf"),
implode('-',array_reverse  (explode('-',$this->input->post("date_naissance")))),
$this->input->post("numero_secu"),
$this->input->post("diplome"),
$this->input->post("mail"),
$this->input->post("numero_siret"),
$this->input->post("forme_juridique"),
$this->input->post("rue"),

$this->input->post("code_postal"),
$this->input->post("ville"),
$this->input->post("telephone"),
$this->input->post("num_accueil")
);


  $this->stagiaire_model->modifier_accueil($this->input->post("num_accueil"),$this->input->post("pt_accueil"),$this->input->post("pt_interlocuteur"),$this->input->post("pt_adresse"),$this->input->post("pt_code_postal"),$this->input->post("pt_ville"),$this->input->post("pt_tel"),$this->input->post("pt_mail"));
}

public function modifier_nom_naissance()
{
  $this->stagiaire_model->modifier_nom_naissance("FRUCTUOSO","FRUCTUOSO");
  echo "OK";
}

 public function liste_stagiairesss()
{
    
    $data = $this->stagiaire_model->afficher_stagiairesss();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                   
                    <th class="border-primary">Nom</th>
                    <th class="border-primary">Prénom</th>
                    <th class="border-primary">Entreprise</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                 
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->nom_stagiaire.'</td>
                        <td class="border-primary">'.$row->prenom_stagiaire.'</td>
                        <td class="border-primary">'.$row->nom_entreprise.'</td>
                        
                       

<td class="border-primary"><button type="button" class="btn_facture btn btn-warning btn-sm" data-nom_entreprise="'.$row->nom_entreprise.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-nom_commercial = "'.$row->nom_commercial.'" data-activite = "'.$row->activite.'" data-code_naf = "'.$row->code_naf.'" data-date_naissance = "'.implode('-',array_reverse  (explode('-',$row->date_naissance))).'" data-numero_secu = "'.$row->numero_secu.'" data-diplome = "'.$row->diplome.'" data-mail = "'.$row->mail.'" data-numero_siret = "'.$row->numero_siret.'" data-forme_juridique = "'.$row->forme_juridique.'" data-rue = "'.$row->rue.'"  data-code_postal = "'.$row->code_postal.'" data-ville = "'.$row->ville.'" data-telephone = "'.$row->telephone.'" data-pt_accueil = "'.$row->nom_accueil.'" data-num_accueil = "'.$row->num_accueil.'" data-pt_interlocuteur = "'.$row->interlocuteur.'" data-pt_code_postal = "'.$row->pt_code_postal.'" data-pt_adresse = "'.$row->pt_adresse.'" data-pt_ville = "'.$row->pt_ville.'" data-pt_tel = "'.$row->pt_tel.'" data-pt_mail = "'.$row->pt_mail.'" title="Modifier">Modifier entreprise / participant</button></td>

<td class="border-primary"><button type="button" class="btn_signature btn btn-success btn-sm" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Modifier Signature</button></td>


<td class="border-primary"><button type="button" class="btn_supprimers btn btn-danger btn-sm" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" title="Modifier">Supprimer</button></td>
<td class="border-primary"><button type="button" class="btn_qualiopi btn btn-primary btn-sm" data-nom_entreprise="'.$row->nom_entreprise.'" data-nom_stagiaire="'.$row->nom_stagiaire.'" data-prenom_stagiaire="'.$row->prenom_stagiaire.'" data-nom_commercial = "'.$row->nom_commercial.'" data-activite = "'.$row->activite.'" data-code_naf = "'.$row->code_naf.'" data-date_naissance = "'.implode('-',array_reverse  (explode('-',$row->date_naissance))).'" data-numero_secu = "'.$row->numero_secu.'" data-diplome = "'.$row->diplome.'" data-mail = "'.$row->mail.'" data-numero_siret = "'.$row->numero_siret.'" data-forme_juridique = "'.$row->forme_juridique.'" data-rue = "'.$row->rue.'"  data-code_postal = "'.$row->code_postal.'" data-ville = "'.$row->ville.'" data-telephone = "'.$row->telephone.'" data-pt_accueil = "'.$row->nom_accueil.'" data-num_accueil = "'.$row->num_accueil.'" title="Modifier">Enregistrer Stagiaire sur Qualiopi</button></td>

                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


public function lire_excel()
{
  $tmpfname = "QCM.xls";
  $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
  $objPHPExcel = $excelReader->load($tmpfname);
  $sheet = $objPHPExcel->setActiveSheetIndex(0);
  $max_ligne = $sheet->getHighestRow();
  for($i=1;$i<=$max_ligne;$i++)
  {
  $cell_1 = $sheet->getCell('A'.$i) ;
  echo '<ul>';
  //if($cell_1->getValue()!="")
 // {
   
    echo '<li>'.$cell_1->getValue()."</li>" ;
    $cell_2 = $sheet->getCell('B'.$i) ;
    echo "<ul>";
   // if($cell_2->getValue()!="")
   //   {
        echo '<li>'.$cell_2->getValue()."</li>" ;
  //    }
    echo "</ul>";
   // $max_ligne = $sheet->getHighestRow();
   // echo "Ligne :".$max_ligne;
  //}
  echo "</ul>";
  }

}

public function intervention_formateur()
	{
		
        // Read an Excel File
        $tmpfname = "example.xls";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $objPHPExcel = $excelReader->load($tmpfname);
        
        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Furkan Kahveci")
							 ->setLastModifiedBy("Furkan Kahveci")
							 ->setTitle("Office 2007 XLS Test Document")
							 ->setSubject("Office 2007 XLS Test Document")
							 ->setDescription("Description for Test Document")
							 ->setKeywords("phpexcel office codeigniter php")
							 ->setCategory("Test result file");

        // Create a first sheet
        $objPHPExcel->setActiveSheetIndex(0);
		/*
		$objPHPExcel->getActiveSheet()->getDefaultStyle()
->applyFromArray(array(
'font'=>array(
    'name'      =>  'Arial',
    'size'      =>  12,
    'bold'      => true),
'alignment'=>array(
    'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
'borders' => array(
    'allborders'=>array(
    'style' => PHPExcel_Style_Border::BORDER_DASHDOT))
    )
);*/

//$budget = 4257;
//$annee = 2020;
/*
$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
            'borders'=>array(
                'top'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_MEDIUMDASHDOTDOT),
                'bottom'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_DOUBLE ,
		    'color'=>array(
				'rgb' => '808080')))));
	*/			
	
	
/*$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
  'borders' => array(
    'bottom' => array(
      'style' => PHPExcel_Style_Border::BORDER_DOUBLE
    )
  )
));*/
/*if(date('Y')==2021)
{
				
$budget = $this->input->post("budget");

}
else
{
	$budget = $this->soldemodel->Nouveau_solde(date('Y')-1);
}*/
//$annee = date('Y');
$styleA1 = $objPHPExcel->getActiveSheet()->getStyle('A1');
$styleA1->applyFromArray(array(
    'font'=>array(
        'bold'=>true,
        'size'=>16,
        'name'=>'Arial',
        'color'=>array(
            'rgb'=>'000000'))
    ));
//$objPHPExcel->getActiveSheet()->duplicateStyle($styleA1,'A3:N3');
		
		foreach (range('A',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
         $objPHPExcel->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
			} ;
      foreach (range('B',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
        $objPHPExcel->getActiveSheet()
               ->getColumnDimension($col)
               ->setAutoSize(true);
     } ;
 
		foreach (range('C',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
         $objPHPExcel->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
			} ;
      foreach (range('D',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
        $objPHPExcel->getActiveSheet()
               ->getColumnDimension($col)
               ->setAutoSize(true);
     } ;
     foreach (range('E',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;

   foreach (range('F',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
    $objPHPExcel->getActiveSheet()
           ->getColumnDimension($col)
           ->setAutoSize(true);
 } ;
 foreach (range('G',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;
foreach (range('H',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;
foreach (range('I',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;




 
		foreach (range('J',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
         $objPHPExcel->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
			} ;
			foreach (range('K',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
				$objPHPExcel->getActiveSheet()
					   ->getColumnDimension($col)
					   ->setAutoSize(true);
				   } ;
				   
		
	      $stil=array(
            'borders' => array(
              'allborders' => array(
                //'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array('rgb' => '000000')
              )
            ),
            'alignment' => array(
              'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );
			$styleParDefaut = array(
    'font' => array(
        'name'   => 'Arial',
        'size'   => 10,
        'italic' => false,
        'bold'   => true,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'wraptext' => false
			)
		);

    $styleParDefaut1 = array(
      'font' => array(
          'name'   => 'Arial',
          'size'   => 16,
          'italic' => false,
          'bold'   => true,
      ),
      'alignment' => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          'wraptext' => false
        )
      );

      $stil=array(
        'borders' => array(
          'allborders' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
          'color' => array('rgb' => '000000')
          )
        ),
        'alignment' => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
      );
      $objPHPExcel->getActiveSheet()->getStyle('A1:K1')->applyFromArray($stil);
  
      // Merge Cells
      $objPHPExcel->getActiveSheet()->mergeCells('A1:K1');
			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'INTERVENTIONS DES FORMATEURS');
      $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleParDefaut1);
		
		 $datas = $this->stagiaire_model->afficher_formateur();
		$x = 2;
		foreach ($datas as $row) {
       // echo $row->nomencaissement;
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$x, $row->prenom_formateur);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$x, $row->nom_formateur);
		$objPHPExcel->getActiveSheet()->getStyle('A'.$x)->applyFromArray($styleParDefaut);
    $objPHPExcel->getActiveSheet()->getStyle('B'.$x)->applyFromArray($styleParDefaut);
    $datas1 = $this->stagiaire_model->afficher_intervention_formateur($row->nom_formateur,$row->prenom_formateur);
		$y = 1;
   



		foreach ($datas1 as $row1) {
       // echo $row->nomencaissement;
		//$objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y), addslashes($row1->nomcompte));
		$objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y), $row1->nom_stagiaire);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_1))));
    $objPHPExcel->getActiveSheet()->setCellValue('C'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_2))));
    $objPHPExcel->getActiveSheet()->setCellValue('D'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_3))));
    $objPHPExcel->getActiveSheet()->setCellValue('E'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_4))));

    if($objPHPExcel->getActiveSheet()->getCell('E'.($x+$y))->getValue()=="00-00-0000")
    {
      $objPHPExcel->getActiveSheet()->setCellValue('E'.($x+$y), "");
    }
    else{
      $objPHPExcel->getActiveSheet()->setCellValue('E'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_4))));
    }


    $objPHPExcel->getActiveSheet()->setCellValue('F'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_5))));
    if($objPHPExcel->getActiveSheet()->getCell('F'.($x+$y))->getValue()=="00-00-0000")
    {
      $objPHPExcel->getActiveSheet()->setCellValue('F'.($x+$y), "");
    }
    else{
      $objPHPExcel->getActiveSheet()->setCellValue('F'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_5))));
    }

    $objPHPExcel->getActiveSheet()->setCellValue('G'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_6))));
    if($objPHPExcel->getActiveSheet()->getCell('G'.($x+$y))->getValue()=="00-00-0000")
    {
      $objPHPExcel->getActiveSheet()->setCellValue('G'.($x+$y), "");
    }
    else{
      $objPHPExcel->getActiveSheet()->setCellValue('G'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_6))));
    }
    $objPHPExcel->getActiveSheet()->setCellValue('H'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_7))));

    if($objPHPExcel->getActiveSheet()->getCell('H'.($x+$y))->getValue()=="00-00-0000")
    {
      $objPHPExcel->getActiveSheet()->setCellValue('H'.($x+$y), "");
    }
    else{
      $objPHPExcel->getActiveSheet()->setCellValue('H'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_7))));
    }
    $objPHPExcel->getActiveSheet()->setCellValue('I'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_8))));

    if($objPHPExcel->getActiveSheet()->getCell('I'.($x+$y))->getValue()=="00-00-0000")
    {
      $objPHPExcel->getActiveSheet()->setCellValue('I'.($x+$y), "");
    }
    else{
      $objPHPExcel->getActiveSheet()->setCellValue('I'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_8))));
    }
    $objPHPExcel->getActiveSheet()->setCellValue('J'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_9))));

    if($objPHPExcel->getActiveSheet()->getCell('J'.($x+$y))->getValue()=="00-00-0000")
    {
      $objPHPExcel->getActiveSheet()->setCellValue('J'.($x+$y), "");
    }
    else{
      $objPHPExcel->getActiveSheet()->setCellValue('J'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_9))));
    }
    $objPHPExcel->getActiveSheet()->setCellValue('K'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_10))));

    if($objPHPExcel->getActiveSheet()->getCell('K'.($x+$y))->getValue()=="00-00-0000")
    {
      $objPHPExcel->getActiveSheet()->setCellValue('K'.($x+$y), "");
    }
    else{
      $objPHPExcel->getActiveSheet()->setCellValue('K'.($x+$y), implode('-',array_reverse  (explode('-',$row1->date_convention_10))));
    }

		$y++;
		} 
		
		
	  //  $x = $x + $y + 1;
	  $x = $x + $y + 1 ;
		} 
		
		
    $objPHPExcel->getActiveSheet()->setTitle('Intervention');
		
		
        // Save Excel xls File
        $filename="intervention_formateur.xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        ob_end_clean();
        header('Content-type: application/vnd.ms-excel');
	    //headerlvdt('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename='.$filename);
        $objWriter->save('php://output');



  }


  public function exporter_statistiques()
  {
      
    //////
   
    
    
    // Read an Excel File
      $tmpfname = "example.xls";
      $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
      $objPHPExcel = $excelReader->load($tmpfname);
      
      // Set document properties
      $objPHPExcel->getProperties()->setCreator("Furkan Kahveci")
             ->setLastModifiedBy("Furkan Kahveci")
             ->setTitle("Office 2007 XLS Test Document")
             ->setSubject("Office 2007 XLS Test Document")
             ->setDescription("Description for Test Document")
             ->setKeywords("phpexcel office codeigniter php")
             ->setCategory("Test result file");

      // Create a first sheet
      $objPHPExcel->setActiveSheetIndex(0);
  /*
  $objPHPExcel->getActiveSheet()->getDefaultStyle()
->applyFromArray(array(
'font'=>array(
  'name'      =>  'Arial',
  'size'      =>  12,
  'bold'      => true),
'alignment'=>array(
  'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
'borders' => array(
  'allborders'=>array(
  'style' => PHPExcel_Style_Border::BORDER_DASHDOT))
  )
);*/

//$budget = 4257;
//$annee = 2020;
/*
$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
          'borders'=>array(
              'top'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_MEDIUMDASHDOTDOT),
              'bottom'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_DOUBLE ,
      'color'=>array(
      'rgb' => '808080')))));
*/			


/*$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
'borders' => array(
  'bottom' => array(
    'style' => PHPExcel_Style_Border::BORDER_DOUBLE
  )
)
));*/
/*if(date('Y')==2021)
{
      
$budget = $this->input->post("budget");

}
else
{
$budget = $this->soldemodel->Nouveau_solde(date('Y')-1);
}*/
//$annee = date('Y');
$styleA1 = $objPHPExcel->getActiveSheet()->getStyle('A1');
$styleA1->applyFromArray(array(
  'font'=>array(
      'bold'=>true,
      'size'=>16,
      'name'=>'Arial',
      'color'=>array(
          'rgb'=>'000000'))
  ));
//$objPHPExcel->getActiveSheet()->duplicateStyle($styleA1,'A3:N3');
  
  foreach (range('A',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
       $objPHPExcel->getActiveSheet()
              ->getColumnDimension($col)
              ->setAutoSize(true);
    } ;
    foreach (range('B',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;

  foreach (range('C',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
       $objPHPExcel->getActiveSheet()
              ->getColumnDimension($col)
              ->setAutoSize(true);
    } ;
    foreach (range('D',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;
   
      $stil=array(
          'borders' => array(
            'allborders' => array(
              //'style' => PHPExcel_Style_Border::BORDER_THIN,
              'color' => array('rgb' => '000000')
            )
          ),
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          )
      );
    $styleParDefaut = array(
  'font' => array(
      'name'   => 'Arial',
      'size'   => 10,
      'italic' => false,
      'bold'   => true,
  ),
  'alignment' => array(
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
      'wraptext' => false
    )
  );

  $styleParDefaut1 = array(
    'font' => array(
        'name'   => 'Arial',
        'size'   => 16,
        'italic' => false,
        'bold'   => true,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'wraptext' => false
      )
    );

    $stil=array(
      'borders' => array(
        'allborders' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN,
        'color' => array('rgb' => '000000')
        )
      ),
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
      )
    );

    $data = $this->stagiaire_model->liste_formations();
    if($this->input->post("annee")==null)
    {
      $daty = date('Y');
    }
    else{
    if($this->input->post("annee")!= date('Y'))
    {
      $daty = $this->input->post("annee");
    }
    else{
      $daty = date('Y');
    }
  }

    $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray($stil);

    // Merge Cells
    $objPHPExcel->getActiveSheet()->mergeCells('A1:D1');
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'STATISTIQUES');
    $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleParDefaut1);
 
  $x = 3;
  $somme = 0;
  $y = 1;
  $xx = 0;
  $yy = 0;
  $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Année : ');
  $objPHPExcel->getActiveSheet()->setCellValue('B2', $daty);
 
  foreach ($data as $row) {
     // echo $row->nomencaissement;
     $xx = $xx + $this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty);
     $yy = $yy + ($this->stagiaire_model->nombre_heure($row->id_formation)*$this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty));

     $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y), $row->id_formation);
     $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y), $row->nom_formation);
     $objPHPExcel->getActiveSheet()->setCellValue('C'.($x+$y), $this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty));
     $objPHPExcel->getActiveSheet()->setCellValue('D'.($x+$y), $this->stagiaire_model->nombre_heure($row->id_formation)*$this->stagiaire_model->nombre_stagiaire($row->id_formation,$daty));
      $x++;
 
  }

  $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y+1), 'TOTAL :');
  $objPHPExcel->getActiveSheet()->setCellValue('C'.($x+$y+1), $xx);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.($x+$y+1), $yy);
 
  $objPHPExcel->getActiveSheet()->setTitle('Statistiques');
		
        // Save Excel xls File
        $filename="statistiques_".$daty.".xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        ob_end_clean();
        header('Content-type: application/vnd.ms-excel');
	    //headerlvdt('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename='.$filename);
        $objWriter->save('php://output');


  }



  public function telecharger_entre_deux_dates()
  {
      // Read an Excel File
      $tmpfname = "example.xls";
      $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
      $objPHPExcel = $excelReader->load($tmpfname);
      
      // Set document properties
      $objPHPExcel->getProperties()->setCreator("Furkan Kahveci")
             ->setLastModifiedBy("Furkan Kahveci")
             ->setTitle("Office 2007 XLS Test Document")
             ->setSubject("Office 2007 XLS Test Document")
             ->setDescription("Description for Test Document")
             ->setKeywords("phpexcel office codeigniter php")
             ->setCategory("Test result file");

      // Create a first sheet
      $objPHPExcel->setActiveSheetIndex(0);
  /*
  $objPHPExcel->getActiveSheet()->getDefaultStyle()
->applyFromArray(array(
'font'=>array(
  'name'      =>  'Arial',
  'size'      =>  12,
  'bold'      => true),
'alignment'=>array(
  'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
'borders' => array(
  'allborders'=>array(
  'style' => PHPExcel_Style_Border::BORDER_DASHDOT))
  )
);*/

//$budget = 4257;
//$annee = 2020;
/*
$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
          'borders'=>array(
              'top'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_MEDIUMDASHDOTDOT),
              'bottom'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_DOUBLE ,
      'color'=>array(
      'rgb' => '808080')))));
*/			


/*$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
'borders' => array(
  'bottom' => array(
    'style' => PHPExcel_Style_Border::BORDER_DOUBLE
  )
)
));*/
/*if(date('Y')==2021)
{
      
$budget = $this->input->post("budget");

}
else
{
$budget = $this->soldemodel->Nouveau_solde(date('Y')-1);
}*/
//$annee = date('Y');
$styleA1 = $objPHPExcel->getActiveSheet()->getStyle('A1');
$styleA1->applyFromArray(array(
  'font'=>array(
      'bold'=>true,
      'size'=>16,
      'name'=>'Arial',
      'color'=>array(
          'rgb'=>'000000'))
  ));
//$objPHPExcel->getActiveSheet()->duplicateStyle($styleA1,'A3:N3');
  
  foreach (range('A',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
       $objPHPExcel->getActiveSheet()
              ->getColumnDimension($col)
              ->setAutoSize(true);
    } ;
    foreach (range('B',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;

  foreach (range('C',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
       $objPHPExcel->getActiveSheet()
              ->getColumnDimension($col)
              ->setAutoSize(true);
    } ;
    foreach (range('D',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;
   foreach (range('E',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
    $objPHPExcel->getActiveSheet()
           ->getColumnDimension($col)
           ->setAutoSize(true);
 } ;

 foreach (range('F',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;
      $stil=array(
          'borders' => array(
            'allborders' => array(
              //'style' => PHPExcel_Style_Border::BORDER_THIN,
              'color' => array('rgb' => '000000')
            )
          ),
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          )
      );
    $styleParDefaut = array(
  'font' => array(
      'name'   => 'Arial',
      'size'   => 10,
      'italic' => false,
      'bold'   => true,
  ),
  'alignment' => array(
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
      'wraptext' => false
    )
  );

  $styleParDefaut1 = array(
    'font' => array(
        'name'   => 'Arial',
        'size'   => 16,
        'italic' => false,
        'bold'   => true,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'wraptext' => false
      )
    );

    $stil=array(
      'borders' => array(
        'allborders' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN,
        'color' => array('rgb' => '000000')
        )
      ),
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
      )
    );
    $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->applyFromArray($stil);

    // Merge Cells
    $objPHPExcel->getActiveSheet()->mergeCells('A1:F1');
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'LES STAGIAIRES');
    $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleParDefaut1);
    $date_debut = implode('-',array_reverse  (explode('-',$this->input->post("date_debut"))));
    $date_fin = implode('-',array_reverse  (explode('-',$this->input->post("date_fin"))));
    $annee = $this->input->post("annees");
    $data = $this->stagiaire_model->liste_par_mois_entre_deux_dates($date_debut,$date_fin,$annee);
  $x = 3;
  $somme = 0;
  $y = 1;
  $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Nom Stagiaire');
  $objPHPExcel->getActiveSheet()->setCellValue('B2', 'Prénom Stagiaire');
  $objPHPExcel->getActiveSheet()->setCellValue('C2', 'Stage');
  $objPHPExcel->getActiveSheet()->setCellValue('D2', 'Prix de la formation');
  $objPHPExcel->getActiveSheet()->setCellValue('E2', 'Date début');
  $objPHPExcel->getActiveSheet()->setCellValue('F2', 'Formateur');
 
  foreach ($data as $row) {
     // echo $row->nomencaissement;
     $somme += $this->stagiaire_model->recherche_prix_formations($row->id_formation);
     $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y), $row->nom_stagiaire);
     $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y), $row->prenom_stagiaire);
     $objPHPExcel->getActiveSheet()->setCellValue('C'.($x+$y), $this->stagiaire_model->recherche_nom_formation($row->id_formation));
     $objPHPExcel->getActiveSheet()->setCellValue('D'.($x+$y), $this->stagiaire_model->recherche_prix_formations($row->id_formation));
     $objPHPExcel->getActiveSheet()->setCellValue('E'.($x+$y), implode('-',array_reverse  (explode('-',$row->date_debut))));
     $objPHPExcel->getActiveSheet()->setCellValue('F'.($x+$y), $row->prenom_formateur.' '.$row->nom_formateur);
    $x++;
 
  }

  $objPHPExcel->getActiveSheet()->setCellValue('C'.($x+$y+1), 'TOTAL :');
  $objPHPExcel->getActiveSheet()->setCellValue('D'.($x+$y+1), number_format($somme, 2, ',', ' ').' €');
 
  $objPHPExcel->getActiveSheet()->setTitle('Les stagiaires');
		
		
        // Save Excel xls File
        $filename="les_stagiaires_".$date_debut."_".$date_fin.".xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        ob_end_clean();
        header('Content-type: application/vnd.ms-excel');
	    //headerlvdt('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename='.$filename);
        $objWriter->save('php://output');


  }

  public function telecharger_par_mois()
  {
      // Read an Excel File
      $tmpfname = "example.xls";
      $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
      $objPHPExcel = $excelReader->load($tmpfname);
      
      // Set document properties
      $objPHPExcel->getProperties()->setCreator("Furkan Kahveci")
             ->setLastModifiedBy("Furkan Kahveci")
             ->setTitle("Office 2007 XLS Test Document")
             ->setSubject("Office 2007 XLS Test Document")
             ->setDescription("Description for Test Document")
             ->setKeywords("phpexcel office codeigniter php")
             ->setCategory("Test result file");

      // Create a first sheet
      $objPHPExcel->setActiveSheetIndex(0);
  /*
  $objPHPExcel->getActiveSheet()->getDefaultStyle()
->applyFromArray(array(
'font'=>array(
  'name'      =>  'Arial',
  'size'      =>  12,
  'bold'      => true),
'alignment'=>array(
  'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
'borders' => array(
  'allborders'=>array(
  'style' => PHPExcel_Style_Border::BORDER_DASHDOT))
  )
);*/

//$budget = 4257;
//$annee = 2020;
/*
$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
          'borders'=>array(
              'top'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_MEDIUMDASHDOTDOT),
              'bottom'=>array(
                  'style'=>PHPExcel_Style_Border::BORDER_DOUBLE ,
      'color'=>array(
      'rgb' => '808080')))));
*/			


/*$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
'borders' => array(
  'bottom' => array(
    'style' => PHPExcel_Style_Border::BORDER_DOUBLE
  )
)
));*/
/*if(date('Y')==2021)
{
      
$budget = $this->input->post("budget");

}
else
{
$budget = $this->soldemodel->Nouveau_solde(date('Y')-1);
}*/
//$annee = date('Y');
$styleA1 = $objPHPExcel->getActiveSheet()->getStyle('A1');
$styleA1->applyFromArray(array(
  'font'=>array(
      'bold'=>true,
      'size'=>16,
      'name'=>'Arial',
      'color'=>array(
          'rgb'=>'000000'))
  ));
//$objPHPExcel->getActiveSheet()->duplicateStyle($styleA1,'A3:N3');
  
  foreach (range('A',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
       $objPHPExcel->getActiveSheet()
              ->getColumnDimension($col)
              ->setAutoSize(true);
    } ;
    foreach (range('B',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;

  foreach (range('C',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
       $objPHPExcel->getActiveSheet()
              ->getColumnDimension($col)
              ->setAutoSize(true);
    } ;
    foreach (range('D',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;
   foreach (range('E',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
    $objPHPExcel->getActiveSheet()
           ->getColumnDimension($col)
           ->setAutoSize(true);
 } ;

 foreach (range('F',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;
         
  
      $stil=array(
          'borders' => array(
            'allborders' => array(
              //'style' => PHPExcel_Style_Border::BORDER_THIN,
              'color' => array('rgb' => '000000')
            )
          ),
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          )
      );
    $styleParDefaut = array(
  'font' => array(
      'name'   => 'Arial',
      'size'   => 10,
      'italic' => false,
      'bold'   => true,
  ),
  'alignment' => array(
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
      'wraptext' => false
    )
  );

  $styleParDefaut1 = array(
    'font' => array(
        'name'   => 'Arial',
        'size'   => 16,
        'italic' => false,
        'bold'   => true,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'wraptext' => false
      )
    );

    $stil=array(
      'borders' => array(
        'allborders' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN,
        'color' => array('rgb' => '000000')
        )
      ),
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
      )
    );
    $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->applyFromArray($stil);

    // Merge Cells
    $objPHPExcel->getActiveSheet()->mergeCells('A1:F1');
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'LES STAGIAIRES');
    $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleParDefaut1);
    //$date_debut = implode('-',array_reverse  (explode('-',$this->input->post("date_debut"))));
    //$date_fin = implode('-',array_reverse  (explode('-',$this->input->post("date_fin"))));
    $annee = $this->input->post("annee");
    $data = $this->stagiaire_model->liste_par_mois($this->input->post("moiss"),$this->input->post("annee"));
  $x = 3;
  $y = 1;
  $somme = 0;
  $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Nom Stagiaire');
  $objPHPExcel->getActiveSheet()->setCellValue('B2', 'Prénom Stagiaire');
  $objPHPExcel->getActiveSheet()->setCellValue('C2', 'Stage');
  $objPHPExcel->getActiveSheet()->setCellValue('D2', 'Prix de la formation');
  $objPHPExcel->getActiveSheet()->setCellValue('E2', 'Date début');
  $objPHPExcel->getActiveSheet()->setCellValue('F2', 'Formateur');
  foreach ($data as $row) {
     // echo $row->nomencaissement;
     $somme += $this->stagiaire_model->recherche_prix_formations($row->id_formation);
     $objPHPExcel->getActiveSheet()->setCellValue('A'.($x+$y), $row->nom_stagiaire);
     $objPHPExcel->getActiveSheet()->setCellValue('B'.($x+$y), $row->prenom_stagiaire);
     $objPHPExcel->getActiveSheet()->setCellValue('C'.($x+$y), $this->stagiaire_model->recherche_nom_formation($row->id_formation));
     $objPHPExcel->getActiveSheet()->setCellValue('D'.($x+$y), $this->stagiaire_model->recherche_prix_formations($row->id_formation));
     $objPHPExcel->getActiveSheet()->setCellValue('E'.($x+$y), implode('-',array_reverse  (explode('-',$row->date_debut))));
     $objPHPExcel->getActiveSheet()->setCellValue('F'.($x+$y), $row->prenom_formateur.' '.$row->nom_formateur);
    $x++;
 
  }

  $objPHPExcel->getActiveSheet()->setCellValue('C'.($x+$y +1), 'TOTAL :');
  $objPHPExcel->getActiveSheet()->setCellValue('D'.($x+$y +1), number_format($somme, 2, ',', ' ').' €');
 
  $objPHPExcel->getActiveSheet()->setTitle('Les stagiaires');
		
		
        // Save Excel xls File
        $filename="les_stagiaires.xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        ob_end_clean();
        header('Content-type: application/vnd.ms-excel');
	    //headerlvdt('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename='.$filename);
        $objWriter->save('php://output');


  }



public function statistique_excel()
	{
		
        // Read an Excel File
        $tmpfname = "example.xls";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $objPHPExcel = $excelReader->load($tmpfname);
        
        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Furkan Kahveci")
							 ->setLastModifiedBy("Furkan Kahveci")
							 ->setTitle("Office 2007 XLS Test Document")
							 ->setSubject("Office 2007 XLS Test Document")
							 ->setDescription("Description for Test Document")
							 ->setKeywords("phpexcel office codeigniter php")
							 ->setCategory("Test result file");

        // Create a first sheet
        $objPHPExcel->setActiveSheetIndex(0);
		/*
		$objPHPExcel->getActiveSheet()->getDefaultStyle()
->applyFromArray(array(
'font'=>array(
    'name'      =>  'Arial',
    'size'      =>  12,
    'bold'      => true),
'alignment'=>array(
    'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
'borders' => array(
    'allborders'=>array(
    'style' => PHPExcel_Style_Border::BORDER_DASHDOT))
    )
);*/

//$budget = 4257;
//$annee = 2020;
/*
$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
            'borders'=>array(
                'top'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_MEDIUMDASHDOTDOT),
                'bottom'=>array(
                    'style'=>PHPExcel_Style_Border::BORDER_DOUBLE ,
		    'color'=>array(
				'rgb' => '808080')))));
	*/			
	
	
/*$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(array(
  'borders' => array(
    'bottom' => array(
      'style' => PHPExcel_Style_Border::BORDER_DOUBLE
    )
  )
));*/
/*if(date('Y')==2021)
{
				
$budget = $this->input->post("budget");

}
else
{
	$budget = $this->soldemodel->Nouveau_solde(date('Y')-1);
}*/
//$annee = date('Y');
$styleA1 = $objPHPExcel->getActiveSheet()->getStyle('A1');
$styleA1->applyFromArray(array(
    'font'=>array(
        'bold'=>true,
        'size'=>16,
        'name'=>'Arial',
        'color'=>array(
            'rgb'=>'000000'))
    ));
//$objPHPExcel->getActiveSheet()->duplicateStyle($styleA1,'A3:N3');
		
		foreach (range('A',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
         $objPHPExcel->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
			} ;
      foreach (range('B',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
        $objPHPExcel->getActiveSheet()
               ->getColumnDimension($col)
               ->setAutoSize(true);
     } ;
 
		foreach (range('C',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
         $objPHPExcel->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
			} ;
      foreach (range('D',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
        $objPHPExcel->getActiveSheet()
               ->getColumnDimension($col)
               ->setAutoSize(true);
     } ;
     foreach (range('E',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
      $objPHPExcel->getActiveSheet()
             ->getColumnDimension($col)
             ->setAutoSize(true);
   } ;

   foreach (range('F',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
    $objPHPExcel->getActiveSheet()
           ->getColumnDimension($col)
           ->setAutoSize(true);
 } ;
 foreach (range('G',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;
foreach (range('H',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;
foreach (range('I',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
  $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
         ->setAutoSize(true);
} ;




 
		foreach (range('J',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
         $objPHPExcel->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
			} ;
			foreach (range('K',  $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
				$objPHPExcel->getActiveSheet()
					   ->getColumnDimension($col)
					   ->setAutoSize(true);
				   } ;
				   
		
	      $stil=array(
            'borders' => array(
              'allborders' => array(
                //'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array('rgb' => '000000')
              )
            ),
            'alignment' => array(
              'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );
			$styleParDefaut = array(
    'font' => array(
        'name'   => 'Arial',
        'size'   => 10,
        'italic' => false,
        'bold'   => true,
    ),
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'wraptext' => false
			)
		);

    $styleParDefaut1 = array(
      'font' => array(
          'name'   => 'Arial',
          'size'   => 16,
          'italic' => false,
          'bold'   => true,
      ),
      'alignment' => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          'wraptext' => false
        )
      );

      $stil=array(
        'borders' => array(
          'allborders' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
          'color' => array('rgb' => '000000')
          )
        ),
        'alignment' => array(
          'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
      );
      $objPHPExcel->getActiveSheet()->getStyle('A1:K1')->applyFromArray($stil);
  
      // Merge Cells
      $objPHPExcel->getActiveSheet()->mergeCells('A1:G1');
			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'STATISTIQUES DES DOSSIERS DE FIN DE STAGES');
      $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleParDefaut1);




    $objPHPExcel->getActiveSheet()->setCellValue('A2','Nom');
    $objPHPExcel->getActiveSheet()->setCellValue('B2','Prénom');
    $objPHPExcel->getActiveSheet()->setCellValue('C2','Entreprise');
    $objPHPExcel->getActiveSheet()->setCellValue('D2','Stage');
    $objPHPExcel->getActiveSheet()->setCellValue('E2','Facture');
    $objPHPExcel->getActiveSheet()->setCellValue('F2','Emargement');
    $objPHPExcel->getActiveSheet()->setCellValue('G2','Assiduité');
    $objPHPExcel->getActiveSheet()->getStyle('A2:G2')->applyFromArray($styleParDefaut);
      
		
		  $data = $this->stagiaire_model->afficher_convention();
		$x = 3;
		foreach ($data as $row) {
       // echo $row->nomencaissement;
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$x, $row->nom_stagiaire);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$x, $row->prenom_stagiaire);
	//	$objPHPExcel->getActiveSheet()->getStyle('A'.$x)->applyFromArray($styleParDefaut);
 //   $objPHPExcel->getActiveSheet()->getStyle('B'.$x)->applyFromArray($styleParDefaut);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$x, $this->stagiaire_model->recherche_entreprise($row->nom_stagiaire, $row->prenom_stagiaire));
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$x, $this->stagiaire_model->recherche_nom_formation($row->id_formation));
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$x, $this->stagiaire_model->recherche_stagiaire_factures($row->nom_stagiaire, $row->prenom_stagiaire));
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$x, $this->stagiaire_model->recherche_stagiaire_emargement($row->nom_stagiaire, $row->prenom_stagiaire));
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$x, $this->stagiaire_model->recherche_stagiaire_assiduite($row->nom_stagiaire, $row->prenom_stagiaire));


   
		
	  //  $x = $x + $y + 1;
	  $x = $x + 1 ;
		} 
		
		
    $objPHPExcel->getActiveSheet()->setTitle('Statistique');
		
		
        // Save Excel xls File
        $filename="statistique_demande_de_fin.xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        ob_end_clean();
        header('Content-type: application/vnd.ms-excel');
	    //headerlvdt('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename='.$filename);
        $objWriter->save('php://output');



  }




    /**
     * Statistiques BPF - Cerfa 10443*17
     */
    public function stats_bpf()
    {
        $this->global["pageTitle"] = "Statistiques BPF";
        $this->loadViews("stagiaire/stats_bpf", $this->global, NULL, NULL);
    }

    /**
     * Configuration BPF
     */
    public function stats_bpf_config()
    {
        $this->global["pageTitle"] = "Configuration BPF";
        $this->loadViews("stagiaire/stats_bpf_config", $this->global, NULL, NULL);
    }

    /**
     * Autocomplete stagiaires - retourne JSON pour remplissage auto du formulaire
     * URL: stagiaire/get_autocomplete_stagiaire?term=XXX
     */
    public function get_autocomplete_stagiaire() {
        header('Content-Type: application/json; charset=utf-8');
        $term = $this->input->get('term');
        if (!$term || strlen(trim($term)) < 2) { echo '[]'; return; }

        $termLike = '%' . trim($term) . '%';
        $sql = "SELECT id_stagiaire, nom_stagiaire, prenom_stagiaire,
                nom_naissance, DATE_FORMAT(date_naissance,'%d/%m/%Y') as date_naissance,
                numero_secu, tel, telephone, mail, diplome,
                monsieur, madame,
                moins_un_an, entre_un_et_trois_ans, entre_quatre_et_dix_ans, plus_de_dix_ans
                FROM Stagiaire
                WHERE nom_stagiaire LIKE ? OR prenom_stagiaire LIKE ?
                ORDER BY nom_stagiaire, prenom_stagiaire ASC LIMIT 15";
        $query = $this->db->query($sql, [$termLike, $termLike]);
        $rows = [];
        foreach ($query->result_array() as $row) {
            $duree = '';
            if ($row['moins_un_an']) $duree = 'Moin un ans';
            elseif ($row['entre_un_et_trois_ans']) $duree = 'Mois trois ans';
            elseif ($row['entre_quatre_et_dix_ans']) $duree = 'Entre quatre et dix ans';
            elseif ($row['plus_de_dix_ans']) $duree = 'Plus de dix ans';
            $rows[] = [
                'id'            => $row['id_stagiaire'],
                'label'         => trim($row['nom_stagiaire'] . ' ' . $row['prenom_stagiaire']),
                'value'         => trim($row['nom_stagiaire']),
                'nom'           => $row['nom_stagiaire'],
                'prenom'        => $row['prenom_stagiaire'],
                'nom_naissance' => $row['nom_naissance'],
                'date_naissance'=> $row['date_naissance'],
                'numero_secu'   => $row['numero_secu'],
                'tel'           => $row['tel'] ?: $row['telephone'],
                'mail'          => $row['mail'],
                'diplome'       => $row['diplome'],
                'sexe'          => ($row['monsieur'] ? 'Mr' : ($row['madame'] ? 'Mme' : '')),
                'duree'         => $duree,
            ];
        }
        echo json_encode($rows, JSON_UNESCAPED_UNICODE);
    }


}