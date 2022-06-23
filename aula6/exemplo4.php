<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 4 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        function soma($a, $b){
            return $a + $b;
        }

        function media($a, $b){
            return soma($a, $b) / 2;
        }

        $resultado = media(5, 9);

        echo "<p>O resultado é: $resultado</p>";

     ?>
    </div>
  </body>
</html>