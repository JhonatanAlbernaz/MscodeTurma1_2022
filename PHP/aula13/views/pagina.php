<?php
    $title = "Página";
    include ("../includes/cabecalho.php");
?>

<?php
    
    require_once("../models/conta.php");
    require_once("../models/Cliente.php");

    $c1 = new Conta(new Cliente("Jhonatan", "123.456.789-10"));

    try {

        $c1->depositar(200);
        $c1->sacar(100);

    }catch(Exception $e) {
        echo "<p> Ocorreu o seguinte erro: " . $e->getMessage();
    }

    var_dump($c1);
    
?>

<?php
    include ("../includes/rodape.php");
?>