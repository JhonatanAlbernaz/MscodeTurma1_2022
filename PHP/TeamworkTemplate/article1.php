<?php
    require_once("course/functions.php");

    $content = getTemplate('default_template.html');

    $values = array(
        'title'=> 'Team Work',
        'image' => 'https://img-b.udemycdn.com/course/240x135/1316326_716b_2.jpg',
        'name' => 'Curso de Python',
        'author' => 'Wagner Perin',
        'price' => ' R$179,00',
        'footer' => 'Team Work - Curso de PHP'
    );

    $content = parseTemplate($content, $values);

    echo $content;
?>