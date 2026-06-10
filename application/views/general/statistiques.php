<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color:#ffffff" class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> STATISTIQUES
        
      </h1>
    </section>
    
    <section style="background-color:#ffffff" class="content">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <br><br>
                  <H4>FIN DE STAGE</H4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ios-paper"></i> -->
                  <img class="img-profile" src="<?php echo base_url('assets/images/Fin.png'); ?>" width=120 height=120>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/statistique" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="facture"  title="Cliquer ici pour afficher les statistiques de fin de stage">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            

            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                 <br><br>
                  <h4>Statistique</h4>
                </div>
                <div class="icon">
                  <!-- <i class="ion ion-ios-cart-outline"></i> -->
               <img class="img-profile" src="<?php echo base_url('assets/images/Couts.png'); ?>" width=80 height=80>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/nombre_heure" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="convention"  title="Cliquer ici pour afficher les évaluations de coût de stage">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                 <br><br>
                  <h4>NOMBRE DE STAGIAIRE</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/statistique_nombre_heure" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" id="emargement"  title="Cliquer ici pour afficher les nombres des stagiaires">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->


        <!--     <div class="col-lg-3 col-xs-6">
              small box
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>TRAITEMENT</h3>
                  <p>MODIFICATION EMARGEMENT</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/modifier_emargements" class="small-box-footer">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>-->
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
        <!--
            <div class="col-lg-3 col-xs-6">
              small box 
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>TRAITEMENT</h3>
                  <p>MODIFICATION FACTURE</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo base_url(); ?>stagiaire/liste_modification_facture" class="small-box-footer">Afficher <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>-->
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
   
   /* $("#left").tooltip({
        placement: "left",
        title: "tooltip on left"
    });*/
});
</script>