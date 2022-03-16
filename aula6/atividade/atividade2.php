<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Atividade 2 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php

        //Receber o raio por parametro e vai imprimir na tela
        //A área, o perímetro e o diâmetro de um circulo.
        //Utilize uma função chamada imprimeCirculo com parâmetro $r
        //Altera para receber o parametro figura e funcionar apenas
        //para o circulo. Qualquer outra figura deve informar que a 
        //figura é desconhecida.

        require_once ("atividade3.php");
       
        $raio = $_GET['raio'];
        $figura = $_GET['figura'];
        imprimeCirculo($raio);

     ?>
    </div>
  </body>
</html>