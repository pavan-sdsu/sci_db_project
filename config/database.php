<?php

header('Content-Type: application/json');

$servername = "3.218.11.183";
$username = "root";
$password = "5DCTCydK";
$database = "sci_db_project";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

return $conn;
?>