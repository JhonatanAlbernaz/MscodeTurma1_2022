<?php
    $title = "Exemplo 9";
    require_once('cabecalho.php'); 
?>

<form method="GET">
    <label for="numero1"> Informe o primeiro valor: </label><br>
    <input type="text" id="numero1" name="numero1" /><br>
    <label for="numero2"> Informe o segundo valor: </label><br>
    <input type="text" id="numero2" name="numero2" /><br><br>
    <input type="submit" value="Enviar" />
</form>

<?php

    function ehPrimo($n) {
        for($i = 2; $i < $n; $i++) {
            if($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $valor_inicial = $_GET["numero1"];
    $valor_final = $_GET["numero2"];

    $cont = 0;
    echo "Os numeros primos são: <ul>";
    for($numero = $valor_inicial; $numero <= $valor_final; $numero++) {
        if(ehPrimo($numero)) {
            echo "<li> $numero </li>";
            $cont++;
        }
    }
    echo "</ul>";

    echo "<p> O numero de primos no intervalo <b>[$valor_inicial a $valor_final]<b> é:<b> $cont </b></p>";
    
?>

<?php 
    require_once('rodape.php'); 
?>