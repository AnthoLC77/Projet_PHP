<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- Header récupération-->
    <?php include("header.php");?>

    <!-- Vérification des données rentré par l'user -->
    <?php
        if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"])) {
            echo "Le champs est remplie";
        } else {
            echo "nom est inconnu/vide";
        }
     ?>
    <!-- Recupération des données inscription user -->
    <div>
        <h1>Merci pour votre inscription</h1>
        <p><b>Nom</b> => <?php echo $_POST["nom"] ?></p>
        <p><b>Nom</b> => <?php echo $_POST["prenom"] ?></p>
        <p><b>Nom</b> => <?php echo $_POST["email"] ?></p>
    </div>
    <!-- Footer recupération -->
    <?php include("footer.php") ?>
</body>
</html>