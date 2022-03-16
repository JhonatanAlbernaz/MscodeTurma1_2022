<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 3 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php

        function exibirNumero(int $numero) {
            echo $numero . PHP_EOL;

            if($numero >= 10) {
                return;
            }

            $numero++;
            exibirNumero($numero);

        }

        exibirNumero(1);

     ?>
    </div>
  </body>
</html>