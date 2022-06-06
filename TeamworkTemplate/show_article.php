<?php
    
    require_once("course/functions.php");

    $content = getTemplate('post_course_template.html');

    $idCourse = $_GET['idCourse'];

    $nomeArq = "json/courses.json";
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $posts = fread($arq, filesize($nomeArq));
    $posts = json_decode($posts);
    fclose($arq);

    $content = parseTemplate($content, $posts[$idCourse]);

    echo $content;

?>