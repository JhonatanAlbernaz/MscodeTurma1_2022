<?php
    $title = "Detalhes Tarefa";
    include "includes/cabecalho.php";
    require_once "conexao.php";
?>

<?php

    $result = $con->prepare("SELECT id, nome, descricao, situacao, criada_em, realizada_em, andamento_em FROM tarefa WHERE id = ?");

    $idTarefa = $_GET["id"];

    $result->bindParam(1, $idTarefa);
    $result->execute();
    $tarefa = $result->fetch(PDO::FETCH_OBJ);

    echo "<h1> Informações da Tarefa - " . $tarefa->nome . "</h1>";
    echo "<ul>";
    echo "<li><b>Descrição:</b> $tarefa->descricao </li>";
    echo "</ul>";


?>

<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>