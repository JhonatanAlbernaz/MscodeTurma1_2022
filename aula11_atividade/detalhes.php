<?php
    $title = "Detalhes da tarefa";
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

    echo "<ul>";
    echo "<li><b> Data de Entrega: </b>" . $tarefas[$pos]->entrega . "</li>";
    echo "<li><b> Descrição: </b>" . $tarefas[$pos]->descricao . "</li>";
    echo "</ul>";

?>

<?php
    include "includes/rodape.php";
?>