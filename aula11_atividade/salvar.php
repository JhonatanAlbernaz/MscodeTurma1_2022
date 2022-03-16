<?php
    $title = "Salvar";
    include "includes/cabecalho.php";
?>

<?php
    
    require_once "models/contato.php";

    $novaTarefa = new Tarefas($_POST['nome'], $_POST['entrega'], $_POST['descricao']);
    $nomeArq = "tarefas.json";
    
    if(!file_exists($nomeArq)){
        $tarefas = [];
        $arq = fopen($nomeArq, "w") or die('Problemas ao abrir o arquivo.');
    }else {
        $arq = fopen($nomeArq, "r+") or die('Problemas ao abrir o arquivo.');
        $conteudo = fread($arq, filesize($nomeArq));
        $tarefas = json_decode($conteudo);
        rewind($arq);
    }

    array_push($tarefas, $novaTarefa);
    fwrite($arq, json_encode($tarefas));
    fclose($arq);

    session_start();
    $_SESSION['contatoCriado'] = $novaTarefa->nome;
    header('Location: formulario.php');

?>

<?php
    include "includes/rodape.php";
?>