<?php 

include_once "../config/database.php";

$sql = "DELETE FROM products WHERE id=" . $_POST["productId"] . ";";

$res = new \stdClass();
if ($conn->query($sql) === TRUE) {
	$res->success = 1;
    $res->message = "Record updated successfully";
} else {
	$res->success = 0;
    $res->message = "Error: " . $sql . "<br>" . $conn->error;
}

echo json_encode($res);

?>