<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 9 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
      // Um pouco mais sobre arrays
      //$carros = array("Volvo", "BMW", "Toyota");
      //echo "<p>O numero de carros é: " . count($carros) . "</p>";
      //$carros[0] = "Volvo";
      //$carros[1] = "BMW";
      //$carros[2] = "Toyota";
      
      $carros = array("Volvo", "BMW", "Toyota", "VW", "Ford");
      $tam = count($carros);

      for($x=0; $x < $tam; $x++){
          echo "<p>Marca: $carros[$x]</p>";
      }

     ?>
    </div>
  </body>
</html>