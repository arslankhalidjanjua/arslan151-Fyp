<?php
include("../../connection.php");

	$employee_id    =$_POST['employeeid'];

	if (isset($_POST['submit_post'])){
		
	$oldpassword  = $_POST['currentpassword'];
	
	$result = $conn->prepare("select password from employee");
	$result->execute();
	$data=$result->fetch();
	
	$passwordAvailable= $data['password'];
	$password     = $_POST['newpassword'];
	$confirmpassword = $_POST['confirmpassword'];
	
	if($oldpassword==$passwordAvailable)
	{
		if($password==$confirmpassword)
		{
			$conn->query("UPDATE  employee SET  password='$password' where employee_id='$employee_id'");
			
			$messageSuccess= "Password Change  Successfully !";
			header("location: profile.php?messageSuccess=".$messageSuccess);
			exit;
		}
		else
		{
			$passAndConfPssNotMch= "New Password and Confirm Password Does Not Match !";
			header("location: profile.php?passAndConfPssNotMch=".$passAndConfPssNotMch);
			exit;
		}
	}
	else
	{
		$currPass= "Sorry Your Current Password is Wrong !";
		header("location: profile.php?currPass=".$currPass);
		exit;
		//old password does not match with current password
	}
	}
?>