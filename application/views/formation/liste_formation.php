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
                        Enregistrement Formation
                  </div>
             <div class="card-body">
               <form>
                 <div class="form-group text-left">
                     <label for="nom_formateur">ID formation</label>
                     <input type="text" class="form-control" id="id_formation" name="id_formation" placeholder="ID formateur">
                 </div>
                 <div class="form-group text-left">
                     <label for="nom_formation">Nom formation</label>
                     <input type="text" class="form-control" id="nom_formation" name="nom_formation" placeholder="Nom formation">
                 </div>
                 <div class="form-group text-left">
                     <label for="prix_formation">Prix formation</label>
                     <input type="text" class="form-control" id="prix_formation" name="prix_formation" placeholder="Prix formation">
                 </div>

                  <div class="form-group text-left">
                     <label for="duree_formation">Durée formation</label>
                     <input type="text" class="form-control" id="duree_formation" name="duree_formation" placeholder="Durée formation">
                 </div>
                 <div class="row">
                <div class="form-group text-left col-md-6">
                    <label for="nom_formateur">Formateur</label>
                    <select name="nom_formateur" id="nom_formateur" class="form-control">
                          <option></option>
                          <?php
                              foreach($donneeformateur as $row)
                                 {
                                    echo "<option value='".$row->nom_formateur."'>".$row->nom_formateur." ".$row->prenom_formateur."</option>";
                                }
                  
                  
                           ?>
            
                    </select>
              </div>

              <div class="form-group text-left col-md-6">
                    <label for="nom_thematique">Thématique</label>
                    <select name="nom_thematique" id="nom_thematique" class="form-control">
                          <option></option>
                          <?php
                             foreach($donneethematique as $row)
                                 {
                                    echo "<option value='".$row->nom_thematique."'>".$row->nom_thematique."</option>";
                                }
                  
                  
                           ?>
            
                    </select>
              </div>
            </div>
                  <div class="form-group">
                   
                     <input type="button" class="form-control btn btn-primary col-md-3" id="btn_enregistrer" name="btn_enragistrer" value="Enregistrer">
                  
                 
                      <input type="button" class="form-control btn btn-success col-md-3" id="btn_nouveau" name="btn_nouveau" value="Nouveau">
                    
                 </div>
                 
               </form>
             <div class="form-group row">
              <div class="table-responsive" id="decoration_table"></div>
            </div>
           <div class="form-group row">
              <div align="center" id="pagination_link"></div>
          </div>
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
                              <input type="text" name="id_formations" id="id_formations" class="form-control" placeholder="ID Formation" readonly>
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



    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datepicker/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datepicker/daterangepicker.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/global.js'); ?>"></script>


<script type="text/javascript">
$(document).ready(function(){

load_decoration_table(1);
    function load_decoration_table(page){
      //var action = 'pagination__decoration';
      //var couleur = get_filter('couleur');
    //  var forme = get_filter('forme');
    //  var nom_formation = $('#nom_formation').val();

      $.ajax({
        url: "<?php echo site_url('formation/fetch_data_formation/'); ?>" + page, 
        type : "POST",
        dataType : "json",
       // data : {nom_formation:nom_formation},
        success: function(data)
        {
          
          $("#decoration_table").html(data.decoration_table);
          $("#pagination_link").html(data.pagination_link);
        }
 
      });
    }

load_decoration_table(1);
$(document).on("click",".pagination li a", function(event){
      event.preventDefault();
       page = $(this).data("data-ci-pagination-page");
      load_decoration_table(page);
    });
 // load_data();
  $('#btn_enregistrer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
        id_formation : $('#id_formation').val(),
        nom_formation : $('#nom_formation').val(),
        prix_formation : $('#prix_formation').val(),
        duree_formation : $('#duree_formation').val(),
         nom_formateur:$('#nom_formateur option:selected').val(),
          nom_thematique:$('#nom_thematique option:selected').val(),
       
    };
  
    $.ajax({
        url: "<?php echo site_url('formation/insertion_formation'); ?>",
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

  $('#supprimer').click(function(){
    /*var daty = $('#daty').attr('value');
    var libelle = $('#libelledepenseachat').val();
    var qtedepenseachat = $('#qtedepenseachat').val();
    var pudepenseachat = $('#pudepenseachat').val();
    var montantdepenseachat = $('#montantdepenseachat').val();
    */
    
   var form_data = {
        id_formation: $('#id_formations').val(),
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
          //   var prenom_formateur = $(this).data('prenom_formateur');
      /*$('#maTable tr').each(function() {
        nom = $(this).find('td:first').html();
        alert(""+ nom);
      });
        */
      //alert(personne_id)
      
    
      //alert(datanaissances);
      $('[name="id_formations"]').val(id_formation);
     //  $('[name="prenom_formateurs"]').val(prenom_formateur);
      

            $('#monModal2').modal('show');
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
    $('#nom_formateur').val('');
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
