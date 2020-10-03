<?php
include 'connection.php';

if(isset ($_POST['Send']))
{
$n = $_POST['name'];
$eid = $_POST['email'];
$s = $_POST['subject'];
$m = $_POST['message'];
$contact_no = $_POST['contactno'];

$query = "INSERT INTO contactus(name, email, subject, message,contact_no) VALUES (:name, :email, :subject, :message,:contact_no)";
$q = $db->prepare($query);
$q->execute(array(':name'=>$n,':email'=>$eid,':subject'=>$s,':message'=>$m,':contact_no'=>$contact_no));

header("location: feedBackThanks.php?");
exit;
//mysql_close($db);
}
?>
