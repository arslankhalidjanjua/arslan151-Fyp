<?php
include("../../connection.php");

$product_category_id    =$_POST['categoryid'];
if (isset($_POST['submit_post'])) {
		
	$product_category_name  = $_POST['categoryname'];
	$gender  = "abc";//$_POST['gender'];
		
$conn->query("UPDATE  product_category SET  product_category_name='$product_category_name',gender='$gender' where product_category_id='$product_category_id'");
header("location: category.php");
}
?>