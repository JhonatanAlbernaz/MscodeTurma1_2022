<?php
    require_once("models/Task.php");
    require_once("models/Banco.php");

    $newTask = new Task($_POST['task-title'], $_POST['task-desc']);

    $stm = Banco::getConnection()->prepare("INSERT INTO tasks(titulo, descricao, status, dtInicio) VALUES(:titulo, :desc, :status, :data)");
    $stm->bindParam('titulo', $newTask->title);
    $stm->bindParam('desc', $newTask->desc);
    $stm->bindParam('status', $newTask->status);
    $stm->bindParam('data', $newTask->dtInicio);

    $stm->execute();

    session_start();

    $_SESSION['tarefa_criada'] = $newTask->title;

    header("Location: index.php");

    //Padrao DAO.

    
?>