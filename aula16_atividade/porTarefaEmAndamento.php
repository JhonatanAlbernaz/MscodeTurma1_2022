<?php
    $title = "Andamento da Tarefa";
    include "includes/cabecalho.php";
    require_once "conexao.php";
?>

<?php

    $idTarefa = $_GET["id"];
    $emAndamento = "Em andamento";
    $dataTarefa = date("Y-m-d H:i:s");
    
    $stmt = $con->prepare("UPDATE tarefa SET situacao = ?, andamento_em = ? WHERE id = ?");
    $stmt->bindParam(1, $emAndamento);
    $stmt->bindParam(2, $dataTarefa);
    $stmt->bindParam(3, $idTarefa);

    $stmt->execute();

    echo "<p> A tarefa $idTarefa foi colocada em andamento. </p>";

?>

<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>