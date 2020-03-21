<?php

class Task {
    static $table = "todo";
    static $class = "Task";
    
    protected $id;
    protected $description;
    protected $completed;

    public function getId(){
        return $this->id;
    }
    
    public function getDescription(){
        return $this->description;
    }

    public function isCompleted(){
        return $this->completed;
    }

}
?>