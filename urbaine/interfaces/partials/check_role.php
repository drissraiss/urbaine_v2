<?php
$interfaces = [
    'directeurs',
    'secretaires',
    'administrateurs',
    'employes'
];
if (!in_array($_SESSION['role'], $interfaces)) {
    header('location:../php/logout.php');
    exit();
}
if ($_SESSION['role'] !== $interface) {
    header('location:../errors/403.html');
}
