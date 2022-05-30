<?php

    /*
        (4) Faça com que os 30 primeiros numeros primos sejam exibidos numa página.
    */

    function divisores($n) {
        $j = 0;

        for($i = 1; $i <= $n; $i++) {
            if($n % $i == 0) $j++;
        }

        return $j;
    }

    function e_primo($n) {
        return $n == 1 || divisores($n) == 2; 
    }

    echo "<h1> Estes são os 30 primeiros números primos. </h1>";

    $cont = 0;
    $numero = 0;
    
    while($cont < 30) {
        $numero++;
        if(e_primo($numero)) {
            echo "<p> O numero $numero é primo.";
            $cont++;
        }
    }

?>


<?php

    // echo "<h1> Estes são os 30 primeiros números primos. </h1>";

    // $contador = 1;
    // $quantidade = 0;
    // $verificar = 180;

    // do {
    //     if(e_primo($contador)) {
    //         echo "O numero $contador é primo. </p>";
    //         $quantidade++;
    //     }
    //     $contador++;
    // }while ($contador <= 30);

?>