<?php

    require_once("Pessoa.php");

    class PessoaJuridica extends Pessoa {
        protected string $cnpj;
        
        public function __construct(string $nome, string $cnpj) {
            $this->nome = $nome;
            $this->cnpj = $cnpj;
        }
        
        public function cnpj(): string
        {
            return $this->cnpj;
        }

        public function complementar() {
            echo "<p> Olá, sou o " . $this->nome . " e o meu cnpj é: " . $this->cnpj . "</p>";
        }

    }