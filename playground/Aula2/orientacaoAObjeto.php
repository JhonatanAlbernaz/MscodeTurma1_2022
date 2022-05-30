<?php

    class Estacionamento{
        public array $vagas;
        private array $entradas;

        public function __construct(){
            $this->vagas = array();
        }

        //método 
        public function estacionar(int $posicao, Carro $carro, string $horario){
            if(isset( $this->vagas[$posicao])) {
                throw new Exception("Vaga Ocupada.");
            }else {
                $this->vagas[$posicao] = $carro;
                $this->entradas[$posicao] = strtotime($horario);
            }
            
        }

        public function retirarCarro(int $posicao, string $horario){
            $n_horas = (strtotime($horario) - $this->entradas[$posicao]) /60 /60;
            $valor = $n_horas < 1 ? 0 : 5 + 2 * ($n_horas - 1);
            echo "<p> Você ficou: " . $n_horas . " e deve pagar R$ " . $valor . " reais</p>";
            unset($this->vagas[$posicao]);

        }

        public function buscarPorMarca(string $marca){
            $devolver = array();

            foreach($this->vagas as $carros) {
                if($carros->marca == $marca) array_push($devolver, $carros);
            }

            return $devolver;
        
        }

    }

    class Carro{
        public string $marca;
        public string $cor;

        public function __construct($marca, $cor){
            $this->marca = $marca;
            $this->cor = $cor;
        }

    }

    $meuEstacionamento = new Estacionamento();

    try {
        $meuEstacionamento->estacionar(3, new Carro("BMW", "Azul"), "05/25/2022 12:02:10");
        $meuEstacionamento->retirarCarro(3, "05/25/2022 20:28:10");
        $meuEstacionamento->estacionar(3, new Carro("Audi", "Preto"), "05/25/2022 23:57:32"); 
        $meuEstacionamento->estacionar(2, new Carro("Audi", "Vermelho"), "05/25/2022 23:57:32");
        $meuEstacionamento->estacionar(1, new Carro("Ferrari", "Azul"), "05/25/2022 23:57:32");

        $carros = $meuEstacionamento->buscarPorMarca("Audi");

        print_r($carros);

    }catch(Exception $erro) {
        echo "<p> Ocorreu o seguinte erro: " . $erro->getMessage() . "</p>";
    }

    // var_dump($carros);

?>