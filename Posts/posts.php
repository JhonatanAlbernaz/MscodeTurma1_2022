<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
</head>
<body>

<?php

  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  
  $nomeArq = "posts.json";
    
  $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
  $conteudo = fread($arq, filesize($nomeArq));
  $posts = json_decode($conteudo);
  fclose($arq);

  foreach($posts as $i => $post) echo "<h2>$post->article_title</h2><p>$post->article_author $post->article_date</p><a href=detalhes.php?id=$i>Leia o post completo</a>";

?>

</body>
</html>