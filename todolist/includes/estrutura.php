<section class="container-fluid height-550">
 <div class="container">
  <div class="row row-box-shadow">
   <div class="col-lg-6">
    <img class="wave" src="../todolist/imagens/wave.png" />
    <img class="imagem-bg" src="../todolist/imagens/banner-image-2.png" id="image-animation">
   </div>
   <div class="col-lg-6">
    <div class="div-box-shadow-nova-tarefa">
     <h2> Criar nova Tarefa </h2>
     <div class="div-form">
      <form action="../todolist/createtask.php" method="POST">
       <input class="input-titulo-tarefa" type="text" name="task-title" id="task-title" placeholder="Título da Tarefa" />
       <textarea placeholder="Descrição da Tarefa" class="form-control textarea-color" rows="5" name="task-desc" id="task-desc"></textarea>
       <button type="submit" class="btn botao-salvar"> Salvar </button>
      </form>
      <br>
      <?php

        session_start();
        if(isset($_SESSION["tarefa_criada"])) {
            $titulo = $_SESSION["tarefa_criada"];

            echo "<div class=\"text-center font-family\"> 
                <p> Tarefa <strong class=\"text text-success\"> $titulo </strong> criada com sucesso!  </p>
            </div>";

            unset($_SESSION["tarefa_criada"]);
        }

        ?>
     </div>
    </div>
   </div>
  </div>   
 </div>   
</section>