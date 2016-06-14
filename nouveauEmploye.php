<?php
include_once "config.php";

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$metier=$_POST["metier"];

     $pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);
    
    $req = $pdo->prepare("INSERT INTO artisan (Nom, Prenom, Metier) VALUES (:nom,:prenom,:metier)");
    $req->bindParam(':nom',$nom);
    $req->bindParam(':prenom',$prenom);
    $req->bindParam(':metier', $metier);
    
    $req->execute();
    
   $pdo=null;
   
   header('Location: directeur.php');
?>

