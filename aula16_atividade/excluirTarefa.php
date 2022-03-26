<?php
    $title = "Detalhes Tarefa";
    include "includes/cabecalho.php";
    require_once "conexao.php";
?>

<?php

    $idTarefa = $_GET["id"];
    
    $stmt = $con->prepare("DELETE FROM tarefa WHERE id = ?");
    $stmt->bindParam(1, $idTarefa);

    $stmt->execute();

    echo "<p> A tarefa $idTarefa foi removida com sucesso! </p>";

?>


<?php
    include "linksAcoes.php";
    include "includes/rodape.php";
?>