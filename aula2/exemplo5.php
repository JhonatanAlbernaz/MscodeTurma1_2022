<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 5 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $preco_car = 30399.90;
       $preco_formatado_car = number_format($preco_car, 2, ",", ".");

       echo "Meu carro custa R$ $preco_formatado_car";

     ?>
    </div>
  </body>
</html>