<?php
    class Task{
        public string $title;
        public string $desc;
        public int $status;
        public string $dtInicio;
        public string $dtFim;

        public function __construct(string $title, string $desc){
            $this->title = $title;
            $this->desc = $desc;
            $this->status = 1;
            $this->dtInicio = date("Y/m/d");
        }
    }
?>