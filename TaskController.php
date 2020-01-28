<?php
require 'Connection.php';
require 'Task.php';
require 'TaskDAO.php';

class TaskController {
        public function index() {
        $connection = new Connection();
        
        $pdo = $connection->connectToDb();

        $taskDAO = new TaskDAO();

        $tasks = $taskDAO->getAllTasks($pdo);

        return $tasks;
        }
}
?>