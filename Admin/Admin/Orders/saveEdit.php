<?php
include("../../connection.php");
$subject_id         = $_POST['subjectid'];

$subject_code  = trim($_POST['subjectcode']);
$subject_title  = trim($_POST['subjecttitle']);

// query
$query = "UPDATE subject SET subject_code=?,subject_title=? WHERE subject_id=?";
$q = $conn->prepare($query);
$q->execute(array($subject_code,$subject_title,$subject_id));
header("location: subject.php");
?>