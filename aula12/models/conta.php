<?php
    
    class Conta {
        public string $cpf;
        public string $nomeTitular;
        private float $saldo;
        private static int $nContas = 0;

        public function __construct(string $cpf, string $nome) {
            $this->cpf = $cpf;
            $this->nomeTitular = $nome;
            $this->saldo = 0;

            Conta::$nContas++;

        }

        public function __destruct() {
            Conta::$nContas--;
        }

        public static function verNumeroDeContas() {
            return Conta::$nContas;
        }

        private function alteraNome(string $nome) {
            if(strlen($nome) < 5) {
                throw new Exception("Nome do titular inválido.");
            }
            $this->nomeTitular = $nome;
        }

        public function depositar(float $valor) {
            if($valor < 0) {
                throw new Exception("Valor depositado não pode ser negativo. </p>");
            }
            $this->saldo = $this->saldo + $valor;
        }

        public function sacar(float $valor) {
            if($this->saldo < $valor) {
                throw new Exception("Saldo insuficiente. </p>");
            }
            $this->saldo = $this->saldo - $valor;
        }

        public function transferir(Conta $destino, float $valor) {
            $this->sacar($valor);
            $destino->depositar($valor);
        }

    } 

?>