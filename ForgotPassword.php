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
				<li>Forgot Password</li>
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
<?php
if(isset($_GET['EmailNotRegester'])){?>
<div class="privacy about">
	<h3 style="color:red;">Sorry <span>This Email id is Not Regester with us.....</span></h3>
</div>
<?php
}
else
{?>
<div class="privacy about">
</div>
<?php
}
?>

<!-- newsletter -->
	<div class="newsletter" style="background-color: green;" >
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>Please Enter Email To Send You Password</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="sendEmail.php" method="post">
					<input type="email" name="Email_id" id="eid" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" name ="submit" value="Send Me Password">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
		<div class="mail">
			
		</div>
		
<!-- //mail -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- map -->
<!-- //map -->
</br></br>
<?php include("footer.php");?>