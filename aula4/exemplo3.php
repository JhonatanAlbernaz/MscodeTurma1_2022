<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 3 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $horas = date("H") - 3 -5;

       echo "<p>Agora são " . $horas;

       if(($horas > 0) && ($horas <=12)){
            echo " da manhã. </p>";
       }elseif($horas <= 18){
            echo " da tarde. </p>";
       }else{
            echo " da noite. </p>";
       }
        
       echo "Continuação.";

     ?>
    </div>
  </body>
</html>