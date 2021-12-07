<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
    insert into users (id, name, email)
    values ('haq', 'Haq', 'arinal@gmail.com');
SQL;

$connection->exec($sql);

$connection = null;