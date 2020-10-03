<!DOCTYPE html>
<html>
<head>
<?php 
error_reporting(0);
include("head.php");
?>
</head>
	
<body>
<!-- header -->
<?php include("header.php");?>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Checkout</li>
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
<!-- about -->
<?php
session_start();

if(!isset($_SESSION['Email']))
{
echo "<h2>Please Login first...........</h2>";
}
else
{
include 'connection.php';
$name=$_SESSION['name'];
if(isset($_SESSION['name']))
{
	$eid = $_SESSION['Email'];
	
$result = $db->prepare("select * from orders where Email_id = '$eid'");
$result->execute();	
?>

		<div class="privacy about">
			<h3><?php echo strtoupper($name); ?><span>&nbsp;&nbsp;&nbsp;Your all Orders</span></h3>
	      <div class="checkout-right">
					
				<table class="timetable_sub">
					<thead>
					
						<tr>
							<th>Order ID</th>	
							<th>Shipping Address</th>
							<th>Order Ammount	</th>
							<th>Email id</th>
							<th>Order Detail</th>
						</tr>
					</thead>
					<tbody>
					
<?php
while($row = $result->fetch())
{	
?>
					<tr class="rem1">
						<td class="invert"><?php echo $row[0]; ?></td>
						<td class="invert"><?php echo $row[9]; ?></td>
						<td class="invert"><?php echo $row[17]; ?></td>
						<td class="invert"><?php echo $row[20]; ?></td>
						<td class="invert">
							<div class="rem">
								<a href="viewcart.php?id=<?php echo $row[0]; ?>&em=<?php echo $row[20]; ?>"><div class="fa fa-external-link-square" style="font-size:48px;color:red"> </div></a>
						</div>
						</td>
					</tr>
					
					<?php 
					}
					}	
					}
					?>
					<tr bgcolor="#FF0000"><td></td><td></td><td></td><td></td><td></td></tr>
					<tr bgcolor="black"><td></td><td></td><td></td><td></td><td></td></tr>
					<tr bgcolor="green"><td></td><td></td><td></td><td></td><td></td></tr>
					
				</tbody></table>
			</div>
			<div class="checkout-left">	
				
			<div class="col-md-8 address_form_agile">
				<div class="checkout-right-basket">
				       <a href="index.php">Go To Home<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			    </div>
			</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter -->
<?php include("footer.php");?>