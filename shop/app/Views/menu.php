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
    <ul class="menu-burguer">
        <div>
            <h1>MENU</h1>
            <a href="#" class="fecharMenu"><img src="<?= base_url()?>../resources/img/x.svg" alt=""></a>
        </div>
        <li>
            <a href="<?= base_url()?>">HOME</a>
        </li>
        <li>
            <a href="<?= base_url()?>/account">ACCOUNT</a>
        </li>
    </ul>
    <ul class="menu-cart">
        <div>
            <h1>CART</h1>
            <a href="#" class="fecharMenuCart"><img src="<?= base_url()?>../resources/img/x.svg" alt=""></a>
        </div>
        <span id="produtosCart">
            
        </span>
        <div id="subtotal">
            <h2>SUBTOTAL</h2>
            <p id="app">R$ {{checkout}}</p>
        </div>
        <span class="checkout">
            <p>O Carrinho está vazio!</p>
        </span>
    </ul>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>