<?php
session_start();

include "connection.php";
if(isset($_SESSION['Email']))
{
	$e = $_SESSION['Email'];
}
else
{
	header("location: checkout.php?");
	exit;
}

$p = $_POST['npassword'];

$c_p = $_POST['c_password'];


if($p != $c_p)
{
	$passwordNotMatch= "passwordNotMatch";
	header("location: changePassword.php?passwordNotMatch=".$passwordNotMatch);
	exit;
}
else
{
$v = $db->prepare("update signuptable set Password = '$c_p' where Emailid = '$e'");
$v->execute();

if($v)
{
	header("location: passwordChangeSuccessfully.php?");
	exit;
}
else
{
	header("location: passwordChangeError.php?");
	exit;
}

}
//mysql_close($db);
?>