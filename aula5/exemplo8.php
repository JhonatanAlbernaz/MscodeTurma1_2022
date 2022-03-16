<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 8 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
      //Passagem de parametro por referencia.
      
      function crescer(&$a, $b){
        $a += $b; // $a = $a + b;
      }

      $altura = 100;
      crescer($altura, 20);

      echo "<p>A altura atual é $altura </p>";

     ?>
    </div>
  </body>
</html>