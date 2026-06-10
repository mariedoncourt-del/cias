<?php
class Creation extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('table_model');
    }


    function modifier_table_formateur()
    {
      $this->table_model->modifier_table_formateur();
      echo "OK";
    }

    function creation_table_email()
    {
      $this->table_model->creation_table_email();
      echo "OK";
    }

    public function organisme()
    {
      $this->table_model->modifier_table_stagiaire_1();
      $this->table_model->modifier_table_convention_1();
      $this->table_model->modifier_table_emargement_1();
      $this->table_model->modifier_table_facture_1();
      $this->table_model->modifier_table_formation_1();
      $this->table_model->modifier_table_formateur_1();
    }

    public function modifier_table_evaluation_hot()
    {
      $this->table_model->modifier_table_evaluation_hot();
      echo "OK";
    }

    public function creation_table_evaluation_hot()
    {
      $this->table_model->creation_table_evaluation_hot();
      echo "OK";
    }

    public function modifier_table_support()
    {
      $this->table_model->modifier_table_support();
      echo "OK";
    }

    public function creation_table_support()
    {
      $this->table_model->creation_table_support();
      echo "OK";
    }

    function modifier_table_formateurss()
   {
    $this->table_model->modifier_table_formateurss();
    echo "OK";
   }

    public function creation_table_id_qualiopi()
    {
      $this->table_model->creation_table_id_qualiopi();
      echo "OK";
    }

    public function creation_table_organisme()
    {
      $this->table_model->creation_table_organisme();
      echo "Création OK";
    }

    public function creation_table_formation()
    {
    	$this->table_model->creation_table_formation();
        echo "Création OK!";
    }

    public function creation_table_signature_formateur()
    {
      $this->table_model->creation_table_signature_formateur();
      echo "OK";

    }

    public function modifier_table_programmess()
    {
      $this->table_model->modifier_table_programmess();
      echo "OK";
    }
  public function creation_table_formateur()
    {
        $this->table_model->creation_table_formateur();
         echo "Création OK!";
    }

    public function modifier_table_programmes()
    {
      $this->table_model->modifier_table_programmes();
      echo "OK";
    }

public function creation_table_accueil()
    {
        $this->table_model->creation_table_accueil();
         echo "Création OK!";
    }

  public function creation_table_stagiaire()
  {
    $this->table_model->creation_table_stagiaire();
         echo "Création OK!";
  }

    public function creation_table_convention()
  {
    $this->table_model->creation_table_convention();
         echo "Création OK!";
  }

  public function creation_table_emargement()
  {
    $this->table_model->creation_table_emargement();
         echo "Création OK!";
  }

  public function creation_table_archiveconvention()
  {
    $this->table_model->creation_table_archiveconvention();
         echo "Création OK!";
  }

  public function creation_table_archiveformulaire()
  {
    $this->table_model->creation_table_archiveformulaire();
         echo "Création OK!";
  }

public function creation_table_archiveemargement()
  {
    $this->table_model->creation_table_archiveemargement();
         echo "Création OK!";
  }
public function creation_table_archivecertificat()
  {
    $this->table_model->creation_table_archivecertificat();
         echo "Création OK!";
  }

  public function creation_table_archivefacture()
  {
    $this->table_model->creation_table_archivefacture();
         echo "Création OK!";
  }  

  public function creation_table_archiveassiduite()
  {
    $this->table_model->creation_table_archiveassiduite();
         echo "Création OK!";
  }  
  

public function creation_table_programmes()
{
  $this->table_model->creation_table_programmes();
         echo "Création OK!"; 
}
  public function creation_table_facture()
  {
    $this->table_model->creation_table_facture();
         echo "Création OK!"; 
  }

  public function modifier_table_convention()
  {
    $this->table_model->modifier_table_conventions();
   echo "Modification OK!";
  }
public function modifier_accueil()
{
   $this->table_model->modifier_table_accueil();
   echo "Modification OK!";
}

public function modifier_table_formation()
{
   $this->table_model->modifier_table_formation();
}

public function modifier_table_stagiaire()
{
  $this->table_model->modifier_table_stagiaire();
   echo "Modification OK!";
}

public function supprimer_stagiaire()
{
   $this->table_model->supprimer_stagiaire();
   echo "Suppression OK!";
}

public function supprimer_convention()
{
   $this->table_model->supprimer_convention();
   echo "Suppression OK!";
}

public function supprimer_emargement()
{
   $this->table_model->supprimer_emargement();
   echo "Suppression OK!";
}


public function supprimer_facture()
{
   $this->table_model->supprimer_facture();
   echo "Suppression OK!";
}



public function test_insertion_accueil()
{
    $data  = array('num_accueil' => '137' , 
      'nom_accueil' => 'CCI DU TARN',
       'interlocuteur' => 'Françoise CANTORO / Marie-Pierre MUNOZ CIRCUNS',
        'adresse' => '1 Avenue Général Hoche',
        'code_postal' => '81000',
          'ville' => 'ALBI',
  'tel' => '05 67 46 60 00',
  'mail' => 'agefice@tam.cci.fr',



       );
    $this->table_model->inserer_accueil($data);
    echo "Enregistrement OK";
}
public function test_insertion_formateur()
{
    $data  = array('nom_formateur' => 'PHILIPPE' , 'prenom_formateur' => 'CANO' );
    $this->table_model->inserer_formateur($data);
    echo "Enregistrement OK";
}

 public function afficher_formateur()
   {
        print_r($this->table_model->afficher_formateur());
    }

}

?>
