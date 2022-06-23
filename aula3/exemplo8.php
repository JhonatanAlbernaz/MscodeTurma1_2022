<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 8 </title>
    <meta charset="utf-8">
  </head>
  <body>
     <?php
  
        /* Operadores
            - Aritméticos
            - De comparação
            - Lógicos
        */
        /*
            +  --> Soma
            -  --> Subtração
            *  --> Multiplicação
            /  --> Divisão
            %  --> Módulo
            ** --> Exponencial
        */

        $a = $_GET['valorA'];
        $b = $_GET['valorB'];

        $mod = $a % $b;
        $exp = $a ** $b;

        echo "O modulo de $a com $b = $mod <br />";
        echo "$a elevado a $b = $exp";

     ?>
  </body>
</html>