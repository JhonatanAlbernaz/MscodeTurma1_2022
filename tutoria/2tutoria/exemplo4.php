<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 4 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php

        try {
            echo "Oi </br>" . PHP_EOL;

            throw new Exception(message:"Teste de erro" . PHP_EOL);

            echo "Oi de novo" . PHP_EOL;
        }catch(\Exception $exception) {
            echo $exception -> getMessage() . " linha " . $exception -> getLine() . "</br>" . PHP_EOL;
        }

        echo "Oi novamente" . PHP_EOL;

     ?>
    </div>
  </body>
</html>