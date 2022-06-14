<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "./modele/modele_bd.php";
include_once "./modele/modele_club.php";

logged_only();

$lesResultatsMesArticles = AfficheMesArticles($_SESSION['user']->id_user);

include "./vue/vueMesArticles.php";




?>