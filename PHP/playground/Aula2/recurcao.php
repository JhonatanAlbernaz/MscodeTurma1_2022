<?php

    //Fazer uma função que retorne o valor fatorial de um numero

    //Solução Sem Recurção

    echo "<h1> Fatorial Sem Recurção </h1>";

    function fatorial($n) {
        $result = $n;
        for($i = $n - 1; $i >= 1; $i--) {
            $result = $result * $i;
        }

        return $result;
    }

    echo "<p>" . fatorial(7) . "</p>";

    //Com Recurção

    echo "<h1> Fatorial Com Recurção </h1>";

    function fatorial2($n) {
        if($n - 1) {
            return $n * fatorial2($n - 1);
        }else {
            return 1;
        }
    }

    echo "<p>" . fatorial2(8) . "</p>";

?>