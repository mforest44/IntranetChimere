<?php 
include_once 'config.php';

include_once 'artisan.php';
$pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);
?>

<html>
    <head>
        <link href="PageArtisan.css" rel="stylesheet" type="text/css"/>
        <title>Modifier un Employé</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method='post' action='modifierEmploye.php'>
        
            <label>Nom de l'employé</label>

 <?php        
$req=$pdo->prepare(" SELECT * FROM artisan");
$req->execute();

?> 
            <select name='nomArtisan'>
            
<?php
while ($ligne=$req->fetch(PDO::FETCH_ASSOC))
{ { 
echo '<option value='.$ligne['idArtisan'].'>'.$ligne['Nom'].'</option>'; 
} 
}

        ?>
            </select>
            <input type='submit' value='Supprimer'>
        </form>
        <input type="button" value ="Retour administration" 
           onclick="self.location.href='directeur.php'">
        
    </body>
</html>