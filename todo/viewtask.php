<?php
    include("inc/header.php");
    include("inc/menu.php");
    include("models/Banco.php");
?>
<div class="container mt-3">
    <?php
        $id = $_GET['id'];

        $stm = Banco::getConnection()->prepare("SELECT titulo, descricao, status, dtInicio, dtFim FROM tasks WHERE id=?");
        $stm->bindParam(1, $id);
        $stm->execute();
        $task = $stm->fetch(PDO::FETCH_OBJ);

        echo "<h2><strong>Detalhes da tarefa: </strong>$task->titulo</h2>";

        echo "<h3><strong>Descrição: </strong>$task->descricao</h3>";
        echo "<h3><strong>Status: </strong>$task->status</h3>";
        echo "<h3><strong>Data de Inicio: </strong>$task->dtInicio</h3>";
        echo "<h3><strong>Data de Finalização: </strong>$task->dtFim</h3>";

        if($task->status)
            echo "<a href=\"endtask.php?id=$id\" class=\"btn btn-success\">Concluir Tarefa</a>";



    ?>

</div>

<?php
    include("inc/footer.php");
?>