<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Accueil - Borelli Accordéons</title>
        <link rel="icon" href="images/accordion.png">
        <link rel="stylesheet" href="css/homeStyle.css">
        <link rel="stylesheet" href="css/navbarStyle.css">
        <link rel="stylesheet" href="css/footerStyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
        <script src="https://use.fontawesome.com/7ffcee1de3.js"></script>
    </head>
    <body>
        <header class="header">
                <?php include_once("navbar.php")?>
            <div class="text-header">
                <h1>Borelli Accordéons</h1>
                <p>Vente en ligne d'accordéons d'Italie</p>
                <input type="button" id="discover-btn" value="Découvrir">
            </div>
        </header>

        <section class="main">
            <div class="content">
                <div class="card">
                    <div class="left">
                        <img src="images/caprice.jpg" alt="caprice_img">
                    </div>
                    <div class="right">
                        <h1>Caprice</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, repellendus!</p>
                    </div>
                </div>
                <div class="card">
                    <div class="left">
                        <img src="images/chambord.jpg" alt="chambord_img">
                    </div>
                    <div class="right">
                        <h1>Chambord</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quam!</p>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once("footer.php")?>

        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script type="text/javascript" src="js/discover.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/scrolling.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
    </body>
</html>