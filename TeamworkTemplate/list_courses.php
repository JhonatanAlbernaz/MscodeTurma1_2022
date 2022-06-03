<?php
    require_once("templates/template_functions.php");

    $pageTemplate = getTemplate("default_template.html");
    $listCourseTemplate = getTemplate("list_course_template.html");

    $nomeArq = "posts.json";
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $courses = fread($arq, filesize($nomeArq));
    $courses = json_decode($courses);
    fclose($arq);

    $content = "";
    foreach($courses as $course){
        $content = $content . parseTemplate($listCourseTemplate, $course);
    }

    $content = parseTemplate($pageTemplate, ['content' => $content]);

    echo $content;

?>