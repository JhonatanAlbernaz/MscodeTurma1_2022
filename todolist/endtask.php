<?php
    require_once("models/Task.php");
    require_once("models/Banco.php");

    $id = $_GET['id'];
    $dtAtual = date("Y/m/d");
    $novoStatus = 0;

    $stmt = Banco::getConnection()->prepare("UPDATE tasks SET dFim = :dtAtual, status = :novoStatus WHERE id = :id");
    $stmt->bindParam('dtAtual', $dtAtual);
    $stmt->bindParam('novoStatus', $novoStatus);
    $stmt->bindParam('id', $id);

    $stmt->execute();

    session_start();

    $_SESSION['tarefa_atualizada'] = TRUE;

    header("Location: pendingtasks.php");

    
?>