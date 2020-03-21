<?php
    require('Connection.php');

    class QueryBuilder
    {
        protected $pdo;
        
        public function __construct ()
        {
            $this->pdo = Connection::make();
        }

        public function selectAll($table, $class)
        {
            $statement = $this->pdo->prepare("select * from {$table}");

            $statement->execute();
        
            $results = $statement->fetchAll(PDO::FETCH_CLASS, $class);
        
            return $results;
        }
    }

?>