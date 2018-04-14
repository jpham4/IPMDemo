<?php
$host = 'localhost';
$user = 'jpham';
$pass = 'BlueVice201';
$db = 'ipm_testdb';
$charset = 'utf8mb4';

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dbh = new pdo("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $opt);

if (!$dbh){
    echo "Unable to connect to database";
}
?>
