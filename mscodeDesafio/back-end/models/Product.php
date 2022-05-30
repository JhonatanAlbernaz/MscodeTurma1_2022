<?php
    class Product {
        public string $name;
        public string $value;
        public string $description;

        public function __construct(string $name, string $value, string $description){
            $this->name = $name;
            $this->value = $value;
            $this->description = $description;
        }
    }
?>