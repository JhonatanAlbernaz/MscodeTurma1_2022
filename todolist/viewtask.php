<?php

    include "includes/header.php";
    include("utils/Banco.php");

?>

<section class="container-fluid height-550">
 <div class="container">
  <div class="row row-box-shadow">
   <div class="col-lg-1"> </div>
   <div class="col-lg-10">
    <div class="div-box-shadow-nova-tarefa">
     <br>
     <?php

        $id = $_GET['id'];

        $stmt = Banco::getConnection()->prepare("SELECT title, description, status, beginDate, endDate FROM tasks WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $task = $stmt->fetch(PDO::FETCH_OBJ);

        echo "<h2 class=\"color-h2\"><strong class=\"color-strong\">Detalhes da tarefa: </strong>$task->title</h2>";

        echo "<div class=\"informacoes-da-tarefa\">";
        echo "<h3><strong>Descrição: </strong>$task->description</h3>";
        echo "<h3><strong>Status: </strong>$task->status</h3>";
        echo "<h3><strong>Data de Inicio: </strong>$task->beginDate</h3>";
        echo "<h3><strong>Data de Finalização: </strong>$task->endDate</h3>";
        echo "</div>";

        if($task->status) echo " <a href=\"endtask.php?id=$id\" class=\"btn botao-concluir-tarefa\">Concluir Tarefa</a>";

     ?>
    </div>
   </div>
   <div class="col-lg-1"> </div>
  </div>   
 </div>   
</section>

<?php

    include "includes/footer.php";

?>