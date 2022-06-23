<?php
    $title = "Exemplo 2";
    require_once('cabecalho.php'); 
?>

<?php

    class Pessoa {
        public $nome;
        public $telefone;
        public $email;
    }

    $p = new Pessoa();

    $p->nome = "Jhonatan";
    $p->telefone= "+5527998567890";
    $p->email = "jhonatanalbernaz@gmail.com";

    $p2 = new Pessoa();

    $p2->nome = "Milleny";
    $p2->telefone= "+5527998027890";
    $p2->email = "millenysoares@gmail.com";

    echo "<p> O telefone de $p->nome é $p->telefone e o email: $p->email.</p>";
    echo "<p> O telefone da $p2->nome é $p2->telefone e o email: $p2->email.</p>";
    
?>

<?php 
    require_once('rodape.php'); 
?>