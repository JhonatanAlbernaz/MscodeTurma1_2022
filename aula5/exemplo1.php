<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
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

        echo "<ul>";
        for($x=0; $x <= 10; $x++){
            echo "<li>Linha $x</li>";
        }
        echo "</ul>";

        //$x = 0  --> Inicializando a variavel contadora com 0
        //$x<=10  --> A repetição vai prosseguir enquanto x <= 10
        //$x=$x+1 --> A cada volta a variavel $x vai crescer 1.

        // $x = $x + 1  --> $x++;
        // $x = $x + 1  --> $x--;

     ?>
    </div>
  </body>
</html>