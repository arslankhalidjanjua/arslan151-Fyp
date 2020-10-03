<?php
include("../../connection.php");
$user_name  = trim($_POST['username']);
$password   = trim($_POST['password']);
$first_name = trim($_POST['firstname']);
$last_name   = trim($_POST['lastname']);
$user_type   = trim($_POST['usertype']);

//foto
$foto = $_FILES['foto']['name'];
$abc = $_FILES['foto']['tmp_name'];
$upload =move_uploaded_file($abc, "../../usersFotos/".$foto);


$query = "INSERT INTO users(user_name,password,first_name,last_name,user_type,foto) VALUES (:user_name,:password,:first_name,:last_name,:user_type,:foto)";
$q = $conn->prepare($query);
$q->execute(array(':user_name'=>$user_name,':password'=>$password,':first_name'=>$first_name,':last_name'=>$last_name,':user_type'=>$user_type,':foto'=>$foto));
header("location: user.php");

?>