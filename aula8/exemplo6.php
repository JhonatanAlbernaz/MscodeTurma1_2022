<?php
    $title = "Exemplo 6";
    require_once('cabecalho.php'); 
?>

<form method="GET">
    <label for='nome'> Informe o nome: </label><br>
    <input type="text" id='nome' nome='nome'/><br><br>
    <input type="submit" value="Enviar">
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

    $numero = $_GET['numero'];

    if(ehPrimo($numero)) {
        echo "<p> O número $numero <b> É primo! </b></p>";
    }else {
        echo "<p> O número $numero <b> Não é primo! </b></p>";
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>