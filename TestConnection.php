<?php

$host = "localhost"; //jika menggunakan hosting isi dengan alamat hostingnya
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try{
    //membuat koneksi ke db
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

    echo "Database connected success " . PHP_EOL;

    //menghentikan koneksi ke db
    $connection = null;
}catch(PDOException $exception){
    echo "Database connected failed " . $exception->getMessage() . PHP_EOL;
}