<!DOCTYPE html>
<html>
    <head>
        <title>Tratando form</title>
    </head>
    <body>
    <?php

        $userType = $_POST['userType'];

        echo "<p>O tipo selecionado foi: ";
        if($userType == 1){
            echo "Gestor </p>";
        }else{
            echo "Fornecedor </p>";
        }

    ?>
    </body>
</html>