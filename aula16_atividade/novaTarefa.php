<?php
    $title = "Nova tarefa";
    include "includes/cabecalho.php";
?>
<h1> Cadastrar nova Tarefa </h1>
<form action="salvarTarefa.php" method="POST">
    <label class="nome-e-descricao-criar-tarefa" for="nome">Nome da tarefa: </label><br>
    <input class="input-nome" type="text" id="nome" name="nome"/><br>
    <label class="nome-e-descricao-criar-tarefa" for="descricao">Descricao da tarefa: </label><br>
    <textarea class="form-control textarea-descricao" id="descricao" name="descricao"></textarea><br><br>
    <button class="botao-criar-tarefa"> Criar tarefa </button><br><br>
    <a class="link-lista-tarefa" href="listaDeTarefas.php"> Lista de tarefa </a>
</form>

<?php
    include "includes/rodape.php";
?>