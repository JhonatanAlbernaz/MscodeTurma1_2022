<?php

    class Pessoa {
        protected string $nome;
        protected string $telefone;
	
        public function __construct(string $nome, string $telefone) {
            $this->nome = $nome;
            $this->telefone = $telefone;
        }
        
        public function nome(): string {
            return $this->nome;
        }

        public function telefone(): string {
            return $this->telefone;
        }

        public function complementar() {
            echo "<p> Olá, sou o " . $this->nome . "</p>";
        }

    }

?>