<?php
    include("inc/header.php");
    include("inc/menu.php");
    include("models/Banco.php");
?>
<div class="container mt-3">
    <h2>Sua lista de tarefas pendentes</h2>

    

    <?php

        $stm = Banco::getConnection()->prepare("SELECT id, titulo, descricao, status, dtInicio FROM tasks WHERE status=1");
        if($stm->execute()){
            if($stm->rowCount() > 0){
                echo "<ul class=\"list-group\">";
                while($row = $stm->fetch(PDO::FETCH_OBJ)){
                    echo "<li class=\"list-group-item\"><a href=\"viewtask.php?id=$row->id\">$row->titulo</a></li>";
                }
                echo "</ul>";
            }
        }else{
            echo "<p>Erro ao executar a consulta</p>";
        }




        session_start();
    
        if(isset($_SESSION['tarefa_atualizada'])){
            echo "<div class=\"alert alert-success\">
                    Tarefa finalizada criada com sucesso!
                  </div>";
            
            unset($_SESSION['tarefa_atualizada']);
        }
    ?>

</div>

<?php
    include("inc/footer.php");
?>