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
                <li><a href="index.php">Home</a></li>
                <li><a href="#footerCardapio" class="scroll">Fale Conosco</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="login.php">Cadastro/Login</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <span style="display: none;">Esquina do Açai</span>


        <div class="sessao sessaoCardapio">

            <h2><i>Cardápio</i></h2>

            <p><strong>Copa Kids - R$ 5,00</strong></p>
            <p><strong>Copa 330 ml - R$ 10,00</strong></p>
            <p><strong>Copa 440 ml - R$ 14,00</strong></p>
            <p><strong>Copa 550 ml - R$ 17,00</strong></p>

            <div class="linha"></div>

            <div class="cardapioLeft">
                <h5><strong>Complementos:</strong></h5>
                <p>- Leite em Pó</p>
                <p>- Chocolate de Avela</p>
                <p>- Leite Condensado</p>
                <p>- Paçoca</p>
                <p>- Granola</p>
                <p>- MM's</p>
                <p>- Oreo</p>
                <p>- Trento</p>
                <p>- Sucrilhos</p>
                <p>- Ovo Maltine</p>
                <p>- Estikadinho</p>
                <p>- Kit Kat</p>
                <p>- Chocolate Branco</p>
                <p>- Chocolate Preto</p>
                <p>- Bis Branco</p>
                <p>- Bis Preto</p>
            </div>

            <div class="cardapioRight">
                <h5><strong>Frutas:</strong></h5>
                <p>- Morango</p>
                <p>- Banana</p>
                <p>- Kiwi</p>
                <p>- Abacaxi</p>

            </div>

            <a href="#footerCardapio" class="scroll"><button type="button" class="botao "><strong>!Peça ja o
                        Seu!</strong></button></a>

        </div>

    </section>

    <footer id="footerCardapio">
        <form method="post" action="#">
            <textarea name="menssagem" placeholder="Esceva sua Menssagem"></textarea>

            <input type="number" placeholder="*Digite seu Endereço" name="numberCEP">

            <input type="number" placeholder="*Digite seu tel/cel" name="numberTelefone">


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