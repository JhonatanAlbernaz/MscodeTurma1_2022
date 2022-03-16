<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 2 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php

        function exibirNomeComposto(
            string $nome, 
            string $sobrenome,
            int $idade,
            float $valor
        ) {

            echo "{$nome} {$sobrenome} possui {$idade} anos de idade e R$: {$valor}.";

        }

        exibirNomeComposto("Jhonatan", "Albernaz", 17, 1000);

     ?>
    </div>
  </body>
</html>