<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= base_url()?>../img/logo.png">
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
            <?php 
				if(!empty($sucesso)) {
				 	echo ($sucesso);
                }
			?>
        </header>

        <form action="<?= base_url() ?>/LoginController/verify" method="post" autocomplete="off">
            <h1>LOGIN</h1>
            <?php 
				if(!empty($erros)) {
				 	echo ($erros);
                }
			?>
            <input type="email" name='email' placeholder="E-MAIL">
            <input type="password" name='password' placeholder="SENHA">
            <input type="submit" name='btn-entrar' id="btnSubmit" value="CONFIRMAR">
            <div>
                <a href="<?= base_url()?>/criarconta">Registrar-se</a>
                <a href="#">Esqueci minha senha</a>
            </div>
        </form>
        <footer class="w3-bottom">
        <a href="https://www.instagram.com/cactusstyl/" target="_blank"><img src="<?= base_url()?>../resources/img/insta.png" alt="instagram"></a>
            <p>Copyright CactusStyl - 2020</p>
        </footer>
    </div>
</body>
<script src="<?= base_url()?>../resources/js/menu.js"></script>
<script src="<?= base_url()?>../resources/js/carrinho.js"></script>
</html>