<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $con = new PDO("mysql:host=localhost;dbname=exemplo", "root", "mscode@2022");

    $result = $con->query("SELECT idPessoa, nome, email FROM Pessoa");
    
    echo "<ul>";
    while($obj = $result->fetch(PDO::FETCH_OBJ)) {
        echo "<li> $obj->nome - $obj->email </li>";
    }
    echo "</ul>";

?>