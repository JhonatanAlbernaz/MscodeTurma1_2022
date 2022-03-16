<?php
    $title = "Formulario";
    include "includes/cabecalho.php";
?>
<h1>Página de Cadastro de Contato</h1>
<form action="salvar.php" method="POST">
    <label for="nome">Nome: </label><br>
    <input type="text" id="nome" name="nome"/><br>
    <label for="email">E-Mail: </label><br>
    <input type="text" id="email" name="email"/><br>
    <label for="telefone">Telefone: </label><br>
    <input type="text" id="telefone" name="telefone"/><br>
    <label for="nascimento">Data de Nascimento: </label><br>
    <input type="text" id="nascimento" name="nascimento"/><br><br>
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