<?php 
    class Pessoa {
        private static $p;

        public string $nome;

        public static function getPessoa() {
            if(!isset(self::$p)) {
                self::$p = new self();
                self::$p->nome = "Jhonatan";
                return self::$p;
            }
            return self::$p;
        }
    }

?>