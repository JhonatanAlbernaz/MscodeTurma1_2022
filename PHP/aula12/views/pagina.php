<?php
    $title = "Página";
    include ("../includes/cabecalho.php");
?>

<?php
    
    require_once("../models/contaCorrente.php");
    require_once("../models/conta_Poupanca.php");
    require_once("../models/conta.php");

    $c1 = new Conta("123.456.789-10", "Jhonatan");
    $c2 = new Conta("321.654.987-01", "Guilherme");

    $c2 = new Conta("222.333.444-50", "Milleny");

    echo "<p> Numero de contas: " . Conta::verNumeroDeContas() . "</p>";

    try {

        $c1->depositar(200);
        $c1->sacar(100);
        $c1->transferir($c2, 10);

    }catch(Exception $e) {
        echo "<p> Ocorreu o seguinte erro: " . $e->getMessage();
    }

    var_dump($c1);
    echo "<br>";
    var_dump($c2);
    
?>

<?php
    include ("../includes/rodape.php");
?>