<?php

$host = 'localhost:3306';
$user = 'electric_ziyad';
$pass = 'Q1w2e3r4p0o9$';
$db_name = 'electric_waq';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
