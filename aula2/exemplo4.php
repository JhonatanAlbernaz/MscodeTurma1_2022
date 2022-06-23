<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 4 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $preco = 39.90;
       $preco_formatado = number_format($preco, 2, ",", ".");
       echo "Minha camisa custa R$ $preco_formatado";

     ?>
    </div>
  </body>
</html>