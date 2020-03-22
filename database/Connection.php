<?php
class Connection{

    public static function make()
    {
        try {
            $config = require('env.php');
            
            $pdo = new PDO(
                $config['connection'] . ';'
                . "port=" . $config['port'] . ';'
                . "dbname=" . $config['name'],
                $config['user'],
                $config['password'],
                $config['options']
            );
            
            return $pdo;

        } catch (PDOException $e) {

            die($e->getMessage());
        }    
    }

}
?>