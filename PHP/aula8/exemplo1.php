<?php
    $title = "Exemplo 1";
    require_once('cabecalho.php'); 
?>

<?php

    $n = $_GET['a'];

    for ($valor = 0; $valor <= 10; $valor++) {
      echo "$n x $valor =" . $n * $valor . "</br>";
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>