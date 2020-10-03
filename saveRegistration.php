<?php
session_start();
include 'connection.php';

$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$Gender = "Male";//$_POST['g'];
$ContactNo = $_POST['contact'];
$EmailId = $_POST['email'];
$address = $_POST['address'];
$country = "Pakistan";
$state="ABC";
$city="Islamabad";
$pass2 = $_POST['password'];
$Password = $_POST['c_password'];


$result = $db->prepare("SELECT * FROM signuptable where EmailId = ?");
$result->execute(array($_POST['email']));
$row = $result->fetch();
$email2=$row['EmailId'];

if($EmailId === $email2)
{
	$thisEmailIsAllreadyRegistered= "thisEmailIsAllreadyRegistered";
	header("location: login.php?thisEmailIsAllreadyRegistered=".$thisEmailIsAllreadyRegistered);
	exit;	
}
else
{
if($Password === $pass2)
{
	$db->query("insert into signuptable (FirstName, LastName, Gender, ContactNo, EmailId, Password,address,country,state,city)values('$FirstName','$LastName','$Gender','$ContactNo','$EmailId','$Password','$address','$country','$state','$city')");	
	header("location: thanksAccountCreated.php?");
	exit;
}
else
{
	$passwordNotMatch= "passwordNotMatch";
	header("location: login.php?passwordNotMatch=".$passwordNotMatch);
	exit;	
}
}
//mysql_close($db);
?>
