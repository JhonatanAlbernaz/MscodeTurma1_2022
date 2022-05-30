<?php

    function ehPrimo($n) {
        for($i = 2; $i < $n; $i++) {
            if($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $numero = 7;

    if(ehPrimo($numero)) {
        echo "<p> O número $numero <b> É primo! </b></p>";
    }else {
        echo "<p> O número $numero <b> Não é primo! </b></p>";
    }

?>