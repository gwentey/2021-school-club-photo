<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "controleurAccueil.php";
    $lesActions["accueil"] = "controleurAccueil.php";
    $lesActions["AfficheListePhotos"] = "controleurAfficheListePhotos.php";
    $lesActions["AffichePhoto"] = "controleurAffichePhoto.php";
    $lesActions["Egg"] = "controleurEgg.php";
    $lesActions["AfficheListePhotosEgg"] = "controleurAfficheListePhotosEgg.php";
    $lesActions["AffichePhotoEgg"] = "controleurAffichePhotoEgg.php";
    $lesActions["EggWait"] = "controleurWaitEgg.php";
    $lesActions["Connection"] = "controleurConnection.php";
    $lesActions["Inscription"] = "controleurInscription.php";
    $lesActions["Deconnection"] = "controleurDeconnection.php";
    $lesActions["MesArticles"] = "controleurMesArticles.php";
    $lesActions["AjouterArticlePhoto"] = "controleurAjouterArticlePhoto.php";


    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
}

?>