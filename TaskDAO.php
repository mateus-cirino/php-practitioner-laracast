<?php
require 'Connection.php';
require 'Task.php';

class TaskDAO {
    private $pdo;

    public function __construct()
    {
        $connection = new Connection();
        
        $this->pdo = $connection->connectToDb();
    }

    public function getAllTasks(){
        $statement = $this->pdo->prepare('select * from todo');
    
        $statement->execute();
    
        $results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    
        return $results;
    }
}
?>