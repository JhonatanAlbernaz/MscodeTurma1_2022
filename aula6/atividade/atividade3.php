<?php

    $figura = $_GET['figura'];
    if($figura == "circulo") {
        echo circunferencia();
    }else {
        echo "A figura " . "<b> $figura </b>" . "é desconhecida.";
    }

    function circunferencia() {
        function areaDoCirculo($r) {
            return M_PI * $r * $r;
        }

        function perimetroDoCirculo($r) {
            return 2 * M_PI * $r;
        }

        function diametroDoCirculo($r) {
            return 2 * $r;
        }

        function imprimeCirculo($r) {

            echo "<p> O raio é $r </p>";

            echo "<p> A  área é " . areaDoCirculo($r) . "</p>";

            echo "<p> O perímetro é " . perimetroDoCirculo($r) . "</p>";

            echo "<p> O diâmetro é " . diametroDoCirculo($r) . "</p>";  
        }
    }

?>