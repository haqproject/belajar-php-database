<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$sql = "INSERT INTO comments VALUES('', 'opal@gg.com', 'assalamualaikum sob')";
$result = $connection->exec($sql);

//lastinsertid salah satu function pdo untuk mengetahui terakhir dalam table
$id = $connection->lastInsertId();

echo "Last id: " . $id . PHP_EOL;


$connection = null;