<?php

$database = [
    "connection" => "mysql:host=127.0.0.1",
    "port" => "3306",
    "name" => "practitioner",
    "user" => "root",
    "password" => "",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
];

return $database;