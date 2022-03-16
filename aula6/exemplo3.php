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
            - Funções
                - Retorna valor
            - Subrotinas
                    - Passagem de Parâmetros
                    - Por valor
                    - Por referência
        */

        //Função com retorno que calcula fatorial
        
        function fatorial($n){
            $fat = 1;
            for($x = $n; $x > 1; $x--){
                $fat = $fat * $x;
            }
            return $fat;
        }

        function arranjo($n, $p){
            return fatorial($n)/fatorial($n-$p);
        }
        
        $n = $_GET['n'];
        $p = $_GET['p'];

        $resultado = arranjo($n, $p);
        

        echo "<p>O resultado é: $resultado</p>";

     ?>
    </div>
  </body>
</html>