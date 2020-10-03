<?php

include 'Aftab/connection.php';

$getUsers = $db->prepare("SELECT * FROM orders");
$getUsers->execute();
$users = $getUsers->fetchAll();

for($i=0;$i<sizeof($users) ; $i++ )
{
	$getUsers = $db->prepare("SELECT * FROM cart1 WHERE Order_id=".$users[$i]['Order_id']);
$getUsers->execute();
    $users[$i]['cart']=$getUsers->fetchAll();
}

echo json_encode(array('result'=>$users));
?>