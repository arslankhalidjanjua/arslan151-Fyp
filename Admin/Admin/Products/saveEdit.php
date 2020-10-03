<?php
include("../../connection.php");

	$Product_id    =$_POST['product_id'];

	if (isset($_POST['submit_post'])) {
		
	$ProductType        = $_POST['productname'];
	$product_category_id = $_POST['category'];
	$gender              = "Men";//$_POST['gender'];
	$product_brand_id    = $_POST['brand'];
	$product_description = $_POST['description'];
	$Price  			 = $_POST['saleprice'];
	$stock               = $_POST['stock'];
	
	$foto = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];

	
	
	if(!empty($lokasi)) {
		
	$upload =move_uploaded_file($lokasi, "../../../Collection/Both/".$foto);
	
	$Imagepath = $foto;

		$conn->query("UPDATE  products SET  gender='$gender',product_category_id='$product_category_id',ProductType='$ProductType',  product_brand_id='$product_brand_id', Price='$Price',Imagepath=$Imagepath, Description='$product_description',stock='$stock' where Product_id='$Product_id'");
	
		header("location: product.php");
	}
	
	else{

		$conn->query("UPDATE  products SET  gender='$gender',product_category_id='$product_category_id',ProductType='$ProductType',  product_brand_id='$product_brand_id', Price='$Price', Description='$product_description',stock='$stock' where Product_id='$Product_id'");
		header("location: product.php");
	}
} ?>
<!-- add dosen end here -->