<?php

    echo "<h1> Divisores de 128 </h1>";
    for($i = 1; $i <= 128; $i++) {
        if((128 % $i) == 0) {
            echo "<p> $i </p>";
        }
    }

?>