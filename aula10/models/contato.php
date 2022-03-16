<?php
    class Contato{
        public $nome;
        public $email;
        public $telefone;
        public $nascimento;

        public function __construct($nome, $email, $telefone, $nascimento){
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->nascimento = $nascimento;
        }
    }
?>