<?php

    $j = 0;
    echo "<h1> Divisores de 128 </h1>";
    for($i = 1; $i <= 128; $i++) {
        if(128 % $i == 0) {
            $j++;
        }
    }

    if($j > 0) {
        echo "Quantidade de numeros que são divisores de 128: " . $j;
        echo "<br><br>";
    }

    //<=========================   =========================>//

    function divisores($n) {
        $j = 0;

        for($i = 1; $i <= $n; $i++) {
            if($n % $i == 0) $j++;
        }

        return $j;
    }

    echo "<h1> Numeros e seus Divisores </h1>";

    for($l = 0; $l <= $n; $l++) {
        $n = rand(0, 100);

        echo "<p> $n possui " . divisores($n) . " divisores </p>";
    }

?>