<?php
	include("../../connection.php");
	$product_brand_id=$_GET['id'];
	$result = $conn->prepare("DELETE FROM product_brand WHERE product_brand_id= :product_brand_id");
	$result->bindParam(':product_brand_id', $product_brand_id);
	$result->execute();
	header("location: brand.php");
?>