<?php
    $title = "Salvar Tarefa";
    include "includes/cabecalho.php";
    require_once "conexao.php";
?>

<?php

    $nome_da_tarefa = $_POST['nome'];
    $descricao_da_tarefa = $_POST['descricao'];
    $situacao = "Criada";
    $criada_em = date("Y-m-d H:i:s");

    $stmt = $con->prepare("INSERT INTO tarefa(nome, descricao, situacao, criada_em) VALUES(?, ?, ?, ?)");
    $stmt->bindParam(1, $nome_da_tarefa);
    $stmt->bindParam(2, $descricao_da_tarefa);
    $stmt->bindParam(3, $situacao);
    $stmt->bindParam(4, $criada_em);

    $stmt->execute();

    echo "<p> A tarefa - " . "<b> $nome_da_tarefa </b>" ." - foi cadastrada com sucesso! </p>";

?>

<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>