<?php
    $title = "Exemplo 2";
    require_once('cabecalho.php'); 
?>

<form method="GET">
    <label for='n'> Informe o nome: </label><br>
    <input type="text" id='n' nome='n'/><br><br>
    <input type="submit" value="Enviar">
</form>

<?php

    $n = $_GET['n'];

    echo "<p> Tabuada de $n: </p><ul>";
    for ($i = 0; $i <= 10; $i++) {
      echo "<li> $n x $i =" . ($n * $i) . "</li></br>";
    }
    echo "</ul>";
    
?>

<?php 
    require_once('rodape.php'); 
?>