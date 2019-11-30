<?php

include_once '../config/database.php';

$sql = "SELECT userId, email, role, fname, lname FROM users WHERE email='" . $_POST["email"] . "' AND password='" . md5(($_POST["password"])) . "';";
$result = $conn->query($sql);

$res = new \stdClass();
if ($result->num_rows > 0) {
	$res->success = 1;
	$res->message = "Logged in successfully";
	$res->data = $result->fetch_object();
} else {
	$res->success = 0;
    $res->message = "Error: No user found";
}
echo json_encode($res);

?>