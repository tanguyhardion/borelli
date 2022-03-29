<?php
    $db = mysqli_connect('mysql-tanguy.alwaysdata.net', 'tanguy', 'd&P9~qGbL[MAKg8wmpN', 'tanguy_user_accounts', '3306');
    session_start();

    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Connexion - Borelli Accordéons</title>
        <link rel="icon" href="images/accordion.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/7ffcee1de3.js"></script>
        <link rel="stylesheet" href="css/account.css">
        <link rel="stylesheet" href="css/navbar.css">
    </head>
    <body>
        <header>
            <?php include_once("navbar.php")?>
        </header>

        <div class="account">
            <h1>Connexion</h1>
            <form action="accueil" method="post">
                <input type="text" name="user-email" placeholder="Adresse e-mail" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="submit" name="submit" value="Se connecter">
            </form>
            <p>Pas de compte ? <a href="inscription">S'inscrire</a></p>
        </div>

        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>