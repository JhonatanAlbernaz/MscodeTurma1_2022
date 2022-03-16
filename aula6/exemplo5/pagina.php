<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Página PHP </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       require_once("funcoes.php");

       $n = $_GET['n'];
       $p = $_GET['p'];

       $resultado = arranjo($n, $p);

       echo "<p>O Arranjo de $n com $p é: $resultado</p>";

     ?>
    </div>
  </body>
</html>