<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

    require_once("course/functions.php");
    $pageTemplate = getTemplate("default_template.html");

    $courseTemplate = getTemplate('list_course.html');
    $CategorieTemplate = getTemplate('list_categories.html');


    $nomeArq = "./json/courses.json";
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $courses = fread($arq, filesize($nomeArq));
    $courses = json_decode($courses);
    fclose($arq);

    $coursesContent = "";

    foreach($courses as $course){
        $coursesContent = $coursesContent . parseTemplate($courseTemplate, $course);
    }

    $nomeArq = "./json/categories.json";
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $categories = fread($arq, filesize($nomeArq));
    $categories = json_decode($categories);
    fclose($arq);

    $categoresContent = "";

    foreach($categories as $categorie){
      $categoresContent = $categoresContent . parseTemplate($CategorieTemplate, $categorie);
    }

    $content = parseTemplate($pageTemplate, ['categore' => $categoresContent, 'content' => $coursesContent]);

    echo $content ;
?>