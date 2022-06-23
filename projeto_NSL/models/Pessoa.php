<?php 

    class Pessoa {
        public string $nome;
        public string $dataNasc;
        public string $funcao;

        public function __construct(string $nome, string $dataNasc, string $funcao) {
            $this->nome = $nome;
            $this->dataNasc = $dataNasc;
            $this->funcao = $funcao;
        }

    }

?>