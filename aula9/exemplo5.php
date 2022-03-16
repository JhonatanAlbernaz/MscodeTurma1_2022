<?php
    $title = "Exemplo 5";
    require_once('cabecalho.php'); 
?>

<?php

    class Pessoa {
        private $idade;

        public function setIdade($idadeDesejada) {
            if($idadeDesejada <= 0) throw new Exception("Idade inválida");
            else $this->idade = $idadeDesejada;
        }

        public function getIdade() {
            return $this->idade;
        }

    }

    try {
        $p = new Pessoa();

        $p->setIdade(10);

        echo $p->getIdade();
        
    }catch(Exception $e) {
        echo "<p>" . $e->getMessage() . "</p>";
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>