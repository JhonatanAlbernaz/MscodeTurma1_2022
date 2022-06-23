<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 2 </title>
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
       
       function test() {
           $x = 5; //variavel de escope local
           echo "<p> A variavel x vale " . $x . " dentro desta função.";
       }

       test();

       echo "<p> A variavel x vale $x fora da função. </p>";

     ?>
    </div>
  </body>
</html>