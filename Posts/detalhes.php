<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $nomeArq = "posts.json";
    
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $conteudo = fread($arq, filesize($nomeArq));
    $posts = json_decode($conteudo);
    fclose($arq);

    $pos = $_GET['id'];

    echo "<h1>" . $posts[$pos]->title . " - " . $posts[$pos]->article_title . "</h1>";

    echo "<ul>";
    echo "<li><h3><b> Informações:</b></h3> " . $posts[$pos]->article_content . "</li>";
    echo "<li><h3><b> Criador:</b></h3> " . $posts[$pos]->article_author . "</li>";
    echo "<li><h3><b> Data de criação:</b></h3> " . $posts[$pos]->article_date . "</li>";
    echo "<li><h3><b> Curso:</b></h3> " . $posts[$pos]->footer . "</li>";
    echo "</ul>";

?>