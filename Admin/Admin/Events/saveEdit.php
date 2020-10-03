<?php
include("../../connection.php");

$event_id    =$_POST['event_id'];

	if (isset($_POST['submit_post'])) {
		
	$title        = $_POST['title'];
	$description  = $_POST['description'];
	$status       = $_POST['status'];
	
	$conn->query("UPDATE  events SET  title='$title',description='$description',status='$status' where event_id='$event_id'");
	header("location: event.php");
	}
	?>
<!-- add dosen end here -->