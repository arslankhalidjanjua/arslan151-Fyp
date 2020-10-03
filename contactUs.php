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
				<li>Contact Us</li>
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
			<h3>Contact Us</h3>
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
					<form name="ContactUs" action="saveContactUs.php" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							Name<input type="text" name="name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="">
							Email<input type="email" name="email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							Contact No<input type="text" name="contactno" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="">
							Subject<input type="text" name="subject" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="">
						</div>
		
						<div class="clearfix"> </div>
						&nbsp;&nbsp;&nbsp;Message<textarea  name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" name="Send" value="Submit">
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
	<?php include("footer.php");?>