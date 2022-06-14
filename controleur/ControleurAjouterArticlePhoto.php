<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "./modele/modele_bd.php";
include_once "./modele/modele_club.php";

$lesResultatsPhotosArticles = AfficheLesPhotosArticles($_GET['numero']);
if (isset($_POST['ajouter'])) {
    $tailleMax = 2097152;
    $extensionValides = array('jpg', 'jpeg', 'png', 'gif', 'JPEG', 'JPG');

    if($_FILES['photo']['size'] <= $tailleMax){
    	$extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
    	if(in_array($extensionUpload, $extensionValides)){
    		$chemin = "image/" . $_FILES['photo']['name'];
    		$resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);

    		if($resultat){
				AjouterPhoto($_POST['titre_photo'], $_POST['texte_photo'], $_GET['numero'], $_FILES['photo']['name']);
				header('Location: ./?action=AjouterArticlePhoto&numero='.$_GET['numero']);
    		}
    	}
    	} 
}

include "./vue/vueAjouterArticlePhoto.php";

?>
