<?php
    $title = "Salvar";
    include "includes/cabecalho.php";
?>

<?php
    
    require_once "models/contato.php";

    $novoContato = new Contato($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['nascimento']);
    $nomeArq = "contatos.json";
    
    if(!file_exists($nomeArq)){
        $contatos = [];
        $arq = fopen($nomeArq, "w") or die('Problemas ao abrir o arquivo.');
    }else {
        $arq = fopen($nomeArq, "r+") or die('Problemas ao abrir o arquivo.');
        $conteudo = fread($arq, filesize($nomeArq));
        $contatos = json_decode($conteudo);
        rewind($arq);
    }

    array_push($contatos, $novoContato);
    fwrite($arq, json_encode($contatos));
    fclose($arq);

    session_start();
    $_SESSION['contatoCriado'] = $novoContato->nome;
    header('Location: formulario.php');

?>

<?php
    include "includes/rodape.php";
?>