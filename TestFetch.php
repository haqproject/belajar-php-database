<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "naufal";
$password = "arinal";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

/**
 * Fetch digunakan untuk menarik data satu per satu
 * 
 */
if($row = $statement->fetch()){
    echo "Login berhasil " . $row['username'] . PHP_EOL;
}else{
    echo "Login Gagal " . PHP_EOL;

}

$connection = null;