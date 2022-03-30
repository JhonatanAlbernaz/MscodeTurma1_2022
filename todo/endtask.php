<?php
    require_once("models/Task.php");
    require_once("models/Banco.php");

    $id = $_GET['id'];
    $dtAtual = date("Y/m/d");
    $novoStatus = 0;

    $stm = Banco::getConnection()->prepare("UPDATE tasks SET dtFim = :dtAtual, status = :novoStatus WHERE id = :id");
    $stm->bindParam('dtAtual', $dtAtual);
    $stm->bindParam('novoStatus', $novoStatus);
    $stm->bindParam('id', $id);

    $stm->execute();

    session_start();

    $_SESSION['tarefa_atualizada'] = TRUE;

    header("Location: pendingtasks.php");

    
?>