<?php
    $title = "Exemplo 1";
    include ("../includes/cabecalho.php");
?>

<?php
    
    require_once("../models/pessoaFisica.php");
    require_once("../models/pessoaJuridica.php");

    $p = new PessoaFisica();
    $p->nome = "Jhonatan";
    $p->cpf = "123.456.789-10";

    var_dump($p);

    $p2 = new PessoaJuridica();
    $p2->nome = "Milleny";
    $p2->cnpj = "321.654.987/-10";

    echo "<br>";

    var_dump($p2);

?>

<?php
    include ("../includes/rodape.php");
?>