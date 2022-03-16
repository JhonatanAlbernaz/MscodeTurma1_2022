<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 9 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       /* 
            Estruturas de repetição
            -  While
            -  Do... While
            -  For
            -  Foreach
        */

        $limit= 110;
        echo "<ul>";
        while($limit <= 100){
            echo "<li>Produto $limit </li>";
            $limit = $limit + 1;
        }        
        echo "</ul>"

     ?>
    </div>
  </body>
</html>