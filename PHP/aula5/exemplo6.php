<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 6 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        /*
            FUNÇÕES
            - Blocos de código que podem ser executados repetidas
            vezes num programa qualquer.
            - As funções não serão executadas quando a página é 
            carregada.
            - As funções serão executadas SOMENTE quando forem
            chamadas (call)
        */

        function escreveMensagem($nome, $anoNascimento){
          $idade = 2022 - $anoNascimento;
          echo "<p>Olá $nome, você tem $idade anos de idade.</p>";
        }

        escreveMensagem("Wagner", 1985);
        escreveMensagem("Jhonathan", 2004);
        escreveMensagem("Milena", 2004);

     ?>
    </div>
  </body>
</html>