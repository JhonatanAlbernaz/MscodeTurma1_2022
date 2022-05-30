<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>

<?php

    require_once("../models/Product.php");
    require_once("../DAO/ProductDAO.php");

    ProductDAO::getInstance()->save(new product($_POST['name'], $_POST['value'], $_POST['description']));

    session_start();
    $_SESSION['create_product'] = $name->name;
    header("Location: ../../dashboard-manager/add-products.php");

?>