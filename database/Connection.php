<?php
class Connection{

    public static function make(){
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=practitioner', 'root', '');
            return $pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

}
?>