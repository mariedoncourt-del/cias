<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

     <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dist/css/bootstrap.min.css'; ?>">
    <!-- style.css -->
   <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet" type="text/css" />

   <!-- jquery UI CSS-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url().'assets/plugins/fullcalendar/fullcalendar.css'; ?>"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dist/css/styles.css'; ?>">
    <link href="<?php echo base_url('/assets/dist/css/jquery.multiselect.css'); ?>" rel="stylesheet" type="text/css">

    


    <!-- jQuery library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script> -->

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>





<script src="<?php //echo base_url('/assets/dist/js/jquery.multiselect.js'); ?>"></script>


<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->


<!-- <script src="<?php // echo base_url().'assets/dist/js/bootstrap.bundle.min.js'; ?>"></script>  -->
 
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
      div#saisie{background-color:orange;color:black;position:absolute; left:230px; top:54px; z-index:10;width:300px;font-weight:bold;}
      div#saisie ul{list-style-type:none;padding:0px}
      div#saisie ul li{height : 40px;padding-left:20px}
      div#saisie ul li a {color:white}

      div#modifier{background-color:orange;color:white;position:absolute; left:230px; top:106px; z-index:10;width:300px;font-weight:bold;}
      div#modifier ul{list-style-type:none;padding:0px}
      div#modifier ul li{height : 40px;padding-left:20px}
      div#modifier ul li a {color:white}

      div#etat{background-color:orange;color:white;position:absolute; left:230px; top:165px; z-index:10;width:300px;font-weight:bold;}
      div#etat ul{list-style-type:none;padding:0px}
      div#etat ul li{height : 40px;padding-left:20px}
      div#etat ul li a {color:white}

      div#archive{background-color:orange;color:white;position:absolute; left:230px; top:220px; z-index:10;width:300px;font-weight:bold;}
      div#archive ul{list-style-type:none;padding:0px}
      div#archive ul li{height : 40px;padding-left:20px}
      div#archive ul li a {color:white}

      div#statistique{background-color:orange;color:white;position:absolute; left:230px; top:222px; z-index:10;width:300px;font-weight:bold;}
      div#statistique ul{list-style-type:none;padding:0px}
      div#statistique ul li{height : 40px;padding-left:20px}
      div#statistique ul li a {color:white}

      div#aide{background-color:orange;color:white;position:absolute; left:230px; top:400px; z-index:10;width:300px;font-weight:bold;}
      div#aide ul{list-style-type:none;padding:0px}
      div#aide ul li{height : 40px;padding-left:20px}
      div#aide ul li a {color:white}

      div#images{position:fixed;right:10px; bottom:10px;z-index:999;border-radius:10px 10px 10px 10px; border-style:solid;
            -webkit-border-radius:10px 10px 10px 10px
        }
        #frames{
            position:fixed;right:10px; bottom:50px;z-index: 999;width: 400px;height:500px;
        }
        #fermer{
            position:fixed;right:20px; bottom:500px;z-index: 1000;color:white;font-size:16pt;
        }

  #tooltip {
  position: relative;
  color: blue; /* Couleur de texte par défaut */
  
}

#tooltip:before {
  content: attr(title);
  display: none;
  position: absolute;
  background-color: black; /* Couleur de fond du tooltip */
  color: white; /* Couleur de texte du tooltip */
  padding: 5px;
  border-radius: 5px;
  white-space: nowrap;
}

#tooltip:hover:before {
  display: block;
}
    
    </style>
    

   
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/i18n/jquery.ui.datepicker-fr.min.js"></script> -->

 <!--   <script type="text/javascript" src="<?php //echo base_url().'assets/js/moment.min.js'; ?>"></script>      -->
    
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" /> 
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
 <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> 
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script> -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    
    
    
   




    <script type="text/javascript">
//        document.cookie = "ci_session=2940f6a78c18042175fa6f4c770bf47fb24143b8; SameSite=Strict";
chrome.runtime.onMessage.addListener((request, sender, sendResponse) => {
  // ... handle message
  return true // Error message says you already return true
})
        var baseURL = "<?php echo base_url(); ?>";


     



    </script>
<script type="text/javascript">

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body style="background-color:white" class="hold-transition skin-blue sidebar-mini" id="body">
    <!-- form start -->
    <?php $this->load->helper("form"); ?>

   
      
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a style="background-color:orange" href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Maf</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Maf </b>Facturation</span>
        </a>

        
        <!-- Header Navbar: style can be found in header.less -->
        <nav style="background-color:orange" class="navbar navbar-static-top" role="navigation">

       
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

        <a href="https://maf-formation.org/kaliopi/index.php/admin" role="button">
        <img src="<?php echo base_url(); ?>assets/images/Qualiopi.png" class="user-image" alt="Qualiopi"/>
        </a>
          
          
    
          

          <!-- TITRE PUBLICATION -->
          <!-- <span class='navbar-brand mb-0 h1'>titre publication </span> -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Dernière connexion : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                <img src="<?php echo base_url('assets/images/Logo.png'); ?>" class="user-image" alt="User Image"/>
                 <!-- <img src="<?php// echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/> -->
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
               
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" style="background-color:orange">
                    
                   <!-- <img src="<?php //echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" /> -->
                    <img src="<?php echo base_url('assets/images/Logo.png'); ?>" class="user-image" alt="User Image"/>
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Se deconnecter</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside style="background-color:orange; color:white" class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul style="background-color:orange; color:white" class="sidebar-menu" data-widget="tree">
            <!-- <li class="header">MAIN NAVIGATION</li> -->
            <li>
              <a href="<?php echo base_url(); ?>dashboard" id="saisiedonnee">
                 <i style="color:white;padding-right:50px" class="fa fa-tachometer fa-2x"></i> <span style="color:white; font-weight:bold">Saisie de donnée</span></i>
                <!-- <img class="img-profile" src="<?php //echo base_url('assets/images/Saisie.png'); ?>" width=40 height=40><span style="color:white; font-weight:bold; margin-left:0px; color:white">Saisie de donnée</span> -->
              </a>
             


            </li>

          

            <!--<li>
              <a href="<?php// echo base_url(); ?>dossier">
                <i class="fa fa-list"></i> <span>Liste Dossiers</span></i>
              </a>
            </li>-->
            <li>
              <a href="<?php echo base_url(); ?>traitement" id="modifierdonnee">
                <i style="color:white;padding-right:50px" class="fa fa-pencil-square-o fa-2x"></i> <span style="color:white; font-weight:bold">Modifier le dossier</span></i>
              </a>
            </li>
             <li>
              <a href="<?php echo base_url(); ?>etat" id="etatdonnee">
                <i style="color:white;padding-right:50px" class="fa fa-search fa-2x"></i> <span style="color:white; font-weight:bold">Etats</span></i>
              </a>
            </li>
<!--             <li>
              <a href="<?php// echo base_url(); ?>archive" id="archivedonnee">
                <i style="color:white;padding-right:50px" class="fa fa-file-pdf-o fa-2x"></i> <span style="color:white; font-weight:bold">Archives</span></i>
              </a>
            </li>-->
            <li>
              <a href="<?php echo base_url(); ?>statistiques" id="statistiquedonnee">
                <i style="color:white;padding-right:50px" class="fa fa-bar-chart fa-2x"></i> <span style="color:white; font-weight:bold">Statistiques</span></i>
              </a>
            </li>
            


           
           <!--  <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li> -->
            <?php
            if(($is_admin == 1)||($is_admin == 2))
            {
            ?>
            <li>
              <a href="<?php echo base_url(); ?>userListing" id="roleuser">
                <i style="color:white;padding-right:50px" class="fa fa-user-circle-o fa-2x"></i>
                <span style="color:white; font-weight:bold ">Utilisateurs</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>roles/roleListing" id="role">
                <i style="color:white;padding-right:50px" class="fa fa-users fa-2x" aria-hidden="true"></i>
                <span style="color:white; font-weight:bold">Roles Utilisateurs</span>
              </a>
            </li> 
            <?php
        }
            ?>






<li>
            <a href="<?php echo site_url('stagiaire/aide'); ?>" target="_blank" id="aidedonnee">
                <i style="color:white;" class="fa fa-question fa-2x"></i> <span style="color:white; font-weight:bold">AIDES</span></i>
              </a>
            </li>

            <li>
              <a href="<?php echo site_url('task/taskListing'); ?>" id="tache">
                <i style="color:white;padding-right:50px" class="fa fa-tasks fa-2x"></i> <span style="color:white; font-weight:bold">Gestions des tâches</span></i>
              </a>
            </li>

            <li>
              <a href="<?php echo site_url('Organisme/index'); ?>" id="organisme">
                <i style="color:white;padding-right:50px" class="fa fa-building fa-2x"></i> <span style="color:white; font-weight:bold">Nouveau organisme</span></i>
              </a>
            </li>
            <?php
            // if($is_admin == 1 ||
            //     (array_key_exists('Booking', $access_info) 
            //     && ($access_info['Booking']['list'] == 1 || $access_info['Booking']['total_access'] == 1)))
            // {
              ?>
            <!-- <li>
              <a href="<?php // echo base_url(); ?>booking">
                <i class="fa fa-anchor"></i>
                <span>Booking</span>
              </a>
            </li> -->
              <?php
            // }
            ?>
            <?php
            // if($is_admin == 1 ||
            //     (array_key_exists('Task', $access_info) 
            //     && ($access_info['Task']['list'] == 1 || $access_info['Task']['total_access'] == 1)))
            // {
              ?>
           <!--  <li>
              <a href="<?php // echo base_url(); ?>task">
                <i class="fa fa-tasks"></i>
                <span>Tasks</span>
              </a>
            </li> -->
            <?php
            // }
            ?>
          </ul>
 
          <div id="saisie">
          

<ul>
    <li><a href="<?php echo base_url(); ?>formation"><img src="<?php echo base_url('assets/images/Identifiant.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Identifiant Cours</a></li>
    <li><a href="<?php echo base_url(); ?>formation/enregistrer_support"><img src="<?php echo base_url('assets/images/prog.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Supports de formations</a></li>
    <li><a href="<?php echo base_url(); ?>thematique"><img src="<?php echo base_url('assets/images/Programme.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Liste des thèmes</a></li>
    <li><a href="<?php echo base_url(); ?>formation/ajout_programme_formation"><img src="<?php echo base_url('assets/images/prog.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Programmes des formations</a></li>
    <li><a href="<?php echo base_url(); ?>formation/afficher_tous_fichier"><img src="<?php echo base_url('assets/images/prog.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Télécharger les programmes</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/afficher_ajouter_support_stagiaire"><img src="<?php echo base_url('assets/images/prog.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Plan de formation des stagiaires</a></li>

    <li><a href="<?php echo base_url(); ?>stagiaire/ajout_stagiaires"><img src="<?php echo base_url('assets/images/apprenant.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Participant</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/ajouter_entreprise"><img src="<?php echo base_url('assets/images/Entreprise1.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Entreprise</a></li>
    <li><a href="<?php echo base_url(); ?>formateur"><img src="<?php echo base_url('assets/images/Cours.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Formateurs</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/convention"><img src="<?php echo base_url('assets/images/Convention.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Conventions</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/facture"><img src="<?php echo base_url('assets/images/Facture.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Factures</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/ajout_emargements"><img src="<?php echo base_url('assets/images/Emargement.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Emargement</a></li>

</ul>
    </div>

    <div id="modifier">

<ul>
    <li><a href="<?php echo base_url(); ?>stagiaire/modifier_convention"><img src="<?php echo base_url('assets/images/Convention.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Conventions</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/liste_modification_facture"><img src="<?php echo base_url('assets/images/Facture.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Factures</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/modifier_emargements"><img src="<?php echo base_url('assets/images/Emargement.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Emargements</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/modifier_stagiaire"><img src="<?php echo base_url('assets/images/apprenant.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Formulaires</a></li>
   

</ul>
    </div>
    
    <div id="etat">

<ul>

<li><a href="<?php echo base_url(); ?>stagiaire/liste_stagiaire_expirations"><img src="<?php echo base_url('assets/images/Document.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Péremptions des dossiers</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/afficher_liste_stagiaire"><img src="<?php echo base_url('assets/images/Document.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Prise en  charge - Lancer stage</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/afficher_liste_emargement"><img src="<?php echo base_url('assets/images/Fin.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Document de fin de stages</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/liste_entre_deux_dates"><img src="<?php echo base_url('assets/images/Cours.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Stage par dates</a></li>
    
    <li><a href="<?php echo base_url(); ?>stagiaire/liste_convention_groupe"><img src="<?php echo base_url('assets/images/Groupes.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Groupe</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/intervention"><img src="<?php echo base_url('assets/images/Cours.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Intervention des formateurs</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/liste_formation_qualiopi"><img src="<?php echo base_url('assets/images/Programme.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Supports Qualiopi</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/afficher_id_qualiopi"><img src="<?php echo base_url('assets/images/Identifiant.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Les IDs Qualiopi</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/afficher_client"><img src="<?php echo base_url('assets/images/apprenant.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Listes des stagiaires</a></li>
   

</ul>
    </div>
    <div id="archive">

<ul>
    <li><a href="<?php echo base_url(); ?>formation/ajout_archive_convention"><img src="<?php echo base_url('assets/images/Convention.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Conventions</a></li>
    <li><a href="<?php echo base_url(); ?>formation/ajout_archive_formulaire"><img src="<?php echo base_url('assets/images/Document.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Dossier agefices</a></li>
    <li><a href="<?php echo base_url(); ?>formation/ajout_archive_facture"><img src="<?php echo base_url('assets/images/Facture.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Factures</a></li>
    <li><a href="<?php echo base_url(); ?>formation/ajout_archive_emargement"><img src="<?php echo base_url('assets/images/Emargement.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Emargements</a></li>
    <li><a href="<?php echo base_url(); ?>formation/ajout_archive_assiduite"><img src="<?php echo base_url('assets/images/Assiduite.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Assiduité</a></li>
    <li><a href="<?php echo base_url(); ?>formation/ajout_archive_certificat"><img src="<?php echo base_url('assets/images/Certificat.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Cértificat de réalisation</a></li>
   

</ul>
    </div>

    <div id="statistique">

<ul>
    <li><a href="<?php echo base_url(); ?>stagiaire/statistique"><img src="<?php echo base_url('assets/images/Fin.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Fin de stages</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/nombre_heure"><img src="<?php echo base_url('assets/images/Couts.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Statistique par thèmatique</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/statistique_nombre_heure"><img src="<?php echo base_url('assets/images/apprenant.png'); ?>" width=30 height=30>&nbsp;&nbsp;&nbsp;Nombre de stage</a></li>
    <li><a href="stagiaire/stats_bpf">   &#x1f4ca; BPF - Bilan P&eacute;dagogique</a></li>
    
   

</ul>
    </div>

    <div id="aide">

<ul>
    <li><a href="<?php echo base_url(); ?>stagiaire/aides">Aide vidéo</a></li>
    <li><a href="<?php echo base_url(); ?>stagiaire/aidess">Aide textuelle</a></li>
   
    
   

</ul>
    </div>


    

    
        </section>
        <!-- /.sidebar -->
      </aside>
      <div id="images"><a href="#"><img src="<?php echo base_url('assets/images/Chatbot.png'); ?>" width="80" height="80"></a></div>
      <iframe id="frames" src="https://app.chatsimple.ai/iframe23/ea74edc8-dae5-4f42-afb2-87f2a6f36ebf/fd894ef6-e0f9-4013-95c5-e02cc6cb6e5d/3896e4ff-3e26-498e-96f9-5d198cbee806" height="400" width="800" title="Chatsimple" style="display:block;margin-left:auto;margin-right:auto;border:none;border-radius:20px;box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);"></iframe>
        <button type="button" class="close" data-dismiss="modal" id="fermer">&times;</button>
   <script type="text/javascript">
    $(document).ready(function(){
      $("#saisie").hide();
      $("#modifier").hide();
      $("#etat").hide();
      $("#archive").hide();
      $("#statistique").hide();
      $("#aide").hide();
      $("#saisiedonnee").hover(function(){
        //...On remet un fond blanc
       // $("#saisiedonnee").show();
        $("#saisie").show();
        $("#modifier").hide();
        $("#etat").hide();
        $("#archive").hide();
        $("#statistique").hide();
    });
    $("#saisie ul li").hover(function(){
        //...On remet un fond blanc
        $("#saisiedonnee").show();
        //$("#saisie").hide();
    });

    $("#tache").hover(function(){
        //...On remet un fond blanc
        $("#aide").hide();
        $("#statistique").hide();
        //$("#saisie").hide();
    });

    $("#role").hover(function(){
        //...On remet un fond blanc
        $("#aide").hide();
        $("#statistique").hide();
        //$("#saisie").hide();
    });

    $("#roleuser").hover(function(){
        //...On remet un fond blanc
        $("#aide").hide();
        $("#statistique").hide();
        //$("#saisie").hide();
    });


    $("#saisie ul li").click(function(){
        //...On remet un fond blanc
        $("#saisie").hide();
    });

    $("#modifierdonnee").hover(function(){
        //...On remet un fond blanc
       // $("#saisiedonnee").show();
        $("#modifier").show();
        $("#saisie").hide();
        $("#etat").hide();
        $("#archive").hide();
        $("#statistique").hide();
        $("#aide").hide();
    });
    $("#saisie ul li").hover(function(){
        //...On remet un fond blanc
        $("#modifierdonnee").show();
        //$("#saisie").hide();
    });

    $("#modifier ul li").click(function(){
        //...On remet un fond blanc
        $("#modifier").hide();
    });

    $("#etatdonnee").hover(function(){
        //...On remet un fond blanc
       // $("#saisiedonnee").show();
        $("#etat").show();
        $("#saisie").hide();
        $("#modifier").hide();
        $("#archive").hide();
        $("#statistique").hide();
        $("#aide").hide();
    });
    $("#etat ul li").hover(function(){
        //...On remet un fond blanc
        $("#etatdonnee").show();
        //$("#saisie").hide();
    });

    $("#etat ul li").click(function(){
        //...On remet un fond blanc
        $("#modifier").hide();
    });

    $("#archivedonnee").hover(function(){
        //...On remet un fond blanc
       // $("#saisiedonnee").show();
       $("#archive").show();
        $("#etat").hide();
        $("#saisie").hide();
        $("#modifier").hide();
        
        $("#statistique").hide();
        $("#aide").hide();
    });
    $("#etat ul li").hover(function(){
        //...On remet un fond blanc
        $("#archivedonnee").show();
        //$("#saisie").hide();
    });

    $("#etat ul li").click(function(){
        //...On remet un fond blanc
        $("#archive").hide();
    });

    $("#statistiquedonnee").hover(function(){
        //...On remet un fond blanc
       // $("#saisiedonnee").show();
       $("#statistique").show();
        $("#etat").hide();
        $("#saisie").hide();
        $("#modifier").hide();
        
        $("#archive").hide();
        $("#aide").hide();
    });
    $("#statistique ul li").hover(function(){
        //...On remet un fond blanc
        $("#statistiquedonnee").show();
        //$("#saisie").hide();
    });

    $("#statistique ul li").click(function(){
        //...On remet un fond blanc
        $("#statistique").hide();
    });

    $("#aidedonnee").hover(function(){
        //...On remet un fond blanc
       // $("#saisiedonnee").show();
       $("#aide").show();
        $("#etat").hide();
        $("#saisie").hide();
        $("#modifier").hide();
        $("#statistique").hide();
        
        $("#archive").hide();
    });
    $("#aide ul li").hover(function(){
        //...On remet un fond blanc
        $("#aidedonnee").show();
        //$("#saisie").hide();
    });

    $("#aide ul li").click(function(){
        //...On remet un fond blanc
        $("#aide").hide();
    });

    $("#body").click(function(){
        //...On remet un fond blanc
        $("#modifier").hide();
        $("#saisie").hide();
        $("#etat").hide();
        $("#archive").hide();
        $("#statistique").hide();
        $("#aide").hide();
    });


   

  //});
/*$("#saisiedonnee").mouseleave(function(){
        //...On remet un fond blanc
        $("#saisie").hide();
    });*/
  });

</script>
