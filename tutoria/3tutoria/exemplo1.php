<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        $somaTotal = 0;

        for($indice = 1; $indice <= 10; $indice++) {
          echo "Mensagem {$indice} </br>";

          $somaTotal = $somaTotal + $indice;
        }

        echo "O valor da soma total é de " . $somaTotal;

     ?>
    </div>
  </body>
</html>