<?php

    require_once("Conta.php");

    class ContaPoupanca extends Conta {

        public function render($rendimento) {
            if($rendimento > 0) $this->saldo *= (1 + $rendimento);
            else throw new Exception("Operação invalida.");
        }

    }

?>