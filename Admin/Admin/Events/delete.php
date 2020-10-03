<?php
	include("../../connection.php");
	$event_id=$_GET['id'];
	$result = $conn->prepare("DELETE FROM events WHERE event_id= :event_id");
	$result->bindParam(':event_id', $event_id);
	$result->execute();
	header("location: event.php");
?>