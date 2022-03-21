function toast() {
    $.toast({
        icon: "success",
        heading: "OK", //CABELHALHO
        text: "Tudo Certo por aqui", //TEXTO
        loader: true, //MOSTRAR LOADER
        loaderBg: "red", //COR LOADER
        //bgColor: "#ffffff",
        color: "#000000",
        textAlign: 'center',
        showHideTransition: 'slide', //TIPO DE ABERTURA
        // hideAfter: true,
        allowToastClose: false, //REMOVER ICONE DE FECHAR
        stack: false, //NAO APARECE MAIS DE UM - PODE RECEBER O NUMERO
        position: 'top-left', //bottom-left | bottom-right | bottom-center | mid-center OU
        //position: {
        //    left: 120,
        //    top: 120
        //},
        //beforeShow: function() {
        //    alert('The toast is about to appear');
        //},
        //afterShown: function() {
        //    alert('Toast has appeared.');
        //},
        //beforeHide: function() {
        //    alert('Toast is about to hide.');
        //},
        afterHidden: function () {
            alert('Cadastrado!');
        }
    });
}


function entrar() {
    w2alert("Em Breve");
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