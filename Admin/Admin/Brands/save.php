<?php
include("../../connection.php");
if (isset($_POST['submit_post'])) {
		
	    $product_brand_name = $_POST['brandname'];
	
		$conn->query("insert into product_brand (product_brand_name)values('$product_brand_name')");
	    header("location: brand.php");		 
} 
?>
