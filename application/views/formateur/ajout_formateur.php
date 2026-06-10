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
            <div class="col-md-10">
              <div class="card text-center">
                  <div class="card-header btn-primary">
                        Enregistrement Formateur
                  </div>
             <div class="card-body">
               <form method="POST" id="formateur">

              <!-- <div class="form-group row">
                 <div class="form-group text-left col-md-10 form-inline">
                    <label for="organisme" class="col-md-4"><b>Organisme</b></label>
                    <select name="organisme" id="organisme" class="form-control col-md-6" placeholder="Organisme"> 
                      <option></option>-->
                      <?php
                     /*   foreach($organismes as $row)
                        {
                          echo "<option value='".$row->raison_social."'>".$row->raison_social."</option>";
                        }*/
                      ?>
                <!--    </select>
                  </div>
                  
                 
                
               </div>-->
                 <div class="form-group text-left">
                     <label for="nom_formateur">Nom formateur</label>
                     <input type="text" class="form-control" id="nom_formateur" name="nom_formateur" placeholder="Nom formateur">
                     <span id="nomformateur" class="text-danger"></span>
                 </div>
                 <div class="form-group text-left">
                     <label for="prenom_formateur">Prénom formateur</label>
                     <input type="text" class="form-control" id="prenom_formateur" name="prenom_formateur" placeholder="Prénom formateur">
                      <span id="prenomformateur" class="text-danger"></span>
                 </div>
                  <div class="form-group">
                   
                     <input type="submit" class="form-control btn btn-primary col-md-3" id="btn_enregistrer" name="btn_enragistrer" value="Enregistrer">
                  
                 
                      <input type="button" class="form-control btn btn-success col-md-3" id="btn_nouveau" name="btn_nouveau" value="Nouveau">
                    
                 </div>
                 
               </form>
                <div id="afficher" class="col-md-12"></div>
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
                           <label class="col-md-6 col-form-label">Voulez-vous supprimer?</label>
                            <div class="col-md-4">
                              <input type="text" name="nom_formateurs" id="nom_formateurs" class="form-control" placeholder="Nom formateur" readonly>
                            </div>
                   <!--         <div class="col-md-2">
                            <input type="hidden" name="organismes" id="organismes" class="form-control" placeholder="Organisme" readonly>
                          </div>-->
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
        <form method="post" action="<?php echo site_url('formateur/modifier_cv'); ?>" enctype="multipart/form-data">
                <div class="form-group row">
                           <label class="col-md-4 col-form-label">Nom formateur</label>
                            <div class="col-md-6">
                              <input type="text" name="nom_formateurss" id="nom_formateurss" class="form-control" placeholder="Nom formateur">
                            </div>
                   <!--         <div class="col-md-2">
                            <input type="hidden" name="organismes" id="organismes" class="form-control" placeholder="Organisme" readonly>
                          </div>-->
                   </div>

                   <div class="form-group row">
                           <label class="col-md-4 col-form-label">Prénom formateur</label>
                            <div class="col-md-6">
                              <input type="text" name="prenom_formateurss" id="prenom_formateurss" class="form-control" placeholder="Nom formateur">
                            </div>
                   <!--         <div class="col-md-2">
                            <input type="hidden" name="organismes" id="organismes" class="form-control" placeholder="Organisme" readonly>
                          </div>-->
                   </div>

                   <div class="form-group row">
                           <label class="col-md-4 col-form-label">CV</label>
                            <div class="col-md-6">
                              <input type="file" name="fichier" id="fichier" class="form-control" placeholder="Nom formateur">
                            </div>
                   <!--         <div class="col-md-2">
                            <input type="hidden" name="organismes" id="organismes" class="form-control" placeholder="Organisme" readonly>
                          </div>-->
                   </div>
             
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-danger" id="supprimer">Oui</button>-->
        <input type="submit" name="cmdcv" id="cmdcv" value="Modifier">
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

   $('#formateur').on('submit', function(event){
  //$('#btn_enregistrer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
   
    event.preventDefault();
   var form_data = {
        nom_formateur: $('#nom_formateur').val(),
        prenom_formateur: $('#prenom_formateur').val(),
        //organisme : $('#organisme option:selected').val(),
    };
  
    $.ajax({
        url: "<?php echo site_url('formateur/test_insertion_formateur'); ?>",
        type: 'POST',
        data: form_data,
        dataType : "JSON",
        success: function(data) {
           // $('#result_tableau').html(data);
       //load_data();
        	 
       if(data.error)
       {

       	if(data.error_nomformateur!='')
       	{
       		 $('#nomformateur').html(data.error_nomformateur);
       	}
       	else
       	{
       		alert('ffffff')
       		 $('#nomformateur').html('');
       	}

       	if(data.error_prenomformateur!='')
       	{
       		 $('#prenomformateur').html(data.error_prenomformateur);
       	}
       	else
       	{
       		 $('#prenomformateur').html('');
       	}
       }
       else{

       	if(data.success!='')
       	{
       		 load_data();
             $('#afficher').html('<div class="alert alert-success text-center col-md-12">Enregistrement OK</div>');
              $('#afficher').fadeOut(5000);
       		  $('#prenomformateur').html('');
       		   $('#nomformateur').html('');
       	
       


       		}
       }
        
        },
    error : function(msg){
      $('#afficher').html('<div class="alert alert-danger text-center">Erreur</div>');
    }
    });

    
  });

  $('#supprimer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
        nom_formateur: $('#nom_formateurs').val(),
        //organisme : $('#organismes').val(),
       // prenom_formateur: $('#prenom_formateur').val(),
    };
  
    $.ajax({
        url: "<?php echo site_url('formateur/supprimer_formateur'); ?>",
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
            var nom_formateur = $(this).data('nom_formateur');
            var organisme = $(this).data('organisme');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="nom_formateurs"]').val(nom_formateur);
      $('[name="organismes"]').val(organisme);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal2').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });


        $(document).on('click','.btn_modifier',function(){
            var nom_formateur = $(this).data('nom_formateur');
            var prenom_formateur = $(this).data('prenom_formateur');
            //var organisme = $(this).data('organisme');
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="nom_formateurss"]').val(nom_formateur);
      $('[name="prenom_formateurss"]').val(prenom_formateur);
      
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal3').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
        });

  $('#organisme').change(function(){
load_data();
 });


 $('#btn_nouveau').click(function(){
     $('#nom_formateur').focus();
    $('#nom_formateur').val('');
    $('#prenom_formateur').val('');
 });
  function load_data()
    {
      
      $.ajax({
        url: "<?php echo site_url('formateur/liste_formateur'); ?>",
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
/*
  $('#prenom_formateur').autocomplete({
               // source: "http://localhost/projetAssociation/index.php/admin/enfant/get_autocomplete",
          source: "<?php //echo site_url('formateur/get_autocomplete'); ?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                   // $("#form_search").submit(); 
                }
            });
            */

    $('#nom_formateur').keypress(function(e){  
     // alert("ezzzzzzz")
          //var ideleve = $(this).val();
          if(e.which == 13){
      var nom_formateur = $('#nom_formateur').val();      
    
         $.ajax({  
               url:"<?php echo site_url('formateur/Afficher_formateur'); ?>",  
               method:"POST",  
               data:{nom_formateur:nom_formateur},  
         cache : false,
               dataType:"JSON",  
               success:function(data){ 
          // datas = $.getJSON(data);
          
          // console.log(data[0].idEcole);
                   $('#prenom_formateur').val(data[0].prenom_formateur);  
        //   $('#nomclasse').val(data[0].nomclasse);  
         //  $('#anneescolaire').val(data[0].nomanneescolaire);  
        //    $('#sary').html("<img src='<?php //echo base_url("assets/images"); ?>/"+data[0].photo+"' width=160 height=110>");  
          
               }  
          });  
}
  
  });

})

</script>
