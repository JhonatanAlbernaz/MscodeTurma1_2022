<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 12 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
        
        // ASORT - Ordena pelo valor
        // ARSORT - Ordem decrescente do valor
        // KSORT - Ordena pela chave
        // KRSORT - Ordem decrescente da chave

        $pessoas = array (
            "Milleny"=> 17,
            "Jhonatan"=> 17,
            "Guilherme"=> 18,
            "Ester" => 20,
            "Marlene" => 55,
            "João Paulo"=> 40,
            "Pamela"=> 22,
            "Maryna"=> 16,
            "Lazaro"=> 12,
            "Helena"=> 3
        );

        ksort($pessoas);

        echo "<ul>";
        foreach($pessoas as $pessoa => $idade){
            echo "<li> $pessoa tem $idade anos de idade </li>";
        }
        echo"</ul>";

     ?>
    </div>
  </body>
</html>