<?php
    require('TaskController.php');

    $taskController = new TaskController();
    
    $tasks = $taskController->index();
    
    foreach ($tasks as $task) {
        echo $task->getDescription();
    }
?>

