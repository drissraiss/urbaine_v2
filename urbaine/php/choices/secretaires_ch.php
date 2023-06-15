<?php

require_once("../classes/secretaires_cl.php");

$choice = $_GET["choice"];
switch ($choice) {
    case "profile":
        Secretaire::profile();
        break;
    case "demandes":
        Secretaire::demandes();
        break;
    case "plaines":
        Secretaire::plaines();
        break;
    default:
        Secretaire::demandes();
}
