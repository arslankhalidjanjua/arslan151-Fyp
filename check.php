<?php
error_reporting(0);
session_start();

include 'connection.php';
$odt = date("dmyH:i:s A");
if(isset($_SESSION['Email']))
{
if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();
}
$em = $_SESSION['Email'];
}
if(isset($_POST['submit']))
{
$fn = $_POST['sfname'];
$ln = $_POST['slname'];
$e =  $_POST['semail'];
$add = $_POST['Address'];
$cont = $_POST['select'];
$s = $_POST['select2'];
$city = $_POST['select3'];
$z = $_POST['zcode'];
$cn = $_POST['stel2'];
$sm = 0;//$_POST['shipcharge'];
$pm = "Free Shipping";//$_POST['payment'];
$ct = "No";//$_POST['Ctypes']; 
$nc = "No";//$_POST['Nc'];
$ccno = 0;//$_POST['CCno'];
$cv = 0;//$_POST['cvv'];
$m = 0;//$_POST['mon'];
$y = 0;//$_POST['yer'];
$exd = $m."/".$y;
if($sm == 'Standard Shiping')
{
	//$charge = 8.50;
	$charge = 0;
}
else
{
	$charge = 0;
}
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;	
}
$tp2 = $tp2 + $charge;
if($pm == 'Credit Card')
{
$query = "INSERT INTO orders(FirstName, LastName, Email, ShippingAddress, Country, State, City, Zip_code, contactNo, ShippingMethod, PaymentMethod, TypeOfCreditcard, NameOnCC, CCNo, CVV, ExpirationDate, Email_id, Order_Ammount, temp) VALUES (:FirstName, :LastName, :Email, :ShippingAddress, :Country, :State, :City, :Zip_code, :contactNo, :ShippingMethod, :PaymentMethod, :TypeOfCreditcard, :NameOnCC, :CCNo, :CVV, :ExpirationDate, :Email_id, :Order_Ammount, :temp)";
$q = $db->prepare($query);
$q->execute(array(':FirstName'=>$fn,':LastName'=>$ln,':Email'=>$e,':ShippingAddress'=>$add,':Country'=>$cont,':State'=>$s,':City'=>$city,':Zip_code'=>$z,':contactNo'=>$cn,':ShippingMethod'=>$sm,':PaymentMethod'=>$pm,':TypeOfCreditcard'=>$ct,':NameOnCC'=>$nc,':CCNo'=>$ccno,':CVV'=>$cv,':ExpirationDate'=>$exd,':Email_id'=>$em,':Order_Ammount'=>$tp2,':temp'=>$odt));
}
else
{
$query = "INSERT INTO orders(FirstName, LastName, Email, ShippingAddress, Country, State, City, Zip_code, contactNo, ShippingMethod, PaymentMethod,Email_id, Order_Ammount, temp ) VALUES (:FirstName, :LastName, :Email, :ShippingAddress, :Country, :State, :City, :Zip_code, :contactNo, :ShippingMethod, :PaymentMethod,:Email_id, :Order_Ammount, :temp)";
$q = $db->prepare($query);
$q->execute(array(':FirstName'=>$fn,':LastName'=>$ln,':Email'=>$e,':ShippingAddress'=>$add,':Country'=>$cont,':State'=>$s,':City'=>$city,':Zip_code'=>$z,':contactNo'=>$cn,':ShippingMethod'=>$sm,':PaymentMethod'=>$pm,':Email_id'=>$em,':Order_Ammount'=>$tp2,':temp'=>$odt));
}
foreach ($_SESSION["cart"] as $item)
{
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

$query = "INSERT INTO cart1(Product_id, productname, brand,
 description,Imagepath , price, quantity, Total_price, email, temp) VALUES (:Product_id, :productname, :brand, :description,:Imagepath , :price, :quantity, :Total_price, :email, :temp)";
$q = $db->prepare($query);
$q->execute(array(':Product_id'=>$item['Proid'],':productname'=>$item['name'],':brand'=>$item['brand'],':description'=>$item['desc'],':Imagepath'=>$item['image'],':price'=>$item['price'],':quantity'=>$item['quan'],':Total_price'=>$tp,':email'=>$em,':temp'=>$odt));

}
$r2 = $db->prepare("SELECT Order_id from orders WHERE temp = '$odt'");
$r2->execute();

	while($row = $r2->fetch())
    {
		$oid = $row[0];		
	}

$result1 = $db->prepare("update cart1 set Order_id = '$oid' where temp = '$odt'");
$result1->execute();

$result2 = $db->prepare("update cart1 set temp = '' where Order_id = '$oid'");
$result2->execute();

$result3 = $db->prepare("update orders set temp = '' where Order_id = '$oid'");
$result3->execute();



if($r2)
{
	echo "<hr>";
	?>
<!-- -->
<!DOCTYPE html>
<html>
<head>
<?php include("head.php");?>
</head>
	
<body>
<!-- header -->
<?php include("header.php");?>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Detail</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<?php include("categories.php");?>
				 <!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- mail -->
		<div class="mail">
			<h3>***Thanks your order has been recieved***</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-8 agileinfo_mail_grid_right">
				<div class="col-md-6 wthree_contact_left_grid">
				<div style="margin-left: 350px; auto;width: 100%;border: 3px solid green;padding: 10px;"><h1>Order id is : <?php echo $oid;?></h1></div><br>
					*******************************************************************************************************************
					*******************************************************************************************************************
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //mail -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- map -->
<!-- //map -->
<!-- newsletter -->
<?php 
include("footer.php");
unset($_SESSION["cart"]);
}
else
{
	header("location: somethingWentWrongWithOrder.php?");
	exit;	
}
//mysql_close($db);
}
?>