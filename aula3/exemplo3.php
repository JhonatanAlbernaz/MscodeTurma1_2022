<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 3 </title>
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
       
        $x = 5;
        $y = 10;
        $resultado;

        function soma(){
            //global $x, $y, $resultado;
            $GLOBALS['resultado'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        soma();

        echo "Resultado = $resultado";

     ?>
    </div>
  </body>
</html>