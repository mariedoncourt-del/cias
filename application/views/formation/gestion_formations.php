

  <section class="content-header">
    <h1><i class="fa fa-graduation-cap"></i> Gestion des Formations
      <small><?php echo isset($total) ? $total : 0; ?> formations</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="https://maf-formation.org/cias/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Formations</li>
    </ol>
  </section>

  <section class="content">
    <!-- Formulaire ajout -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus"></i> Ajouter une formation</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form id="form_ajout_formation" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label">ID Formation *</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="new_id_formation" placeholder="Ex: FORM-NOM-2026" required>
                </div>
                <label class="col-sm-2 control-label">Nom *</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="new_nom_formation" placeholder="Nom de la formation" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Dur&eacute;e (h)</label>
                <div class="col-sm-2">
                  <input type="number" class="form-control" id="new_duree" value="60">
                </div>
                <label class="col-sm-2 control-label">Prix (&euro;)</label>
                <div class="col-sm-2">
                  <input type="number" class="form-control" id="new_prix" step="0.01" value="0">
                </div>
                <div class="col-sm-4">
                  <button type="button" id="btn_ajouter_formation" class="btn btn-success btn-block">
                    <i class="fa fa-plus"></i> Ajouter
                  </button>
                </div>
              </div>
              <div id="msg_ajout"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Liste -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-list"></i> Liste des formations</h3>
            <div class="box-tools">
              <input type="text" id="filtre_formation" class="form-control input-sm" placeholder="Filtrer..." style="width:200px;display:inline-block">
            </div>
          </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-bordered table-striped table-hover" id="table_formations">
              <thead>
                <tr style="background:#3c8dbc;color:#fff">
                  <th>ID</th><th>Nom</th><th>Dur&eacute;e</th><th>Prix</th>
                  <th>Organisme</th><th>Conventions</th><th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php if(isset($formations)): foreach($formations as $f): ?>
                <tr>
                  <td><code><?php echo htmlspecialchars($f->id_formation); ?></code></td>
                  <td><?php echo htmlspecialchars($f->nom_formation); ?></td>
                  <td><?php echo $f->duree_formation; ?>h</td>
                  <td><?php echo number_format((float)$f->prix_formation, 2, ',', ' '); ?> &euro;</td>
                  <td><?php echo htmlspecialchars($f->organisme ?? ''); ?></td>
                  <td style="text-align:center">
                    <span class="badge <?php echo $f->nb_conventions > 0 ? 'bg-blue' : 'bg-gray'; ?>">
                      <?php echo $f->nb_conventions; ?>
                    </span>
                  </td>
                  <td style="text-align:center">
                    <?php if($f->nb_conventions == 0): ?>
                    <button class="btn btn-xs btn-danger btn-supprimer-formation" data-id="<?php echo htmlspecialchars($f->id_formation); ?>">
                      <i class="fa fa-trash"></i>
                    </button>
                    <?php else: ?>
                    <span class="text-muted" title="Utilis&eacute;e dans des conventions"><i class="fa fa-lock"></i></span>
                    <?php endif; ?>
                  </td>
                </tr>
                <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
$(document).ready(function(){
    // Filtre
    $("#filtre_formation").on("keyup", function(){
        var val = $(this).val().toLowerCase();
        $("#table_formations tbody tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(val) > -1);
        });
    });
    
    // Ajouter
    $("#btn_ajouter_formation").click(function(){
        var data = {
            id_formation: $("#new_id_formation").val(),
            nom_formation: $("#new_nom_formation").val(),
            duree_formation: $("#new_duree").val(),
            prix_formation: $("#new_prix").val()
        };
        if(!data.id_formation || !data.nom_formation){
            $("#msg_ajout").html('<div class="alert alert-danger">ID et Nom obligatoires</div>');
            return;
        }
        $.ajax({
            url: "<?php echo site_url('stagiaire/ajouter_formation_ajax'); ?>",
            type: "POST", data: data, dataType: "JSON",
            success: function(r){
                if(r.success){
                    $("#msg_ajout").html('<div class="alert alert-success">'+r.success+'</div>');
                    setTimeout(function(){ location.reload(); }, 1000);
                } else {
                    $("#msg_ajout").html('<div class="alert alert-danger">'+r.error+'</div>');
                }
            }
        });
    });
    
    // Supprimer
    $(".btn-supprimer-formation").click(function(){
        var id = $(this).data("id");
        if(!confirm("Supprimer la formation " + id + " ?")) return;
        $.ajax({
            url: "<?php echo site_url('stagiaire/supprimer_formation_ajax'); ?>",
            type: "POST", data: {id_formation: id}, dataType: "JSON",
            success: function(r){
                if(r.success){ location.reload(); }
                else { alert(r.error); }
            }
        });
    });
});
</script>

