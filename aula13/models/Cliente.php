<?php
    
    class Cliente {
        public string $nome;
        public string $cpf;

        public function __construct(string $nome, string $cpf) {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
    }

?>