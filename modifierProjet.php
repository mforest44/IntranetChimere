<?php

include_once 'voirProjet.php';
include_once 'config.php';

$commentaires=$_POST["commentaires"];
$etapeSuivante=$_POST["etapeSuivante"];
$tempsPasse=$_POST["tempsPasse"];
$nomArtisan2=$_POST["nomArtisan2"];
$nomProjet2=$_POST["nomProjet2"];
$statutFini=$_POST["statutFini"];
$pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);
    
    $req = $pdo->prepare("INSERT INTO etapes (Commentaire, EtapeSuivante, TpsPasse, Artisan_idArtisan"
            . ",ProjetBijoux_idProjetBijoux)"
            . " VALUES (:commentaires,:etapeSuivante,:tempsPasse,:nomArtisan2,:nomProjet2)");
    $req->bindParam(':commentaires',$commentaires);
    $req->bindParam(':etapeSuivante',$etapeSuivante);
    $req->bindParam(':tempsPasse', $tempsPasse);
    $req->bindParam(':nomArtisan2',$nomArtisan2);
    $req->bindParam(':nomProjet2',$nomProjet2);
    $req->execute();
    
    
    if($statutFini=="Fini"){
    $req2= $pdo->prepare("UPDATE projetbijoux SET Statut ='Fini' WHERE idProjetBijoux='".$nomProjet2."'");
    $req2->execute();       
    }
    
   $pdo=null;
   header('Location: index.php');
?>