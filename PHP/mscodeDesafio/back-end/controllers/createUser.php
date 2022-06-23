<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>

<?php

    require_once("../models/User.php");
    require_once("../DAO/UserDAO.php");

    UserDAO::getInstance()->save(new user($_POST['name'], $_POST['email'], $_POST['password'], $_POST['userType'], $_POST['numberRecord']));

   session_start();
 $_SESSION['create_user'] = $user->name;
   header("Location: ../../index.php");
    

?>