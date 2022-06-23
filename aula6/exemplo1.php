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
            - Funções
            - Subrotinas
                    - Passagem de Parâmetros
                    - Por valor
                    - Por referência
        */

        //Subrotina com um parametro por valor
        
        function exibeMensagem($mensagem){
            echo "<p>$mensagem</p>";
        }

        exibeMensagem("Primeira mensagem");
        exibeMensagem("Segunda mensagem");

     ?>
    </div>
  </body>
</html>