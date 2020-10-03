<?php
include("../../connection.php");

$employee_id    =$_POST['employeeid'];

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
	

	if(!empty($path)) {
		move_uploaded_file($path, "../../img/dosen/".$picture);

$conn->query("UPDATE  employee SET  first_name='$first_name',last_name='$last_name',mobile_no='$mobile_no',email_id='$email_id',address='$address',password='$password',role='$role',status='$status',picture='$picture' where employee_id='$employee_id'");
	header("location: employee.php");
	}
else
{
	$conn->query("UPDATE  employee SET  first_name='$first_name',last_name='$last_name',mobile_no='$mobile_no',email_id='$email_id',address='$address',password='$password',role='$role',status='$status' where employee_id='$employee_id'");
	header("location: employee.php");
	}
} ?>
<!-- add dosen end here -->