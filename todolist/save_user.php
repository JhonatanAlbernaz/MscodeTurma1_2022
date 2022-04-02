<?php

    require_once("users.php");
    require_once("DAO/user_dao.php");

    $user = new User($_POST["email"], $_POST["password"]);
    UserDAO::getInstance()->save($user);

?>