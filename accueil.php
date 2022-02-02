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

        <section class="content" id="first-content">
            <div class="accordion" data-aos="fade-in" data-aos-once="true" data-aos-duration="800">
                <img src="images/caprice.png" alt="caprice_img">
            </div>
            <div class="accordion" data-aos="fade-in" data-aos-once="true" data-aos-duration="800">
                <h1>Caprice</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, expedita error porro voluptas aut harum, officiis rem obcaecati, eos voluptatem iure beatae possimus. Soluta eaque facilis excepturi suscipit aspernatur. Perspiciatis necessitatibus facilis ea amet molestias illum reprehenderit officia doloremque, ab aperiam error quasi velit officiis! Ratione voluptatum eveniet qui culpa sit fugiat a corporis voluptatem? Explicabo, ut vel sint tempora natus soluta temporibus suscipit asperiores quisquam inventore porro quam, doloribus amet tenetur modi rem dicta hic? Quasi placeat vitae distinctio expedita, voluptatibus accusamus, commodi minima sit repellendus, eaque non veritatis. Natus iusto libero earum atque officiis quos molestiae voluptates corrupti.</p>
            </div>
        </section>

        <section class="content">
            <div class="accordion" data-aos="fade-in" data-aos-once="true" data-aos-duration="800">
                <img src="images/chambord.png" alt="chambord_img">
            </div>
            <div class="accordion" data-aos="fade-in" data-aos-once="true" data-aos-duration="800">
                <h1>Chambord</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam explicabo commodi, rerum architecto eveniet pariatur alias, consectetur, repellat necessitatibus natus officiis sint ipsum rem officia voluptates! Molestiae placeat blanditiis, veritatis aperiam nulla doloribus ipsam atque veniam id voluptatum? Officiis voluptatum culpa excepturi deserunt doloribus ut, veritatis sapiente dolorum, sequi velit libero aspernatur quasi esse quaerat aliquid odio. Voluptates fugiat odit earum vitae. Qui, temporibus quam placeat corporis voluptates saepe, doloremque iste aliquid eaque, libero id voluptate. Expedita similique doloremque sit modi ad explicabo, consequuntur quia possimus veniam consectetur voluptatem ratione ab nemo fugiat quo quod voluptatum illum exercitationem! Distinctio, fugit.</p>
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