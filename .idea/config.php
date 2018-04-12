<?php
$host = 'localhost';
$user = 'root';
$pass = 'ShujinHigh5';
$db = 'simpledata';
$charset = 'utf8mb4';

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = new pdo("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $opt);

if (!$dsn){
    echo "Unable to connect to database";
}
