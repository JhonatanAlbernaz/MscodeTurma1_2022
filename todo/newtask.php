<?php
    include("inc/header.php");
    include("inc/menu.php");
?>
<div class="container mt-3">
    <h2>Criação de Tarefa</h2>
    <form action="/todo/createtask.php" method="post">
        <div class="mb-3 mt-3">
            <label for="task-title" class="form-label">Título: </label>
            <input type="text" name="task-title" id="task-title" placeholder="Título da Tarefa">
            <br>
            <label for="task-desc">Descrição: </label>
            <textarea class="form-control" rows="5" name="task-desc" id="task-desc">
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php
    include("inc/footer.php");
?>