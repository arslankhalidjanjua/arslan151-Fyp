<?php
include("../../connection.php");

$user_id    = $_POST['user_id'];

$user_name  = trim($_POST['username']);
$password   = trim($_POST['password']);
$first_name = trim($_POST['firstname']);
$last_name  = trim($_POST['lastname']);
$user_type  = trim($_POST['usertype']);


$foto = $_FILES['foto']['name'];
$abc = $_FILES['foto']['tmp_name'];

if(!empty($abc)) {
	$upload =move_uploaded_file($abc, "../../usersFotos/".$foto);


// query
$query = "UPDATE users SET user_name=?,password=?,first_name=?,last_name=?,user_type=?,foto=? WHERE user_id=?";
$q = $conn->prepare($query);
$q->execute(array($user_name,$password,$first_name,$last_name,$user_type,$foto,$user_id));
header("location: user.php");
}
else
{
// query
$query = "UPDATE users SET user_name=?,password=?,first_name=?,last_name=?,user_type=? WHERE user_id=?";
$q = $conn->prepare($query);
$q->execute(array($user_name,$password,$first_name,$last_name,$user_type,$user_id));
header("location: user.php");
}
?>