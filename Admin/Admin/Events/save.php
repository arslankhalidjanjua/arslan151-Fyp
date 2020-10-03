<?php
include("../../connection.php");

if (isset($_POST['submit_post'])) {
		
	$title        = $_POST['title'];
	$description  = $_POST['description'];
	$status       = $_POST['status'];
	
		$conn->query("insert into events (title,description,status)values('$title','$description','$status')");
		header("location: event.php");	
	} ?>