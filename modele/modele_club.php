<?php

include_once("modele_bd.php");

function AfficheListeType(){

	$resultat = array();

	try {

    $cnx=ConnexionPDO();
    $affichage_type = $cnx->prepare("SELECT * from type ");
    $affichage_type->execute();
    $resultat = $affichage_type->fetchAll(PDO::FETCH_OBJ);


    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
       die();
    }
   return $resultat;
}



function AffichePhoto($numero_photo){

  $resultat = array();

  try {

    $cnx=ConnexionPDO();

    $affiche_photo= $cnx->prepare("SELECT * FROM photo where id_photo = ?");

    $affiche_photo->execute(array($numero_photo));

    $resultat = $affiche_photo->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {

      print "Erreur !: " . $e->getMessage();
      die();
    }
   return $resultat;
}




function AfficheListePhotos($numero_article){

  $resultat = array();

  try {

    $cnx=ConnexionPDO();

    $affiche_liste_photos = $cnx->prepare("SELECT * FROM article INNER JOIN photo ON photo.id_arti = article.id_arti
     where article.id_type = ?");

    $affiche_liste_photos->execute(array($numero_article));

    $resultat = $affiche_liste_photos->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {

      print "Erreur !: " . $e->getMessage();
      die();
    }
   return $resultat;  
}


function AfficheListePhotosEgg($titre_photo){

  $resultat = array();

  try {

    $cnx=ConnexionPDO();

    $affiche_liste_photos = $cnx->prepare("SELECT * FROM article INNER JOIN photo ON photo.id_arti = article.id_arti
     where photo.titre_photo = ?");

    $affiche_liste_photos->execute(array($titre_photo));

    $resultat = $affiche_liste_photos->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {

      print "Erreur !: " . $e->getMessage();
      die();
    }
   return $resultat;  
}


function TesterLaConnectionUtilisateur($mail, $mdp){

    $connectionApprouvee = false;

    try {

          $cnx=ConnexionPDO();

          $chercherUser = $cnx->prepare("SELECT * FROM user WHERE mail_user = ?");

          $chercherUser->execute(array($mail));

          if($chercherUser->rowCount() != 0){

              $ligne = $chercherUser->fetch(PDO::FETCH_OBJ);

                 if(password_verify($mdp, $ligne->mdp_user)) {

                  $_SESSION['user'] = $ligne;

                  $connectionApprouvee = true;

                } 
            }
         } catch (PDOException $e) {
                    print "Erreur !: " . $e->getMessage();
                    die();
         }
        return $connectionApprouvee;

}

function InscriptionUtilisateur($nom, $prenom, $mdp, $mail){

    $inscriptionReussi = false;

    $mdp_crypter = password_hash($mdp,PASSWORD_BCRYPT);      

    try {

          $cnx=ConnexionPDO();

          $chercherUser = $cnx->prepare("SELECT * FROM user WHERE mail_user = ?");

          $chercherUser->execute(array($mail));

          if($chercherUser->rowCount() == 0){

          $inscriptionUtilisateur = $cnx->prepare("INSERT INTO user VALUES(null, ?, ?, ?, ?)");

          $inscriptionUtilisateur->execute(array($nom, $prenom, $mdp_crypter, $mail));

          $inscriptionReussi = true;
          }
          
         } catch (PDOException $e) {
                    print "Erreur !: " . $e->getMessage();
                    die();
         }
        return $inscriptionReussi;

}

function logged_only(){

   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

  if(!isset($_SESSION['user'])){
    header('Location: ./?action=Connection');
    exit();
  }
}

function AfficheMesArticles($id_user){

  $resultat = array();

  try {

    $cnx=ConnexionPDO();

    $affiche_liste_photos = $cnx->prepare("SELECT * FROM article
     INNER JOIN type ON type.id_type = article.id_type where id_user = ?");

    $affiche_liste_photos->execute(array($id_user));

    $resultat = $affiche_liste_photos->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {

      print "Erreur !: " . $e->getMessage();
      die();
    }
   return $resultat;  
}

function AfficheLesPhotosArticles($id_arti){

  $resultat = array();

  try {

    $cnx=ConnexionPDO();

    $affiche_liste_photos = $cnx->prepare("SELECT * FROM article INNER JOIN photo ON photo.id_arti = article.id_arti
     where article.id_arti = ?");

    $affiche_liste_photos->execute(array($id_arti));

    $resultat = $affiche_liste_photos->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {

      print "Erreur !: " . $e->getMessage();
      die();
    }
   return $resultat;  
}


function AjouterPhoto($titre_photo, $texte_photo, $id_arti, $photos){

  try {

    $cnx=ConnexionPDO();

    $insertphoto = $cnx->prepare("INSERT INTO photo VALUES(NULL,?,?,?,?)");

    $insertphoto->execute(array($titre_photo, $texte_photo, $id_arti, $photos));


    } catch (PDOException $e) {

      print "Erreur !: " . $e->getMessage();
      die();
    }

}

