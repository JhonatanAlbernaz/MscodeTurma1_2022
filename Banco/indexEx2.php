<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("models/PessoaDAO.php");
    require_once("models/Pessoa.php");

    $p = new Pessoa("Jhonatan Albernaz", 17);
    $p2 = new Pessoa("Milleny Soares", 17);

    $PDAO = PessoaDAO::getInstance();

    $PDAO->save($p);
    $PDAO->save($p2);

?>