<?php
    require_once("../utils/Banco.php");
    require_once("../models/Product.php");

    class ProductDAO{
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(Product $product){
            $stm = Banco::getConnection()->prepare("INSERT INTO product(name, value, description) VALUES (:name, :value, :description)");
            $stm->bindParam('name',$product->name);
            $stm->bindParam('value',$product->value);
            $stm->bindParam('description',$product->description);

            $stm->execute();
        }
    }

?>