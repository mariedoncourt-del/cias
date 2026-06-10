<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section style="background-color:#ffffff" class="content-header">
    <!--  <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Enregistrement formateur
        
      </h1>-->
    </section>

    <section  style="background-color:#ffffff" class="content">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card text-center">
                  <div class="card-header btn-primary">
                        Enregistrement Cours
                  </div>
             <div class="card-body">
               <form method="POST" id="mainForm">
             <!--  <div class="form-group row">
                 <div class="form-group text-left col-md-10 form-inline">
                    <label for="organisme" class="col-md-4"><b>Organisme</b></label>
                    <select name="organisme" id="organisme" class="form-control col-md-6" placeholder="Organisme"> 
                      <option></option>-->
                      <?php
                      /*  foreach($organismes as $row)
                        {
                          echo "<option value='".$row->raison_social."'>".$row->raison_social."</option>";
                        }*/
                      ?>
            <!--        </select>
                  </div>
                  
                 
                
               </div>-->
               
                 <div class="form-group text-left">
                     <label for="nom_formateur">ID Cours</label>
                     <input type="text" class="form-control" id="id_formation" name="id_formation" placeholder="ID Cours" autocomplete="off">
                     <span id="idformation" class="text-danger"></span>
                 </div>
                 <div class="form-group text-left">
                     <label for="nom_formation">Nom Cours</label>
                     <input type="text" class="form-control" id="nom_formation" name="nom_formation" placeholder="Nom Cours" autocomplete="off">
                      <span id="nomformation" class="text-danger"></span>
                 </div>
                 <div class="form-group text-left">
                     <label for="prix_formation">Prix Cours</label>
                     <input type="text" class="form-control" id="prix_formation" name="prix_formation" placeholder="Prix Cours" autocomplete="off">
                      <span id="prixformation" class="text-danger"></span>
                 </div>

                  <div class="form-group text-left">
                     <label for="duree_formation">Durée Cours</label>
                     <input type="text" class="form-control" id="duree_formation" name="duree_formation" placeholder="Durée Cours" autocomplete="off">
                      <span id="dureeformation" class="text-danger"></span>
                 </div>
                 <div class="row">
               <!-- <div class="form-group text-left col-md-6">
                    <label for="nom_formateur">Formateur</label>
                    <input type="text" class="form-control" id="nom_formateur" name="nom_formateur" placeholder="Nom formateur">
                   <select name="nom_formateur" id="nom_formateur" class="form-control">
                          <option></option>
                          <?php
                           /*   foreach($donneeformateur as $row)
                                 {
                                    echo "<option value='".$row->nom_formateur."'>".$row->nom_formateur." ".$row->prenom_formateur."</option>";
                                }
                  
                  */
                           ?>
            
                    </select>-->
             <!-- </div> -->

              <div class="form-group text-left col-md-12">
                    <label for="nom_thematique">Thématique</label>
                      <input type="text" class="form-control" id="nom_thematique" name="nom_thematique" placeholder="Nom thématique">
                 <!--   <select name="nom_thematique" id="nom_thematique" class="form-control">
                          <option></option>
                          <?php
                           /*  foreach($donneethematique as $row)
                                 {
                                    echo "<option value='".$row->nom_thematique."'>".$row->nom_thematique."</option>";
                                }
                  
                  */
                           ?>
            
                    </select>-->
              </div>
              <!-- <div class="form-group text-left">
                     <label for="duree_formation">Programme</label>
                     <input type="file" class="form-control" id="file" name="file">
                      <span id="programme" class="text-danger"></span>
                 </div> -->
            </div>
                  <div class="form-group">
                   
                     <input type="submit" class="form-control btn btn-primary col-md-3" id="btn_enregistrer" name="btn_enragistrer" value="Enregistrer">
                  
                 
                      <input type="button" class="form-control btn btn-success col-md-3" id="btn_nouveau" name="btn_nouveau" value="Nouveau">
                    
                 </div>
                 
               </form>
                <div id="afficher" class="col-md-6"></div>
                <div id="afficher_formateur" class="col-md-12"></div>
              </div>






  <div class="modal" id="monModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Supprimer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
                <div class="form-group row">
                           <label class="col-md-8 col-form-label">Voulez-vous supprimer?</label>
                            <div class="col-md-2">
                              <input type="text" name="id_formations" id="id_formations" class="form-control" placeholder="ID Formation" readonly>
                            </div>
                            <div class="col-md-2">
                              <input type="text" name="organismess" id="organismess" class="form-control" placeholder="ID Formation" readonly>
                            </div>

                   </div>
             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="supprimer">Oui</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
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
        <h4 class="modal-title">Modifier</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
                 <div class="form-group text-left">
                     <label for="nom_formateur">ID Cours</label>
                     <input type="text" class="form-control" id="id_formationss" name="id_formationss" placeholder="ID Cours" autocomplete="off">
                 </div>
                 <div class="form-group text-left">
                     <label for="nom_formation">Nom Cours</label>
                     <input type="text" class="form-control" id="nom_formationss" name="nom_formationss" placeholder="Nom Cours" autocomplete="off">
                 </div>
                 <div class="form-group text-left">
                     <label for="prix_formation">Prix Cours</label>
                     <input type="text" class="form-control" id="prix_formations" name="prix_formations" placeholder="Prix Cours" autocomplete="off">
                 </div>

                  <div class="form-group text-left">
                     <label for="duree_formation">Durée Cours</label>
                     <input type="text" class="form-control" id="duree_formations" name="duree_formations" placeholder="Durée Cours" autocomplete="off">
                 </div>
                  <div class="form-group text-left">
                    <label for="nom_thematique">Thématique</label>
                     <!-- <input type="text" class="form-control" id="nom_thematique" name="nom_thematique" placeholder="Nom thématique"> -->
                    <select name="nom_thematiques" id="nom_thematiques" class="form-control">
                          <?php
                             foreach($donneethematique as $row)
                                 {
                                    echo "<option value='".$row->nom_thematique."'>".$row->nom_thematique."</option>";
                                }
                  
                  
                           ?>
            
                    </select>
              </div>
              <div class="form-group text-left">
                     <label for="prix_formation">Prix Cours</label>
                     <input type="text" class="form-control" id="organismes" name="organismes" placeholder="Prix Cours" autocomplete="off">
                 </div>


             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="btn_modifiers">Oui</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
    </form>

    </div>
  </div>
</div>




<div class="modal" id="monModal4">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modifier</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
                 <div class="form-group text-left">
                     <label for="nom_formateur">ID Cours</label>
                     <input type="text" class="form-control" id="id_formationsss" name="id_formationsss" placeholder="ID Cours" autocomplete="off">
                 </div>
                 <div class="form-group text-left">
                     <label for="nom_formation">Nom Cours</label>
                     <input type="text" class="form-control" id="nom_formationsss" name="nom_formationsss" placeholder="Nom Cours" autocomplete="off">
                 </div>
                 <div class="form-group text-left">
                     <label for="prix_formation">Prix Cours</label>
                     <input type="text" class="form-control" id="prix_formationss" name="prix_formationss" placeholder="Prix Cours" autocomplete="off">
                 </div>

                  <div class="form-group text-left">
                     <label for="duree_formation">Durée Cours</label>
                     <input type="text" class="form-control" id="duree_formationss" name="duree_formationss" placeholder="Durée Cours" autocomplete="off">
                 </div>
                  

             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn_modifierss">Enregistrer dans Qualiopi</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
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
  
  load_data();


  //$('#btn_enregistrer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */

     $('#mainForm').on('submit', function(event){
    

     event.preventDefault();
     // fichier = $('#file')[0].files[0].name;
  


   var form_data = {
        id_formation : $('#id_formation').val(),
        nom_formation : $('#nom_formation').val(),
        prix_formation : $('#prix_formation').val(),
        duree_formation : $('#duree_formation').val(),
      //   nom_formateur:$('#nom_formateur option:selected').val(),
          nom_thematique:$('#nom_thematique').val(),
          organisme : $('#organisme option:selected').val(),
         // programme : fichier,
       
    };
  
    $.ajax({
        url: "<?php echo site_url('formation/insertion_formation'); ?>",
        type: 'POST',
        data: form_data,
        dataType : "JSON",
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
       // load_data();
        //     $('#afficher').html('<div class="alert alert-success text-center">Enregistrement OK</div>');
         //     $('#afficher').fadeOut(5000);

       if(data.error)
       {

        if(data.error_idformateur!='')
        {
           $('#idformation').html(data.error_idformation);
        }
        else
        {
          
           $('#idformation').html('');
        }

        if(data.error_nomformation!='')
        {
           $('#nomformation').html(data.error_nomformation);
        }
        else
        {
           $('#nomformation').html('');
        }

        if(data.error_prixformation!='')
        {
           $('#prixformation').html(data.error_prixformation);
        }
        else
        {
           $('#prixformation').html('');
        }

        if(data.error_dureeformation!='')
        {
           $('#dureeformation').html(data.error_dureeformation);
        }
        else
        {
           $('#dureeformation').html('');
        }



       }
       else{

        if(data.success!='')
        {
           load_data();
             $('#afficher').html('<div class="alert alert-success text-center col-md-12">Enregistrement OK</div>');
              $('#afficher').fadeOut(5000);
             $('#idformation').html('');
            $('#nomformation').html('');
            $('#prixformation').html('');
            $('#dureeformation').html('');


        
       


          }
       }
        
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });

  $('#btn_modifiers').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
        id_formation : $('#id_formationss').val(),
        nom_formation : $('#nom_formationss').val(),
        prix_formation : $('#prix_formations').val(),
        duree_formation : $('#duree_formations').val(),
      //   nom_formateur:$('#nom_formateur option:selected').val(),
          nom_thematique:$('#nom_thematiques').val(),
          organisme:$('#organismes').val(),
       
    };
  
    $.ajax({
        url: "<?php echo site_url('formation/modifier_formation'); ?>",
        type: 'POST',
        data: form_data,
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
        //load_data();
             //load_data();
             alert("Modification OK");
        load_data();
        $('#monModal3').modal('hide');
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });

  $('#nom_formateur').autocomplete({
               // source: "http://localhost/projetAssociation/index.php/admin/enfant/get_autocomplete",
          source: "<?php echo site_url('formateur/get_autocomplete'); ?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                   // $("#form_search").submit(); 
                }
            });
  $('#nom_thematique').autocomplete({
               // source: "http://localhost/projetAssociation/index.php/admin/enfant/get_autocomplete",
          source: "<?php echo site_url('thematique/get_autocomplete'); ?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                   // $("#form_search").submit(); 
                }
            });
            $('#organisme').change(function(){
              load_data();
            });


  $('#supprimer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
        id_formation: $('#id_formations').val(),
        organisme: $('#organismess').val(),
       // prenom_formateur: $('#prenom_formateur').val(),
    };
  
    $.ajax({
        url: "<?php echo site_url('formation/supprimer_formation'); ?>",
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

$(document).on('click','.btn_supprimer',function(){
            var id_formation = $(this).data('id_formation');
            var organisme = $(this).data('organisme');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="id_formations"]').val(id_formation);
      $('[name="organismess"]').val(organisme);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal2').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

$(document).on('click','.btn_modifier',function(){
            var id_formation = $(this).data('id_formation');
             var nom_formation = $(this).data('nom_formation');
              var prix_formation = $(this).data('prix_formation');
               var duree_formation = $(this).data('duree_formation');
                var nom_thematique = $(this).data('nom_thematique');
                var organisme = $(this).data('organisme');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="id_formationss"]').val(id_formation);
       $('[name="nom_formationss"]').val(nom_formation);
        $('[name="prix_formations"]').val(prix_formation);
         $('[name="duree_formations"]').val(duree_formation);
          $('[name="nom_thematiques"]').val(nom_thematique);
          $('[name="organismes"]').val(organisme);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal3').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

        $(document).on('click','.btn_qualiopi',function(){
            var id_formation = $(this).data('id_formation');
             var nom_formation = $(this).data('nom_formation');
              var prix_formation = $(this).data('prix_formation');
               var duree_formation = $(this).data('duree_formation');
                var nom_thematique = $(this).data('nom_thematique');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="id_formationsss"]').val(id_formation);
       $('[name="nom_formationsss"]').val(nom_formation);
        $('[name="prix_formationss"]').val(prix_formation);
         $('[name="duree_formationss"]').val(duree_formation);
        //  $('[name="nom_thematiquess"]').val(nom_thematique);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal4').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

        $('#btn_modifierss').click(function(){
    
   
          var form_data = {
        id_formation : $('#id_formationsss').val(),
        nom_formation : $('#nom_formationsss').val(),
        prix_formation : $('#prix_formationss').val(),
        duree_formation : $('#duree_formationss').val(),
      //   nom_formateur:$('#nom_formateur option:selected').val(),
        //  nom_thematique:$('#nom_thematiques').val(),
       
    };
   
     $.ajax({
          url: "<?php echo site_url('formation/ajouter_formations_qualiopi'); ?>",
        
         type: 'POST',
         data: form_data,
         success: function(data) {
 
           alert(data);
           
      //  alert("Enregistrment OK!!!");
            
       
         
         },
     error : function(msg){
       $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
     }
     });
 
     
   });
 



 $('#btn_nouveau').click(function(){
     $('#id_formation').focus();
    $('#id_formation').val('');
     $('#nom_formation').val('');
      $('#prix_formation').val('');
      $('#duree_formation').val('');
   // $('#nom_formateur').val('');
     $('#nom_thematique').val('');
 });
  function load_data()
    {
      $.ajax({
        url: "<?php echo site_url('formation/liste_formation'); ?>",
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

})

</script>
