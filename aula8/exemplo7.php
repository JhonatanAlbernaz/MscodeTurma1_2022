<?php
    $title = "Exemplo 7";
    require_once('cabecalho.php'); 
?>

<?php

    /*for($i = $n1 + 1; $i < $n2; $i++) {
        if($n1 % $i == 0 || $n2 % $i == 0) {
            continue;
        }else {
            $quantidadeNumerosPrimos++;
        }
    }
    */

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    // Faz um loop desde o $n1 até $n2.
    for($i = $n1; $i <= $n2; $i++){

        /**
         * Inicia o contador de quantidades de vezes
         * que foi dividido igual a 0.
         */
        $dividido = 0; 

        // Faz um loop para cada numero do range entre $n1 e $n2 até chegar em 0.
        for($b = $i; $b > 0; $b--){

            /** Verifica se o resto da divisão de cada item do range
             *  pelo decremento em seu loop é igual a 0.
             */
            if($i % $b == 0){

                // Adiciona +1 ao contator.
                $dividido++;
            }
        }


        // Verifica se a quantidades de vezes dividido é igual a 2.
        if($dividido === 2){

            // Caso seja dividido nessa quantidade imprime que é primo.
            echo "$i é primo! </br>";
        }
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>