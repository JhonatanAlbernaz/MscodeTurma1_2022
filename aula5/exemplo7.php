<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 7 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
      function somaNumeros($a, $b){
        $c = $a + $b;
        return $c;
      }

      $x = somaNumeros(10, 15);
      $y = somaNumeros($x, 10);

      echo "O valor total é $y";

     ?>
    </div>
  </body>
</html>