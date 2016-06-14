<?php 
include_once 'config.php';
$pdo = new PDO("mysql:host=" . config::SERVERNAME . ";dbname="
                . config::DBNAME, config::USER, config::PASSWORD);
?>

<html>
    <head>
        <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css.css" rel="stylesheet" type="text/css"/>
        <link href="PageArtisan.css" rel="stylesheet" type="text/css"/>
        <title>Modifier un Employé</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>      
        <div class="row">
            <label>Liste des projets</label>

 <?php        
$req=$pdo->prepare(" SELECT * FROM projetbijoux");
$req->execute();

?> 
            <div class="row">
            <table class="col-md-push-4 col-md-4"name="nomProjet">


                <tr>
                    <td>Nom Projet</td>
                    <td>Description</td>
                    <td>Client</td>
                    <td>Statut</td>
                    <td>Type</td>
                    <td>Temps Estimé</td>
                    <td>Coût Estimé</td>
                </tr>            
<?php
while ($ligne=$req->fetch(PDO::FETCH_ASSOC))
{ { 
echo '<tr>';   
echo '<td value='.$ligne['idProjetBijoux'].'>'.$ligne['Nom'].'</td>';
echo '<td value='.$ligne['idProjetBijoux'].'>'.$ligne['Description'].'</td>';
echo '<td value='.$ligne['idProjetBijoux'].'>'.$ligne['Client'].'</td>';
echo '<td value='.$ligne['idProjetBijoux'].'>'.$ligne['Statut'].'</td>';
echo '<td value='.$ligne['idProjetBijoux'].'>'.$ligne['Type'].'</td>';
echo '<td value='.$ligne['idProjetBijoux'].'>'.$ligne['TpsEstime'].'</td>';
echo '<td value='.$ligne['idProjetBijoux'].'>'.$ligne['EstimationCout'].'</td>';
echo '</tr>';
} 
}

        ?>

            </table>
        </div>


        <input type="button" value ="Retour administration" 
           onclick="self.location.href='directeur.php'">
        </div>
    </body>
</html>