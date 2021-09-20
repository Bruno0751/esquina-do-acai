<?php
    session_start();
    ob_start();

    include '../dao/dao-usuario.php';
    include '../model/usuario.php';
    //include '../utl/padronizacao.php';
    //include '../utl/validacao.php';

    $usuario = new Usuario();

    $usuario->nome = $_POST['textName'];
    $usuario->email = $_POST['emailEmail'];
    $usuario->cep = $_POST['nunberZipCode'];
    $usuario->endereco = $_POST['textEndereco'];
    $usuario->numeor = $_POST['numberHouse'];
    $usuario->complemento = $_POST['numberComplement'];
    $usuario->cpf = $_POST['numberCPF'];
    $usuario->senha = $_POST['passwordPassword'];
    $usuario->tipoConta = $_POST['selectTipo'];
    
    $daoUsuario = new DAOUsuario();

    $daoUsuario->cadastrarUsuario($usuario);
    $_SESSION['msg'] = "Usuario Cadastrado";
    header('location:../login.php');
    ob_end_flush();             