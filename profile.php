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
			<h3>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo strtoupper($_SESSION['name']);?> Your Profile Detail</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<td class="invert-image"><a href="#"><img src="Collection/Both/user.jpeg" alt=" " class="img-responsive"></a></td>
					</ul>
				</div>
				
				<?php
					$User_id=$_SESSION['User_id'];
					$result = $db->prepare("select * from signuptable where User_id = '$User_id'");
					$result->execute();
					$row = $result->fetch();	
					$FirstName =$row['FirstName'];
					$LastName =$row['LastName'];
				?>
				
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form name = "myprofile" action="saveProfileChanges.php" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							First Name<input type="text" name="f" value="<?php echo $row['FirstName'];?>"  required="">
							Contact No<input type="text" name="c" value="<?php echo $row['ContactNo'];?>"  required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							Last Name<input type="text" name="l" value="<?php echo $row['LastName'];?>"  required="">
							Gender<input type="text" name="g" value="<?php echo $row['Gender'];?>"  required="">
						</div>
		
						<div class="clearfix"> </div>
						</br></br></br>
						<input type="submit" name="submit" value="Save Changes">
						<input type="reset" value="Cancel">
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