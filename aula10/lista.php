<?php
    $title = "Lista de contatos";
    include "includes/cabecalho.php";
?>

<h1>Minha lista de contatos</h1>

<?php
    
    $nomeArq = "contatos.json";
    
    $arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
    $conteudo = fread($arq, filesize($nomeArq));
    $contatos = json_decode($conteudo);
    fclose($arq);

    echo "<ol>";
    foreach($contatos as $i => $contato) echo "<li>$contato->nome <a href=detalhes.php?id=$i>Ver detalhes</a></li>";
    echo "</ol>";

?>

<?php
    include "includes/rodape.php";
?>