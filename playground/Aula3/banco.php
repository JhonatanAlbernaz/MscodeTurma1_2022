<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("Banco/Conta.php");
    require_once("Banco/Agencia.php");

    try {

        $ag = new Agencia();

        $c1 = $ag->criarConta();

        $numeroDaMinhaConta = $c1->codigo;

        $c1 = $ag->criarConta();
        $c1 = $ag->criarConta();
        $c1 = $ag->criarConta();
        $c1 = $ag->criarConta();
        $c1 = $ag->criarConta();
        $c1 = $ag->criarConta();

        $minhaConta = $ag->buscarConta($numeroDaMinhaConta);

        if($minhaConta) $minhaConta->depositar(90);

        var_dump($numeroDaMinhaConta);

    }catch(Exception $erro) {
        echo "<p> Ocorreu o seguinte erro: " . $erro->getMessage() . "</p>";
    }

    

?>