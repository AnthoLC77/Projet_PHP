<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header.php -->
    <?php include('header.php') ?>

    <!-- Formulaire -->
    <div class="main_bloc_formulaire">
        <div class="bloc_formulaire">
            <h2>Créer un nouveau compte client</h2>
            <form action="creation_compte.php" method="POST"> 
                <div class="test">
                    <div class="utilisateur_prenom">
                        <div class="bloc_input">
                            <label class="label_form" for="nom">Nom</label>
                            <input class="input_form" name="nom" type="text" placeholder="Doe">
                        </div>
        
                        <div class="bloc_input">
                            <label class="label_form" for="">Prenom</label>
                            <input class="input_form" name="prenom" type="text" placeholder="John">
                        </div>
                    </div>
                    <div class="bloc_input margin_h2">
                        <label class="label_form" for="">Email</label>
                        <input class="input_form" name="email" type="text" placeholder="exemple@hotmail.fr">
                    </div>  
                    
    
                    <div class="bloc_input">
                        <label class="label_form" for="">Mot de passe</label>
                        <input class="input_form" type="password">
                    </div>

                    <div class="bloc_input">
                        <label class="label_form" for="">Confirmer le mot de passe</label>
                        <input class="input_form" type="password">
                    </div>
                </div>

                <div class="checkbox_conditions">
                    <input type="checkbox" name="condition-general" id="input_conditions">
                    <label for="">En créant un compte, vous acceptez l’intégralité de nos CGV et notre politique de protection des données personnelles</label>
                </div>
                <button class="btn_submit" type="submit">Créer un compte</button>
                <div class="bloc_lien_form">
                    <a href="http://">Deja un compte ? Se connecter</a>
                </div>
            </form>
            
        </div>
    </div>

    <!-- Footer.php -->
    <?php include("footer.php"); ?>
</body>
</html>