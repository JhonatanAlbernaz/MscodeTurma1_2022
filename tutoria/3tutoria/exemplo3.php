<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 3 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php

        $caixaNike = array(
            'Pé esquerdo',
            'Pé direito',
        );
       
        $listaMenus = array(
        'carros' => array(
            'Ford' => 'https://www.forlanford.com.br/uploads/products/banner-territory-990x600px-107kb.png',
            'Chevrolet' => 'https://carrobonito.com/wp-content/uploads/2019/04/chevrolet-spin-2019-11-1-.jpg'
        ),

        'jogos' => array(
            'League of Legends' => 'http://pm1.narvii.com/7693/da39f61faa932403658f9ed1aca020a1de6b56f4r1-554-554v2_00.jpg',
            'DotA' => 'https://w7.pngwing.com/pngs/483/468/png-transparent-dota-2-defense-of-the-ancients-video-game-horse-wiki-mirana-horse-legendary-creature-video-game.png'
        )
        );
    
        $alunos = array(
            'guilhermy' => array('idade' => 18, 'altura' => 1.64),
            'milleny' => 'aluna',
            'jhonathan' => 'aluno',
        );
        
        foreach ($listaMenus as $menu => $opcoes) {
            echo $menu . '<br>';
        
            foreach ($opcoes as $marca => $imagem) {
                echo $marca. '<br>';
            }
        }

     ?>
    </div>
  </body>
</html>