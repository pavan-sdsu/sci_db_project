<?php 

include_once "../config/database.php";

$sql = "UPDATE products SET title = '" . addslashes($_POST["values"]["title"]) . "', description = '" . addslashes($_POST["values"]["description"]) . "', img = '" . addslashes($_POST["values"]["img"]) . "', price = '" . addslashes($_POST["values"]["price"]) . "' WHERE id = " . addslashes($_POST["productId"]) . "";

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