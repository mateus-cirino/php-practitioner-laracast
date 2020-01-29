<?php
require 'dao/TaskDAO.php';

class TaskController {
        public function index() {
        $taskDAO = new TaskDAO();

        $tasks = $taskDAO->getAllTasks();

        return $tasks;
        }
}
?>