<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>

<?php

    require_once("models/Task.php");
    require_once("utils/Banco.php");
    require_once("DAO/TaskDAO.php");

    $id = $_GET['id'];
    $dtAtual = date("Y/m/d");
    $novoStatus = 0;

    $stmt = Banco::getConnection()->prepare("SELECT id, title, description, status, beginDate, endDate FROM tasks WHERE id=?");
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $taskDados = $stmt->fetch(PDO::FETCH_OBJ);

    $task = new Task($taskDados->title, $taskDados->description);
    $task->setStatus($novoStatus);
    $task->setEndDate($dtAtual);
    $task->setId($taskDados->id);

    TaskDAO::getInstance()->update($task);

    session_start();

    $_SESSION['tarefa_atualizada'] = TRUE;

    header("Location: pendingtasks.php");
    
?>