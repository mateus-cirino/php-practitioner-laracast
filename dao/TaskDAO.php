<?php
require 'database/Connection.php';
require 'model/Task.php';

class TaskDAO {
    private $pdo;

    public function __construct()
    {   
        $this->pdo = Connection::make();
    }

    public function getAllTasks(){
        $statement = $this->pdo->prepare('select * from todo');
    
        $statement->execute();
    
        $results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    
        return $results;
    }
}
?>