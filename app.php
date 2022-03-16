<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        function exibirNomeComposto(
          string $nome,
          string $sobrenome,
          int $idade,
          float $valor,
        ) {
          echo "<p> {$nome} {$sobrenome} possui {$idade} anos de idade e R$ {$valor}. </p>";
        };

        exibirNomeComposto('Jhonatan', 'Albernaz', 17, 1000);

     ?>
    </div>
  </body>
</html>