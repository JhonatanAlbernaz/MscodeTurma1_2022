<?php

    function fatorial($n){
        $fat = 1;
        for($x = $n; $x > 1; $x--){
            $fat = $fat * $x;
        }
        return $fat;
    }

    function arranjo($n, $p){
        return fatorial($n)/fatorial($n-$p);
    }

?>