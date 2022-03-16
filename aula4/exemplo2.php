<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 2 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $idade = $_GET['idade'];

       if($idade >= 18) {
           echo "<p> Sua entrada está libereda! <p/>";
       }else {
           echo "<p> Você não possui idade para este evento <p/>";
       }

     ?>
    </div>
  </body>
</html>