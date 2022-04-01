<?php
    require_once("./models/Task.php");
    require_once("./DAO/TaskDAO.php");

    $nova_task = new Task("Inserido na mao 3", "Teste de inserção via DAO 3");

    TaskDAO::getInstance()->save($nova_task);

?>