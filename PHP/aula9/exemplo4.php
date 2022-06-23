<?php
    $title = "Exemplo 4";
    require_once('cabecalho.php'); 
?>

<?php

    class Produto {
        public $nome;
        public $valor;
        public $estoque;
    }

    $p = new Produto();

    $p ->valor = 100;
    $p ->valor = $p->valor * 1.1;

    echo "<p> O novo valor: $p->valor </p>";
    
?>

<?php 
    require_once('rodape.php'); 
?>