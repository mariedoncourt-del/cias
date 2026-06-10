<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Table_model extends CI_Model
{
   function recuperer(){
    $requete = $this->db->query('SELECT id,nom_entreprise,nom_participant,prenom_participant,date_debut from dossier');
    $resultat = $requete->result();
    return $resultat;
   }

   function creation_table_programmes()
   {
        
    $q = $this->db->query("CREATE TABLE programmes (id int primary key auto_increment, programme varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_email()
   {
        
    $q = $this->db->query("CREATE TABLE email (id int primary key auto_increment, date_mail varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_support()
   {
        
    $q = $this->db->query("CREATE TABLE support (id int primary key auto_increment, nom_support varchar(200) null, fichier_support varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_evaluation_hot()
   {
        
    $q = $this->db->query("CREATE TABLE evaluation_hot (id int primary key auto_increment, id_formation varchar(50) null, nom_stagiaire varchar(100) null, prenom_stagiaire varchar(50) null, eval_1 int null,  eval_2 int null, eval_3 int null, eval_4 int null, eval_5 int null, eval_6 int null, eval_7 int null, eval_8 int null) engine=innoDB");
        return $q;
   }
   function creation_table_id_qualiopi()
   {
        
    $q = $this->db->query("CREATE TABLE qualiopi (id int primary key auto_increment, id_formation varchar(50) null, nom_et_prenom varchar(200) null, prof varchar(100) null, formation varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_organisme()
   {
        
    $q = $this->db->query("CREATE TABLE Organisme (id int primary key auto_increment, raison_social varchar(200) null, num_declaration varchar(20) null, num_siret varchar(20) null, adresse varchar(200) null, code_postal varchar(10) null, ville varchar(200) null, nom_responsable varchar(100) null, prenom_responsable varchar(100) null, tel_responsable varchar(20) null, mail_resonsable varchar(50) null, madame_responsable varchar(2) null, monsieur_responsable varchar(2) null, madame_contact varchar(2) null, monsieur_contact varchar(2) null, nom_contact varchar(100) null, prenom_contact varchar(100) null, tel_contact varchar(20) null, mail_contact varchar(50) null) engine=innoDB");
        return $q;
   }
   function creation_table_signature_formateur()
   {
        $q = $this->db->query("CREATE TABLE signature_formateur (id int primary key auto_increment, nom_formateur varchar(200) null, prenom_formateur varchar(200) null, signatures varchar(50) null ) engine=innoDB");
        return $q;
   }

   function creation_table_archiveconvention()
   {
    $q = $this->db->query("CREATE TABLE archiveconvention (id int primary key auto_increment, programme varchar(200) null) engine=innoDB");
        return $q;
   }

function creation_table_archiveemargement()
   {
    $q = $this->db->query("CREATE TABLE archiveemargement (id int primary key auto_increment, programme varchar(200) null) engine=innoDB");
        return $q;
   }
   function creation_table_archiveassiduite()
   {
    $q = $this->db->query("CREATE TABLE archiveassiduite (id int primary key auto_increment, programme varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_archivefacture()
   {
    $q = $this->db->query("CREATE TABLE archivefacture (id int primary key auto_increment, programme varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_archivecertificat()
   {
    $q = $this->db->query("CREATE TABLE archivecertificat (id int primary key auto_increment, programme varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_archiveformulaire()
   {
    $q = $this->db->query("CREATE TABLE archiveformulaire (id int primary key auto_increment, programme varchar(200) null) engine=innoDB");
        return $q;
   }

   function creation_table_formateur()
   {
        $q = $this->db->query("CREATE TABLE Formateurs ( nom_formateur varchar(100) primary key not null, prenom_formateur varchar(100) null) engine=innoDB");
        return $q;
   }

    function creation_table_formation()
   {
        $q = $this->db->query("CREATE TABLE Formation ( id_formation varchar(20) primary key not null,nom_formation varchar(100) not null, prix_formation int null, duree_formation varchar(5) null, nom_formateur varchar(100), index(nom_formateur), constraint fk_formateur_formation foreign key(nom_formateur) references Formateurs(nom_formateur) on delete cascade on update cascade) engine=innoDB");
        return $q;
   }
   

      function creation_table_accueil()
   {
        $q = $this->db->query("CREATE TABLE Accueil ( num_accueil varchar(20) primary key not null,nom_accueil varchar(100) not null, interlocuteur varchar(100) null, adresse varchar(100) null, code_postal varchar(100) null, ville varchar(100) null, tel varchar(20) null, mail varchar(100) null) engine=innoDB");
        return $q;
   }

    function creation_table_facture()
   {
        $q = $this->db->query("CREATE TABLE Facture ( num_facture int primary key not null, date_facture date not null, nom_stagiaire varchar(100) null, prenom_stagiaire varchar(100) null, id_formation varchar(100) null) engine=innoDB");
        return $q;
   }


   
     function creation_table_stagiaire()
   {
        $q = $this->db->query("CREATE TABLE Stagiaire (nom_stagiaire varchar(100) not null,prenom_stagiaire varchar(100) not null, date_naissance date null, nom_naissance varchar(100) null, numero_secu varchar(20) null, diplome varchar(20) null, mail varchar(50) null, numero_siret varchar(100) null, forme_juridique varchar(100) null, code_naf varchar(100) null, activite varchar(100) null,nom_entreprise varchar(100) null,nom_commercial varchar(100) null, rue varchar(100) null, code_postal varchar(100) null,  ville varchar(100) null, monsieur varchar(2) null, madame varchar(2) null, moins_un_an varchar(2) null, entre_un_et_trois_ans varchar(2) null, entre_quatre_et_dix_ans varchar(2) null, plus_de_dix_ans varchar(2) null, telephone varchar(20) null, formation_entreprise varchar(2) null, signature varchar(100) null, primary key(nom_stagiaire,prenom_stagiaire)) engine=innoDB");
        return $q;
   }


   public function f_plus_de_dix_ans()
   {
    $q = $this->db->query("Update Stagiaire set plus_de_dix_ans = 'X' where nom_stagiaire like 'ROUQUETTE' and prenom_stagiaire like 'JACQUELINE'");
    return $q;
   }
   function creation_table_convention()
   {
        $q = $this->db->query("CREATE TABLE Convention (nom_stagiaire varchar(100) not null,prenom_stagiaire varchar(100) null, id_formation varchar(20) not null, date_debut date null, date_fin date null, date_convention_1 date null,date_convention_2 date null, date_convention_3 date null, date_convention_4 date null, date_convention_5 date null, date_convention_6 date null, date_convention_7 date null, date_convention_8 date null, date_convention_9 date null, date_convention_10 date null, date_convention_11 date null, date_convention_12 date null, heure_debut_1 varchar(10) null, heure_debut_2 varchar(10) null, heure_debut_3 varchar(10) null, heure_debut_4 varchar(10) null, heure_debut_5 varchar(10) null, heure_debut_6 varchar(10) null, heure_debut_7 varchar(10) null, heure_debut_8 varchar(10) null, heure_debut_9 varchar(10) null, heure_debut_10 varchar(10) null, heure_debut_11 varchar(10) null, heure_debut_12 varchar(10) null, heure_fin_1 varchar(10) null, heure_fin_2 varchar(10) null, heure_fin_3 varchar(10) null, heure_fin_4 varchar(10) null, heure_fin_5 varchar(10) null, heure_fin_6 varchar(10) null, heure_fin_7 varchar(10) null, heure_fin_8 varchar(10) null, heure_fin_9 varchar(10) null, heure_fin_10 varchar(10) null, heure_fin_11 varchar(10) null, heure_fin_12 varchar(10) null) engine=innoDB");
        return $q;
   }

   public function modifier_organisme()
   {
      $query = $this->db->query("update Thematique set organisme = 'MAF SAS'");
      return $query;
   }
   function creation_table_emargement()
   {
        $q = $this->db->query("CREATE TABLE Emargement (nom_stagiaire varchar(100) not null,prenom_stagiaire varchar(100) null, id_formation varchar(20) not null, date_signature_1 date null, date_signature_2 date null, date_signature_3 date null, signature_1 varchar(50) null, signature_2 varchar(50) null, signature_3 varchar(50) null, signature_4 varchar(50) null, signature_5 varchar(50) null, signature_6 varchar(50) null, signature_7 varchar(50) null, signature_8 varchar(50) null, signature_9 varchar(50) null, signature_10 varchar(50) null, signature_11 varchar(50) null, signature_12 varchar(50) null,signature_13 varchar(50) null, signature_14 varchar(50) null, signature_15 varchar(50) null, signature_16 varchar(50) null, signature_17 varchar(50) null, signature_18 varchar(50) null, signature_19 varchar(50) null, signature_20 varchar(50) null,signature_formateur_1 varchar(50) null, signature_formateur_2 varchar(50) null, signature_formateur_3 varchar(50) null, signature_formateur_4 varchar(50) null, signature_formateur_5 varchar(50) null, signature_formateur_6 varchar(50) null, signature_formateur_7 varchar(50) null, signature_formateur_8 varchar(50) null, signature_formateur_9 varchar(50) null, signature_formateur_10 varchar(50) null, signature_formateur_11 varchar(50) null, signature_formateur_12 varchar(50) null, signature_formateur_13 varchar(50) null, signature_formateur_14 varchar(50) null, signature_formateur_15 varchar(50) null, signature_formateur_16 varchar(50) null, signature_formateur_17 varchar(50) null, signature_formateur_18 varchar(50) null, signature_formateur_19 varchar(50) null, signature_formateur_20 varchar(50) null ) engine=innoDB");
        return $q;
   }
    function modifier_table_accueil()
   {
        $q = $this->db->query("ALTER TABLE Accueil MODIFY interlocuteur varchar(100)");
        return $q;
   }
   function modifier_table_support()
   {
        $q = $this->db->query("ALTER TABLE support add categorie varchar(100) null");
        return $q;
   }

   function modifier_table_formateur()
   {
        $q = $this->db->query("ALTER TABLE Formateurs add cv varchar(200) null");
        return $q;
   }

   function modifier_table_evaluation_hot()
   {
        $q = $this->db->query("ALTER TABLE evaluation_hot add eval_note double null, add sati_1 int null,add sati_2 int null, add sati_3 int null, add sati_4 int null ");
        return $q;
   }

   function modifier_table_emargement_id()
   {
        $q = $this->db->query("ALTER TABLE Emargement add id int auto_increment primary key");
        return $q;
   }

   function modifier_table_qualiopi()
   {
        $q = $this->db->query("ALTER TABLE qualiopi add id_cours varchar(100) null");
        return $q;
   }

   function modifier_table_formateurss()
   {
        $q = $this->db->query("ALTER TABLE Formateurs add cv_formateur varchar(200) null");
        return $q;
   }

  
   public function modifier_representant()
   {
    $query = $this->db->query("update Convention set representant = 'JADE GUERRERO' where nom_stagiaire like 'GUERRERO'");
    return $query;
   }
   function modifier_table_conventionsss()
   {
        $q = $this->db->query("ALTER TABLE Convention add representant varchar(200) null");
        return $q;
   }


   function modifier_table_conventionss()
   {
        $q = $this->db->query("ALTER TABLE Convention add lieu_formation varchar(200) null");
        return $q;
   }

    function modifier_table_stagiaire()
   {
        $q = $this->db->query("ALTER TABLE Stagiaire ADD num_accueil varchar(100) null");
        return $q;
   }

  

   public function modifier_programme($id, $prix, $idf, $duree, $organisme)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "UPDATE programmes SET prix = ?, id_formation = ?, duree = ? WHERE id LIKE ? AND organisme LIKE ?",
           array($prix, $idf, $duree, $id, $organisme)
       );
       return $query;
   }
   function modifier_table_programmes()
   {
        $q = $this->db->query("ALTER TABLE programmes ADD id_formation varchar(100) null, ADD prix int null, ADD duree varchar(20) null");
        return $q;
   }

   function modifier_table_stagiaire_1()
   {
        $q = $this->db->query("ALTER TABLE Stagiaire ADD organisme varchar(100) null");
        return $q;
   }
   function modifier_table_convention_1()
   {
        $q = $this->db->query("ALTER TABLE Convention ADD organisme varchar(100) null");
        return $q;
   }

   public function modif_programmes()
   {
    $query = $this->db->query("update programmes set organisme = 'MAF SAS'");
    return $query;
   }

   function modifier_table_programme_1()
   {
        $q = $this->db->query("ALTER TABLE programmes ADD organisme varchar(100) null");
        return $q;
   }
   function modifier_table_emargement_1()
   {
        $q = $this->db->query("ALTER TABLE Emargement ADD organisme varchar(100) null");
        return $q;
   }

   function modifier_table_facture_1()
   {
        $q = $this->db->query("ALTER TABLE Facture ADD organisme varchar(100) null");
        return $q;
   }

   function modifier_table_formation_1()
   {
        $q = $this->db->query("ALTER TABLE Formation ADD organisme varchar(100) null");
        return $q;
   }

   function modifier_table_formateur_1()
   {
        $q = $this->db->query("ALTER TABLE Formateurs ADD organisme varchar(100) null");
        return $q;
   }

    function modifier_table_conventions()
   {
        $q = $this->db->query("ALTER TABLE Convention ADD column i varchar(50) null");
        return $q;
   }

   function modifier_table_thematique()
   {
        $q = $this->db->query("ALTER TABLE Thematique ADD organisme varchar(100) null");
        return $q;
   }

  

   public function upload($data= array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        //return $this->db->insert_batch('gambar',$data);
        //$this->db->insert('programmes',$data);
     $this->db->insert_batch('programmes',$data);
    }

    
    public function uploadsignature($data= array()){
      // Insert Ke Database dengan Banyak Data Sekaligus
      //return $this->db->insert_batch('gambar',$data);
      //$this->db->insert('programmes',$data);
   $this->db->insert_batch('signature_formateur',$data);
  }

     public function uploadconvention($data= array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        //return $this->db->insert_batch('gambar',$data);
        //$this->db->insert('programmes',$data);
     $this->db->insert_batch('archiveconvention',$data);
    }

    public function uploadassiduite($data= array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        //return $this->db->insert_batch('gambar',$data);
        //$this->db->insert('programmes',$data);
     $this->db->insert_batch('archiveassiduite',$data);
    }


     public function uploadcertificat($data= array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        //return $this->db->insert_batch('gambar',$data);
        //$this->db->insert('programmes',$data);
     $this->db->insert_batch('archivecertificat',$data);
    }
 
 public function uploadformulaire($data= array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        //return $this->db->insert_batch('gambar',$data);
        //$this->db->insert('programmes',$data);
     $this->db->insert_batch('archiveformulaire',$data);
    }

 public function uploadfacture($data= array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        //return $this->db->insert_batch('gambar',$data);
        //$this->db->insert('programmes',$data);
     $this->db->insert_batch('archivefacture',$data);
    }

    public function uploademargement($data= array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        //return $this->db->insert_batch('gambar',$data);
        //$this->db->insert('programmes',$data);
     $this->db->insert_batch('archiveemargement',$data);
    }



   public function inserer_accueil($data=array())
   {
      $this->db->insert('Accueil',$data);
   }


    function creation_table_thematique()
   {
        $q = $this->db->query("CREATE TABLE Thematique ( nom_thematique varchar(100) primary key not null) engine=innoDB");
        return $q;
   }

   public function modifier_table_formation()
   {
      $q = $this->db->query("ALTER TABLE Formation ADD programme varchar(150) null");
      return $q;
   }

    public function modifier_table_convention()
   {
      $q = $this->db->query("ALTER TABLE Convention ADD date_signature date null");
        return $q;
      /*$q = $this->db->query("ALTER TABLE Convention ADD (heure_debut_111 varchar(10) null, heure_debut_222 varchar(10) null, heure_debut_333 varchar(10) null, heure_debut_444 varchar(10) null, heure_debut_555 varchar(10) null, heure_debut_666 varchar(10) null, heure_debut_777 varchar(10) null, heure_debut_888 varchar(10) null, heure_debut_999 varchar(10) null, heure_debut_1010 varchar(10) null, heure_debut_1111 varchar(10) null, heure_debut_1212 varchar(10) null, heure_fin_111 varchar(10) null, heure_fin_222 varchar(10) null, heure_fin_333 varchar(10) null, heure_fin_444 varchar(10) null, heure_fin_555 varchar(10) null, heure_fin_666 varchar(10) null, heure_fin_777 varchar(10) null, heure_fin_888 varchar(10) null, heure_fin_999 varchar(10) null, heure_fin_1010 varchar(10) null, heure_fin_1111 varchar(10) null, heure_fin_1212 varchar(10) null)");
      return $q;*/
   }

   public function recherche_prenom_formateur($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT prenom_formateur AS prenom_formateur FROM Formateurs WHERE nom_formateur LIKE ?",
           array($nom)
       );
       foreach ($query->result() as $row) {
           $data = $row->prenom_formateur;
       }
       return isset($data) ? $data : '';
   }

   public function recherche_id($nomformation)
   {
       $data = null; // v9.3 - initialiser
       if(empty($nomformation)) return null;
       $array_of_words = explode(" ", $nomformation);
       $output = array_slice($array_of_words, 0, 3);
       $rch = implode(" ", $output);
       $query = $this->db->query("SELECT id_formation FROM Formation WHERE nom_formation LIKE ? OR nom_formation LIKE ? LIMIT 1",
           array($rch.'%', $rch));
       foreach ($query->result() as $row) {
           $data = $row->id_formation;
       }
       return $data;
   }

   public function make_query()
{
    //$query = "select * from Formation where nom_formation like '%".$nom."%'";
  $query = "select * from Formation";
    
    return $query;
}

function count_al_formation()
  {
    $query = $this->make_query();
    $data = $this->db->query($query);
    return $data->num_rows();
  }

  public function Recherche_formateur($nomformateur)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT prenom_formateur FROM Formateurs WHERE nom_formateur LIKE ?",
           array($nomformateur)
       );
       $data = '';
       foreach ($query->result() as $row) {
           $data = $row->prenom_formateur;
       }
       return $data;
   }

    

 public function Recherche_formation($nomformation)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT prix_formation, duree_formation, nom_formateur, nom_thematique FROM Formation WHERE nom_formation LIKE ?",
           array($nomformation)
       );
       return $query;
   }

     public function Recherche_formation_convention($nomformation, $nomstagiaire, $prenomstagiaire)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM Convention WHERE id_formation LIKE ? AND nom_stagiaire LIKE ? AND prenom_stagiaire LIKE ?",
           array($nomformation, $nomstagiaire, $prenomstagiaire)
       );
       return $query;
   }
  public function Recherche_accueil($nomformateur)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT nom_accueil, interlocuteur, adresse, code_postal, ville, tel, mail FROM Accueil WHERE num_accueil LIKE ?",
           array($nomformateur)
       );
       return $query;
   }


    function search_formateur($title){
    $this->db->like('nom_formateur', $title , 'both');
    $this->db->order_by('nom_formateur', 'ASC');
    $this->db->limit(20);
    return $this->db->get('Formateurs')->result();
  }
  
  function search_programme($title)
  {
     $this->db->like('programme', $title , 'both');
    $this->db->order_by('programme', 'ASC');
    $this->db->limit(20);
    return $this->db->get('programmes')->result();
  }

   function search_archive_convention($title)
  {
     $this->db->like('programme', $title , 'both');
    $this->db->order_by('programme', 'ASC');
    $this->db->limit(20);
    return $this->db->get('archiveconvention')->result();
  }

    function search_archive_formulaire($title)
  {
     $this->db->like('programme', $title , 'both');
    $this->db->order_by('programme', 'ASC');
    $this->db->limit(20);
    return $this->db->get('archiveformulaire')->result();
  }
  
    function search_formation($title){
    $this->db->like('nom_formation', $title , 'both');
    $this->db->order_by('nom_formation', 'ASC');
    $this->db->limit(20);
    return $this->db->get('Formation')->result();
  }

  public function search_signature($signatures, $nom_formateur, $prenom_formateur)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM signature_formateur WHERE signatures LIKE ? AND nom_formateur LIKE ? AND prenom_formateur LIKE ? LIMIT 10",
           array('%'.$signatures.'%', $nom_formateur, $prenom_formateur)
       );
       return $query;
   }

   function search_thematique($title){
    $this->db->like('nom_thematique', $title , 'both');
    $this->db->order_by('nom_thematique', 'ASC');
    $this->db->limit(20);
    return $this->db->get('Thematique')->result();
  }
  

   public function fetch_data_formation($limit,$start)
{
    //$query = $this->make_query();
    //$query .= ' limit '.$start.', '.$limit;
$query = "select * from Formation limit 0,500";
 // $query = "select * from Formation limit 0,4";

    $datas = $this->db->query($query);
    $output ='';
   // if($datas->num_rows()>0)
   // {
        $output.='<table class="table table-striped" width=100%><tr><td>ID</td><td>Formation</td><td>Prix</td><td>Duree</td><td>Formateur</td></tr>';
        foreach($datas->result() as $row)
            {
                $output.= '<tr><td>'.$row->id_formation.'</td><td>'.$row->nom_formation.'</td><td>'.$row->prix_formation.'</td><td>'.$row->duree_formation.'</td>
                <td>'.$row->nom_formation.'</td>
                
                </tr>';
                
            }
        $output .= '</table>';
   // }
  //  else{
  //      $output = "Enregistrement non trouvé";
  //  }
    return $output;
}

   function inserer_formateur($data=array())
   {
      $this->db->insert('Formateurs',$data);
   }
   function inserer_formation($data=array())
   {
      $this->db->insert('Formation',$data);
   }
 function inserer_thematique($data=array())
   {
      $this->db->insert('Thematique',$data);
   }
public function liste_archive_conventions($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM archiveconvention WHERE programme LIKE ?",
           array($nom)
       );
       return $query;
   }

public function liste_archive_assiduites($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM archiveassiduite WHERE programme LIKE ?",
           array($nom)
       );
       return $query;
   }
public function liste_archive_factures($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM archivefacture WHERE programme LIKE ?",
           array($nom)
       );
       return $query;
   }
public function liste_archive_certificats($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM archivecertificat WHERE programme LIKE ?",
           array($nom)
       );
       return $query;
   }

public function liste_archive_emargements($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM archiveemargement WHERE programme LIKE ?",
           array($nom)
       );
       return $query;
   }

public function liste_archive_convention()
{
  $query = $this->db->query("SELECT * FROM archiveconvention");
      return $query->result();
}

public function liste_archive_emargement()
{
  $query = $this->db->query("SELECT * FROM archiveemargement");
      return $query->result();
}

public function liste_archive_assiduite()
{
  $query = $this->db->query("SELECT * FROM archiveassiduite");
      return $query->result();
}


public function liste_archive_facture()
{
  $query = $this->db->query("SELECT * FROM archivefacture");
      return $query->result();
}

public function liste_archive_formulaire()
{
  $query = $this->db->query("SELECT * FROM archiveformulaire");
      return $query->result();
}

public function liste_archive_certificat()
{
  $query = $this->db->query("SELECT * FROM archivecertificat");
      return $query->result();
}



public function liste_archive_formulaires($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT * FROM archiveformulaire WHERE programme LIKE ?",
           array($nom)
       );
       return $query;
   }
   public function afficher_programme_formations($nom)
   {
     $sql = 'SELECT p.id, p.nom_programme AS programme, ';
     $sql .= 'IFNULL(p.prix, IFNULL(F.prix_formation, 0)) AS prix, ';
     $sql .= 'IFNULL(p.duree, IFNULL(F.duree_formation, \'\')) AS duree, ';
     $sql .= 'IFNULL(p.organisme, IFNULL(F.organisme, \'\')) AS organisme, ';
     $sql .= 'IFNULL(p.id_formation, IFNULL(F.id_formation, \'\')) AS id_formation, ';
     $sql .= 'p.nom_programme, p.fichier_pdf ';
     $sql .= 'FROM programmes p ';
     $sql .= 'LEFT JOIN Formation F ON p.id_formation = F.id_formation ';
     $sql .= 'WHERE p.actif = 1 AND p.nom_programme LIKE "%' . $this->db->escape_like_str($nom) . '%" ORDER BY p.nom_programme ASC';
     $query = $this->db->query($sql);
      return $query->result();
   }

  public function recuperer_programme($id)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "SELECT id, nom_programme AS programme, nom_programme, description, duree, fichier_pdf, objectifs, actif FROM programmes WHERE id LIKE ?",
           array($id)
       );
       return $query;
   }
  public function recuperer_tout_programme()
  {
    // CORRECTIF: Ajout de l'alias nom_programme AS programme
    $query = $this->db->query("SELECT id, nom_programme AS programme, nom_programme, description, duree, fichier_pdf, objectifs, actif FROM programmes ORDER BY nom_programme ASC");
      return $query->result();
  }

public function afficher_programme_formation()
{
   $sql = 'SELECT p.id, p.nom_programme AS programme, ';
   $sql .= 'IFNULL(p.prix, IFNULL(F.prix_formation, 0)) AS prix, ';
   $sql .= 'IFNULL(p.duree, IFNULL(F.duree_formation, \'\')) AS duree, ';
   $sql .= 'IFNULL(p.organisme, IFNULL(F.organisme, \'\')) AS organisme, ';
   $sql .= 'IFNULL(p.id_formation, IFNULL(F.id_formation, \'\')) AS id_formation, ';
   $sql .= 'p.nom_programme, p.fichier_pdf ';
   $sql .= 'FROM programmes p ';
   $sql .= 'LEFT JOIN Formation F ON p.id_formation = F.id_formation ';
   $sql .= 'WHERE p.actif = 1 ORDER BY p.nom_programme ASC';
   $query = $this->db->query($sql);
   return $query->result();
}
   public function afficher_formateur()
   {
      $query = $this->db->query("SELECT * FROM Formateurs order by nom_formateur asc");
      return $query->result();
   }

    public function afficher_programmes()
   {
      $query = $this->db->query("SELECT * FROM programmes");
      return $query->result();
   }

 public function afficher_thematique()
   {
      $query = $this->db->query("SELECT * FROM Thematique");
      return $query->result();
   }

   public function supprimer_stagiaire()
  {
     $query = $this->db->query("DELETE FROM Stagiaire");
      return $query;
  }

    public function supprimer_convention()
  {
     $query = $this->db->query("DELETE FROM Convention");
      return $query;
  }

    public function supprimer_emargement()
  {
     $query = $this->db->query("DELETE FROM Emargement");
      return $query;
  }

    public function supprimer_facture()
  {
     $query = $this->db->query("DELETE FROM Facture");
      return $query;
  }

public function supprimer_archive_formulaire($id)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM archiveformulaire WHERE id LIKE ?",
           array($id)
       );
       return $query;
   }

public function supprimer_archive_facture($id)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM archivefacture WHERE id LIKE ?",
           array($id)
       );
       return $query;
   }

public function supprimer_archive_emargement($id)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM archiveemargement WHERE id LIKE ?",
           array($id)
       );
       return $query;
   }

public function supprimer_archive_certificat($id)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM archivecertificat WHERE id LIKE ?",
           array($id)
       );
       return $query;
   }

public function supprimer_archive_convention($id)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM archiveconvention WHERE id LIKE ?",
           array($id)
       );
       return $query;
   }

public function supprimer_archive_assiduite($id)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM archiveassiduite WHERE id LIKE ?",
           array($id)
       );
       return $query;
   }

  public function supprimer_programme($id, $organisme)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM programmes WHERE id LIKE ? AND organisme LIKE ?",
           array($id, $organisme)
       );
       return $query;
   }
public function supprimer_formateur($nom)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM Formateurs WHERE nom_formateur LIKE ?",
           array($nom)
       );
       return $query;
   }
public function supprimer_formation($id, $organisme)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM Formation WHERE id_formation LIKE ? AND organisme LIKE ?",
           array($id, $organisme)
       );
       return $query;
   }
public function supprimer_thematique($nom, $organisme)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "DELETE FROM Thematique WHERE nom_thematique LIKE ? AND organisme LIKE ?",
           array($nom, $organisme)
       );
       return $query;
   }

public function supprimer_programme_formation()
{
   $query = $this->db->query("DELETE FROM programmes");
      return $query;
}

public function modifier_formation($id, $nom, $prix, $duree, $thematique, $organisme)
   {
       // v1.0 SQL securise
       $query = $this->db->query(
           "UPDATE Formation SET nom_formation = ?, prix_formation = ?, duree_formation = ?, nom_thematique = ? WHERE id_formation LIKE ? AND organisme LIKE ?",
           array($nom, $prix, $duree, $thematique, $id, $organisme)
       );
       return $query;
   }
  public function recuperer_formateur()
  {
    $query = $this->db->query("SELECT * FROM Formateurs");
      return $query->result();
  }

public function recuperer_formation()
  {
    $query = $this->db->query("SELECT * FROM Formation");
      return $query->result();
  }

   public function recuperer_thematique()
  {
    $query = $this->db->query("SELECT * FROM Thematique");
      return $query->result();
  }

  public function afficher_formation()
  {
    $query = $this->db->query("SELECT * FROM Formation order by id_formation asc");
      return $query->result();
  }


  public function display_formation()
  {
    $query = $this->db->query("SELECT * FROM Formation");
      return $query->result();
  }



  public function recuperer_statistiques_annuelles($annee)
  {
    $result = array();
    $query = $this->db->query(
      "SELECT COALESCE(NULLIF(Formation.nom_thematique, \"\"), Formation.nom_formation, \"Sans thematique\") AS titre_stage, COALESCE(NULLIF(Formation.duree_formation, \"\"), CAST(Formation.duree_heures AS CHAR), \"0\") AS duree_brute, Formation.duree_heures, COUNT(Convention.id) AS nombre_stagiaires FROM Convention JOIN Formation ON Convention.id_formation = Formation.id_formation WHERE YEAR(Convention.date_debut) = ? AND Convention.nom_stagiaire IS NOT NULL AND Convention.nom_stagiaire != \"\" GROUP BY titre_stage, Formation.duree_formation, Formation.duree_heures ORDER BY titre_stage",
      array($annee)
    );
    if($query && $query->num_rows() > 0){
      foreach($query->result() as $row){
        $duree = intval($row->duree_brute);
        if($duree == 0 && isset($row->duree_heures) && $row->duree_heures > 0){
          $duree = intval($row->duree_heures);
        }
        $nb = intval($row->nombre_stagiaires);
        $total = $duree * $nb;
        $result[] = array(
          "titre_stage" => $row->titre_stage,
          "nombre_stagiaires" => $nb,
          "duree_formation" => $duree,
          "total_heures_dispensees" => $total
        );
      }
    }
    return $result;
  }

}
