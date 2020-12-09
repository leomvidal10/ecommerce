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
        <nav id="app2">
            <a v-on:click="abrir()" href="#" class="w3-bar-item menu"><img src="<?= base_url()?>../resources/img/menu.svg" alt=""></a>
            <a href="<?= base_url()?>" class="w3-bar-item"><img class='logo' src="<?= base_url()?>../resources/img/teste.gif" alt=""></a>
            <a v-on:click="abrirCart()" href="#" class="w3-bar-item cart"><img src="<?= base_url()?>../resources/img/cart.svg" alt=""></a>
        </nav>
        </header>
        <section class="perfil">
            <hr>
            <img src="<?= base_url()?>../resources/img/avatar.jpg" alt="avatar">
            <h1><?php echo $_SESSION['nome_usuario']?></h1>
            <a href="<?= base_url()?>/LoginController/logout">Sair</a>
            <div class='perfil-area'>
                <div class='area1'>
                    <form method="post" autocomplete="off" action="<?= base_url('main/editarperfil') ?>">
                        <label for="endereco">Estado:</label>
                        <input type="text" value="<?php echo $_SESSION['estado']?>" disabled>

                        <label for="endereco">Cidade:</label>
                        <input type="text" value="<?php echo $_SESSION['cidade']?>" disabled>

                        <label for="endereco">Rua:</label>
                        <input type="text" value="<?php echo $_SESSION['rua']?>" disabled>

                        <label for="endereco">Número:</label>
                        <input type="text" value="<?php echo $_SESSION['numero']?>" disabled>

                        <label for="endereco">Cep:</label>
                        <input type="text" value="<?php echo $_SESSION['cep']?>" disabled>

                        <label for="endereco">Telefone:</label>
                        <input type="text" value="<?php echo $_SESSION['telefone']?>" disabled>

                        <label for="endereco">Email:</label>
                        <input type="text" value="<?php echo $_SESSION['email']?>" disabled>

                        <input class='btn-edit' type="submit" value="Editar Dados">
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <a href="https://www.instagram.com/cactusstyl/" target="_blank"><img src="<?= base_url()?>../resources/img/insta.png" alt="instagram"></a>
            <p>Copyright CactusStyl - 2020</p>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="<?= base_url()?>../resources/js/carrinho.js"></script>
<script src="<?= base_url()?>../resources/js/menu.js"></script>

</html>