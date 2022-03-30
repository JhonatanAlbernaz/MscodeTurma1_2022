<?php
    include("inc/header.php");
    include("inc/menu.php");
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Crie tarefas para organizar seu fluxo de trabalho</h3>
      <p>Utilize o menu .</p>
    </div>
    <div class="col-sm-4">
      <h3>Visualize suas tarefas pendentes</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    </div>
    <div class="col-sm-4">
      <h3>Analise seu histórico de tarefas concluídas</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    </div>
  </div>
</div>

    
<?php

    session_start();
    
    if(isset($_SESSION['tarefa_criada'])){
      $titulo = $_SESSION['tarefa_criada'];
      echo "<div class=\"alert alert-success\">
                Tarefa <strong>$titulo</strong> criada com sucesso!
            </div>";
      
      unset($_SESSION['tarefa_criada']);
    }
    include("inc/footer.php");
?>