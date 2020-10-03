<?php
	include("../../connection.php");
	$subject_id =$_GET['subject_id'];
	$result = $conn->prepare("DELETE FROM subject WHERE subject_id= :subject_id");
	$result->bindParam(':subject_id', $subject_id);
	$result->execute();
	header("location: subject.php");
?>