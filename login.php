<?php
session_start();

include 'utl/helper.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--50 caracteres-->
    <title>Esquina do Açai</title>

    <meta charset="UTF-8">
    <meta name="author" content="Bruno Gressler da Silveira">
    <!--caracters 150-->
    <meta name="description" content="Site Venda de Açai">
    <meta name="keywords" content="Açai">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,nofolow">

    <link rel="stylesheet" type="text/css" href="style/w2ui.min.css">
    <link rel="stylesheet" type="text/css" href="style/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="style/jqueryToast.css">
    <link rel="stylesheet" type="text/css" href="style/estilos.css">

    <link rel="shortcut icon" href="images/logo.png">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="https://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
    <script type="text/javascript" src="js/jqueryToast.js"></script>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="js/bucarCEP.js"></script>
</head>

<body>
    <time datetime="2012-02-15" id="topo"></time>

    <?php
    echo isset($_SESSION['msg']) ? Helper::alert($_SESSION['msg']) : "";
    unset($_SESSION['msg']);
    ?>

    <header>
        <figure>
            <a href="index.html"><img src="images/logo.png" alt="Home page" class="logo"></a>
        </figure>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#contato_login" class="scroll">Fale Conosco</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li><a href="login.php">Cadastro/Login</a></li>
                <li><a href="cardapio.html">Cardápio</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <span style="display: none;">Esquina do Açai</span>

        <div class="sessao">
            <h2><i>Login</i></h2>
            <form method="post" action="#">
                <input type="text" placeholder="*Email" name="emailEmail" title="Digite seu Email de Acesso">

                <input type="text" placeholder="*Senha" name="passwordSenha" title="Digite sua Senha de Acesso">

                <input type="submit" value="Feito" class="input_ok" onClick="entrar()">
            </form>
            <a href="cadastrar.html" class="pass">Ainda Não Possui uma Conta?</a>
        </div>

    </section>

    <footer id="contato_login">
        <form method="post" action="#">
            <textarea name="menssagem" placeholder="Esceva sua Menssagem"></textarea>

            <input type="number" placeholder="*Digite seu Endereço" name="numberCEP">

            <input type="number" placeholder="*Digite seu tel/cel" name="numberTelefone">


        </form>
        <h3>Rua Carmelita Gripp 342 Parque dos Maias | Porto Alegre</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.171352179819!2d-51.09453298755373!3d-30.00323582845601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951975d7ecacf4fb%3A0x94b7ca935f876dcc!2sR.%20Carmelita%20Grippi%2C%20342%20-%20Rubem%20Berta%2C%20Porto%20Alegre%20-%20RS%2C%2091170-070!5e0!3m2!1spt-BR!2sbr!4v1605103903057!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <span class="copyright">Todos os Direitos Reservados &copy;</span>
    </footer>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>