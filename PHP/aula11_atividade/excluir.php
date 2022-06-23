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
    
    unset($tarefas[$pos]);
    $arq = fopen($nomeArq, 'w');
    fwrite($arq, json_encode($tarefas));
    fclose($arq);
    header('Location: lista.php');
    
?>

<?php
    include "includes/rodape.php";
?>