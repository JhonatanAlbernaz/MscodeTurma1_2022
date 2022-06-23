<?php

    require_once("Conta.php");

    class ContaCorrente extends Conta {
        private float $limite;

        public function definirLimite($valor) {
            $this->limite = $valor;
        }

        public function sacar($valor) {
            if($valor <= $this->limite + $this->saldo) $this->saldo -= $valor; 
            else throw new Exception("Operação invalida.");
        }

    }

?>