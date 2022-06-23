<?php
    class Task{
        public string $title;
        public string $description;
        public int $status;
        public string $beginDate;
        public string $endDate;

        public function __construct(string $title, string $description){
            $this->title = $title;
            $this->description = $description;
            $this->status = 1;
            $this->beginDate = date("Y/m/d");
        }
    }
?>