<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>

<?php

    require_once("../utils/Banco.php");
    require_once("../models/User.php");
    require_once("../DAO/UserDAO.php");

    $emailcheck = $_POST["email"];
    $passwordcheck = $_POST["password"];

    $obj = UserDAO::getInstance()->findbyemail($emailcheck);

    session_start();
    if($passwordcheck == $obj->password) {
        $_SESSION["logado"] = true;
        $_SESSION["email"] = $emailcheck;
        $_SESSION["userType"] = $obj->userType;
        header("Location: ../../dashboard-manager/index.html");
    }else {
        $_SESSION["erro_login"] = "Login invalido, senha ou email invalidos";
        header("Location: ../../app/View/admin/login.php");
    }

?>