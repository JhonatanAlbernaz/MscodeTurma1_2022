<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $f = $_GET['nome'];
    $f = "%" . $f."%";

    $con = new PDO("mysql:host=localhost;dbname=exemplo", "root", "mscode@2022");

    $result = $con->prepare("SELECT idPessoa, nome, email FROM Pessoa WHERE nome LIKE ?");
    $result->bindParam(1, $f);
    if($result->execute()) {
        if($result->rowCount() > 0) {
            echo "<ul>";
            while($obj = $result->fetch(PDO::FETCH_OBJ)) {
                echo "<li> $obj->nome - $obj->email </li>";
            }
            echo "</ul>";
        }
    }

?>