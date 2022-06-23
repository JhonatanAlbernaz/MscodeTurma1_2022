<?php 

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once("models/Pessoa.php");
    require_once("models/Banco.php");

    $newPessoa = new Pessoa($_POST["nome"], $_POST["dataNasc"], $_POST["funcao"]);

    $stmt = Banco::getConnection()->prepare("INSERT INTO aniversariantes(nome, dataNasc, funcao) VALUES (:nome, :dataNasc, :funcao)");
    $stmt->bindParam("nome", $newPessoa->nome);
    $stmt->bindParam("dataNasc", $newPessoa->dataNasc);
    $stmt->bindParam("funcao", $newPessoa->funcao);

    $stmt->execute();

    session_start();
    $_SESSION['novaPessoa'] = $newPessoa->nome;
    header("Location: app2.php");

?>