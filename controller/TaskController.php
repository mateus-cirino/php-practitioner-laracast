<?php
require 'dao/TaskDAO.php';

class TaskController {
    public function index() {
        $tasks = taskDAO::getAllTasks();

    	return $tasks;
    }
}
?>