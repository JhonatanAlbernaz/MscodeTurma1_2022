<?php
    class Banco{
        private static $connection;

        private function __construct(){}

        public static function getConnection(){
            if(self::$connection === null){
                self::$connection = new PDO("mysql:host=localhost;dbname=todo", "root", "");
            }
            return self::$connection;
        }
    }
?>