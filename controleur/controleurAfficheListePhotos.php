<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "./modele/modele_bd.php";
include_once "./modele/modele_club.php";

$lesResultatsTypes = AfficheListeType();

if(isset($_POST['type'])){

	if($_POST['type'] != "5"){

		$lesResultatsListePhotos = AfficheListePhotos($_POST['type']);

	} else {

		header('Location: ./?action=EggWait');
} 
}

include "./vue/vueAfficheListePhotos.php";


?>