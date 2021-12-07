<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM users ORDER BY name asc";

$statement = $connection->query($sql);
foreach($statement as $row){
    echo "Id = $row[id]" . PHP_EOL; 
    echo "Name = $row[name]" . PHP_EOL; 
    echo "Email = $row[email]" . PHP_EOL; 
    echo "--------------------" . PHP_EOL;
}

$connection = null;