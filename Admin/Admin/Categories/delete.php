<?php
	include("../../connection.php");
	$product_category_id = $_GET['id'];
	$result = $conn->prepare("DELETE FROM product_category WHERE product_category_id= :product_category_id");
	$result->bindParam(':product_category_id', $product_category_id);
	$result->execute();
	header("location: category.php");
?>