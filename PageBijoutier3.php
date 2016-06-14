<?php include_once 'client.php';

?><head>
    <link href="PageArtisan.css" rel="stylesheet" type="text/css"/>
    <title>Nouveau Projet</title>
</head>
    
<body>
    Nouveau Client <br>
    <form action="nouveauClient.php"
              method="post">
        <input type="text" name="nom" placeholder="Saisir le nom du client" required>
    <input type="text" name="numero" placeholder="Numéro" required> <br>
    <input type="text" name="prenom" placeholder="Prénom" required> <br>
    <input type="text" name="adresse" placeholder="Saisir l'adresse" required>
    <input type="text" name="ville" placeholder="Ville" required> <br> 
    
    <input type='submit' value="Valider" >
    
    </form>
    <input type="button" value ="Retour administration" 
           onclick="self.location.href='directeur.php'">
</body><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

