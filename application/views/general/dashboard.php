<aside style="background-color:white">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color:white" class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> SAISIE
       
      </h1>
    </section>
    
    <section style="background-color:white" class="content">
        <div class="row">
           <!-- <div class="col-lg-3 col-xs-6"> -->
              <!-- small box -->
             <!-- <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>SAISIE</h3>
                  <p>DOSSIER DE PRISE EN CHARGE</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?php //echo base_url(); ?>saisie" class="small-box-footer">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>--><!-- ./col -->
           <!-- <div class="col-lg-3 col-xs-6"> -->
              <!-- small box -->
            <!--  <div class="small-box bg-green">
                <div class="inner">
                  <h3>SAISIE</h3>
                  <p>DOSSIER DE FIN DE STAGE</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> --><!-- ./col -->
            <!-- <div class="col-lg-3 col-xs-6"> -->
              <!-- small box -->
             <!--  <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>New User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php //echo base_url(); ?>userListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div> -->
           <!--  </div>
            <div class="col-lg-3 col-xs-6"> -->
              <!-- small box -->
              <!-- <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Reopened Issue</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
            </div> --><!-- ./col -->
          <!-- </div> -->
           <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <br><br>
                  <H4>IDENTIFIANT COURS</H4>
                </div>
                <div class="icon">
                 <!-- <i class="ion ion-bag ion-12"></i> -->
                 <!-- <img class="img-profile" src="<?php //echo base_url('assets/images/Formateur.png'); ?>" width=80 height=80> -->
                 <img class="img-profile" src="<?php echo base_url('assets/images/Identifiant.png'); ?>" width=80 height=80>
                 
                </div>
                <a href="<?php echo base_url(); ?>formation" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="cours"  title="Cliquer ici pour la saisie de cours">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <br><br>
                  <H4>SUPPORTS DE FORMATIONS</H4>
                </div>
                <div class="icon">
                 <!-- <i class="ion ion-bag ion-12"></i> -->
                 <!-- <img class="img-profile" src="<?php //echo base_url('assets/images/Formateur.png'); ?>" width=80 height=80> -->
                 <img class="img-profile" src="<?php echo base_url('assets/images/prog.png'); ?>" width=80 height=80>
                 
                </div>
                <a href="<?php echo base_url(); ?>formation/enregistrer_support" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="cours"  title="Cliquer ici pour la saisie de cours">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
              <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                <br><br>
                  <H4>PARTICIPANTS</H4>
                </div>
                <div class="icon">
                 <!-- <i class="ion ion-stats-bars"></i> -->
                 <img class="img-profile" src="<?php echo base_url('assets/images/apprenant.png'); ?>" width=80 height=80>

                </div>
                <a href="<?php echo base_url(); ?>stagiaire/ajout_stagiaires" class="small-box-footer" id="participant" data-toggle="tooltip" data-placement="bottom"   title="Cliquer ici pour la saisie de participant" >Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

             <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <br><br>
                  <H4>LISTE DES THEMES</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ios-book"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Programme.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>thematique" class="small-box-footer" id="programme" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie de thème">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                <br><br>
                  <H4>ENTREPRISE</H4>
                </div>
                <div class="icon">
                 <!-- <i class="ion ion-man"></i> -->
                 <img class="img-profile" src="<?php echo base_url('assets/images/Entreprise1.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/ajouter_entreprise" class="small-box-footer" id="stagiaire" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie de l'entreprise">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <br><br>
                  <H4>PROGRAMME DE FORMATION</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ios-settings"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/prog.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>formation/ajout_programme_formation" class="small-box-footer" id="programmes" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie de programme de formation">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <br><br>
                  <H4>TELECHERGER LES PROGRAMMES DE FORMATIONS</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ios-settings"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/prog.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>formation/afficher_tous_fichier" class="small-box-footer" id="programmes" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie de programme de formation">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


                  
           <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                <br><br>
                  <H4>CONVENTIONS</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ios-timer"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Convention.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/convention" class="small-box-footer" id="convention" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie de convention">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->


            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <br><br>
                  <H4>PLAN DE FORMATION DES STAGIAIRES</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ios-settings"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/prog.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/afficher_ajouter_support_stagiaire" class="small-box-footer" id="programmes" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie de programme de formation">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


        
             <!-- <div class="col-lg-3 col-xs-6">-->
              <!-- small box -->
             <!-- <div class="small-box bg-green">
                <div class="inner">
                  <h3>TRAITEMENT</h3>
                  <p>PRISE EN CHARGE</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php //echo base_url(); ?>formateur" class="small-box-footer">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>--><!-- ./col -->

             <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                <br><br>
                  <H4>EMARGEMENTS</H4>
                </div>
                <div class="icon">
                  <!--<i class="ion ion-ios-person"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Emargement.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/ajout_emargements" class="small-box-footer" id="emargement" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie d'emargement">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                <br><br>
                  <H4>FACTURES</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ipad"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Facture.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/facture" class="small-box-footer" id="facture" data-toggle="tooltip" data-placement="bottom"  title="Cliquer ici pour la saisie de facture">Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                <br><br>
                  <H4>FORMATEURS</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ipad"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Cours.png'); ?>" width=80 height=80>

                </div>
                <a href="<?php echo base_url(); ?>formateur" class="small-box-footer" id="formateur" data-toggle="tooltip" data-placement="bottom" id="cours"  title="Cliquer ici pour la saisie de formateur" >Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                <br><br>
                  <H4>SIGNATURES FORMATEURS</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ipad"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Cours.png'); ?>" width=80 height=80>

                </div>
                <a href="<?php echo base_url(); ?>formateur/ajouter_signature" class="small-box-footer" id="formateur" data-toggle="tooltip" data-placement="bottom" id="cours"  title="Cliquer ici pour la saisie de formateur" >Ajouter un nouveau <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            


    </section>
</div>
</aside>
<script>
$(function(){
    $('#cours').tooltip();
    $('#participant').tooltip();
    $('#formateur').tooltip();
    $('#programme').tooltip();
    $('#stagiaire').tooltip();
    $('#programmes').tooltip();
    $('#convention').tooltip();
    $('#emargement').tooltip();
    $('#facture').tooltip();
   /* $("#left").tooltip({
        placement: "left",
        title: "tooltip on left"
    });*/
});
</script>