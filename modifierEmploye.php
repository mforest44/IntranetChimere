<?php
include_once 'config.php';
include_once 'PageBijoutier6.php';



$nomArtisan=$_POST["nomArtisan"];


$pdo = new PDO("mysql:host=".config::SERVERNAME
                .";dbname=" . config::DBNAME
                , config::USER
                , config::PASSWORD);
  $req=$pdo->prepare("DELETE FROM artisan WHERE idArtisan=:nomArtisan");
  $req->bindParam(":nomArtisan", $nomArtisan);
  $req->execute();
  $pdo=null;