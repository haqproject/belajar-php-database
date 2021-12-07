<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('arinal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('arinal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('arinal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('arinal@test.com', 'terimakasih like nya')");
$connection->exec("INSERT INTO comments(emails, comment) VALUES ('arinal@test.com', 'terimakasih like nya')");
/**
 * rollback digunakan untuk menghentikan proses db transaction 
 */
$connection->rollBack();

$connection = null;