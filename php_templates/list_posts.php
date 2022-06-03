<?php
    require_once("templates/template_functions.php");

    $pageTemplate = getTemplate("default_template.html");
    $listPostTemplate = getTemplate("list_post_template.html");

    $nomeArq = "posts.json";
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $posts = fread($arq, filesize($nomeArq));
    $posts = json_decode($posts);
    fclose($arq);

    $content = "";
    foreach($posts as $post){
        $content = $content . parseTemplate($listPostTemplate, $post);
    }

    $content = parseTemplate($pageTemplate, ['content' => $content]);

    echo $content;

?>