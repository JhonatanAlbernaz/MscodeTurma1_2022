<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 5 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
       $pessoas = array(
           "Wagner" => 36, 
           "Milleny" => 17, 
           "Jhonatan" => 19, 
           "Guilherme" => 18, 
           "Edileia" => 44, 
           "Ademilso" => 49, 
           "Pedro" => 17, 
           "Maria" => 21, 
           "Vânia" => 16, 
           "Maikon" => 17,
       );

       echo "<ul>";
        foreach($pessoas as $pessoa => $idade) {
            if($idade < 18) {
                continue;
            }
            echo "<li> A pessoa $pessoa possui $idade anos </li>";
        };
        echo "</ul>";

     ?>
    </div>
  </body>
</html>