<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
      function exibirNomeComposto($nome, $sobrenome) {

          $nomeComposto = $nome . " " . $sobrenome . ".";

          return $nomeComposto;

      }

      echo exibirNomeComposto("Jhonatan", "Albernaz");

     ?>
    </div>
  </body>
</html>