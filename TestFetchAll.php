<?php 

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM users";
/**
 * fetchall digunakan untuk menarik semua data dalam tabel 
 */
$statement = $connection->query($sql);
$users = $statement->fetchAll();

var_dump($users);


$connection = null;

