<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 11 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
        
        $pessoas = array (
            "Milleny", 
            "Jhonatan", 
            "Guilherme",
            "Ester",
            "Marlene",
            "João Paulo",
            "Pamela",
            "Maryna",
            "Lazaro",
            "Helena"
        );

        sort($pessoas);
        echo "<ul>";
        foreach($pessoas as $pessoa){
            echo "<li> $pessoa </li>";
        }
        
        echo"</ul>";

     ?>
    </div>
  </body>
</html>