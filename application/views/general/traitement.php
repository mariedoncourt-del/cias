<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color:#ffffff" class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> MODIFICATION DOSSIER
      
      </h1>
    </section>
    
    <section style="background-color:#ffffff" class="content">
        <div  class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <BR><BR>
                  <H4><a style="color:white" href="<?php echo base_url(); ?>stagiaire/modifier_convention" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="conventions"  title="Cliquer ici pour modifier les conventions">CONVENTION</a></H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-paintbrush"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Convention.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/modifier_convention" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="convention"  title="Cliquer ici pour modifier les conventions">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            

            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <BR><BR>
                  <H4><a style="color:white" href="<?php echo base_url(); ?>stagiaire/modifier_stagiaire" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="dossiers"  title="Cliquer ici pour modifier les stagiaires">FORMULAIRE</a></H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-person-add"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/apprenant.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/modifier_stagiaire" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="dossier"  title="Cliquer ici pour modifier les stagiaires">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


             <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <BR><BR>
                  <H4><a style="color:white" href="<?php echo base_url(); ?>stagiaire/modifier_emargements" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="emargements"  title="Cliquer ici pour modifier les emargements">EMARGEMENT</a></H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-social-buffer"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Emargement.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/modifier_emargements" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="emargement"  title="Cliquer ici pour modifier les emargements">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
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
            </div> --><!-- ./col -->
          <!-- </div> -->
        
            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                 <br><br>
                  <h4><a style="color:white" href="<?php echo base_url(); ?>stagiaire/liste_modification_facture" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="factures"  title="Cliquer ici pour modifier les factures">FACTURE</a></4>
                </div>
                <div class="icon">
                 <!-- <i class="ion ion-social-euro"></i> -->
                 <img class="img-profile" src="<?php echo base_url('assets/images/Facture.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/liste_modification_facture" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="facture"  title="Cliquer ici pour modifier les factures">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
    </section>
</div>


<script>
$(function(){
    $('#dossier').tooltip();
    $('#convention').tooltip();
    $('#facture').tooltip();
    $('#emargement').tooltip();
    $('#certificat').tooltip();
    $('#assiduite').tooltip();
    $('#factures').tooltip();
    $('#emargements').tooltip();
    $('#conventions').tooltip();
    $('#dossiers').tooltip();
   
   /* $("#left").tooltip({
        placement: "left",
        title: "tooltip on left"
    });*/
});
</script>