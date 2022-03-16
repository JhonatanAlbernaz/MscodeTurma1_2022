<?php

    require_once("pessoa.php");
    
    class PessoaJuridica extends Pessoa {
        public $cnpj;

        public function __set($name, $value) {
            throw new Exception("Você não pode criar novos atributos.");
        }

    } 

?>