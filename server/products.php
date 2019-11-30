<?php

include_once '../config/database.php';

$sql = "SELECT * FROM products ORDER BY id DESC";
$result = $conn->query($sql);

$products = array();

while($row = $result->fetch_assoc()) {
	array_push($products, $row);
}

echo json_encode($products);

?>