<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dossier_model extends CI_Model
{
   function recuperer(){
    $requete = $this->db->query('SELECT id,nom_entreprise,nom_participant,prenom_participant,date_debut from dossier');
    $resultat = $requete->result();
    return $resultat;
   }

   function creation_table()
   {
        $q = $this->db->query("CREATE TABLE Formateur ( id int primary key, nom_formateur varchar(100) not null) engine=innoDB");
        return $q;
   }

   function recuperer_id($id)
    {
        $this->db->select('*');
        $this->db->from('dossier');
        $this->db->where('id', $id);
        $query = $this->db->get();      
        return $query->row();
    }

   function suppr_id($id)
   {
        $this->db->where('id', $id);
        $this->db->delete('dossier');
   }



   // function inserer($anarana){
   //  $data = array(
   //      'nom' => $anarana,
   //  );

   //  $this->db->insert('ninja', $data);
   // }

   // ajouter donnée à partir form
   function ajout(){
    $data = array(
        'pa' => $this->input->post('point_accueil'),   
        'nom_entreprise' => $this->input->post('nom_entreprise'),   
        'nom_com' => $this->input->post('nom_com'),   
        'ape' => $this->input->post('label_ape'),   
        'siret' => $this->input->post('siret'),   
        'activite' => $this->input->post('label_activite'),   
        'forme_juridique' => $this->input->post('forme_juridique'),   
        'rue' => $this->input->post('label_rue'),   
        'cp' => $this->input->post('label_CP'),   
        'ville' => $this->input->post('label_ville'), 
        'sexe' => $this->input->post('sexe'), 
        'nom_participant' => $this->input->post('nom_participant'), 
        'prenom_participant' => $this->input->post('prenom_participant'), 
        'nom_naiss' => $this->input->post('nom_naiss'), 
        'date_naiss' => $this->input->post('date_naiss'), 
        'no_secu' => $this->input->post('no_secu'), 
        'tel' => $this->input->post('tel'), 
        'email' => $this->input->post('email'), 
        'diplome' => $this->input->post('diplome'), 
        'depuis' => $this->input->post('depuis'),

        // formulaire 2
        'formateur' => $this->input->post('formateur'), 
        'formation' => $this->input->post('formation'), 
        'thematique' => $this->input->post('thematique'), 
        'date_debut' => $this->input->post('date_debut'), 
        'date_fin' => $this->input->post('date_fin'), 
        'nbr_heure' => $this->input->post('nbr_heure'), 
        'prix' => $this->input->post('prix'), 
        // signature

        // horaire
        'debut_matin' => $this->input->post('debut_matin'), 
        'fin_matin' => $this->input->post('fin_matin'), 
        'debut_soir' => $this->input->post('debut_soir'), 
        'fin_soir' => $this->input->post('fin_soir'),

        // facture
        'date_facture' => $this->input->post('date_facture'),
        'numero_facture' => $this->input->post('numero_facture'),

        // date genere dynamiquement
        'date0' => $this->input->post('date0'),
        'date1' => $this->input->post('date1'),
        'date2' => $this->input->post('date2'),
        'date3' => $this->input->post('date3'),
        'date4' => $this->input->post('date4'),
        'date5' => $this->input->post('date5'),
        'date6' => $this->input->post('date6'),
        'date7' => $this->input->post('date7'),
        'date8' => $this->input->post('date8'),
        'date9' => $this->input->post('date9'),
        'date10' => $this->input->post('date10'),
        'date11' => $this->input->post('date11'),

        // nombre jour 
        'nbr_jour' => $this->input->post('nbr_jour'),

        // date signature
        'date_signature' => $this->input->post('date_signature'),

        // contenu convention
        'contenu_convention' => $this->input->post('contenu_convention'),

        // contenu facture
        'contenu_facture' => $this->input->post('contenu_facture'),

        // contenu formulaire
        'contenu_formulaire' => $this->input->post('contenu_formulaire'),



    );

    $this->db->insert('dossier', $data);

   }

   function modifier_dossier($id){
    $data = array(
        'pa' => $this->input->post('point_accueil'),   
        'nom_entreprise' => $this->input->post('nom_entreprise'),   
        'nom_com' => $this->input->post('nom_com'),   
        'ape' => $this->input->post('label_ape'),   
        'siret' => $this->input->post('siret'),   
        'activite' => $this->input->post('label_activite'),   
        'forme_juridique' => $this->input->post('forme_juridique'),   
        'rue' => $this->input->post('label_rue'),   
        'cp' => $this->input->post('label_CP'),   
        'ville' => $this->input->post('label_ville'), 
        'sexe' => $this->input->post('sexe'), 
        'nom_participant' => $this->input->post('nom_participant'), 
        'prenom_participant' => $this->input->post('prenom_participant'), 
        'nom_naiss' => $this->input->post('nom_naiss'), 
        'date_naiss' => $this->input->post('date_naiss'), 
        'no_secu' => $this->input->post('no_secu'), 
        'tel' => $this->input->post('tel'), 
        'email' => $this->input->post('email'), 
        'diplome' => $this->input->post('diplome'), 
        'depuis' => $this->input->post('depuis'),

        // formulaire 2
        'formateur' => $this->input->post('formateur'), 
        'formation' => $this->input->post('formation'), 
        'thematique' => $this->input->post('thematique'), 
        'date_debut' => $this->input->post('date_debut'), 
        'date_fin' => $this->input->post('date_fin'), 
        'nbr_heure' => $this->input->post('nbr_heure'), 
        'prix' => $this->input->post('prix'), 
        // signature

        // horaire
        'debut_matin' => $this->input->post('debut_matin'), 
        'fin_matin' => $this->input->post('fin_matin'), 
        'debut_soir' => $this->input->post('debut_soir'), 
        'fin_soir' => $this->input->post('fin_soir'),

        // facture
        'date_facture' => $this->input->post('date_facture'),
        'numero_facture' => $this->input->post('numero_facture'),

        // date genere dynamiquement
        'date0' => $this->input->post('date0'),
        'date1' => $this->input->post('date1'),
        'date2' => $this->input->post('date2'),
        'date3' => $this->input->post('date3'),
        'date4' => $this->input->post('date4'),
        'date5' => $this->input->post('date5'),
        'date6' => $this->input->post('date6'),
        'date7' => $this->input->post('date7'),
        'date8' => $this->input->post('date8'),
        'date9' => $this->input->post('date9'),
        'date10' => $this->input->post('date10'),
        'date11' => $this->input->post('date11'),

        // nombre jour 
        'nbr_jour' => $this->input->post('nbr_jour'),

         // date signature
        'date_signature' => $this->input->post('date_signature'),

         // contenu convention
        'contenu_convention' => $this->input->post('contenu_convention'),

        // contenu facture
        'contenu_facture' => $this->input->post('contenu_facture'),

        // contenu formulaire
        'contenu_formulaire' => $this->input->post('contenu_formulaire'),




    );
        $this->db->where('id', $id);
        $this->db->update('dossier', $data);
       
   }

}