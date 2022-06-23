<?php
   include("models/Banco.php");
?>

<section class="container-fluid imagem-principal">
 <div class="container container-margin-top">
  <div class="row row-widht">
   <div class="col-lg-2"></div>
   <div class="col-lg-8">
    <div class="div-com-conteudo">
    <div class="height-e-widht">
     <h2> Nossos parabéns a: </h2>
     <div class="div-box-shadow">
      <?php
         $stmt = Banco::getConnection()->prepare("SELECT nome, funcao FROM  aniversariantes WHERE dataNasc = :dataNasc");
         $data = date("Y-m-d");
         $stmt->bindParam("dataNasc", $data);
         if($stmt->execute()){
            if($stmt->rowCount() > 0){
                while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    echo "<h3>$row->nome</h3>";
                    echo "<h4>$row->funcao</h4>";
                }
            }else {
                $stmt = Banco::getConnection()->prepare("SELECT * FROM aniversariantes WHERE month(dataNasc) = month(now())");
                if($stmt->execute()){
                    if($stmt->rowCount() > 0){
                while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    echo "<h4>$row->dataNasc</h4>";
                    echo "<h3>$row->nome</h3>";
                    echo "<h4>$row->funcao</h4>";
                }
            }
        }else{
            echo "<p>Erro ao executar a consulta</p>";
        }
            }
        }else{
            echo "<p>Erro ao executar a consulta</p>";
        }
      ?>
     </div>
    </div>
    </div>
   </div>
   <div class="col-lg-2">
    <div class="div-data">
     <?php
        $data = date("d/m");

        echo "<h2> $data </h2>";
     ?>
    </div>
   </div>
  </div>   
 </div>
</section>   