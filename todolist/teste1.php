<?php

    require_once("users.php");
    require_once("DAO/user_dao.php");

    $novo = new User("jhonatanalbernaz124@email.com", "mscode@2022");

    UserDAO::getInstance()->save($novo);

?>