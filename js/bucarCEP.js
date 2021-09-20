


$(document).ready(function () {

    function limpa_formulário_cep() {

        $("#endereco").val("");
        // $("#house").val("");
        // $("#complement").val("");
    }

    $("#cep").blur(function () {

        var cep = $(this).val().replace(/\D/g, '');

        if (cep != "") {

            var validacep = /^[0-9]{8}$/;

            if (validacep.test(cep)) {

                $("#endereco").val("...");

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