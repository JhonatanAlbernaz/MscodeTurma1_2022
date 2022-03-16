<?php
    $title = "Exemplo 2";
    include ("../includes/cabecalho.php");
?>

<?php
    
    require_once("../models/contaCorrente.php");
    require_once("../models/conta_Poupanca.php");

    $c1 = new ContaCorrente();
    $c2 = new ContaPoupanca();
    $c3 = new Conta();

    var_dump($c1);
    echo "<br>";
    var_dump($c2);
    echo "<br>";
    var_dump($c3);
    
?>

<?php
    include ("../includes/rodape.php");
?>