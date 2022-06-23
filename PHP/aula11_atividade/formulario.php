<?php
    $title = "Formulario";
    include "includes/cabecalho.php";
?>
<h1> Cadastrar nova Tarefa </h1>
<form action="salvar.php" method="POST">
    <label for="nome">Nome: </label><br>
    <input type="text" id="nome" name="nome"/><br>
    <label for="entrega">Data de Entrega: </label><br>
    <input type="text" id="entrega" name="entrega"/><br>
    <label for="descricao">Descricao: </label><br>
    <textarea class="form-control" id="descricao" name="descricao"></textarea><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
    session_start();
    if(isset($_SESSION['contatoCriado'])){
        echo "<p>Contato ". $_SESSION['contatoCriado'] . " criado com sucesso </p>";
        unset($_SESSION['contatoCriado']);
    }
    session_destroy();
    include "includes/rodape.php";
?>