<?php

    require_once("Conta.php");

    class Agencia {
        public string $codigo;
        public $contas;

        public function __construct(){
            $this->codigo = rand(1000, 9999);
            $this->contas = array();
        }

        public function criarConta() {
            $novaConta = new Conta();
            $novaConta->codigo = rand(1000, 9999) . "-" . rand(10, 99);
            array_push($this->contas, $novaConta);
            return $novaConta;
        }

        public function buscarConta($numero) {
            foreach($this->contas as $conta) {
                if($conta->codigo == $conta) return $conta;
            }

            return null;
        }
    }

?>