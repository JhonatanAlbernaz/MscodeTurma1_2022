<?php
require_once("./utils/Banco.php");
require_once("./models/Task.php");

class TaskDAO{
    private static $instance;

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function save(Task $task){
        $stm = Banco::getConnection()->prepare("INSERT INTO tasks (title, description, status, beginDate) VALUES (:title, :description, :status, :beginDate)");
        $stm->bindParam('title', $task->title);
        $stm->bindParam('description', $task->description);
        $stm->bindParam('status', $task->status);
        $stm->bindParam('beginDate', $task->beginDate);

        $stm->execute();
    }

    public function update(Task $task) {
        $stmt = Banco::getConnection()->prepare("UPDATE tasks SET endDate = :endDate, status = :novoStatus WHERE id = :id");
        $stmt->bindParam('endDate', $task->endDate);
        $stmt->bindParam('novoStatus', $task->status);
        $stmt->bindParam('id', $task->id);
    
        $stmt->execute();
    }

    public function delete(int $id) {
        $stmt = Banco::getConnection()->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->bindParam('1', $id);
    
        $stmt->execute();
    }

    public function list() {
        return[];
    }

}


?>