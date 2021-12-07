<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('naufal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('naufal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('naufal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('naufal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('naufal@test.com', 'terimakasih like nya')");

$connection->commit();

$connection = null;