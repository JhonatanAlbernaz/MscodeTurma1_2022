<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 7 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $a = 10;
       $b = $a;
        
       $c = &$a; //Variavel ponteiro (referência)
       $c = 25;
        
       echo "A vale: $a <br/>";
       echo "B vale: $b <br/>";
       echo "C vale: $c <br/>";

     ?>
    </div>
  </body>
</html>