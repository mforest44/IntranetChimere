<?php 
include_once 'config.php';
$pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);
        ?>
<html>
    <head>
        <link href="PageArtisan.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Vous êtes :
        <div>
            <input type="button" value="Directeur"
               onclick="self.location.href='directeur.php'">
        </div>
        
              <div>
            <h1>Liste des employés</h1>
              <form method='post' action='voirProjet.php'>
        
            <label>Nom de l'employé</label>

 <?php        
$req=$pdo->prepare(" SELECT * FROM artisan");
$req->execute();

?> 
            <select name='nomArtisan'>
            
<?php
while ($ligne=$req->fetch(PDO::FETCH_ASSOC))
{ { 
echo '<option value='.$ligne['Metier'].'>'.$ligne['Nom'].'</option>'; 
} 
}

        ?>
            </select>
            <input type='submit' value='Accéder aux Projets'>
        </form>
              </div>
         
    </body>
</html>
