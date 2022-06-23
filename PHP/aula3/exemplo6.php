<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 6 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
  
        class Carro{
            public $cor;
            public $modelo;
            public function __construct($cor, $modelo){
                $this->cor = $cor;
                $this->modelo = $modelo;
            }
            public function especificacoes(){
                return "Este carro é um " . $this->modelo . " de cor " . $this->cor . ".";
            }
        }

        $meuCarro = new Carro("preto", "Cerato");

        echo $meuCarro->especificacoes();

     ?>
    </div>
  </body>
</html>