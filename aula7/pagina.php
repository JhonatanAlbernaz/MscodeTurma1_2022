<?php
    $title = "Exercicio 1";
    require_once('cabecalho.php'); 
?>

<?php

    $title = $_GET['titulo'];

    try {
        $valor_a = $_GET['a'];
        $valor_b = $_GET['b'];
        $valor_c = $_GET['c'];

        if(($valor_a <= 0) || ($valor_b <= 0) || ($valor_c <= 0)) {
            throw new Exception('Valores nulos ou negativos não são aceitos');
        }
    }catch(Exception $e) {
        echo "<p> Aconteceu um erro: " . $e->getMessage() . " </p>";
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>