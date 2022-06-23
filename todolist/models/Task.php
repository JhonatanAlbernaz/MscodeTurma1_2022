<?php
    class Task{
        public string $title;
        public string $description;
        public int $status;
        public string $beginDate;
        public string $endDate;
        public int $id;

        public function __construct(string $title, string $description){
            $this->title = $title;
            $this->description = $description;
            $this->status = 1;
            $this->beginDate = date("Y/m/d");
        }

        public function setStatus(int $status) {
            $this->status = $status;
        }

        public function setEndDate(string $andDate) {
            $this->endDate = $andDate;
        }

        public function setId(int $id) {
            $this->id = $id;
        }

    }
?>