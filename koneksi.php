<?php
$dbserver = 'localhost';
$dbname = 'pemrogramanweb';
$dbuser = 'root';
$dbpassword = '';
$dsn ="mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try{
    $connection = new PDO($dsn, $dbuser, $dbpassword);
    echo("koneksi berhasil");
}catch(Exception $exception) {
    die("terjadi eror: {$exception->getMessage()}");
}