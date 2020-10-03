<!DOCTYPE html>
<html>
<head>
<?php 
include 'connection.php';
include("head.php");
?>
</head>
	
<body>
<!-- header -->
	<?php 
	include("header.php");
	?>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Events</li>
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
<!-- events -->
		<div class="events">
			<h3>Events</h3>
			<div class="w3agile_event_grids">
				
				<?php
				$a=1;
				$result = $db->prepare("select * from  events where status='Activate' ");
				$result->execute();
				while ($data=$result->fetch()) {
				?>
				<?php
				if($a % 2 == 0){
				?>
				<div class="col-md-6 w3agile_event_grid">
					<div class="col-md-3 w3agile_event_grid_left">
						<i class="fa fa-bullhorn" aria-hidden="true"></i>
					</div>
					<div class="col-md-9 w3agile_event_grid_right">
						<h4><?php echo $data['title']; ?></h4>
						<p><?php echo $data['description'];?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php
				}
				else
				{
				?>
				
				<div class="col-md-6 w3agile_event_grid">
					<div class="col-md-3 w3agile_event_grid_left">
						<i class="fa fa-bullhorn" aria-hidden="true"></i>
					</div>
					<div class="col-md-9 w3agile_event_grid_right">
						<h4><?php echo $data['title']; ?></h4>
						<p><?php echo $data['description'];?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php
				}
				?>
					<?php
					$a++;
					}
					?>
				<div class="clearfix"> </div>
			</div>
			
			
			
			<div class="events-bottom">
				<div class="col-md-6 events_bottom_left">
					<div class="col-md-4 events_bottom_left1">
						<div class="events_bottom_left1_grid">
							<h4>20</h4>
							<p>July, 2016</p>
						</div>
					</div>
					<div class="col-md-8 events_bottom_left2">	
						<img src="images/15.jpg" alt=" " class="img-responsive" />
						<h4>ut aut reiciendis facere possimus</h4>
						<ul>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i>3:00 PM</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil 
							impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
							assumenda est.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 events_bottom_left">
					<div class="col-md-4 events_bottom_left1">
						<div class="events_bottom_left1_grid">
							<h4>21</h4>
							<p>July, 2016</p>
						</div>
					</div>
					<div class="col-md-8 events_bottom_left2">	
						<img src="images/19.jpg" alt=" " class="img-responsive" />
						<h4>maxime placeat facere possimus</h4>
						<ul>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i>3:30 PM</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil 
							impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
							assumenda est.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //events -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter -->
	<?php include("footer.php");?>