<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $a = $_GET['a'];
       $b = $_GET['b'];

       if($a > $b) {
           echo "<p> O maior é o $a <p/>";
       }else {
           echo "<p> O maior é o $b <p/>";
       }

     ?>
    </div>
  </body>
</html>