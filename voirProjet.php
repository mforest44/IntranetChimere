<?php
include_once 'config.php';
include_once 'voirProjet.php';
$pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);
 

?>

<html>
    <head>
        <link href="PageArtisan.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action='modifierProjet.php' method='post'>
            
           Sur quel projet travaillez vous : <select name='nomProjet2'>

<?php
$req=$pdo->prepare("SELECT * from projetbijoux WHERE Statut ='En Cours' ");

$req->execute();
while ($ligne=$req->fetch(PDO::FETCH_ASSOC))
        
{ { 
    echo $ligne;
echo '<option value='.$ligne['idProjetBijoux'].'>'.$ligne['Nom'].'</option>'; 
} 
}

        ?>
              
           </select> <br>
            Commentaires:<textarea name='commentaires'></textarea><br>
           Prochaine étape: <input type='text' name='etapeSuivante'>
           Temps passé: <input type='number' name='tempsPasse'>
           Qui êtes vous : <select name='nomArtisan2'>
            
<?php
$req=$pdo->prepare(" SELECT * FROM artisan");
$req->execute();
while ($ligne=$req->fetch(PDO::FETCH_ASSOC))
{ { 
echo '<option value='.$ligne['idArtisan'].'>'.$ligne['Nom'].'</option>'; 
} 
}

        ?>
           </select> <br>
           Statut :
           <input type="radio" name="statutFini" value="NonFini"> Non Fini
           <input type="radio" name="statutFini" value="Fini"> Fini
           <br>      
           
           <input type='submit' value='Envoyer'>
        </form>
    </body>
</html>