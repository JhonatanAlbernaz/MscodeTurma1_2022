<?php

    class Carro {
        public string $placa;
        public string $modelo;
        public string $cor;
        public int $anoFabricacao;

        public function __construct(string $placa, string $modelo, string $cor, int $anoFabricacao){
            $this->placa = $placa;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->anoFabricacao = $anoFabricacao;
        }
    }

?>