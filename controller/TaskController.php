<?php
require('database\QueryBuilder.php');
require('model\Task.php');

class TaskController 
{
    public function index() 
    {
        $database = new QueryBuilder();

        $tasks = $database->selectAll(Task::$table, Task::$class);

    	return $tasks;
    }

}
?>