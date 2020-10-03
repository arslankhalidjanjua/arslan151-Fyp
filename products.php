<!DOCTYPE html>
<html>
<head>
<?php
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
				<li>Products</li>
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
			<div class="w3l_banner_nav_right_banner3">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			
				
				
				
				
				
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>Best & Hot Products</h6>
				
				<?php
				    
					if(isset($_GET['keywords'])){
					$Description=$_GET['keywords'];
					$result = $db->prepare("SELECT * FROM products where Description LIKE '%$Description%'");
					$result->execute();
					}
					else
					{
					$result = $db->prepare("SELECT * FROM products");
					$result->execute();
					}
					while($row = $result->fetch()){
				?>
				
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href ='single.php?woman=woman&p=<?php echo $row[1];?>&p2=<?php echo $row[0];?>&p3=<?php echo $row[2];?>p4=<?php echo $row[3];?>'><img src ="Collection/Both/<?php echo $row['Imagepath'];?>" height = 307 width = 230> </a><br> <font style = 'font-family:Rupee Foradian'> </font>"<?php echo $row['Price'];?>"<br>"<?php echo $row['Description'];?>"</a>	
											<!--<p><?php //echo $row[0];?></p>-->
											<!--<h4><?php //echo $row['Price'];?></h4>-->
										</div>
										<!--
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="fresh broccoli" />
													<input type="hidden" name="amount" value="4.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
									-->
								</figure>
							</div>
						</div>
						</div>
					</div>
					
					<?php }?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter -->
<?php include("footer.php");?>