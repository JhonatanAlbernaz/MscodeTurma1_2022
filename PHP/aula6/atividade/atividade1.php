<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Atividade 1 </title>
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

        function imprimeCirculo($r) {
            $area = M_PI * $r * $r;

            $perimetro = 2 * M_PI * $r;

            $diametro = 2 * $r;

            echo "<p> O raio é $r </p>";

            echo "<p> A  área é $area </p>";

            echo "<p> O perímetro é $perimetro </p>";

            echo "<p> O diâmetro é $diametro </p>";  
        }
       
        $raio = $_GET['raio'];
        imprimeCirculo($raio);

     ?>
    </div>
  </body>
</html>