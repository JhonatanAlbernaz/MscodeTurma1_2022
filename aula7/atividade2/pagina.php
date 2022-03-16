<?php
    $title = "Exercicio 1";
    require_once('cabecalho.php'); 
?>

<?php

    /*
        Sua página deve verificar se os valores informados formam ou não um triangulo.
        Caso forme, deve informar o tipo de triangulo.
        Tipos de triangulos são:
            Equilátero - 3 lados iguais
            Isósceles - 2 lados iguais
            Escaleno - 3 lados diferentes
        
        Obs.: Para formar triangulo, um lado não pode ser maior que a soma dos outros dois lados.
    */

    try {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

        if(($a <= 0) || ($b <= 0) || ($c <= 0)) {
            throw new Exception('Valores nulos ou negativos não são aceitos');
        }elseif(($a > $b + $c) || ($b > $a + $c) || ($c > $a + $b)) {
            throw new Exception('Valores informados não formam um triângulo.');
        }else {
            echo "<p> Os valores informados formam um triângulo ";
            if(($a == $b) && ($a == $c)) {
                echo "Equilátero </p>";
            }elseif(($a == $b) || ($a == $c) || ($b == $c)) {
                echo "Isôsceles </p>";
            }else {
                echo "Escaleno </p>";
            }
        }
    }catch(Exception $e) {
        echo "<p> Aconteceu um erro: " . $e->getMessage() . " </p>";
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>