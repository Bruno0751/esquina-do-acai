<?php
    class Usuario{

        private $idUsuario;
        private $nome;
        private $email;
        private $cep;
        private $endereco;
        private $numero;
        private $complemento;
        private $cpf;
        private $senha;
        private $tipoConta;

        public function __construct(){}

        public function __destruct(){}

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }