<?php
    $title = "Andamento da Tarefa";
    include "includes/cabecalho.php";
    require_once "conexao.php";
?>

<?php

    $idTarefa = $_GET["id"];
    $realizarTarefa = "Realizada";
    $dataTarefa = date("Y-m-d H:i:s");
    
    $stmt = $con->prepare("UPDATE tarefa SET situacao = ?, realizada_em = ? WHERE id = ?");
    $stmt->bindParam(1, $realizarTarefa);
    $stmt->bindParam(2, $dataTarefa);
    $stmt->bindParam(3, $idTarefa);

    $stmt->execute();

    echo "<br><p> A tarefa - " . "<b> $idTarefa </b>" . " - foi realizada. </p>";

?>

<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>