<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "./modele/modele_bd.php";
include_once "./modele/modele_club.php";

if(isset($_POST['code'])){

	$lesResultatsListePhotosEgg = AfficheListePhotosEgg($_POST['code']);

}

include "./vue/vueAfficheListePhotoEgg.php";

?>