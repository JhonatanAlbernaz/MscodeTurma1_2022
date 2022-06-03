<?php
    require_once("templates/template_functions.php");

    $content = getTemplate('post_blog_template.html');

    $values = array(
        'title'=> 'Blog do Wagner - Segundo Post',
        'article_title' => 'Segundo post do meu blog',
        'article_content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        'article_author' => 'Jhonathan Albernaz',
        'footer' => 'Blog - Curso de PHP'
    );

    $content = parseTemplate($content, $values);

    echo $content;
?>