<?php
    require_once("course/functions.php");

    $content = getTemplate('list_categories.html');

    $values = array(
        'sub-categorias'=> 'Linguagem',
        'nome' => 'Python'
    );

    $content = parseTemplate($content, $values);

    echo $content;
?>