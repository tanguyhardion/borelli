<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Nous contacter - Borelli Accordéons</title>
        <link rel="icon" href="images/accordion.png">
        <link rel="stylesheet" href="css/contactStyle.css">
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
        </header>

        <section class="contact">
            <div class="content">
                <h2>Contactez-nous</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam fugit incidunt porro fugiat facilis, quisquam dolores! Fugiat, eligendi!</p>
            </div>
            <div class="container">
                <div class="contact-info">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <div class="info">
                            <h3>Adresse</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <div class="info">
                            <h3>Téléphone</h3>
                            <p>00 00 00 00 00</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <div class="info">
                            <h3>Adresse e-mail</h3>
                            <p>contact@borelli.fr</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <h2>Envoyer un message</h2>
                        <div class="input-box">
                            <input type="text" name="" required>
                            <span>Prénom</span>
                        </div>
                        <div class="input-box">
                            <input type="text" name="" required>
                            <span>Nom</span>
                        </div>
                        <div class="input-box">
                            <input type="email" name="" required>
                            <span>Adresse e-mail</span>
                        </div>
                        <div class="input-box">
                            <input type="tel" name="">
                            <span>Téléphone</span>
                        </div>
                        <div class="input-box">
                            <input type="text" name="" required>
                            <span>Objet</span>
                        </div>
                        <div class="input-box">
                            <textarea name="" cols="30" rows="10" required></textarea>
                            <span>Message</span>
                        </div>
                        <div class="input-box">
                        <input type="submit" name="">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php include_once("footer.php")?>

        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/scrolling.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
    </body>
</html>