<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 6 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $valor = $_GET['valor'];
       $desconto;

       if($valor < 1000) {
           $desconto = $valor * 0.05;
       }else {
           if($valor <= 5000) {
               $desconto = $valor * 0.1;
           }else {
               $desconto = $valor * 0.2;
           }
       }

       echo "<p> O valor recebido foi: R$ " . number_format($valor, 2) . ".<p/>";
       echo "<p> O valor com desconto é: R$ " . number_format($valor - $desconto, 2) . ".<p/>";

     ?>
    </div>
  </body>
</html>