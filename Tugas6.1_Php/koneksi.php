<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'praktikum6_si01';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>