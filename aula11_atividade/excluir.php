<?php
    $title = "Excluir tarefa";
    include "includes/cabecalho.php";
?>

<?php
    
    $nomeArq = "tarefas.json";
    
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $conteudo = fread($arq, filesize($nomeArq));
    $tarefas = json_decode($conteudo);
    fclose($arq);

    $pos = $_GET['id'];

    echo "<h1> Informações da Tarefa - " . $tarefas[$pos]->nome . "</h1>";
    unset($tarefas[$pos]);
    json_encode($tarefas);
    
?>

<?php
    include "includes/rodape.php";
?>