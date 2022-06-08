<?php

    require_once("config/Banco.php"); 
    require_once("Carro.php");

    class CarroDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
            
        }

        public function save(Carro $c) {

            $stmt = Banco::getInstance()->prepare("
                INSERT INTO Carro (placa, modelo, cor, anoFabricacao) 
                VALUES (:placa, :modelo, :cor, :anoFabricacao)
            ");
            
            $stmt->bindParam("placa", $c->placa);
            $stmt->bindParam("modelo", $c->modelo);
            $stmt->bindParam("cor", $c->cor);
            $stmt->bindParam("anoFabricacao", $c->anoFabricacao);

            $stmt->execute();
        }

    }

?>