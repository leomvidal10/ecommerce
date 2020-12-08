var menuButtom = document.querySelector(".menu");
var cartButtom = document.querySelector(".cart");

var menu = document.querySelector(".menu-burguer");
var menuCart = document.querySelector(".menu-cart");

var menuX = document.querySelector(".fecharMenu");
var menuXcart = document.querySelector(".fecharMenuCart");

var container = document.querySelector("#container");

menuButtom.addEventListener('click', () => {
    menu.classList.add("menuOn")
    container.classList.add("desfoque")
    menuCart.classList.remove("menuOnCart")
})

menuX.addEventListener('click', () => {
    menu.classList.remove("menuOn")
    container.classList.remove("desfoque")
})

cartButtom.addEventListener('click', () => {
    menuCart.classList.add("menuOnCart")
    container.classList.add("desfoque")
    menu.classList.remove("menuOn")
})

menuXcart.addEventListener('click', () => {
    menuCart.classList.remove("menuOnCart")
    container.classList.remove("desfoque")
})