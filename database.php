<?php
$server_name = "localhost";
$port = "3306";
$name_database = "boulingui";
try {
    $connect = new PDO("mysql:host=localhost;port=$port;dbname=$name_database;charset=utf8mb4","root","");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
 catch (PDOException $e) {
    die("Connection failed: ". $e->getMessage());
}

?>