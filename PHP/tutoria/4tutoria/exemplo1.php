<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        function verificarENumeroPrimo(int $numero): bool {

            $quantidadeDivisoes = 0; // Armazenar a quantidade de divisores do número informado

            for ($i=1; $i <= $numero; $i++) { // Percorrer a quantidade de divisores de 1 até o número informado
                if ($numero % $i == 0) { // Verificar se o resto da divisão do número informado pelo contador terá sobra 0
                    $quantidadeDivisoes++; // Incrementar a quantiade de divisores possíveis ao número informado
                }
            }

            if (2 == $quantidadeDivisoes || $numero == 1) { // Caso tenha apenas 2 divisores ou seja o número 1
                return true; // Número é primo
            }

            return false; // Número não é primo
        }

        function quantidadeNumerosPrimos(int $n1, int $n2): int {

            $quantidadeNumerosPrimos = 0; // Armazenar quantidade de números primos

            for ($i = $n1 + 1; $i < $n2; $i++) { // Percorrer números entre $n1 e $n2
                if (verificarENumeroPrimo($i)) { // Verificação se o número é primo
                    $quantidadeNumerosPrimos++; // Incrementar quatidade de números primos
                }
            }

            return $quantidadeNumerosPrimos; // Retornar quantidade de números primos
        }

        $n1 = 1;
        $n2 = 10;
        $quantidadeDeNumerosPrimos = quantidadeNumerosPrimos($n1, $n2);

        echo "<p> Os números primos entre $n1 a $n2 é: $quantidadeDeNumerosPrimos </p>"; // Chamada a função principal que retorna a quantidade de números primos

     ?>
    </div>
  </body>
</html>