<?php

use app\builder\Db;
use app\builder\SqlBuilder;


include __DIR__ . '/../../vendor/autoload.php';

// query
$builder = new SqlBuilder();
$query = $builder
    ->table('users')
    ->select(['first_name', 'age'])
    ->where(['user_name' => 'Maksym'])
    ->order(['id' => 'ASC'])
    ->limit(20)
    ->offset(40)
    ->build();

// db
$host = '127.0.0.1';
$dbName   = 'logger-test';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';
$db = new Db();
$db->getConnect($host, $dbName, $user, $pass, $charset);

// execute query
$result = $db->one($query)->getResult();
//$result = $db->all($query);

print_r($result);