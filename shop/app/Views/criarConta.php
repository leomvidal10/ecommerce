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

        <form autocomplete="off">
            <h1>CRIAR CONTA</h1>
            <?php 
				if(!empty($erros)) {
				 	echo ($erros);
				}
			?>
            <input type="text" id="input-nome" name="nome" placeholder="NOME">
            <input type="text" id="input-email" name="email" placeholder="E-MAIL">
            <input type="text" id="input-estado" name="estado" placeholder="ESTADO">
            <input type="text" id="input-cidade" name="cidade" placeholder="CIDADE">
            <input type="text" id="input-rua" name="rua" placeholder="RUA">
            <input type="text" id="input-numero" name="numero" placeholder="NUMERO">
            <input type="text" id="input-cep" name="cep" placeholder="CEP">
            <input type="number" id="input-telefone" name="telefone" placeholder="TELEFONE">
            <input type="password" id="input-senha" name="password" placeholder="SENHA">
            <div>
                <input type="checkbox" name="accept" id="accept" required>
                <label for="accept">Aceito os termos de uso.</label>
            </div>
            <input type="submit" onclick="criarConta()" name="btn-entrar" id="btnSubmit2" value="CONFIRMAR">
        </form>
        <footer>
        <a href="https://www.instagram.com/cactusstyl/" target="_blank"><img src="<?= base_url()?>../resources/img/insta.png" alt="instagram"></a>
            <p>Copyright CactusStyl - 2020</p>
        </footer>
    </div>
</body>
<script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
var app2 = new Vue({
    el: '#app2',
    methods: {
        abrir() {
           app.menu = true;
        }
    }
})
</script>
<script src="<?= base_url()?>../resources/js/carrinho.js"></script>
<script src="<?= base_url()?>../resources/js/menu.js"></script>
<script src="<?= base_url()?>../resources/js/scripts.js"></script>

</html>