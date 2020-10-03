<?php
	include("../../connection.php");
	$employee_id=$_GET['id'];
	$result = $conn->prepare("DELETE FROM employee WHERE employee_id= :employee_id");
	$result->bindParam(':employee_id', $employee_id);
	$result->execute();
	header("location: employee.php");
?>