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
				<li>Sign In & Sign Up</li>
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
<!-- login -->
		<div class="w3_login">
			<?php
			if(isset($_GET['passwordNotMatch'])){?>
			<h3 style="color:red;">Sorry Your Password Not Match, Please Try again.</h3>
			<?php
			}
			else
			{
			if(isset($_GET['thisEmailIsAllreadyRegistered'])){
			?>
			<h3 style="color:red;">Sorry This Email Is Allready Registered.</h3>
			<?php
			}
			else{}
			}
			?>
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form name = "login" action = "Loginform.php" method = "post">	
					  <input type="email" name="Email_id" id = "eid" placeholder="Enter Email Id" required="true">
					  <input type="password" name = "password"  id = "p" placeholder="Password" required="true">
					  <!--<input type="submit" value="Login">-->
					  <input type = "submit" name ="login"  class = "button" id = "login" value = "Login">
					  
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form name="signup" action="saveRegistration.php"  method="post">
					 First Name<input type="text" name="fname" id="fid" placeholder="First Name" required=" ">
					 Last Name<input type="text" name="lname" id="lid" placeholder="Last Name" required=" ">
					 Contact No<input type="text" name="contact"  id="cid" placeholder="Phone Number" required=" ">
					 Email Id<input type="email" name="email" id="eid" placeholder="Email Id" required=" ">
					 Address<input type="text" name="address" id="address" placeholder="Enter Your Address" required=" ">
					 Country<input type="text" name="country" id="country" value="Pakistan"  required=" " readOnly>
					 Password<input type="password" name="password" id="pa" placeholder="Password" required=" ">
					 Confirm Password<input type="password" name="c_password" id="cpid" placeholder="Password" required=" ">
					 <input type="submit" value="Register">
					</form>
				  </div>
				  
				  <div class="cta"><a href="ForgotPassword.php">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter -->
<?php include("footer.php");?>