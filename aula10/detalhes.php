<?php
    $title = "Detalhes do contato";
    include "includes/cabecalho.php";
?>

<?php
    
    $nomeArq = "contatos.json";
    
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $conteudo = fread($arq, filesize($nomeArq));
    $contatos = json_decode($conteudo);
    fclose($arq);

    $pos = $_GET['id'];

    echo "<h1> Dados do contato - " . $contatos[$pos]->nome . "</h1>";

    echo "<ul>";
    echo "<li> E-mail: " . $contatos[$pos]->email . "</li>";
    echo "<li> Telefone: " . $contatos[$pos]->telefone . "</li>";
    echo "<li> Data de nascimento: " . $contatos[$pos]->nascimento . "</li>";
    echo "</ul>";

?>

<?php
    include "includes/rodape.php";
?>