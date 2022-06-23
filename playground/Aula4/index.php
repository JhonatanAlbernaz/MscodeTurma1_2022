<?php

    require_once("generalizacao/PessoaF.php");
    require_once("generalizacao/PessoaJ.php");

    $p = new PessoaFisica("Jhonatan", "341.622.410-82");
    $pj = new PessoaJuridica("Milleny", "26.216.513/0001-28");

    $p->complementar();
    $pj->complementar();

    var_dump($p);

    echo "</br>";

    var_dump($pj);

?>