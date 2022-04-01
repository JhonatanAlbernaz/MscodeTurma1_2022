<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>

<?php

    require_once("models/Task.php");
    require_once("DAO/TaskDAO.php");
    
    TaskDAO::getInstance()->save(new Task($_POST['task-title'], $_POST['task-desc'], $_POST['email'], $_POST['password']));

    session_start();
    $_SESSION['tarefa_criada'] = $newTask->title;
    header("Location: index.php");
    
?>