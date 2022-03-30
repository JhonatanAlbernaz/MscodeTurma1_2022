<?php
    class Task {
        public string $title;
        public string $desc;
        public int $status;
        public string $dInicio;

        public function __construct(string $title, string $desc) {
            $this->title = $title;
            $this->desc = $desc;
            $this->status = 1;
            $this->dInicio = date("Y/m/d");
        }
    }
?>