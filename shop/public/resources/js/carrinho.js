var items = []

var precoTotal = 0
var containerProdutos = document.getElementById('shop');
var links = document.getElementsByClassName("addcar")
var containerCarrinho = document.getElementById('produtosCart');
var checkout = document.getElementById('subtotal');
var filterbtn = document.getElementById('filter-btn')
var filterContainer = document.getElementById('filter-div')

filterbtn.addEventListener('click', () => {
    var busca = document.getElementById('filter').value.toLowerCase();
    if (busca != '') {
        containerProdutos.innerHTML = ""
        items.map((val) => {
            nomes = val.nome.toLowerCase();
            if(nomes == busca) {
                containerProdutos.innerHTML += `
                <div class="w3-card produto ">
                    <img src="`+ val.img + `" alt="Alps">
                    <div class="w3-container w3-center">
                        <p>`+ val.nome + `</p>
                        <p class="preco">R$`+ val.preco + `</p>
                        <button class="w3-button w3-round w3-green addcar" key="`+ val.uuid + `">add to cart</button>
                    </div>
                </div>
                `
                filterContainer.innerHTML = "<input type='text' id='filter'><button id='filter-btn'>Buscar</button><a href='http://localhost/e-commerce/shop/public'>Voltar</a>"
            }else{
                filterContainer.innerHTML = "<input type='text' id='filter'><button id='filter-btn'>Buscar</button><a href='http://localhost/e-commerce/shop/public'>Voltar</a>"
            }
        })
    }

    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function () {
            let key = this.getAttribute('key');
            const item = items.find((e) => e.uuid == key);
            item.quantidade++;
            precoTotal += item.preco;
            atualizarCarrinho()
        })
    }
})


exibirProdutos();

function exibirProdutos() {
    window.onload = async () => {
        $.ajax({
            type: 'get',
            url: 'http://localhost:3000/produto/',
            success: function (produtos) {
                items = produtos
                if (containerProdutos !== null) {
                    items.map((val) => {
                        containerProdutos.innerHTML += `
                        <div class="w3-card produto ">
                            <img src="`+ val.img + `" alt="Alps">
                            <div class="w3-container w3-center">
                                <p>`+ val.nome + `</p>
                                <p class="preco">R$`+ val.preco + `</p>
                                <button class="w3-button w3-round w3-green addcar" key="`+ val.uuid + `">add to cart</button>
                            </div>
                        </div>
                        `
                    })
                }

                for (var i = 0; i < links.length; i++) {
                    links[i].addEventListener("click", function () {
                        let key = this.getAttribute('key');
                        const item = items.find((e) => e.uuid == key);
                        item.quantidade++;
                        precoTotal += item.preco;
                        atualizarCarrinho()
                    })
                }
            }
        })
    }
}

function removeProduct(id) {
    const item = items.find((e) => e.uuid == id);
    item.quantidade--;
    precoTotal -= item.preco;
    atualizarCarrinho()
}


function atualizarCarrinho() {
    pay();
    containerCarrinho.innerHTML = ""
    checkout.innerHTML = ""
    checkout.innerHTML = `<h2>SUBTOTAL</h2> <p id="app">R$ ` + precoTotal + `.00</p>
`
    items.map((val) => {
        if (val.quantidade > 0) {
            containerCarrinho.innerHTML += `
        <li>
            <img src="`+ val.img + `" alt="">
            <p>`+ val.quantidade + `x - ` + val.nome + ` - XL</p>
            <a class='remove-btn' onClick='removeProduct("`+ val.uuid + `")'><img src="http://localhost/e-commerce/shop/public/resources/img/remove.png" alt="remove"></a>
        </li>
        `
        }
    })
}

function pay() {
    $.ajax({
        type: 'post',
        url: 'http://localhost/e-commerce/shop/public/Main/menu',
        data: {
            precoTotal
        },
        success: function (preferenceId) {
            console.log(preferenceId, precoTotal);
            if (preferenceId && precoTotal > 0) {
                console.log(preferenceId)
                document.querySelector(".checkout").innerHTML = "";
                const script = document.createElement('script');
                script.setAttribute('data-preference-id', preferenceId)
                script.src = 'https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js'
                document.querySelector(".checkout").appendChild(script)
                document.querySelector(".checkout").click()
            } else {
                var checkout = document.querySelector(".checkout");
                var child = checkout.lastElementChild;
                while (child) {
                    checkout.removeChild(child);
                    child = checkout.lastElementChild;
                }
                document.querySelector(".checkout").innerHTML = "<p>O Carrinho está vazio!</p>"
            }
        }
    });
}