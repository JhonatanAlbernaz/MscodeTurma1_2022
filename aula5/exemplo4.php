<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 4 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        /*
            Estruturas de Repetição
            - While
            - Do...While
            - For
            - Foreach
            -- Estruturas de Controle
                - break
                - continue
        */
        
        $pessoas = array(
            "Wagner"=>36, 
            "Mileny" => 17, 
            "Jhonathan" => 18, 
            "Guilherme" => 16
        );
        
        echo "<ul>";
        foreach($pessoas as $pessoa => $idade){
            if($idade == 17){
                continue;
            }
            echo "<li>A pessoa $pessoa possui $idade anos</li>";
        }
        echo "</ul>";

        /*
            Construa um codigo em php que dada uma lista com o nome e a idade de
            10 pessoas, apresente uma lista apenas de pessoas que são maiores 
            de idade.
        */

     ?>
    </div>
  </body>
</html>