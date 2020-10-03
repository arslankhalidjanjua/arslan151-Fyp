<?php
include('connection.php');

$eid = $_POST['Email_id'];
$pass = $_POST['password'];

	if(isset($_POST['Email_id']) && isset($_POST['password']))
	{	
		$status = 1;
		
		$result = $db->prepare("SELECT * FROM signuptable where EmailId = ? AND Password = ?");
		$result->execute(array($_POST['Email_id'],$_POST['password']));
		$row = $result->fetch();
		
		if($row>0)
		{
			session_start();
		
			$_SESSION['Email'] = $eid;
			$_SESSION['name'] = $row['FirstName'];
			$_SESSION['last'] = $row['LastName'];
			$_SESSION['User_id'] = $row['User_id'];
			
			header("location:index.php");
		}
		else
		{
			header("location:index.php?");
		}
		
	}
	else
	{
		header("location:index.php?");
	}
		
	    //$db=null;

/*session_start();

require 'connection.php';

if(isset($_POST['Email_id']))
{

$eid = $_POST['Email_id'];

$pass = $_POST['password'];

$query = "SELECT * FROM signuptable where EmailId = '$eid' and Password = '$pass'";

$result = $db->prepare("$query");
$result->execute();

$row =$result->rowcount();

$result = $db->prepare("SELECT FirstName from signuptable where EmailId = '$eid'");
$result->execute();
$r = $result->fetch();

if($row == 1)
{
session_start();
$_SESSION['Email'] = $eid;
$_SESSION['name'] = $r[0];
$_SESSION['User_id'] = $r['User_id'];
header("location:indexAfterLogin.php");
}
else
{
header("location:index.php?");
}
}*/
//mysql_close($db);
?>