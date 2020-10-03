<?php
error_reporting(0);
session_start();

include 'connection.php';

if(isset($_SESSION['Email']))
{
	
$User_id = $_SESSION['User_id'];

$resultUpdate = $db->query("select * from signuptable where User_id='$User_id'");
$records =$resultUpdate->fetch();
	
if(!isset($_SESSION['cart']))
{
	$_SESSION['cart'] = array();
}
?>
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
			<h3>Shipping Detail</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>address<span>DERA ISMAIL KHAN</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>email<span><a href="mailto:info@example.com">aftab@gmail.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>call to us<span>(+92) 342 906 2156</span></li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form name = "checkout" action="check.php" method="post">
						
						<?php 
						$resultOfUser = $db->query("select * from signuptable where User_id='$User_id'");
						$row=$resultOfUser->fetch();
						?>
						
						<div class="col-md-6 wthree_contact_left_grid">
							First Name
							<input type="text" name="sfname" id="sfname" value="<?php echo $row['FirstName']; ?>" required="true" readOnly>
						</div>
						
						<div class="col-md-6 wthree_contact_left_grid">
							Last Name
							<input type="text" name="slname" id="slname" value="<?php echo $row['LastName']; ?>" required="true" readOnly>
						</div>
						
						<div class="col-md-6 wthree_contact_left_grid">
							Email
							<input type="email" name="semail" id="semail" value="<?php echo $row['EmailId']; ?>" required="true" readOnly>
						</div>
						
						<div class="col-md-6 wthree_contact_left_grid">
							Address
							<input type="text" name="Address" id="Address"  value="<?php echo $row['address']; ?>" required="true">
						</div>
						
						<div class="col-md-6 wthree_contact_left_grid">
							Contry
							<input type="text" name="select" id="select" value="<?php echo $row['country']; ?>" required="true">
						</div>
						
						<div class="col-md-6 wthree_contact_left_grid">
							State
							<input type="text" name="select2" id="select2" value="<?php echo $row['state']; ?>" required="true">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							City
							<input type="text" name="select3" id="select3" value="<?php echo $row['city']; ?>" required="true">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							Zip Code
							<input type="text" name="zcode" id="zcode" required="true">
						</div>
						
						<div class="col-md-6 wthree_contact_left_grid">
							Contatc
							<input type="text" name="stel2" value="<?php echo $row['ContactNo']; ?>" required="true">
						</div>
				
				<div class="col-md-6 wthree_contact_left_grid">
					*************************************************************************
					*************************************************************************
				</div>
						<div class="clearfix"> </div>
						<input type="submit" name="submit" value="Place Order Now">
						<input type="reset" value="Clear">
					</form>
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
}else
{
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
			<h3>***Please Login First or Sign up Now***</h3>
			</br></br></br></br></br></br>
			<div class="agileinfo_mail_grids">
				<div class="col-md-8 agileinfo_mail_grid_right">
					
				
				<!--<div class="col-md-6 wthree_contact_left_grid">
				<div style="margin-left: 350px; auto;width: 100%;border: 3px solid green;padding: 10px;"><h1>Order id is : 25</h1></div><br>
					*******************************************************************************************************************
					*******************************************************************************************************************
				</div>-->
						
					</form>
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
<?php //include("footer.php");?>
<!-- -->
<?php
}
?>
<?php include("footer.php");?>