<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section style="background-color:#ffffff" class="content-header">
    <!--  <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Enregistrement formateur
        
      </h1>-->
    </section>

    <section style="background-color:#ffffff" class="content">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <div class="card text-center">
                  <div class="card-header btn-primary">
                       <h3>MODIFICATION FACTURE</h3>
                  </div>
             <div class="card-body">
              
                <!--    <select name="nom_formateur" id="nom_formateur" class="form-control">
                          <option></option>
                          <?php
                           /*   foreach($donneeformateur as $row)
                                 {
                                    echo "<option value='".$row->nom_formateur."'>".$row->nom_formateur." ".$row->prenom_formateur."</option>";
                                }
                  
                  */
                           ?>
            
                    </select>-->
            
                 
                <!-- <div id="afficher" class="col-md-6"></div> -->
                 <form method="post">
                 <!--<div class="row">
                 <div class="form-group text-left col-md-10 form-inline">
                    <label for="organisme" class="col-md-4"><b>Organisme</b></label>
                    <select name="organisme" id="organisme" class="form-control col-md-6" placeholder="Organisme"> 
                      <option></option> -->
                      <?php
                       /* foreach($organismes as $row)
                        {
                          echo "<option value='".$row->raison_social."'>".$row->raison_social."</option>";
                        }*/
                      ?>
             <!--       </select>
                  </div>
                  
                 
                
               </div>-->
                <div class="form-group row">


                  <!-- Avec un bouton à droite -->
                  <div class="col-lg-12">
                      <div class="input-group">
                          <input type="text" name="nom_stagiaire" id="nom_stagiaire" class="form-control" placeholder="Nom stagiaire">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" id="btn_rechercher" name="btn_rechercher">Rechercher</button>
                          </span>
                     </div>
                  </div>
                           
                   </div>
                 </form>
                <div id="afficher_formateur" class="col-md-12"></div>
              </div>






  <div class="modal" id="monModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modifier Facture</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
                <div class="form-group row">
                           <label class="col-md-4 col-form-label">Numéro facture</label>
                            <div class="col-md-8">
                              <input type="text" name="num_facture" id="num_facture" class="form-control" placeholder="Numéro facture">
                            </div>
                   </div>
                    <div class="form-group row">
                           <label class="col-md-4 col-form-label">Date facture</label>
                            <div class="col-md-8">
                              <input type="text" name="date_facture" id="date_facture" class="form-control" placeholder="ID Formation">
                            </div>
                   </div>
                    <div class="form-group row">
                           <label class="col-md-4 col-form-label">Nom stagiaire</label>
                            <div class="col-md-8">
                              <input type="text" name="nom_stagiaires" id="nom_stagiaires" class="form-control" placeholder="ID Formation" readonly>
                            </div>
                   </div>
                   <div class="form-group row">
                           <label class="col-md-4 col-form-label">Prénom stagiaire</label>
                            <div class="col-md-8">
                              <input type="text" name="prenom_stagiaires" id="prenom_stagiaires" class="form-control" placeholder="ID Formation" readonly>
                            </div>
                   </div>
                     <div class="form-group row">
                           <label class="col-md-4 col-form-label">ID Formation</label>
                            <div class="col-md-8">
                              <input type="text" name="id_formations" id="id_formations" class="form-control" placeholder="ID Formation" readonly>
                            </div>
                   </div>
                    <div class="form-group row">
                           <label class="col-md-4 col-form-label">Mode de paiement</label>
                            <div class="col-md-8">
                              <select name="mode_paiement" id="mode_paiement" class="form-control">
                                <option value="CB">CB</option>
                                <option value="Chèque" selected>Chèque</option>
                                <option value="Virement">Virement</option>
                              </select>
                            </div>
                   </div>
                    <div class="form-group row">
                           <label class="col-md-4 col-form-label">Date de paiement</label>
                            <div class="col-md-8">
                              <input type="text" name="date_paiement" id="date_paiement" class="form-control" placeholder="Date de paiement">
                            </div>
                   </div>
             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="btn_enregistrer">Modifier</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
      </div>
    </form>

    </div>
  </div>
</div>




<div class="modal" id="monModal7">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Supprimer Facture</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
                <div class="form-group row">
                           <label class="col-md-8 col-form-label">Voulez-vous supprimer?</label>
                            <div class="col-md-4">
                              <input type="text" name="num_facture1" id="num_facture1" class="form-control" placeholder="Numéro facture" readonly>
                            </div>
                   </div>
                   
                   
             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="btn_supprimers">Supprimer</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
      </div>
    </form>

    </div>
  </div>
</div>



<div class="modal" id="monModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Création Facture Groupe</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
                <div class="form-group row">
                           <label class="col-md-4 col-form-label">Numéro facture</label>
                            <div class="col-md-8">
                              <input type="text" name="num_facturess" id="num_facturess" class="form-control" placeholder="Numéro facture">
                            </div>
                   </div>
                    <div class="form-group row">
                           <label class="col-md-4 col-form-label">Date facture</label>
                            <div class="col-md-8">
                              <input type="text" name="date_facturess" id="date_facturess" class="form-control" placeholder="ID Formation">
                            </div>
                   </div>
                    <div class="form-group row">
                           <label class="col-md-4 col-form-label">Entreprise</label>
                            <div class="col-md-8">
                              <input type="text" name="nom_stagiaires" id="nom_stagiaires" class="form-control" placeholder="ID Formation" readonly>
                            </div>
                   </div>
                 
                     <div class="form-group row">
                           <label class="col-md-4 col-form-label">ID Formation</label>
                            <div class="col-md-8">
                              <input type="text" name="id_formations" id="id_formations" class="form-control" placeholder="ID Formation" readonly>
                            </div>
                   </div>
             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="btn_enregistrer">Modifier</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
      </div>
    </form>

    </div>
  </div>
</div>

            </div>
          
          
        </div>

        </div>

          
    </section>
</div>

<script type="text/javascript">
$(document).ready(function(){

  $("#date_facture").datepicker({
                   altField: "#datepicker",
    closeText: 'Fermer',
    prevText: 'Précédent',
    nextText: 'Suivant',
    currentText: 'Aujourd\'hui',
    monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
    monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
    dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
    dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
    dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
    weekHeader: 'Sem.',
    //dateFormat: 'yy-mm-dd'
    dateFormat: 'dd-mm-yy'
                });
  
  $("#date_paiement").datepicker({
                   altField: "#datepicker",
    closeText: 'Fermer', prevText: 'Précédent', nextText: 'Suivant', currentText: 'Aujourd\'hui',
    monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
    monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
    dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
    dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
    dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'], weekHeader: 'Sem.', dateFormat: 'dd-mm-yy'
                });

  load_data();

 /* $('#nom_stagiaire').keypress(function(){
    nom_stagiaire= $('#nom_stagiaire').val();
    load_data_recherche(nom_stagiaire);
  });*/

   $('#nom_stagiaire').autocomplete({
               // source: "http://localhost/projetAssociation/index.php/admin/enfant/get_autocomplete",
          source: "<?php echo site_url('stagiaire/get_autocomplete'); ?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                   // $("#form_search").submit(); 
                }
            });
    $('#nom_stagiaire').keypress(function(){
      if($('#nom_stagiaire').val()=="")
      {
        load_data();
      }

    });


    $('#btn_enregistrer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
        id_formation : $('#id_formations').val(),
        nom_stagiaire : $('#nom_stagiaires').val(),
        prenom_stagiaire : $('#prenom_stagiaires').val(),
        date_facture : $('#date_facture').val(),
         num_facture :$('#num_facture').val(),
        mode_paiement : $('#mode_paiement').val(),
        date_paiement : $('#date_paiement').val(),
       //   nom_thematique:$('#nom_thematique option:selected').val(),
       
    };
  
    $.ajax({
        url: "<?php echo site_url('stagiaire/modifier_facture'); ?>",
        type: 'POST',
        data: form_data,
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
             alert("Modification OK!!!!");
              $('#monModal2').modal('hide');
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });


  $('#btn_supprimers').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
       
         num_facture :$('#num_facture1').val(),
       //   nom_thematique:$('#nom_thematique option:selected').val(),
       
    };
  
    $.ajax({
        url: "<?php echo site_url('stagiaire/supprimer_factures'); ?>",
        type: 'POST',
        data: form_data,
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
             alert("Suppression OK!!!!");
             load_data();
              $('#monModal7').modal('hide');
              
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });
  /*$('#btn_enregistrer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
  /* var form_data = {
        id_formation : $('#id_formation').val(),
        nom_formation : $('#nom_formation').val(),
        prix_formation : $('#prix_formation').val(),
        duree_formation : $('#duree_formation').val(),
         nom_formateur:$('#nom_formateur option:selected').val(),
          nom_thematique:$('#nom_thematique option:selected').val(),
       
    };
  
    $.ajax({
        url: "<?php //echo site_url('formation/insertion_formation'); ?>",
        type: 'POST',
        data: form_data,
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
        load_data();
             $('#afficher').html('<div class="alert alert-success text-center">Enregistrement OK</div>');
              $('#afficher').fadeOut(5000);
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });

  $('#nom_formateur').autocomplete({
               // source: "http://localhost/projetAssociation/index.php/admin/enfant/get_autocomplete",
          source: "<?php //echo site_url('formateur/get_autocomplete'); ?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                   // $("#form_search").submit(); 
                }
            });
 /* $('#nom_thematique').autocomplete({
               // source: "http://localhost/projetAssociation/index.php/admin/enfant/get_autocomplete",
          source: "<?php //echo site_url('thematique/get_autocomplete'); ?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                   // $("#form_search").submit(); 
                }
            });
 
  /*$('#supprimer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   /*var form_data = {
        id_formation: $('#id_formations').val(),
       // prenom_formateur: $('#prenom_formateur').val(),
    };
  
    $.ajax({
        url: "<?php //echo site_url('formation/supprimer_formation'); ?>",
        type: 'POST',
        data: form_data,
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
        load_data();
        $('#monModal2').modal('hide');
         //    $('#afficher').html('<div class="alert alert-success text-center">Enregistrement OK</div>');
             // $('#afficher').fadeOut(5000);
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });

//$(document).on('click','.btn_supprimer',function(){
     //       var id_formation = $(this).data('id_formation');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
     // $('[name="id_formations"]').val(id_formation);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

          //  $('#monModal2').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
    //    });

$(document).on('click','.btn_facture',function(){
            var nom_stagiaire = $(this).data('nom_stagiaire');
             var prenom_stagiaire = $(this).data('prenom_stagiaire');
                var id_formation = $(this).data('id_formation');
                var date_facture = $(this).data('date_facture');
                var num_facture = $(this).data('num_facture');
                var mode_paiement = $(this).data('mode_paiement') || 'Chèque';
                var date_paiement = $(this).data('date_paiement') || date_facture;
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="nom_stagiaires"]').val(nom_stagiaire);
      $('[name="prenom_stagiaires"]').val(prenom_stagiaire);
       $('[name="id_formations"]').val(id_formation);
        $('[name="date_facture"]').val(date_facture);
         $('[name="num_facture"]').val(num_facture);
         $('[name="mode_paiement"]').val(mode_paiement);
         $('[name="date_paiement"]').val(date_paiement);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal2').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

        $(document).on('click','.btn_supprimer_facture',function(){
          
                var num_facture = $(this).data('num_facture');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
     
         $('[name="num_facture1"]').val(num_facture);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal7').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

$('#organisme').change(function(){
    //var nom = $('#nom_stagiaire').val();
    //var organisme = $('#organisme option:selected').val();
  //   load_data();
 });


 $('#btn_rechercher').click(function(){
    var nom = $('#nom_stagiaire').val();
     load_data_recherche(nom);
 });
  function load_data()
    {
      
      $.ajax({
        url: "<?php echo site_url('stagiaire/liste_modifier_facture'); ?>",
        type: 'POST',
      
        success: function(data) {
           $('#afficher_formateur').html(data);
            
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });
    return false;
    }

    function load_data_recherche($nom)
    {
      var form_data = {
        nom_stagiaire: $('#nom_stagiaire').val(),
       // prenom_formateur: $('#prenom_formateur').val(),
    };

      $.ajax({
        url: "<?php echo site_url('stagiaire/liste_modifier_factures'); ?>",
        type: 'POST',
        data : {nom_stagiaire:$nom},
        success: function(data) {
           $('#afficher_formateur').html(data);
            
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });
    return false;
    }

})

</script>
