

<html>
    <head>
        <link href="PageArtisan.css" rel="stylesheet" type="text/css"/>
        <link href="css.css" rel="stylesheet" type="text/css"/>
        <title>Création d'un employé</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post" action="nouveauEmploye.php">
            
                <label>Nom employé :</label> 
                <input type='text' name="nom" required><br>
                <br>
                <label>Prénom employé :</label> 
                <input type='text' name="prenom" required><br>
                <br>
                <label>Métier :</label>
                <select name="metier">
                <option value='Polisseur'> Polisseur
                <option value='Sertisseur'> Sertisseur
                <option value='Tailleur'> Tailleur
                <option value='Fondeur'> Fondeur
                <option value='Controleur'> Contrôleur
			</select> <br>
                <input type="submit" value="Créer">
            
        </form>
    </body>
</html>