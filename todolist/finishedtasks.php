<?php

    include "includes/header.php";
    include("utils/Banco.php");

?>

<link href="includes/estilo.css" rel="stylesheet">

<section class="container-fluid height-550">
 <div class="container">
  <div class="row row-box-shadow">
  <div class="col-lg-6">
    <div class="div-box-shadow-lista-tarefa-pendente">
     <h2> Sua lista de tarefas finalizadas </h2>
     <div class="div-lista-tarefa-pendente">
      <br>
      <?php

        $stmt = Banco::getConnection()->prepare("SELECT id, title, description, status, beginDate FROM tasks WHERE status=0");
        if($stmt->execute()){
            if($stmt->rowCount() > 0){
                echo "<ul class=\"list-group\">";
                while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    echo "<li class=\"list-group-item\"><a href=\"viewtask.php?id=$row->id\">$row->title</a></li>";
                }
                echo "</ul>";
            }
        }else{
            echo "<p>Erro ao executar a consulta</p>";
        }

      ?>
     </div>
    </div>
   </div>
   <div class="col-lg-6">
    <img class="wave-invertida" src="../todolist/imagens/wave.png" />
    <img class="banner-image" src="../todolist/imagens/banner-image.png" id="image-animation">
   </div>
  </div>   
 </div>   
</section>

<?php

    include "includes/footer.php";

?>