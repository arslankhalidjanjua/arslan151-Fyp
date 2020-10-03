<?php
include("../../connection.php");

if (isset($_POST['submit_post'])) {
		
	$gender              = "Men";//$_POST['gender'];
	$product_category_id = $_POST['category'];
	$ProductType         = $_POST['productname'];
	$product_brand_id    = $_POST['brand'];
	$Price               = $_POST['saleprice'];
	$Description         = $_POST['description'];
	$stock               = $_POST['stock'];
	
	$foto = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	
	$upload = move_uploaded_file($lokasi, "../../../Collection/Both/".$foto);
	
	$Imagepath = $foto;
	
		$conn->query("insert into products (gender,product_category_id,ProductType,product_brand_id,Price,Description,Imagepath,stock)values('$gender','$product_category_id','$ProductType','$product_brand_id','$Price','$Description','$Imagepath','$stock')");
		header("location: product.php");
	}
	?>