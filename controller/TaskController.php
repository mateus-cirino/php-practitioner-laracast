<?php
require 'dao/TaskDAO.php';

class TaskController {
    public function index() {
        $tasks = TaskDAO::getAllTasks();

    	return $tasks;
    }
}
?>