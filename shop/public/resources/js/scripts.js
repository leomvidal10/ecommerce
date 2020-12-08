function criarConta() {
    $.ajax({
        type: 'post',
        url: 'http://localhost:3000/users/',
        data: {
            email: document.getElementById("input-email").value,
            senha: document.getElementById("input-senha").value,
            nome: document.getElementById("input-nome").value,
            estado: document.getElementById("input-estado").value,
            cidade: document.getElementById("input-cidade").value,
            rua: document.getElementById("input-rua").value,
            numero: document.getElementById("input-numero").value,
            cep: document.getElementById("input-cep").value,
            telefone: document.getElementById("input-telefone").value,
        },
        success: ()=> {
            window.location.replace("http://localhost/e-commerce/shop/public/account");
        }
    })
}

function editarPerfil() {
    const uuid = document.getElementById("btn-hidden").value;
    $.ajax({
        type: 'put',
        url: 'http://localhost:3000/users/' + uuid,
        data: {
            email: document.getElementById("input-email").value,
            nome: document.getElementById("input-nome").value,
            estado: document.getElementById("input-estado").value,
            cidade: document.getElementById("input-cidade").value,
            rua: document.getElementById("input-rua").value,
            numero: document.getElementById("input-numero").value,
            cep: document.getElementById("input-cep").value,
            telefone: document.getElementById("input-telefone").value,
        },
        success: ()=> {
            window.location.replace("http://localhost/e-commerce/shop/public/LoginController/logout");
        }
    })
}