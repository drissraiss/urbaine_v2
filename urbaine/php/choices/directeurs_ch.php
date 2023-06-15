<?php

require_once("../classes/directeurs_cl.php");

$choice = $_GET["choice"];
switch ($choice) {
    case "notifications":
        Directeur::notifications();
        break;
    case "demandes":
        Directeur::demandes();
        break;
    case "plaines":
        Directeur::plaines();
        break;
    case "employes":
        Directeur::employes();
        break;
    case "secretaires":
        Directeur::secretaires();
        break;
    case "services":
        Directeur::services();
        break;
    default:
        Directeur::notifications();
}
