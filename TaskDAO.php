<?php
class TaskDAO {
    public function getAllTasks($pdo){
        $statement = $pdo->prepare('select * from todo');
    
        $statement->execute();
    
        $results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    
        return $results;
    }
}
?>