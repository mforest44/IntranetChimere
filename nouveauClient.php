<?php

include_once 'config.php';
include_once 'PageBijoutier3.php';
include_once 'client.php';

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$numero=$_POST["numero"];
$adresse=$_POST["adresse"];
$ville=$_POST["ville"];


$client = new client ($nom,$prenom,$adresse,$numero,$ville);

$client->enregistrer();
   header('Location: directeur.php');
   ?>


   
