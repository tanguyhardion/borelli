<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Nos produits - Borelli Accordéons</title>
    <link rel="icon" href="images/accordion.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
    <link rel="stylesheet" href="css/nos-produits.css">
    <script src="https://use.fontawesome.com/7ffcee1de3.js" defer></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js" defer></script>
    <script type="text/javascript" src="js/main.js" defer></script>
</head>

<body class="productpage">
    <header>
        <?php include_once("navbar.php") ?>
        <div class="title">
            <h1>Nos produits</h1>
        </div>
    </header>


    <section class="content">
        <div class="pcontainer">
            <?php
            $config = parse_ini_file('mysql.ini');
            $db = mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname'], $config['port']);
            $query = mysqli_query($db, 'SELECT * FROM products');
            while ($row = $query->fetch_row()) {
                echo
                '<div class="product">
                    <div class="product-card">
                        <h2 class="name">' . $row['1'] . '</h2>
                        <span class="price">' . $row['4'] . ',00 €</span>
                        <a class="popup-btn">Détails</a>
                        <img src="images/' . strtolower($row['1']) . '.png">
                    </div>
                    <div class="popup-view">
                        <div class="popup-card">
                            <a><i class="fa fa-times product-close"></i></a>
                            <div class="product-img">
                                <img src="images/' . strtolower($row['1']) . '_view.png">
                            </div>
                            <div class="info">
                                <h2>' . $row['1'] . '<br><span>Accordéon ' . $row['2'] . '</span></h2>
                                <p>' . $row['3'] . '</p>
                                <span class="price">' . $row['4'] . ',00 €</span>
                                <a href="nous-contacter.php" class="add-cart-btn">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

    <?php include_once("footer.php") ?>
</body>

</html>