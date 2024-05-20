<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Esquina do Açai</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="js/head.js"></script>
</head>

<body>
    <time datetime="2012-02-15" id="topo"></time>

    <header>
        <figure>
            <a href="index.php"><img src="images/logo.png" alt="Home page" class="logo"></a>
        </figure>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#contato_cadastrar" class="scroll">Fale Conosco</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li><a href="login.php">Cadastro/Login</a></li>
                <li><a href="cardapio.html">Cardápio</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <span style="display: none;">Esquina do Açai</span>

        <div class="sessao">
            <h2><i>Cadastrar</i></h2>
            <form method="post" action="controller/controller-cadastro.php">
                <input type="text" placeholder="*Nome?" name="textName" title="Digite seu Nome" id="nome" required>

                <input type="email" placeholder="*Email" name="emailEmail" title="Digite seu Email Para Acesso"
                    id="email" required>

                <input type="number" placeholder="*CEP" name="nunberZipCode"
                    title="Diga seu CEP Para facilitar a Entrega" class="cep" id="cep" value="" required>

                <input type="text" placeholder="*Endereço" name="textEndereco" title="Diga seu Endereço Para Entrega"
                    class="zipCode" id="endereco" required>

                <input type="text" placeholder="Número" name="numberHouse" title="Número da sua Casa"
                    class="inputNumeroComplemento" id="numero">

                <input type="text" placeholder="Complemento" name="numberComplement" title="Algum Complemento?"
                    class="inputNumeroComplemento" id="complemento" required>

                <input type="number" placeholder="*CPF" name="numberCPF" title="Diga seu CPF" id="cpf" required>

                <input type="text" placeholder="*Senha Para Acesso" name="passwordPassword"
                    title="Crie uma Senha Para Acesso" id="senha" required>

                <select name="selectTipo" id="tipoConta" required>
                    <option value="">*Selecione uma Conta</option>
                    <option value="user">Cliente</option>
                    <option value="adm">ADM</option>
                </select>

                <input type="submit" value="Feito" class="input_ok form" onClick="cadastrar()">
                <input type="reset" value="Limpar" class="input_ok input_limpar form">
            </form>
            <a href="login.php"><button type="submit" class="input_ok bt">Voltar</button></a>
        </div>

    </section>

    <footer id="contato_cadastrar">
        <form method="post" action="#">
            <textarea name="menssagem" placeholder="Esceva sua Menssagem"></textarea>
            <div>
                <input type="number" placeholder="*Digite seu Endereço" name="numberCEP">
            </div>

            <div>
                <input type="number" placeholder="*Digite seu tel/cel" name="numberTelefone">
            </div>

        </form>
        <h3>Rua Carmelita Gripp 342 Parque dos Maias | Porto Alegre</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.171352179819!2d-51.09453298755373!3d-30.00323582845601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951975d7ecacf4fb%3A0x94b7ca935f876dcc!2sR.%20Carmelita%20Grippi%2C%20342%20-%20Rubem%20Berta%2C%20Porto%20Alegre%20-%20RS%2C%2091170-070!5e0!3m2!1spt-BR!2sbr!4v1605103903057!5m2!1spt-BR!2sbr"
            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <span class="copyright">Todos os Direitos Reservados &copy;</span>
    </footer>

    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>