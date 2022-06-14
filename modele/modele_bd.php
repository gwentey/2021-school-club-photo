<?php

function connexionPDO(){
    $login = "root";
    $mdp = "root";
    $bd = "club_photo";
    $serveur = "localhost";
 
    try {
        $bdd = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
        
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        die();
    }

}