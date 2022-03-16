<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 3 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        /*
            Estruturas de Repetição
            - While
            - Do...While
            - For
            - Foreach
        */
        $cores = array("red", "green", "blue", "yellow", "gray");
        
        echo "<ul>";
        foreach($cores as $cor){
            echo "<li style=color:$cor>Uma linha de item</li>";
        }
        echo "</ul>";

     ?>
    </div>
  </body>
</html>