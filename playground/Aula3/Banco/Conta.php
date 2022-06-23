<?php

    class Conta {
        public string $codigo;
        private float $saldo;

        public function __construct(){
            $this->saldo = 0;
        }

        public function saque($valor) {
            if($valor > 0) $this->saldo -= $valor; 
            else throw new Exception("Operação invalida.");
        }

        public function depositar($valor) {
            if($valor > 0) $this->saldo += $valor;
            else throw new Exception("Operação invalida.");
        }

    }

?>