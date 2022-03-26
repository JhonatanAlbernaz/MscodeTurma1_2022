<?php
    $title = "Formulario";
    include "includes/cabecalho.php";
?>
<h1> Cadastrar nova Tarefa </h1>
<form action="salvarTarefa.php" method="POST">
    <label for="nome">Nome da tarefa: </label><br>
    <input type="text" id="nome" name="nome"/><br>
    <label for="descricao">Descricao da tarefa: </label><br>
    <textarea class="form-control" id="descricao" name="descricao"></textarea><br><br>
    <input type="submit" value="Criar">
    <a href="listaDeTarefas.php"> Lista de tarefa </a>
</form>

<?php
    include "includes/rodape.php";
?>