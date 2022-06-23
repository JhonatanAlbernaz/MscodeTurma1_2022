<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 7 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        $materia = 'teste';

        switch ($materia) {
        case 'ingles':
        case 'biologia':
        case 'portugues':
           echo "A materia informada {$materia} fica do LADO SUL";
        break;
           
        case 'matematica':
        case 'geografia':
           echo "A materia informada {$materia} fica do LADO NORTE";
        break; 
           
        default:
           echo "Não temos aula para a materia {$materia} informada.";
        break;
        }

     ?>
    </div>
  </body>
</html>