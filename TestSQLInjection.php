<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

// $username = "admin'; #"; //contoh sql injection dengan memanfaatkan celah '; dan # dalam sql dianggap comment

/**
 * cara mengatasi sql injection bisa menggunakan 
 * Jangan membuat query SQL secara manual dengan menggabungkan String secara bulat-bulat
*● Function query() dan execute() tidak bisa menangani celah SQL Injection, jadi kita harus
*menanganinya secara manual
*● Direkomendasikan menggunakan function query() dan execute() jika memang kita tidak butuh parameter dari input user ketika membuat perintah SQL
*● Jika membutuhkan parameter dari input user, kita wajib menggunakan function prepare(sql) yang akan kita bahas selanjutnya
*● Atau bisa juga memastikan input user aman dengan menggunakan function quote()
 */

$username = $connection->quote("admin");
$password = $connection->quote("admin");

$sql = "SELECT username, password FROM admin WHERE username=$username AND password=$password";

$statement = $connection->query($sql);

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