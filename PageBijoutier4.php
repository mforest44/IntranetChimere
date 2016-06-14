<?php include_once 'client.php';
include_once 'config.php';
$pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);

?><head>
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="PageArtisan.css" rel="stylesheet" type="text/css"/>
    <title>Nouveau Projet</title>
</head>
<form action="nouveauProjet.php"
              method="post">
    <input type="text" name="nom" placeholder="Saisir le nom du projet" required>
    <input type="text" name="description" placeholder="Description du projet" required> <br>
    Type : <br>
    Création<input type="radio" id="choix1" name="type" value="Creation">
    Réparation<input type="radio" id="choix2" name="type" value="Reparation"><br> <br>
    Nom du client :<select name='nomClient'>
    <?php 
    $req=$pdo->prepare("SELECT * from client");

    $req->execute();
    while ($ligne=$req->fetch(PDO::FETCH_ASSOC))
        
    { { 
    
    echo '<option value='.$ligne['Nom'].'>'.$ligne['Nom']." ".$ligne['Prenom'].'</option>'; 
    } 
    }

    ?> </select>
    <br>
    Temps Estimé<input type="number" name="tempsEstime" required> <br>
    

    Coût Estimé<input type="number" name="coutEstime" required><br>
    Statut : <br>
    En Cours<input type="radio" name="statut" value="En Cours">
    Fini<input type="radio" name="statut" value="Fini"><br>

    
    
    <input type='submit' value="Valider">
    <input type="button" value ="Retour administration" 
           onclick="self.location.href='directeur.php'">
    </form>
