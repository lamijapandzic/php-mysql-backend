<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "php_mysql_backend";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Greška pri konekciji: " . $conn->connect_error);
}
?>