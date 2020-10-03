<?php
include("../../connection.php");

if (isset($_POST['submit_post'])) {
		
	$first_name        = $_POST['firstname'];
	$last_name        = $_POST['lastname'];
	$mobile_no = $_POST['mobileno'];
	$email_id    = $_POST['email'];
	$address = $_POST['address'];
	$password  = $_POST['password'];
	$role  = $_POST['role'];
	$status  = $_POST['status'];

	$picture = $_FILES['picture']['name'];
	$path = $_FILES['picture']['tmp_name'];
	$upload =move_uploaded_file($path, "../../img/dosen/".$picture);

		$conn->query("insert into employee (first_name,last_name,mobile_no,email_id,address,password,role,status,picture)values('$first_name','$last_name','$mobile_no','$email_id','$address','$password','$role','$status','$picture')");
		header("location: employee.php");	
	} ?>