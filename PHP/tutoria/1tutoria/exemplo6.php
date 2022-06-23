<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 6 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        $frutas = array(
            'laranja',
            'melancia',
            'banana',
            'morango'
        );
       
       
        $frutas = array(

            array(
                'nome' => 'morango', 
                'cor' => 'vermelho', 
                'peso' => 80,
                'selos_qualidade' => array (
                'ISO 900',
                'Capixaba'
            )
          ), 

        array(
            'nome' => 'melancia', 
            'cor' => 'verde', 
            'peso' => 1.5,
            'selos_qualidade' => array (
                'ISO 400',
                'Teste'
                )
         ), 
       );
       
       foreach ($frutas as $fruta) {
            echo "a fruta {$fruta['nome']} tem peso de {$fruta['peso']} <br/>";
         
         foreach ($fruta['selos_qualidade'] as $selo) {
            echo "possui o selo {$selo}<br/>";
         }
       }

     ?>
    </div>
  </body>
</html>