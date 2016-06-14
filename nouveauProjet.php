<?php

include_once 'config.php';
include_once 'PageBijoutier4.php';
include_once 'projet.php';

$nom=$_POST["nom"];
$description=$_POST["description"];
$tempsEstime=$_POST["tempsEstime"];
$coutEstime=$_POST["coutEstime"];
$nomClient=$_POST["nomClient"];
$statut=$_POST["statut"];
$type=$_POST["type"];


$projet = new projet($nom, $description, $tempsEstime, $coutEstime, $nomClient, $statut, $type);

$projet->enregistrer();

