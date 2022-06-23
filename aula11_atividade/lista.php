<?php
    $title = "Lista de tarefas";
    include "includes/cabecalho.php";
?>

<h1>Minha lista de tarefas</h1>

<?php
    
    $nomeArq = "tarefas.json";
    
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $conteudo = fread($arq, filesize($nomeArq));
    $tarefas = json_decode($conteudo);
    fclose($arq);

    echo "<ol>";
    foreach($tarefas as $i => $tarefa) echo "<li>$tarefa->nome 
    <a href=detalhes.php?id=$i>Ver detalhes</a>" ."  " . "<a href=excluir.php?id=$i>Excluir</a></li>";
    echo "</ol>";

?>

<?php
    include "includes/rodape.php";
?>
