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
        <script src="https://use.fontawesome.com/7ffcee1de3.js"></script>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>
    <body class="productpage">
        <header>
            <?php include_once("navbar.php")?>
            <div class="title">
                <h1>Nos produits</h1>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1440" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
                    <g mask="url(&quot;#SvgjsMask1018&quot;)" fill="none">
                        <rect width="1440" height="560" x="0" y="0" fill="rgba(12, 12, 12, 1)"></rect>
                        <path d="M0,517.001C95.059,513.847,159.914,424.608,237.763,369.967C312.005,317.858,394.303,278.154,446.239,203.791C505.078,119.544,549.588,23.444,551.531,-79.298C553.659,-191.832,546.019,-326.872,457.589,-396.503C367.844,-467.169,235.013,-397.523,122.482,-417.135C27.67,-433.659,-51.45,-509.63,-147.383,-501.939C-252.838,-493.485,-356.82,-448.971,-430.261,-372.823C-505.452,-294.86,-555.72,-188.044,-554.574,-79.736C-553.484,23.328,-480.914,107.649,-424.267,193.756C-375.5,267.884,-318.703,332.313,-248.123,386.087C-172.201,443.931,-95.395,520.166,0,517.001" fill="#0a0a0a"></path>
                        <path d="M1440 1038.49C1528.667 1026.843 1558.549 909.818 1632.437 859.438 1703.253 811.153 1810.342 821.598 1860.274 751.933 1911.679 680.212 1903.801 582.425 1893.8229999999999 494.75 1883.622 405.11400000000003 1875.297 299.26 1802.667 245.748 1729.649 191.95 1625.151 250.466 1536.468 231.45999999999998 1457.641 214.56599999999997 1396.96 130.139 1317.176 141.69799999999998 1236.394 153.402 1184.799 230.94400000000002 1128.9769999999999 290.497 1070.996 352.353 1008.594 412.978 986.236 494.759 962.337 582.177 957.489 680.937 1000.4169999999999 760.751 1042.592 839.164 1136.808 867.094 1212.079 914.652 1286.686 961.79 1352.501 1049.983 1440 1038.49" fill="#0e0e0e"></path>
                    </g>
                    <defs>
                        <mask id="SvgjsMask1018">
                            <rect width="1440" height="560" fill="#ffffff"></rect>
                        </mask>
                    </defs>
                </svg> -->
            </div>
        </header>


        <section class="content"> 
            <div class="pcontainer">
                <?php
                    $db = mysqli_connect('mysql-tanguy.alwaysdata.net', 'tanguy', 'd&P9~qGbL[MAKg8wmpN', 'tanguy_borelli', '3306');
                    $query = mysqli_query($db, 'SELECT * FROM products');
                    while ($row = $query->fetch_row()) {
                        echo
                        ' <div class="product">
                            <div class="product-card">
                                <h2 class="name">' . $row['1'] . '</h2>
                                <span class="price">' . $row['4'] . ',00 €</span>
                                <a class="popup-btn">Détails</a>
                                <img src="images/' . $row['1'] . '.png">
                            </div>
                            <div class="popup-view">
                                <div class="popup-card">
                                    <a><i class="fa fa-times product-close"></i></a>
                                    <div class="product-img">
                                        <img src="images/' . $row['1'] . '_view.png">
                                    </div>
                                    <div class="info">
                                        <h2>' . $row['1'] . '<br><span>Accordéon ' . $row['2'] . '</span></h2>
                                        <p>' . $row['3'] . '</p>
                                        <span class="price">' . $row['4'] . ',00 €</span>
                                        <a href="#" class="add-cart-btn">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                        </div> ';
                    }
                ?>
            </div>
        </section>

        <?php include_once("footer.php")?>

        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>