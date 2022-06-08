<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("models/Pessoa.php");

    $p = new Pessoa("Jhonatan Albernaz", 17);
    $p2 = new Pessoa("Milleny Soares", 17);

    $db = new PDO("mysql:host=localhost;dbname=Teste", "root", "mscode@2022");

    $stmt = $db->prepare("INSERT INTO Pessoa(nome, idade) VALUES (:nome, :idade)");
    $stmt->bindParam("nome", $p->nome);
    $stmt->bindParam("idade", $p->idade);

    $stmt->execute();

?>