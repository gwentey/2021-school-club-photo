<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "./modele/modele_bd.php";
include_once "./modele/modele_club.php";

$lesResultatsPhoto = AffichePhoto($_GET['numero']);

include "./vue/vueAffichePhoto.php";


?>