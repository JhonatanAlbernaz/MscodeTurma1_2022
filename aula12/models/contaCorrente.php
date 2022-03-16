<?php
    
    require_once("conta.php");
    
    class ContaCorrente extends Conta {
        public $limite;
        public $juros;
    } 

?>