<?php
    require_once("templates/template_functions.php");

    $content = getTemplate('post_blog_template.html');

    $articleId = $_GET['articleId'];

    $nomeArq = "posts.json";
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $posts = fread($arq, filesize($nomeArq));
    $posts = json_decode($posts);
    fclose($arq);

    $content = parseTemplate($content, $posts[$articleId]);

    echo $content;
?>