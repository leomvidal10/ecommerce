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
        <section class="perfil">
            <hr>
            <img src="<?= base_url()?>../resources/img/avatar.jpg" alt="avatar">
            <h1><?php echo $_SESSION['nome_usuario']?></h1>
            <a href="<?= base_url()?>/LoginController/logout">Sair</a>
            <div class='perfil-area'>
                <div class='area1'>
                    <form>
                        <label for="nome">Nome:</label>
                        <input type="text" id="input-nome" value="<?php echo $_SESSION['nome_usuario']?>">    

                        <label for="estado">Estado:</label>
                        <input type="text" id="input-estado" value="<?php echo $_SESSION['estado']?>">

                        <label for="cidade">Cidade:</label>
                        <input type="text" id="input-cidade" value="<?php echo $_SESSION['cidade']?>">

                        <label for="rua">Rua:</label>
                        <input type="text" id="input-rua" value="<?php echo $_SESSION['rua']?>">

                        <label for="numero">Número:</label>
                        <input type="text" id="input-numero" value="<?php echo $_SESSION['numero']?>">

                        <label for="cep">Cep:</label>
                        <input type="text" id="input-cep" value="<?php echo $_SESSION['cep']?>">

                        <label for="telefone">Telefone:</label>
                        <input type="text" id="input-telefone" value="<?php echo $_SESSION['telefone']?>">

                        <label for="email">Email:</label>
                        <input type="text" id="input-email" value="<?php echo $_SESSION['email']?>">

                        <input id="btn-hidden" type="hidden" value="<?php echo $_SESSION['uuid'] ?>">

                        <input class='btn-edit2' onclick="editarPerfil()" value="Editar">
                        <a href="<?= base_url()?>/perfil">Cancelar</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?= base_url()?>../resources/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="<?= base_url()?>../resources/js/carrinho.js"></script>
<script src="<?= base_url()?>../resources/js/menu.js"></script>

</html>