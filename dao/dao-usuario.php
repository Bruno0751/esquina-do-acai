<?php
    require 'conexao.php';

    class DAOUsuario{

        private $conexao = null;

        public function __construct(){
            $this->conexao = Conexao::getInstance();
        }

        public function __destruct(){}

        public function cadastrarUsuario($usuario){
            try{

                $stat = $this->conexao->prepare("INSERT INTO esquina_do_acai.usuarios (id_usuario, nome, email, cep, endereco, numero, complemento, cpf, senha, tipo_conta, data_registro, hora_registro) VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW());");

                $stat->bindValue(1, $usuario->nome);
                $stat->bindValue(2, $usuario->email);
                $stat->bindValue(3, $usuario->cep);
                $stat->bindValue(4, $usuario->endereco);
                $stat->bindValue(5, $usuario->numero);
                $stat->bindValue(6, $usuario->complemento);
                $stat->bindValue(7, $usuario->cpf);
                $stat->bindValue(8, $usuario->senha);
                $stat->bindValue(9, $usuario->tipoConta);

                $stat->execute();

            }catch(PDOException $erro){
                echo "Erra ao Cadastrar " . $erro;

            }
        }
    }