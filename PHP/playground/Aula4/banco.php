<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("Banco/Conta.php");
    require_once("Banco/Agencia.php");
    require_once("Banco/ContaCorrente.php");
    require_once("Banco/ContaPoupanca.php");

    try {

        $c = new ContaPoupanca();
        $c->depositar(100);
        $c->render(0.8);

        var_dump($c);

    }catch(Exception $erro) {
        echo "<p><b> Ocorreu o seguinte erro:</b> " . $erro->getMessage() . "</p>";
    }

    

?>