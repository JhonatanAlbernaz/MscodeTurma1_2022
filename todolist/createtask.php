<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>

<?php

    require_once("models/Task.php");
    require_once("models/Banco.php");

    $newTask = new Task($_POST['task-title'], $_POST['task-desc']);

    $stmt = Banco::getConnection()->prepare("INSERT INTO tasks(titulo, descricao, status, dInicio) VALUES(:titulo, :desc, :status, :data)");
    $stmt->bindParam("titulo", $newTask->title);
    $stmt->bindParam("desc", $newTask->desc);
    $stmt->bindParam("status", $newTask->status);
    $stmt->bindParam("data", $newTask->dInicio);

    $stmt->execute();

    session_start();

    $_SESSION["tarefa_criada"] = $newTask->title;

    header("Location: ../todolist/index.php");

?>