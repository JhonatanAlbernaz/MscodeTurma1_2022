<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $con = new PDO("mysql:host=localhost;dbname=exemplo", "root", "mscode@2022");

    $nome = "Guilherme Trindade";
    $email = "guilhermetrindade@email.com";

    $stmt = $con->prepare("INSERT INTO Pessoa(nome, email) VALUES(?, ?)");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);

    $stmt->execute();

    echo "<p> Cadastro realizado </p>";

?>