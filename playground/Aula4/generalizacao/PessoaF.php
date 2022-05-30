<?php

    require_once("Pessoa.php");

    class PessoaFisica extends Pessoa {
        protected string $cpf;
                
        public function __construct(string $nome, string $cpf) {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
        
        public function cpf(): string {
            return $this->cpf;
        }

        public function complementar() {
            echo "<p> Olá, sou o " . $this->nome . " e o meu cpf é: " . $this->cpf . "</p>";
        }
    }

?>