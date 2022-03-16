<?php
    $title = "Exemplo 1";
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

    echo "<p> O telefone de $p->nome é $p->telefone e o email: $p->email.";
    
?>

<?php 
    require_once('rodape.php'); 
?>