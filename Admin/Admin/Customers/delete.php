<?php
	include("../../connection.php");
	$user_id=$_GET['user_id'];
	$result = $conn->prepare("DELETE FROM users WHERE user_id= :user_id");
	$result->bindParam(':user_id', $user_id);
	$result->execute();
	header("location: user.php");
?>