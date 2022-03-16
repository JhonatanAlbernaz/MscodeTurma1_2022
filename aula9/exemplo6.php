<?php
    $title = "Exemplo 6";
    require_once('cabecalho.php'); 
?>

<?php

    class Produto{
        public $nome;
        public $valor_compra;
        public $estoque;
        private $valor_venda;

        public function setValorVenda($valor){
            if($valor <= $this->valor_compra) throw new Exception("Valor de venda abaixo do valor de compra.");
            else $this->valor_venda = $valor;
        }

        public function getValorVenda(){
            return $this->valor_venda;
        }
        
    }

    try{
        $p = new Produto();

        $p->nome = "Armario";
        $p->valor_compra = 200;
        $p->estoque = 20;

        $p->setValorVenda(100);

        var_dump($p);
        

    }catch(Exception $e){
        echo "<p>" . $e->getMessage() . "</p>";
    }
    
?>

<?php 
    require_once('rodape.php'); 
?>