<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $id = $_GET["id"];

    $con = new PDO("mysql:host=localhost;dbname=exemplo", "root", "mscode@2022");

    $stmt = $con->prepare("DELETE FROM Pessoa WHERE idPessoa = ?");
    $stmt->bindParam(1, $id);

    $stmt->execute();

    echo "<p> O usuário $id foi removido com sucesso. </p>";

?>