<?php

    function areaDoCirculo($raio) {
        return M_PI * $raio * $raio;
    }

    function perimetroDoCirculo($raio) {
        return 2 * M_PI * $raio;
    }

    function diametroDoCirculo($raio) {
        return 2 * $raio;
    }

    function imprimeCirculo($raio) {
        echo "<h1>Dados do Círculo</h1>";
        echo "<ul>";
        echo "<li> O raio é $raio </li>";
        echo "<li> A  área é " . areaDoCirculo($raio) . "</li>";
        echo "<li> O perímetro é " . perimetroDoCirculo($raio) . "</li>";
        echo "<li> O diâmetro é " . diametroDoCirculo($raio) . "</li>"; 
        echo "</ul>";
    }

    function imprimeRetangulo($base, $altura) {
        echo "<h1>Dados do Retangulo</h1>";
        echo "<ul>";
        echo "<li> A base é " . $base . "</li>";
        echo "<li> A altura é " . $altura . "</li>";
        echo "<li> A  área é " . $base * $altura . "</li>";
        echo "<li> O perímetro é " . 2*($base + $altura) . "</li>";
        echo "</ul>";
    }

?>