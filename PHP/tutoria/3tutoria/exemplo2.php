<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 2 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        $somaTotal = 0;

        for($indice = 10; $indice >= 1; $indice--) {
            exibirNumero($indice);
        }

        echo "</br></br>";

        for($indice = 1; $indice <= 10; $indice++) {
            exibirNumero($indice);
        }

        function exibirNumero(int $numero) {
            echo "Número $numero " . "</br>";
        }

     ?>
    </div>
  </body>
</html>