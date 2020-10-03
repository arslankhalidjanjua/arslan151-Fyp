<?php include("connection.php"); ?>
<title>Arslan Floor Mill</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<?php 
session_start();
if(isset($_SESSION['Email'])){
?>
	<!--If login then show this header-->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.php">HELLO <?php echo strtoupper($_SESSION['name']); ?></a>
		</div>
		
		<div class="w3l_search">
			<form action="products.php" method="post">
				<input type="text" name="keywords" id="keywords" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		
		<div class="w3l_header_right1">
			<h2><a href="contactUs.php">Contact Us</a></h2>
		</div>
		
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu" style="right: 4px;right: auto;">
								<li><a href="profile.php">My Profile</a></li> 
								<li><a href="changePassword.php">Change Password</a></li>
								<li><a href="customerOrders.php">My Orders</a></li> 
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="w3l_header_right1">
			<h2><a href="AftabCart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>SARAHAD FLOUR</span>MILL</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.php">Events</a><i>/</i></li>
					<li><a href="about.php">About Us</a><i>/</i></li>
					<li><a href="products.php">Best Deals</a><i>/</i></li>
					<li><a href="index.php">Services</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+92) 342 906 2156</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:arslan@gmail.com">arslan@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<?php 
}
else{
?>
	<!--If Not login then show this header-->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="events.php">Today's special News !</a>
		</div>
		
		<div class="w3l_search">
			<form action="products.php" method="post">
				<input type="text" name="keywords" id="keywords" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		
		<div class="w3l_header_right1">
			<h2><a href="contactUs.php">Contact Us</a></h2>
		</div>
		
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu" style="right: 4px;right: auto;">
								<li><a href="login.php">Login</a></li> 
								<li><a href="login.php">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="w3l_header_right1">
			<h2><a href="AftabCart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>SARAHAD FLOUR</span>MILL</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.php">Events</a><i>/</i></li>
					<li><a href="about.php">About Us</a><i>/</i></li>
					<li><a href="products.php">Best Deals</a><i>/</i></li>
					<li><a href="services.php">Services</a></li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+92) 342 906 2156</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:aftab@gmail.com">aftab@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<?php }?>