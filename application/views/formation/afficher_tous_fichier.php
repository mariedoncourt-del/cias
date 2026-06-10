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
            <div class="col-md-12">
              <div class="card text-center">
                  <div class="card-header btn-primary">
                        Télécharger plusieurs fichiers
                  </div>
             <div class="card-body">
              <form method="post" action="<?php echo site_url('Formation/download_selected_filess'); ?>">
             <!-- <div class="form-group row">
                 <div class="form-group text-left col-md-10 form-inline">
                    <label for="organisme" class="col-md-4"><b>Organisme</b></label>
                    <select name="organisme" id="organisme" class="form-control col-md-6" placeholder="Organisme"> -->
                      <!-- <option></option> -->
                      <?php
                       /* foreach($organismes as $row)
                        {
                          echo "<option value='".$row->raison_social."'>".$row->raison_social."</option>";
                        }*/
                      ?>
              <!--      </select>
                  </div>
                  
                 
                
               </div>-->
              <input type="submit" value="Télécharger les fichiers sélectionnés" class="btn btn-primary"><br><br><br>
              <table id="maTable" class="table table-bordered table-striped">
              <tr>
                    <th class="border-primary"></th>
                   
                    <th class="border-primary col-md-6">Programmes</th>
</tr>
              <?php
                foreach($tout_programme as $files)
                {
                    ?>
                    <tr><td class="border-primary">
                    <input type="checkbox" name="selected_files[]" value="<?php echo $files->id; ?>" ckecked="false">
                </td>
                <td class="border-primary text-left">
                    <?php echo $files->programme; ?>
                </td></tr>

              <?php
                }

                ?>
                </table>

              
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
                            <div class="col-md-4">
                              <input type="hidden" name="idp" id="idp" class="form-control" placeholder="ID Formation" readonly>
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
        <h4 class="modal-title">Télécharger</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('formation/download_programme'); ?>">
                 <div class="form-group text-left">
                     <label for="nom_formateur">Programme</label>
                     <input type="text" class="form-control" id="programme" name="programme" placeholder="ID formation">
                 </div>
               


             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" id="btn_telechargerss" value="Télécharger">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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
                     <label for="idps">ID</label>
                     <input type="text" class="form-control" id="idps" name="idps" placeholder="ID">
                 </div>
                 <div class="form-group text-left">
                     <label for="programmes">Programme</label>
                     <input type="text" class="form-control" id="programmes" name="programmes" placeholder="Programme">
                 </div>
                 <div class="form-group text-left">
                     <label for="id_formation">ID formation</label>
                     <input type="text" class="form-control" id="id_formation" name="id_formation" placeholder="ID Formation">
                 </div>
                 <div class="form-group text-left">
                     <label for="prixs">Prix</label>
                     <input type="text" class="form-control" id="prixs" name="prixs" placeholder="Prix">
                 </div>
                 <div class="form-group text-left">
                     <label for="durees">Durée</label>
                     <input type="text" class="form-control" id="durees" name="durees" placeholder="Durée">
                 </div>
               
               


             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="button" class="btn btn-primary" id="btn_modifiers" value="Modifier">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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

   var form_data = {
        id_formation : $('#id_formation').val(),
        nom_formation : $('#nom_formation').val(),
        prix_formation : $('#prix_formation').val(),
        duree_formation : $('#duree_formation').val(),
      //   nom_formateur:$('#nom_formateur option:selected').val(),
          nom_thematique:$('#nom_thematique').val(),
       
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

  $('#btn_telechargers').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
   
   var form_data = {
        programme : $('#programme').val(),
      
       
    };
  
    $.ajax({
        url: "<?php echo site_url('formation/download_programme'); ?>",
        type: 'GET',
        data: form_data,
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
        //load_data();
             //load_data();
       //      alert("Modification OK");
      //  load_data();
        $('#monModal3').modal('hide');
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
        programme : $('#programmes').val(),
        id : $('#idps').val(),
        id_formation : $('#id_formation').val(),
        prix : $('#prixs').val(),
        duree : $('#durees').val(),
      
       
    };
  
    $.ajax({
        url: "<?php echo site_url('formation/modifier_programme'); ?>",
        type: 'POST',
        data: form_data,
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
        //load_data();
             //load_data();
       //      alert("Modification OK");
      //  load_data();
      alert(data);
        $('#monModal4').modal('hide');
        load_data();
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });

  $('#nom_programme').autocomplete({
               // source: "http://localhost/projetAssociation/index.php/admin/enfant/get_autocomplete",
          source: "<?php echo site_url('formation/get_autocomplete_programme'); ?>",
     
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

  $('#supprimer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
        id: $('#idp').val(),
       // prenom_formateur: $('#prenom_formateur').val(),
    };
  
    $.ajax({
        url: "<?php echo site_url('formation/supprimer_programme'); ?>",
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
            var id = $(this).data('id');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)

      
    
      //alert(datanaissances);
      $('[name="idp"]').val(id);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal2').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

        $(document).on('click','.btn_modifier',function(){
            var id = $(this).data('id');
           var programme = $(this).data('programme');
           var prix = $(this).data('prix');
           var duree = $(this).data('duree');
           var id_formation = $(this).data('id_formation');
      

      
    
      //alert(datanaissances);
      $('[name="idps"]').val(id);
      $('[name="programmes"]').val(programme);
      $('[name="prixs"]').val(prix);
      $('[name="durees"]').val(duree);
      $('[name="id_formation"]').val(id_formation);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal4').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

$(document).on('click','.btn_telecharger',function(){
            var programme = $(this).data('programme');
           
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="programme"]').val(programme);
      
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal3').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
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

 $('#organisme').change(function(){
  load_data();
 });

  function load_data()
    {
      $.ajax({
        url: "<?php echo site_url('formation/liste_programme_formation'); ?>",
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


    $('#btn_rechercher').click(function(){
    var nom = $('#nom_programme').val();
   
     load_data_recherche(nom);
 });

    function load_data_recherche($nom)
    {
      var form_data = {
        nom_programme: $('#nom_programme').val(),
       // prenom_formateur: $('#prenom_formateur').val(),
    };

      $.ajax({
        url: "<?php echo site_url('formation/liste_programme_formations'); ?>",
        type: 'POST',
        data : {nom_programme:$nom},
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
