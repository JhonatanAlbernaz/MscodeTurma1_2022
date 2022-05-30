<?php if (isset($_SESSION['danger'])) { ?> <!-- Verifica se a sessão de erro está setada. -->

    <div class="alert alert-danger msg" role="alert">
        <?= $_SESSION['danger'] ?> <!-- Exibe a mensagem de erro. -->
    </div>

    <?php unset($_SESSION['danger']) ?> <!-- Limpa a sessão de erro.-->

<?php } ?>

<?php if (isset($_SESSION['success'])) { ?> <!-- Verifica se a sessão de sucesso está setada. -->

    <div class="alert alert-success" role="alert">
        <?= $_SESSION['success'] ?> <!-- Exibe a mensagem de sucesso. -->
    </div>

    <?php unset($_SESSION['success']) ?> <!-- Limpa a sessão de sucesso.-->

<?php } ?>
