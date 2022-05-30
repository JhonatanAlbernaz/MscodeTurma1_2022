<?php

    //Série de Fibonacci

    echo "<h1> Série de Fibonacci </h1>";

    function fibonacci($indice) {
        if($indice == 1 || $indice == 2) {
            return 1;
        }else {
            return fibonacci($indice - 1)  + fibonacci($indice - 2);
        }
    }

    echo "<p>" . fibonacci(11) . "</p>";

?>