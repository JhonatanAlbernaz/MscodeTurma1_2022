<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("models/CarroDAO.php");
    require_once("models/Carro.php");

    $p = new Carro("NBA-5022", "BMW X6 M", "Azul", 2022);
    $p2 = new Carro("JGR-6919", "BMW M5 Competition", "Preta", 2022);
    $p3 = new Carro("LWL-9802", "Ferrari 488 GTB", "Vermelha", 2020);
    $p4 = new Carro("BVF-4181", "Lamborghini urus", "Laranja", 2019);
    $p5 = new Carro("NEU-4060", "Nissan GTR R35", "Branco", 2017);

    $PDAO = CarroDAO::getInstance();

    $PDAO->save($p);
    $PDAO->save($p2);
    $PDAO->save($p3);
    $PDAO->save($p4);
    $PDAO->save($p5);

?>