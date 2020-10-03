<?php
include("../../connection.php");

$product_brand_id         = $_POST['brandid'];
$product_brand_name         = $_POST['brandname'];

// query
$query = "UPDATE product_brand SET product_brand_name=? WHERE product_brand_id=?";
$q = $conn->prepare($query);
$q->execute(array($product_brand_name,$product_brand_id));
header("location: brand.php");
?>