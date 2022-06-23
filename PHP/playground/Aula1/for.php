<?php

    $name = array (
        "Milleny", 
        "Wagner", 
        "Jhonatan",
        "João",
        "Maria"
    );

    for($i = 0; $i < sizeof($name); $i++) {
        echo "<p>" . $i . "-" . $name[$i] . "</p>";
    }

?>