<?php

    require_once("config/Banco.php"); 
    require_once("Pessoa.php");

    class PessoaDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function save(Pessoa $p) {

            $stmt = Banco::getInstance()->prepare("
                INSERT INTO Pessoa(nome, idade) 
                VALUES (:nome, :idade)
            ");
            
            $stmt->bindParam("nome", $p->nome);
            $stmt->bindParam("idade", $p->idade);

            $stmt->execute();
        }

    }

?>