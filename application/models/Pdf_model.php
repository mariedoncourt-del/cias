<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pdf_model extends CI_Model
{

    function recuperer_convention($id)
    {
        $this->db->select('contenu_convention');
        $this->db->from('dossier');
        $this->db->where('id', $id);
        $query = $this->db->get();      
        $resultat = $query->row();

        $html ='
<html>
<head>

<style>
    html{margin:0 0;}
    html{padding:0 0;}
    body{margin: 0 0;}
    body{padding : 0 0;}

/*coordonnée convention*/
.nom_entreprise_c, .adresse_entreprise_c, .CP_c, .ville_c, .nom_c, .prenom_c{
    position : absolute;
}

.nom_entreprise_c{top: 240px; left:160px;} 
.adresse_entreprise_c{top: 260px; left:160px;} 
.CP_c{top: 280px; left:160px;} 
.ville_c{top: 280px; left:260px;} 
.prenom_c{top: 315px; left:160px;}
.nom_c{top:315px ; left:300px;} 


    
/*coordonnée CONVENTION*/
.formateur, .formationc, .debutc,  .heurec, .nom_entreprise_c2, .adresse_entreprisec1, .villec1, .prenomc1, .nomc1, .effectif, .effectif2, .prixc, .prixc3, .prixc31, .prixc32, .tva_convention, .total_convention, .debutc3, .villec3, .nomc3, .prenomc3    {
    position : absolute;
}

.formateur{top:390px ;left:560px ;}
.formationc{top: 430px ;left: 130px ;}
.debutc{top: 470px ;left: 240px ;}
.heurec{top: 490px;left: 270px ;}
.nom_entreprise_c2{top: 505px ;left:240px ;}
.adresse_entreprisec1{top: 505px ;left:450px ;}
.villec1{top: 505px;left:600px ;}
.prenomc1{top:593px ;left: 500px;}
.nomc1{top: 593px;left: 640px;}
.effectif{top: 593px; left:  420px}
.effectif2{top: 686px; left:  280px}
.prixc{top: 686px ;left: 220px ;}
.prixc3{top: 686px ;left: 580px ;}
.prixc31{top: 705px ;left: 220px ;}
.tva_convention{top: 723px ;left: 580px ;}
.total_convention{top: 740px ;left: 580px ;}
.debutc3{top: 855px ;left: 100px ;}
.villec3{top: 855px ;left: 320px ;}
.nomc3{top: 912px ;left: 85px;}
.prenomc3{top: 928px ;left: 85px ;}

/*date formation genere dynamiquement*/
.date0, .date1, .date2, .date3, .date4, .date5, .date6, .date7, .date8, .date9, .date10, .date11{
    position : absolute;
}

.date0{top: 470px ;left: 330px ;}
.date1{top: 470px ;left: 420px ;}
.date2{top: 470px ;left: 510px ;}
.date3{top: 470px ;left: 600px ;}
.date4{top: 470px ;left: 690px ;}

/*coordonnee horaire   convention*/
.debut_matin_c,  .fin_matin_c, .debut_soir_c, .fin_soir_c{
    position : absolute;
}

.debut_matin_c{
    top: 490px;
    left:  400px;
}

.fin_matin_c{
    top: 490px;
    left:  445px;
}

.debut_soir_c{
    top: 490px;
    left:  500px;
}

.fin_soir_c{
    top: 490px;
    left:  555px;
}


img{
    position : absolute;
    height: 29.7cm;
    width : 21cm;
}

span{
    font-size: 12px;
}
</style>
</head>
<body>'
;

        $html = $html.$resultat->contenu_convention;
$html = $html.' </body></html>';
        return $html;
    } 


    function recuperer_nom_fichier($id){
        $this->db->select('nom_participant,prenom_participant,formation');
        $this->db->from('dossier');
        $this->db->where('id', $id);
        $query = $this->db->get();      
        $resultat = $query->row();

        $nom_fichier = $resultat->nom_participant.'_'.$resultat->prenom_participant.'_'.$resultat->formation;

        return $nom_fichier;
    }  

    function recuperer_facture($id)
    {
        $this->db->select('contenu_facture');
        $this->db->from('dossier');
        $this->db->where('id', $id);
        $query = $this->db->get();      
        $resultat = $query->row();

        $html ='
<html>
<head>

<style>
    html{margin:0 0;}
    html{padding:0 0;}
    body{margin: 0 0;}
    body{padding : 0 0;}

/*COORDONNEE*/
/*coordonnée facture*/
.date_facture, .numero_facture, .nom_entreprise_fa, .adresse_entreprise_fa, .ville_fa, .CP_fa, .adresse_entreprise_fa2, .ville_fa2, .CP_fa2, .nom_fa , .prenom_fa, .formation_fa, .heure_fa, .prix_fa, .prix_fa2, .taux_fa, .tva_fa, .total_fa{
    position : absolute;
}

.date_facture{top:250px ;left: 160px; color:  white;}
.numero_facture{top: 250px;left: 700px; color:  white}

.nom_entreprise_fa{top: 285px ;left: 170px ;}
.adresse_entreprise_fa{top: 310px ;left:170px ;}
.CP_fa{top: 335px;left: 170px;}
.ville_fa{top: 335px;left: 240px;}
.nom_fa{top: 670px ;left:200px ;}
.prenom_fa{top: 670px;left: 350px ;}
.formation_fa{top: 420px ;left: 200px ;}
.heure_fa{top:487px ;left: 240px;}
.prix_fa{top: 420px ;left: 700px ;}
.prix_fa2{top: 720px ;left: 700px ;}

.adresse_entreprise_fa2{top: 535px ;left:170px ;}
.CP_fa2{top: 560px;left: 170px;}
.ville_fa2{top: 560px;left: 240px;}
.taux_fa{top: 745px; left: 700px ;}
.tva_fa{top: 770px ; left:700px  ;}
.total_fa{top: 822px ; left:700px  ;}

/*date formation genere dynamiquement*/
.debut_fa, .date_facture0, .date_facture1, .date_facture2, .date_facture3, .date_facture4, .date_facture5, .date_facture6, .date_facture7, .date_facture8, .date_facture9, .date_facture10, .date_facture11{
    position: absolute;
}
.debut_fa{top: 510px ; left: 170px;}
.date_facture0{top: 510px ;left: 260px ;}
.date_facture1{top: 510px ;left: 350px ;}
.date_facture2{top: 510px ;left: 450px ;}
.date_facture3{top: 510px ;left: 550px ;}
.date_facture4{top: 510px ;left: 650px ;}

/*coordonnee horaire  facture*/
.debut_matin_f,  .fin_matin_f, .debut_soir_f, .fin_soir_f{
    position : absolute;
}

.debut_matin_f{
    top: 487px;
    left:  400px;
}

.fin_matin_f{
    top: 487px;
    left:  445px;
}

.debut_soir_f{
    top: 487px;
    left:  500px;
}

.fin_soir_f{
    top: 487px;
    left:  555px;
}


img{
    position : absolute;
    height: 29.7cm;
    width : 21cm;
}

span{
    font-size: 14px;
}
</style>
</head>
<body>'
;


        $html = $html.$resultat->contenu_facture;
$html = $html.' </body></html>';
        return $html;
    }


    function recuperer_formulaire($id)
    {
        $this->db->select('contenu_formulaire');
        $this->db->from('dossier');
        $this->db->where('id', $id);
        $query = $this->db->get();      
        $resultat = $query->row();

        $html ='
<html>
<head>

<style>
    html{margin:0 0;}
    html{padding:0 0;}
    body{margin: 0 0;}
    body{padding : 0 0;}

/* point d accueil */
.pa_lieu, .pa_numero, .pa_ville, .pa_cp, .pa_adresse, .pa_tel, .pa_mail, .pa_interlocuteur{
    position : absolute;
}

.pa_lieu{top:176px ;left:200px ;}
.pa_numero{top: 176px;left: 600px ;}
.pa_ville{top: 242px ;left:500px ;}
.pa_cp{top:242px ;left: 140px;}
.pa_adresse{top: 220px ;left: 140px ;}
.pa_tel{top:264px ;left: 140px ;}
.pa_mail{top: 264px ;left: 500px ;}
.pa_interlocuteur{top: 198px ;left: 140px;}

/*coordonnée 2.entreprise */
.nom_entreprise, .nom_commercial, .code_ape, .siret, .activite, .adresse_entreprise, .CP , .ville{
    position:  absolute;

}

/*coordonnée */
.nom_entreprise{
    top:  430px;
    left:  200px;
}

.nom_commercial{
    top:  453px;
    left:  200px;
}

.code_ape{
    top:  475px;
    left:  200px;
}

.siret{
    top:  475px;
    left: 540px;
}

.activite{
    top:  496px;
    left: 230px;
}

.adresse_entreprise{
    top:  520px;
    left: 125px;
}

.CP{top: 540px; left: 150px;}
.ville{top: 540px; left: 500px;}

/*coordonnée 3.participant*/
.sexe, .nom, .prenom, .nom_naissance, .date_naissance, .num_secu, .tel, .email{
    position:  absolute;
}
 
.nom{top:595px; left:200px;} 
.prenom{top:595px; left:540px;} 
.nom_naissance{top:615px; left:200px;} 
.date_naissance{top:638px; left:260px;} 
.num_secu{top:660px; left:220px;} 
.tel{top: 682px; left:100px;} 
.email{top:682px; left:540px;}

/*coordonnée sexe*/
#sexe_personne{position: absolute;}
.lehilahy{top:595px; left:40px;} 
.vehivavy{top:595px; left:72px;}

/*coordonnée choix multiple*/
/*diplome*/
#diplome{position: absolute;}
#diplome{top:704px ; left:275px;} 

/*coordonnée dirigeant depuis*/
#dirigeant_depuis{position:  absolute;}
.un{top:725px ; left:303px;}
.trois{top:725px ; left:408px;}
.quatre{top:725px ; left:530px;}
.dix{top:725px ; left:653px;}

/*coordonnée forme juridique*/
#fj{position: absolute;}
#fj{top:498px ; left:560px;} 



/*coordonnée MAF*/
.maf_raison_social, .maf_numero, .maf_siret, .maf_adresse, .maf_cp, .maf_ville, .maf_nom, .maf_prenom, .maf_tel, .maf_mail, .maf_nom2, .maf_prenom2, .maf_tel2,.maf_mail2{
    position:  absolute;
}

.maf_raison_social{top: 775px ;left: 185px;}
.maf_numero{top: 800px ;left: 250px;}
.maf_siret{top: 800px ;left: 540px;}
.maf_adresse{top: 820px;left: 140px;}
.maf_cp{top: 842px;left: 160px;}
.maf_ville{top:842px ;left: 540px;}
.maf_nom{top: 888px;left: 200px;}
.maf_prenom{top: 888px ;left: 540px;}
.maf_tel{top: 910px;left: 100px;}
.maf_mail{top:910px ;left: 540px;}
.maf_nom2{top: 955px;left: 200px;}
.maf_prenom2{top: 955px ;left: 540px;}
.maf_tel2{top:978px ;left: 100px;}
.maf_mail2{top: 978px;left: 540px;}


/* formulaire 2 */
/* coordonnée 5.action */
.formation, .thematique, .debut, .fin , .heure, .prix, .adresse_entreprisef2, .CPf2, .villef2, .maf_modalite{
    position : absolute;
}

.formation{top: 212px ; left:240px ;} 
.thematique{top:232px ; left:140px ;} 
.debut{top: 300px; left: 220px ;} 
.fin {top: 300px ; left: 610px;} 
.heure{top: 320px; left:330px ;} 
.prix{top: 364px; left:315px ;}
.adresse_entreprisef2{top: 387px; left:240px ;}
.CPf2{top: 407px; left:130px ;}
.villef2{top: 407px; left:500px ;}
.maf_modalite{top: 483px; left: 50px;}


/* formulaire 3 */
.villef3, .debutf3, .nomf3, .prenomf3{position: absolute;}
.villef3{top: 718px ; left:120px;}
.debutf3{top:718px ; left:300px;}
.nomf3{top:770px ; left:150px;}
.prenomf3{top:770px ; left:250px;}





#formulaire1 , #formulaire2, #formulaire3
{
    position:  relative;
    height: 29.7cm;
    width : 21cm;
}

html{margin:0 0;}
html{padding:0 0;}
body{margin: 0 0;}
body{padding : 0 0;}

.fond img{
    height: 29.7cm;
    width : 21cm;
}

span{
    font-size: 14px;
}

</style>
</head>
<body>'
;


        $html = $html.$resultat->contenu_formulaire;
$html = $html.' </body></html>';
        return $html;
    }


}