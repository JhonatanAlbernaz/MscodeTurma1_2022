<?php
    $title = "Exemplo 3";
    require_once('cabecalho.php'); 
?>

<?php

    class Produto {
        public $nome;
        public $valor;
        public $estoque;
    }

    $p = new Produto();

    $p ->nome = "Arroz";
    $p ->valor = 34.29;
    $p ->estoque = 10;

    echo "<p> O produto $p->nome custa R$: $p->valor e temos $p->estoque produtos em estoque. </p>";

?>

<?php 
    require_once('rodape.php'); 
?>