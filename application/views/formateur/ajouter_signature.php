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
                        Enregistrement Signatures Formateurs
                  </div>
             <div class="card-body">
             <?php echo form_open_multipart('formateur/upload_signatures'); ?>
                <label for="nom_formateur">Nom du formateur:</label>
                <input type="text" name="nom_formateur" required><br><br>
                <label for="prenom_formateur">Prénom du formateur:</label>
                <input type="text" name="prenom_formateur" required><br><br>
                <label for="signatures">Signatures:</label>
                <input type="file" name="signatures[]" multiple required><br><br>
                <input type="submit" value="Envoyer" class="btn btn-primary">
                <?php echo form_close(); ?>
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
                              <input type="text" name="nom_formateurs" id="nom_formateurs" class="form-control" placeholder="Nom formateur" readonly>
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
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="nom_formateurs"]').val(nom_formateur);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal2').modal('show');
          /*  $('[name="personne_code_edit"]').val(personne_id);
            $('[name="personne_name_edit"]').val(nom);
            $('[name="prenom_edit"]').val(prenom);
      $('[name="pays_edit"]').val(pays);*/
      
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
