<?php
	include("../../connection.php");
	$contactus_id =$_GET['id'];
	$result = $conn->prepare("DELETE FROM contactus WHERE contactus_id= :contactus_id");
	$result->bindParam(':contactus_id',$contactus_id);
	$result->execute();
	header("location: contact.php");
?>