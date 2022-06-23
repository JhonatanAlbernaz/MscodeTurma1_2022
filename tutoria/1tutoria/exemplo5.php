<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> Exemplo 5 </title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
     <?php
       
        $nome = "Jhonatan";
        $idade = 17;
        $dataNascimento = '02/05/2006';
       
        $milleny = array(
            'nome' => 'Milleny',
            'idade' => 17,
            'data_nascimento' => '08/06/2001',
            'sobrenome' => 'Soares'
        );
       
        $jhonatan = array(
            'nome' => 'Jhonatan',
            'idade' => 17,
            'data_nascimento' => '06/08/2001',
            'sobrenome' => 'Albernaz'
        );
       
        $guilhermi = array(
            'nome' => 'Guilhermi',
            'idade' => 17,
            'data_nascimento' => '15/09/2001',
            'sobrenome' => 'Trindade'
        );
       
        $alunos = array($milleny, $jhonatan, $guilhermi);
       
        foreach($alunos as $aluno) {
            echo "O aluno {$aluno['nome']} {$aluno['sobrenome']} tem {$aluno['idade']} anos e nasceu no dia {$aluno['data_nascimento']}<br/>";
        }

     ?>
    </div>
  </body>
</html>