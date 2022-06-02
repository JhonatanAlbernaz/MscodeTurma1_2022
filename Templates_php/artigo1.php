<?php

ini_set('display_errors', 1);
  error_reporting(E_ALL);
  require_once("templates/template_functions.php");

  $content = getTemplate("blog_post_template.html");

  $values = array (
    "title"=> "Meu Blog",
    "article_title"=> "O primeiro post do meu blog",
    "article_content"=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    "article_author"=> "Jhonatan Albernaz",
    "footer"=> "Curso de PHP",
  );

  $content = parseTemplate($content, $values);

  echo $content;

?>