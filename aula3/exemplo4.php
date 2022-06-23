<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 4 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
  
     #Escopo de variáveis
     /* 
      local -> variaveis criadas dentro de uma função
      global -> variaveis criadas fora de uma função
      static
     */
       
        function teste(){
            static $x = 0;
            echo $x;
            $x = $x + 10;
        }

        teste();
        teste();
        teste();

     ?>
    </div>
  </body>
</html>