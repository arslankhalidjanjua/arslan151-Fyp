<?php
	include("../../connection.php");
	
	$Product_id= $_GET['id'];
	$result = $conn->prepare("DELETE FROM products WHERE Product_id= :Product_id");
	$result->bindParam(':Product_id', $Product_id);
	$result->execute();
	
	header("location: product.php");
?>