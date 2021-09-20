
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    });
});

function entrar() {
    window.alert("Em Breve");
}

function cadastrar() {
    let nome = window.document.getElementById('nome').value;
    let email = window.document.getElementById('email').value;
    let cep = window.document.getElementById('cep').value;
    let endereco = window.document.getElementById('endereco').value;
    let complemento = window.document.getElementById('complemento').value;
    let cpf = window.document.getElementById('cpf').value;
    let senha = window.document.getElementById('senha').value;
    let tipoConta = window.document.getElementById('tipoConta').value;

    if (nome === '') {
        window.alert('Digite o Nome');
    } else if (email === '') {
        window.alert('Digite o Email');
    } else if (cep === '') {
        window.alert('Digite o CEP');
    } else if (endereco === '') {
        window.alert('Digite o Endereço');
    } else if (complemento === '') {
        window.alert('Digite o Complento');
    } else if (cpf === '') {
        window.alert('Digite o CPF');
    } else if (senha === '') {
        window.alert('Escolha uma Senha');
    } else if (tipoConta === '') {
        window.alert('Selecione o Tipo de Conta');
    } else if (nome === '' && email === '' && endereco === '' && complemento === '' && cpf === '' && senha === '' && tipoConta === '') {
        window.alert('!!!Preencha os dados!!!');
    } else {
        alert('ok');
    }
}