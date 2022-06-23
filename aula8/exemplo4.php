<?php
    $title = "Exemplo 4";
    require_once('cabecalho.php'); 
?>

<form method="GET">
    <label for='nome'> Informe o nome: </label><br>
    <input type="text" id='nome' nome='nome'/><br><br>
    <input type="submit" value="Enviar">
</form>

<?php

    $alunos = [
        'Wagner', 
        'Jhonatan', 
        'Milleny', 
        'Guilherme', 
        'Guilherme',
        'Leonardo',
        'Carlos',
        'João',
        'Felipe'
    ];

    echo "<p> Temos " . count($alunos) . " alunos em nossa turma. </p>";

    $nome = $_GET['nome'];

    $cont = 0;
    for($i = 0; $i < count($alunos); $i++) {
        if($alunos[$i] == $nome) {
            $cont++;
        }
    }

    if($cont > 0) {
        echo "<p> Foram localizados $cont alunos com este nome. </p>";
    }else {
        echo "<p> Não possuimos alunos com este nome. </p>";
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>