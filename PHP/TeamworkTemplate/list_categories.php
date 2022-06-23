<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

    require_once("course/course_functions.php");
    $pageTemplate = getTemplate("default_template.html");

    $page = getTemplate('list_categories.html');

    $nomeArq = "./json/categories.json";
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $categories = fread($arq, filesize($nomeArq));
    $categories = json_decode($categories);
    fclose($arq);

    $categore = "";

    foreach($categories as $categorie){
        $categore = $categore . parseTemplate($page, $categorie);
    }

    $categore = parseTemplate($pageTemplate, ['categore' => $categore]);

    echo $categore;
?>