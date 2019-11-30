<?php 

include_once "../config/database.php";

$sql = "INSERT INTO products (title, description, img, price, created_by) VALUES ";

foreach($_POST as $prod) {
    $sql .= "(" . json_encode($prod["title"]) . ", " . json_encode($prod["description"]) . ", " . json_encode($prod["img"]) . ", " . json_encode($prod["price"]) . ", 1), ";
}

$sql = substr($sql, 0, strlen($sql)-2) . ";";

$res = new \stdClass();
if ($conn->query($sql) === TRUE) {
	$res->success = 1;
    $res->message = "New record created successfully";
} else {
	$res->success = 0;
    $res->message = "Error: " . $sql . "<br>" . $conn->error;
}

echo json_encode($res);

?>