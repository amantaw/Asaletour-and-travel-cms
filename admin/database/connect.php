<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$db_name = "ast";

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
	die("Database Connection error" . $conn->connect_error);
}
?>