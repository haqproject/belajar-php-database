<?php

function getConnection(): PDO
{
    $host = "localhost"; //jika menggunakan hosting isi dengan alamat hostingnya
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

    //membuat koneksi ke db
    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

}