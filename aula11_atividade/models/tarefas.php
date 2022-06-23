<?php
    class Tarefas{
        public $nome;
        public $entrega;
        public $descricao;

        public function __construct($nome, $entrega, $descricao){
            $this->nome = $nome;
            $this->entrega = $entrega;
            $this->descricao = $descricao;
        }
    }
?>