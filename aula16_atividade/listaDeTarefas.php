<?php
    $title = "Lista de Tarefas";
    include "includes/cabecalho.php";
    require_once "conexao.php";
?>

<?php

    $result = $con->query("SELECT id, nome, descricao, situacao, criada_em, realizada_em, andamento_em FROM tarefa");

?>

<html>

<a href="novaTarefa.php"> Nova tarefa </a>

    <table border="1">
        <thead>
            <tr>
                <th> Id </th>
                <th> Nome </th>
                <th> Descrição </th>
                <th> Situação </th>
                <th> Criada em </th>
                <th> Andamento em </th>
                <th> Realizada em </th>
                <th> Ações </th>
                <th> Alterar tarefa </th>
            </tr>
        </thead>
        <tbody> 
        <?php while($obj = $result->fetch(PDO::FETCH_OBJ)) { ?> 
            <tr>
                <td><?php echo $obj->id; ?></td>
                <td><?php echo $obj->nome; ?></td>
                <td><?php echo $obj->descricao; ?></td>
                <td><?php echo $obj->situacao; ?></td>
                <td><?php echo date_format(date_create($obj->criada_em), "d/m/Y H:i:s"); ?></td>
                <td><?php if(null != $obj->andamento_em) echo date_format(date_create($obj->andamento_em), "d/m/Y H:i:s"); ?></td>
                <td><?php if(null != $obj->realizada_em) echo date_format(date_create($obj->realizada_em), "d/m/Y H:i:s"); ?></td>
                <td>
                <a href="detalhesTarefa.php?id=<?php echo $obj->id; ?>">Ver detalhes</a><br>
                <a href="excluirTarefa.php?id=<?php echo $obj->id; ?>">Excluir</a>
                </td>
                <td>
                <?php if($obj->situacao == "Criada") { ?>
                    <a href="porTarefaEmAndamento.php?id=<?php echo $obj->id; ?>"> Em andamento </a><br>
                <?php } ?>
                <?php if($obj->situacao == "Em andamento") { ?>
                    <a href="realizarTarefa.php?id=<?php echo $obj->id; ?>"> Realizada </a>
                <?php } ?>
                </td>
            
            </tr>
        <?php } ?>
        </tbody>
    </table>
</html>

<?php
    include "includes/rodape.php";
?>