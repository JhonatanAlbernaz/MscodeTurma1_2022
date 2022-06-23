<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        $valor_a = $_GET['a'];
        $valor_b = $_GET['b'];

        /*
         -Somar
         -Subtrair
         -Dividir
         -Multiplicar
         -Potencia
        */

        $operacao = $_GET['operacao'];

        switch($operacao) {
            case "somar":
                echo "Resultado: " . ($valor_a + $valor_b);
            break;
            case "subtrair":
                echo "Resultado: " . ($valor_a - $valor_b);
            break;
            case "dividir":
                echo "Resultado: " . ($valor_a / $valor_b);
            break;
            case "multiplicar":
                echo "Resultado: " . ($valor_a * $valor_b);
            break;
            case "potencia":
                echo "Resultado: " . ($valor_a ** $valor_b);
            break;
            default:
                echo "Valor inválido";
            break;
        }

     ?>
    </div>
  </body>
</html>