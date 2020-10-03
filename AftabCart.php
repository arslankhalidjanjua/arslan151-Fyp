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
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
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
include 'connection.php';
if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}
if(isset($_POST['submit'])){
			$cate = $_POST['c'];
			$p_id = $_POST['id'];
				/*if($cate == 'Men'){
					$q = "select * from products where Product_id = $p_id ";
				}*/
				
					$q = "select * from products where Product_id = $p_id";
					
					$result = $db->prepare("$q");
					$result->execute();
					while($r = $result->fetch()){
						$items[] = $r;				
					}
		$itemArray = array($items[0][0]=>array('Proid' => $items[0][0], 'name'=>$items[0][3], 'brand'=>$items[0][4], 'desc'=>$items[0][7], 'quan'=>$_POST["quantity"], 'price'=>$items[0][5], 'image'=> $items[0][6]));
		$_SESSION['cart'] += $itemArray;	
	}
			elseif(empty($_SESSION['cart'])){				
				echo "<h2>There is No Items in Your Cart...........</h2>";
			}
			elseif(isset($_GET['action'])){
				foreach($_SESSION["cart"] as $k => $v) {
					if($_GET["id"] == $k){
						unset($_SESSION["cart"][$k]);				
						}	
				}	
					if(empty($_SESSION['cart'])){
						echo "<h2>There is No Items in Your Cart...........</h2>";
					}		
	}
	?>
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>
			<div class="information-wrapper">
			<?php 
			if(!empty($_SESSION['cart']))
			{
			?>
			<a href="checkout.php"><button class="submit check_out">CHECKOUT</button></a>
			<?php 
			}
			?>
			</div>
	      <div class="checkout-right">
					
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Product ID</th>	
							<th>Image</th>
							<th>Description</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
					
<?php
$tp2 = 0;
foreach ($_SESSION["cart"] as $item)
{
	$i = $item['Proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;	
?>					
					<tr class="rem1">
						<td class="invert"><?php echo $item['Proid']; ?></td>
						<td class="invert-image"><a href="single.html"><img src="Collection/Both/<?php echo $item['image']?>" alt=" " class="img-responsive"></a></td>
						<td class="invert"><?php echo $item['desc']; ?></td>
						<td class="invert"><?php echo $item['price']; ?></td>
						<td class="invert"><?php echo $item['quan']; ?></td>
						<td class="invert"><?php echo $tp; ?></td>
						<td class="invert">
							<div class="rem">
								<a href="
								
								
								Cart.php?action&id=<?php echo $i; ?>"><div class="close1"> </div></a>
						</div>
						</td>
					</tr>
					
					<?php 
					}
					?>
					<tr bgcolor="#FF0000"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr bgcolor="black"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td bgcolor="green"></td><td bgcolor="green"></td><td bgcolor="green"></td><td bgcolor="green"></td><td bgcolor="lemonchiffon">Sub Total</td><td bgcolor="lemonchiffon"><?php echo $tp2; ?></td><td bgcolor="green"></td></tr>
					
				</tbody></table>
			</div>
			<div class="checkout-left">	
				
			<div class="col-md-8 address_form_agile">
				<div class="checkout-right-basket">
				       <a href="index.php">Continue Shopping<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
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