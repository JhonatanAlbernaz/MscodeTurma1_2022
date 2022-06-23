<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 1 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        require_once('funcoes.php');

        $tipo_de_figura = $_GET['figura'];

        switch($tipo_de_figura) {
            case 'circulo':
                $raio = $_GET['raio'];
                imprimeCirculo($raio);
            break;
            case 'retangulo':
                $base = $_GET['base'];
                $altura = $_GET['altura'];
                imprimeRetangulo($base, $altura);
            break;
            default:
                echo "Figura desconhecida";
            break;
        }

     ?>
    </div>
  </body>
</html>