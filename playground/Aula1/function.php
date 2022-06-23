<?php

    function f($x) {
        return 2 * ($x ** 2) + 3 * $x + 5;
    }

    for ($i = -5; $i <= 5; $i++) {
        echo "</p>$i => " . f($i) . " </p>";
    }
    
?>