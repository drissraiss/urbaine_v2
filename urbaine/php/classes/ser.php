<div class="pt-4">
    <!-- -->
    <div id="div-info-employe" style="display:none">
        <div class="table-responsive bg-white p-2" style="position: relative;" id="div-content-info-emp">
            <i class="bi bi-arrow-left-square-fill text-secondary" id="btn-close-info-employe"></i>
            <div id="div-info-employe-content">

            </div>
        </div>
    </div>
    <!-- -->
    <form method="post" id="form-ajout-service" class="border-bottom border-3 mb-4 pb-3">
        <div class="mb-3">
            <label for="name_service" class="form-label">Nom du service:</label>
            <input type="text" required name="name_service" id="name_service" class="form-control">
        </div>
        <button class="btn btn-primary">Ajouter le service</button>
    </form>

    <div class="table-responsive">
        <table class="table table-hover table-employes bg-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Administrateurs</th>
                    <th>Employes</th>
                </tr>
            </thead>
            <tbody style="max-height: 600px !important; overflow-y: auto !important; " id="liste-employes">
                <?php
                require_once('../php_cl/Directeurs.php');

                $result = CompteDirecteurs::get_info_services();
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr id_service='" . $data['id'] . "'>";
                    echo "<td>" . $data['id'] . "</td>";
                    echo "<td>" . $data['nom'] . "</td>";
                    echo "<td>" . $data['administrateurs'] . "</td>";
                    echo "<td>" . $data['employes'] . "</td>";
                    echo "<tr/>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    $('#form-ajout-service').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            url: "../php/php_cl/Directeurs.php?do=ajouter_service",
            type: "POST",
            data: formData,
            success: function(result) {

                if (result == 1) {
                    modale(
                        "Success",
                        "Le service a été ajouté avec succès",
                        "modal-success"
                    )
                } else if (result == "exists") {
                    modale(
                        "Avertissement",
                        "Désolé, le service que vous souhaitez créer existe déjà",
                        "modal-warning"
                    )
                }
                $('.btn-services').click();
            },
            cache: false,
            contentType: false,
            processData: false
        })
    })
    $("#btn-close-info-employe").click(() => {
        $("#div-info-employe").hide()
    })
    $("#div-info-employe").click(() => {
        $("#div-info-employe").hide()
    })
    $("#div-content-info-emp").click((e) => {
        e.stopPropagation()
    })
    $('.table-employes tbody tr').click(function() {
        $("#div-info-employe").show()
        $.ajax({
            url: "../php/php_cl/Directeurs.php?do=afficher_info_service",
            type: "POST",
            data: {
                id_service: $(this).eq(0).attr('id_service')
            },
            success: function(result) {
                $('#div-info-employe-content').html(result)
            }
        })
    })
</script>