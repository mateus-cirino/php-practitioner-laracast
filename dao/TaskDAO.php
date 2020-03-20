<?php
require 'database/Connection.php';
require 'model/Task.php';

class TaskDAO {
    private static $pdo;
    
    public static function getAllTasks(){
        self::$pdo = Connection::make();

        $statement = self::$pdo->prepare('select * from todo');
    
        $statement->execute();
    
        $results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    
        return $results;
    }
}
?>