<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 7 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $lados = $_GET['lados'];

       if($lados == 3) {
           echo "Esse poligono de " . $lados . " é um triângulo.";
       }else {
           if($lados == 4) {
            echo "Esse poligono de " . $lados . " é um quadrado.";
           }else {
            echo "Esse poligono de " . $lados . " é um pentágono.";
           }
       }

     ?>
    </div>
  </body>
</html>