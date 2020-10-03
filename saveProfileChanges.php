<?php
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
$e = $_SESSION['Email'];

$fn = $_POST['f'];

$ln = $_POST['l'];

$gen = $_POST['g'];

$cn = $_POST['c'];

// query
$query = "UPDATE signuptable SET FirstName=?, LastName=?, Gender=?, ContactNo=? WHERE EmailId=?";
$q = $db->prepare($query);
$q->execute(array($fn,$ln,$gen,$cn,$e));
header("location: profileChangeSuccessfully.php");
}