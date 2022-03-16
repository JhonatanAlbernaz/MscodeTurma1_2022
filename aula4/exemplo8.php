<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 8 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        $lados = $_GET['lados'];

        switch($lados) {
          case 3:
            echo "É um triâgulo.";
          break;
          case 4:
            echo "É um quadrado.";
          break;
          case 5:
            echo "É um pentágono.";
          break;
          default:
            echo "Figura desconhecida.";
          break;
        }

     ?>
    </div>
  </body>
</html>