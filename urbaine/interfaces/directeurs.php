<?php
session_start();
require('partials/check_connection.php');
$interface = "directeurs";
require('partials/check_role.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/profile.css">
    <title>CHATFAMS</title>

</head>

<body>
    <div style="min-height:100vh">
        <div class="" style="background-color: #cfcfcf; ">
            <header class="m-0 p-0">
                <div class="navbar rounded-0 navbar-bg border-0 text-white mb-0">
                    <?php include('partials/logo-svg.php') ?>

                    <div class="ms-auto">
                        <ul class="ms-auto d-flex m-0 list-unstyled ul-headers-icons" id="ul-headers-icons">
                            <!-- <li class="c-pointer nav-icons nav-link"><i class="bi bi-circle-half icons-header"></i>
                            </li> -->
                            <li id="icon-full-screen" class="c-pointer nav-icons nav-link">
                                <i class="bi bi-fullscreen icons-header">
                                </i>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex me-4 ms-3 div-profil" id="div-profil">
                        <b>Directeur</b>
                    </div>
                </div>
            </header>
        </div>

        <div class="row container-fluid p-0 m-0" style="min-height: calc(100vh - 70px)">
            <!--   -->
            <nav class="p-0 d-none d-sm-inline col-auto" id="nav">
                <div id="menu" class="mt-4">
                    <ul class="list-unstyled">
                        <li class="m-4 fw-bold btn-notifications active-now"><i data-toggle="tooltip" title="Notifications" class="bi bi-bell-fill "></i><span class="ms-3 d-none d-xl-inline">Notifications</span>
                        </li>
                        <li class="m-4 fw-bold btn-demandes"><i data-toggle="tooltip" title="Demandes" class="bi bi-journal-text"></i><span class="ms-3 d-none d-xl-inline">Demandes</span>
                        </li>
                        <li class="m-4 fw-bold btn-plaines"><i data-toggle="tooltip" title="Plaintes" class="bi bi-emoji-angry-fill"></i><span class="ms-3 d-none d-xl-inline">Plaintes</span>
                        </li>
                        <li class="m-4 fw-bold btn-employes"><i data-toggle="tooltip" title="Administrateurs" class="bi bi-person-gear"></i><span class="ms-3 d-none d-xl-inline">Administrateurs</span></li>
                        </li>
                        <li class="m-4 fw-bold btn-secretaires"><i data-toggle="tooltip" title="Secretaires" class="bi bi-people-fill"></i><span class="ms-3 d-none d-xl-inline">Secretaires</span></li>
                        </li>
                        <li class="m-4 fw-bold btn-services"><i data-toggle="tooltip" title="Services" class="bi bi-patch-plus"></i><span class="ms-3 d-none d-xl-inline">Services</span></li>
                        </li>
                        <li class="m-4 fw-bold btn-deconnecter">
                            <a href="../php/logout.php" class="log-out text-danger text-decoration-none">
                                <i data-toggle="tooltip" title="Déconnecter" class="bi bi-box-arrow-right"></i><span class="ms-3 d-none d-xl-inline">Déconnecter</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <section class="col position-relative p-3" style="height: calc(100vh - 70px) !important ; overflow-y: auto; background-color: #f2f6fc; min-width: 430px;">
                <!-- Modale -->
                <style>
                    #myModal {
                        display: none;
                        position: fixed;
                        z-index: 1;
                        padding-top: 100px;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        overflow: auto;
                        background-color: rgba(0, 0, 0, 0.4);
                    }
                </style>
                <div id="myModal" class="">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 id="modal-header"></h2>
                            <span id="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <p id="modal-body"></p>
                        </div>
                    </div>
                </div>
                <!-- end modale -->
                <div class="" id="section-content">
                </div>
        </div>
        </section>
    </div>

    <!-- s nav for phone-->
    <!-- <div style="height: 62px; border-top: red solid 3px;" > -->
    <div>
        <ul class="list-unstyled d-flex row nav-phone d-sm-none w-100 m-0 p-0">
            <li class="d-inline text-center py-3 col btn-notifications active-now">
                <i data-toggle="tooltip" title="Notifications" class="bi bi-bell-fill "></i>
            </li>
            </li>
            <li class="d-inline text-center py-3 col btn-demandes">
                <i data-toggle="tooltip" title="Demandes" class="bi bi-journal-text"></i>
            </li>
            <li class="d-inline text-center py-3 col btn-plaines">
                <i data-toggle="tooltip" title="Plaintes" class="bi bi-emoji-angry-fill"></i>
            </li>
            <li class="d-inline text-center py-3 col btn-employes">
                <i data-toggle="tooltip" title="Employés" class="bi bi-person-gear"></i>
            </li>
            <li class="d-inline text-center py-3 col btn-secretaires">
                <i data-toggle="tooltip" title="Secretaires" class="bi bi-people-fill"></i>
            </li>
            <li class="d-inline text-center py-3 col btn-services">
                <i data-toggle="tooltip" title="Services" class="bi bi-patch-plus"></i>
            </li>
            <li class="d-inline text-center py-3 col text-danger btn-deconnecter">
                <a href="../php/logout.php" class="log-out text-danger text-decoration-none">
                    <i data-toggle="tooltip" title="Déconnecter" class="bi bi-box-arrow-right"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- e for phone-->
    </div>
    <script src="../scripts/script.js"></script>
    <script src="../scripts/home.js"></script>
    <script src="../scripts/dir/dir.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $('.btn-employes').click(() => {
            $.ajax({
                url: "../php/choices/directeurs_ch.php?choice=employes",
                success: function(result) {
                    $("#section-content").html(result);
                }
            });
        })
    </script>
</body>

</html>