<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 4 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $horas = date('H');

       echo "<p> Agora são " . $horas;

       if(($horas > 0) && ($horas <= 12)) {
        echo " da manhã. <p/>";
       }else {
           if($horas <= 18) {
                echo " da tarde. <p/>";
           }else {
                echo " da noite. <p/>";
           }
       }

     ?>
    </div>
  </body>
</html>