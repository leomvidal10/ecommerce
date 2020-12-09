var cartButtom = document.querySelector(".cart");

var menu = document.querySelector(".menu-burguer");
var menuCart = document.querySelector(".menu-cart");

var container = document.querySelector("#container");

cartButtom.addEventListener('click', () => {
    menuCart.classList.add("menuOnCart")
    container.classList.add("desfoque")
    menu.classList.remove("menuOn")
})

var app2 = new Vue({
    el: '#app2',
    methods: {
        abrir() {
           app.menu = true;
        },
        abrirCart() {
            app.cart = true;
         }
    }
})

var app = new Vue({
    el: '#app',
    data: {
        menu: false,
        cart: false, 
    },
    methods: {
        fechar() {
            app.menu = false;
        },
        fecharCart() {
            app.cart = false;
        }
    }
})