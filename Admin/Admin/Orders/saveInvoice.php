<!-- include header file here-->
<?php 
$activePage='order';
//include('../headeAndFooter/header.php');
include '../../connection.php';

//Delete all rows record from temp_sales_invoice
$resultDelete = $conn->prepare("DELETE  FROM temp_sales_invoice");
$resultDelete->execute();

//Delete all rows record from temp_sales_invoice_items
$resultRemove = $conn->prepare("DELETE  FROM temp_sales_invoice_items");
$resultRemove->execute();

$oid = $_GET['id'];
$emid = $_GET['em'];	


//$employee_id =1;
$employee_id =$_GET['employee_id'];

$total_amount = $conn->prepare("select sum(Total_price) from cart1 where Order_id = '$oid' and email = '$emid'");
$total_amount->execute();
$rowTotal_amount= $total_amount->fetch();
$total_amount=$rowTotal_amount['sum(Total_price)'];


$rowTotal_items = $conn->prepare("select * from cart1 where Order_id = '$oid' and email = '$emid'");
$rowTotal_items->execute();
$total_items = $rowTotal_items->rowcount();

$paid   =0;
$profit =0;

//getting user id on the basis of email id
$resultUserId = $conn->query("select * from signuptable where EmailId = '$emid'");
$resultUserId->execute();
$rowUserId = $resultUserId->fetch();
$User_id=$rowUserId['User_id'];

$sql1 = "INSERT INTO sales_invoice(User_id,employee_id,total_amount,total_items,paid,profit) VALUES (:User_id,:employee_id,:total_amount,:total_items,:paid,:profit)";
$q1 = $conn->prepare($sql1);
$q1->execute(array(':User_id'=>$User_id,':employee_id'=>$employee_id,':total_amount'=>$total_amount,':total_items'=>$total_items,':paid'=>$paid,':profit'=>$profit));


//last sales_invoice_id
$resultLastId = $conn->query("SELECT * FROM sales_invoice order by sales_invoice_id DESC");
$resultLastId->execute();
$rowResultLastId = $resultLastId->fetch();
$sales_invoice_id=$rowResultLastId['sales_invoice_id'];


$r = $conn->prepare("select * from cart1 where Order_id = '$oid' and email = '$emid'");
$r->execute();

while($rows = $r->fetch())
{
	
	$Product_id = $rows['Product_id'];
	$item_quantity = $rows['quantity'];
	$total=$rows['price'];
	$profit = 1;
	
	//insert into sales_invoice_items
	$query = "INSERT INTO sales_invoice_items (sales_invoice_id,Product_id,item_quantity,total,profit) VALUES (:sales_invoice_id,:Product_id,:item_quantity,:total,:profit)";
	$q = $conn->prepare($query);
	$q->execute(array(':sales_invoice_id'=>$sales_invoice_id,':Product_id'=>$Product_id,':item_quantity'=>$item_quantity,':total'=>$total,':profit'=>$profit));
	
	/*Aftab start update quantity from products table after approving order sale*/	
	$resultQuantity = $conn->prepare("SELECT stock FROM products where Product_id='$Product_id'"); 
	$resultQuantity->execute();
	$rowQuantity = $resultQuantity->fetch();
	$currentQty=$rowQuantity['stock'];
	$finalQty=$currentQty-$item_quantity; //eg; 10-5=5
	
	$sqlQty = "UPDATE products SET stock=? WHERE Product_id=?";
	$queryQty= $conn->prepare($sqlQty);
	$queryQty->execute(array($finalQty,$Product_id));
	/*Aftab update quantity after approving order end*/

}

//query
$order_status="Approved";

$queryOrder_status= "UPDATE orders SET order_status=? where Order_id='$oid'";
$qOrder_status= $conn->prepare($queryOrder_status);
$qOrder_status->execute(array($order_status));

$result = $conn->query("SELECT * FROM sales_invoice order by sales_invoice_id DESC");
$result->execute();
$row = $result->fetch();
$sales_invoice_id=$row['sales_invoice_id'];

 //header("location:  ../createNewSale/invoice/invoice.php?invoiceId=$sales_invoice_id"); 
 header("location:  ../sales/aftabInvoice/invoice.php?invoiceId=$sales_invoice_id"); 

?>


