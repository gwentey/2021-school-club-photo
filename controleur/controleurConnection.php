<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "./modele/modele_bd.php";
include_once "./modele/modele_club.php";

if(isset($_POST['connecter'])){
	$connectionApprouvee = TesterLaConnectionUtilisateur($_POST['mail'], $_POST['mdp']);

  if($connectionApprouvee){
  	header('Location: ?action=MesArticles');
  } else {
  	echo "Mot de passe ou email incorrect !";
  }

}





include "./vue/vueConnection.php";

?>