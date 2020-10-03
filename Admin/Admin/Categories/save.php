<?php
include("../../connection.php");

if (isset($_POST['submit_post'])) {
		
	$product_category_name = $_POST['categoryname'];
	$gender  = "abc";//$_POST['gender'];
	
	$conn->query("insert into product_category (product_category_name,gender)values('$product_category_name','$gender')");

	header("location: category.php");
}

?>