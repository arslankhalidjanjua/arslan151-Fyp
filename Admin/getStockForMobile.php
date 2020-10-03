<?php

include 'Aftab/connection.php';

$getUsers = $db->prepare("SELECT * FROM products");
$getUsers->execute();
$users = $getUsers->fetchAll();

for ($i=0 ; $i<sizeof($users) ; $i++)
{
    $cat=$db->prepare("SELECT * FROM product_category WHERE product_category_id=".$users[$i]['product_category_id']);
    $cat->execute();
    $users[$i]['cat']=$cat->fetch();
    $brand=$db->prepare("SELECT * FROM product_brand WHERE product_brand_id=".$users[$i]['product_brand_id']);
    $brand->execute();
    $users[$i]['brand']=$brand->fetch();
}

echo json_encode(array('result'=>$users));
?>