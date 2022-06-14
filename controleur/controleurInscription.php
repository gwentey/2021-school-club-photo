<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "./modele/modele_bd.php";
include_once "./modele/modele_club.php";

if(isset($_POST['inscription'])){

$inscriptionReussi = InscriptionUtilisateur($_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['mail']);

  if($inscriptionReussi){
  	header('Location: ?action=Connection');
  }
echo "Erreur cette email est déjà utilisé !";
}


include "./vue/vueInscription.php";

?>