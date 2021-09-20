
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    });
});

function entrar() {
    window.alert("Em Breve");
}

$(document).ready(function () {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco").val("");
        $("#house").val("");
        $("#complement").val("");
    }

    $("#cep").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                $("#endereco").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        $("#endereco").val(dados.logradouro);
                        // $("#endereco").val(dados.complemento);
                        // $("#endereco").val(dados.bairro);
                        // $("#endereco").val(dados.localidade);
                        // $("#endereco").val(dados.uf);
                        // $("#endereco").val(dados.ibge);
                        // $("#endereco").val(dados.gia);
                        // $("#endereco").val(dados.ddd);
                        // $("#endereco").val(dados.siafi);

                    } else {
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } else {
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } else {
            limpa_formulário_cep();
        }
    });
});

