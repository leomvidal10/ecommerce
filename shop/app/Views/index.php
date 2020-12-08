<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= base_url()?>../resources/img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url()?>../resources/css/w3.css">
    <link rel="stylesheet" href="<?= base_url()?>../resources/css/styles.css">
    <title>CactusStyl</title>
</head>
<body>
    <div id="container">
        <header>
            <nav>
                <a href="#" class="w3-bar-item menu"><img src="<?= base_url()?>../resources/img/menu.svg" alt=""></a>
                <a href="<?= base_url()?>" class="w3-bar-item"><img class='logo' src="<?= base_url()?>../resources/img/teste.gif" alt=""></a>
                <a href="#" class="w3-bar-item cart"><img src="<?= base_url()?>../resources/img/cart.svg" alt=""></a>
            </nav>
        </header>
        <section class="w3-content w3-display-container" style="max-width:800px">
            <img class="mySlides" src="<?= base_url()?>../resources/img/img_mountains_wide.jpg" style="width:100%">
            <img class="mySlides" src="<?= base_url()?>../resources/img/img_nature_wide.jpg" style="width:100%">
            <img class="mySlides" src="<?= base_url()?>../resources/img/img_snow_wide.jpg" style="width:100%">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
                style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            </div>
        </section>
        <section class="shop-section">
                <select>
                    <option>Mostrar por</option>   
                    <option>Menor preco</option>  
                    <option>Maior preco</option>   
                </select>
            <div id="shop">
            </div>
        </section>

        <footer>
            <a href="https://www.instagram.com/cactusstyl/" target="_blank"><img src="<?= base_url()?>../resources/img/insta.png" alt="instagram"></a>
            <p>Copyright CactusStyl - 2020</p>
        </footer>
    </div>
</body>
<script src="<?= base_url()?>../resources/js/slides.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="<?= base_url()?>../resources/js/carrinho.js"></script>
<script src="<?= base_url()?>../resources/js/menu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>