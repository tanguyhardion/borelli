<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Nous contacter - Borelli Accordéons</title>
    <link rel="icon" href="images/accordion.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
    <script src="https://use.fontawesome.com/7ffcee1de3.js"></script>
    <link rel="stylesheet" href="css/nous-contacter.css">
</head>

<body class="contactpage">
    <header>
        <?php include_once("navbar.php") ?>
        <div class="title">
            <h1>Contactez-nous</h1>
        </div>
    </header>

    <section>
        <div class="contact" data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
            <div class="contact-info">
                <div>
                    <h2>Contact</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-phone"></i></span>
                            <span><a href="tel:0386737257">03 86 73 72 57</a></span>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope"></i></span>
                            <span><a href="mailto:contact@borelli.fr">contact@borelli.fr</a></span>
                        </li>
                        <li>
                            <span><i class="fa fa-map-marker"></i></span>
                            <span>36 Grande Rue, Villemer<br> 89113 VALRAVILLON</span>
                        </li>
                        <li>
                            <iframe width="250" height="230" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.2346461356788!2d3.4743065155849475!3d47.912497079206176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee53011853149d%3A0x392d692c6c501863!2s36%20Grande%20Rue%2C%2089113%20Valravillon!5e0!3m2!1sfr!2sfr!4v1644446037521!5m2!1sfr!2sfr"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-form">
                <h2>Envoyez-nous un message</h2>
                <form id="test">
                    <div class="input-box w50">
                        <input type="text" id="first-name" required>
                        <span>Prénom</span>
                    </div>
                    <div class="input-box w50">
                        <input type="text" id="last-name" required>
                        <span>Nom</span>
                    </div>
                    <div class="input-box w50">
                        <input type="email" id="email-adress" placeholder=" " required>
                        <span>E-mail</span>
                    </div>
                    <div class="input-box w50">
                        <input type="tel" id="phone-number" placeholder=" " maxlength="14">
                        <span>Téléphone</span>
                    </div>
                    <div class="input-box w100">
                        <input type="text" id="subject" required>
                        <span>Objet</span>
                    </div>
                    <div class="input-box w100">
                        <textarea id="form-body" required></textarea>
                        <span>Écrivez un message...</span>
                    </div>
                    <div class="input-box w100">
                        <input type="submit" id="form-submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include_once("footer.php") ?>

    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>