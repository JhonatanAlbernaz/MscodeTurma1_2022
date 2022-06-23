<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $id = $_GET["id"];
    $novo_nome = $_GET["novo_nome"];
    $novo_email = $_GET["novo_email"];

    $con = new PDO("mysql:host=localhost;dbname=exemplo", "root", "mscode@2022");

    $stmt = $con->prepare("UPDATE Pessoa SET nome = ?, email = ? WHERE idPessoa = ?");
    $stmt->bindParam(1, $novo_nome);
    $stmt->bindParam(2, $novo_email);
    $stmt->bindParam(3, $id);

    $stmt->execute();

    echo "<p> O usuário $id foi atualizado com sucess. </p>";

?>