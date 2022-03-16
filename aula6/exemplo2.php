<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 2 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        /*
            - Funções
            - Retorna valor
            - Subrotinas
                - Passagem de Parâmetros
                    - Por valor
                    - Por referência
        */
        //funcao com passagen de parametro por referencia
        
        function encherCopo(&$c){
            echo "<p>O copo estava $c</p>";
            if($c == "vazio"){
                $c = "cheio";
            }
            echo "<p>O copo agora está $c<p>";
        }

        $copo1 = $copo2 = "vazio";

        encherCopo($copo1);
        encherCopo($copo2);

        echo "<p>O copo1 original está $copo1<p>";
        echo "<p>O copo2 original está $copo2<p>";

     ?>
    </div>
  </body>
</html>