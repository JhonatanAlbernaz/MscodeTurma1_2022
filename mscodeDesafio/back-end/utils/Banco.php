<?php
    class Banco{
        private static $connection;

        private function __construct(){}

        public static function getConnection(){
            if(self::$connection === null){
                self::$connection = new PDO("mysql:host=localhost;dbname=stock_manager", "root", "mscode@2022");
            }
            return self::$connection;
        }
    }
?>