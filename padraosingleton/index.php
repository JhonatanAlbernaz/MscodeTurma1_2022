<?php

    require_once("pessoa.php");
    require_once("template/functions.php");
    $template = getTemplate("default_template.html");

    $p = Pessoa::getPessoa();
    $p2 = Pessoa::getPessoa();

    echo  $p;

?>