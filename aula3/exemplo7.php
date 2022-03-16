<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 7 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
  
        $a = $_GET['valorA'];
        $b = $_GET['valorB'];
        $soma = $a + $b;

        echo "A soma de $a com $b é = $soma";

     ?>
    </div>
  </body>
</html>