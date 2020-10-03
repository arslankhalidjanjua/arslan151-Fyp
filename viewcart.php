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

		<div class="privacy about">
			<h3><?php echo strtoupper($_SESSION['name']); ?><span>&nbsp;&nbsp;&nbsp;Your Order Detail</span></h3>
	      <div class="checkout-right">
					
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Cart ID</th>	
							<th>Image</th>
							<th>Description</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					
<?php
include 'connection.php';

if(isset($_GET['id']))
{
	
$oid = $_GET['id'];
$emid = $_GET['em'];	
}
$r = $db->prepare("select * from cart1 where Order_id = '$oid' and email = '$emid'");
$r->execute();

while($rows = $r->fetch())
{
?>
					<tr class="rem1">
						<td class="invert"><?php echo $rows[0]; ?></td>
						<td  class="invert-image"><img src="Collection/Both/<?php echo $rows[6];?>" alt=" " width="40" height="40" class="img-responsive"></td>
						<td class="invert"><?php echo $rows[5]; ?></td>
						<td class="invert"><?php echo $rows[7]; ?></td>
						<td class="invert"><?php echo $rows[8];	 ?></td>
						<td class="invert"><?php echo $rows[9]; ?></td>
					</tr>
					
					<?php 
					}
					?>
					<tr bgcolor="#FF0000"><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr bgcolor="black"><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr bgcolor="green"><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					
				</tbody></table>
			</div>
			<div class="checkout-left">	
				
			<div class="col-md-8 address_form_agile">
				<div class="checkout-right-basket">
				       <a href="customerOrders.php"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Go Back</a>
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