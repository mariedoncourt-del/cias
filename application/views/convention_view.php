<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convention View</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .highlighted-date { background-color: red; }
    </style>
</head>
<body>

<?php foreach ($conventions as $convention): ?>
    <div class="convention">
        <p>Formateur: <?= $convention->nom_formateur ?> <?= $convention->prenom_formateur ?></p>
        <p>Date Convention 1: <input type="text" class="datepicker" data-formateur="<?= $convention->nom_formateur ?>" value="<?= $convention->date_convention_1 ?>"></p>
        <!-- Répétez ceci pour les autres dates -->
    </div>
<?php endforeach; ?>

<script>
    $(document).ready(function () {
        $(".datepicker").datepicker({
            onSelect: function (dateText, inst) {
                var formateurId = $(this).data('formateur');
                var selectedDate = dateText;
               
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('convention/check_date_exists') ?>',
                    data: {formateur_id: formateurId, selected_date: selectedDate},
                    success: function (response) {
                        if (response === 'exists') {
                            $(inst.input).addClass('highlighted-date');
                        } else {
                            $(inst.input).removeClass('highlighted-date');
                        }
                    }
                });
            }
        });
    });
</script>

</body>
</html>