<?php

class Task {
    
    private $id;
    private $description;
    private $completed;

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