<?php
include("../../connection.php");

$subject_code  = trim($_POST['subjectcode']);
$subject_title  = trim($_POST['subjecttitle']);

//query
$query = "INSERT INTO subject(subject_code,subject_title) VALUES (:subject_code,:subject_title)";
$q = $conn->prepare($query);
$q->execute(array(':subject_code'=>$subject_code,':subject_title'=>$subject_title));
header("location: subject.php");

?>