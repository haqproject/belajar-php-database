<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$success = false;
$find_user = null;

foreach($statement as $row){
    //suksess
    $success = true;
    $find_user = $row["username"];
}

if($success){
    echo "Login berhasil " . $find_user . PHP_EOL;
}else{
    echo "Login Gagal " . PHP_EOL;

}

$connection = null;