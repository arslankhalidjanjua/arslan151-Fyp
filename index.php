<!DOCTYPE html>
<html>
<head>
<?php include("head.php");?>
</head>	
<body>
<!-- header -->
<?php 
include("header.php");
?>
<!-- //header -->
<!-- banner -->
<?php include("banner.php");?>
<!-- banner -->
	<div class="banner_bottom">
			<div class="wthree_banner_bottom_left_grid_sub">
			</div>
			<div class="wthree_banner_bottom_left_grid_sub1">
				
				
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/MAIDA.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_bottom_left_grid_pos">
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/ATTA.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos">
							
						</div>
					</div>
				</div>
				
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/help.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos1">
							<h3>         Reach <span>       Us                      </span></h3>
                                                     <h4><a href="contactUs.php">Contact Us</a></h4>



						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Hot Offers</h3>
			<div class="agile_top_brands_grids">
				
				<?php
					$result = $db->prepare("SELECT * FROM products");
					$result->execute();
					while($row = $result->fetch()){	
					
				?>
				
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									
								<div class="snipcart-item block" >
									<div class="snipcart-thumb">
										
										<a href ='single.php?woman=woman&p=<?php echo $row[1];?>&p2=<?php echo $row[0];?>&p3=<?php echo $row[2];?>p4=<?php echo $row[3];?>'><img src ="Collection/Both/<?php echo $row['Imagepath'];?>" height = 307 width = 230> </a><br> <font style = 'font-family:Rupee Foradian'> </font>"<?php echo $row['Price'];?>"<br>"<?php echo $row['Description'];?>"</a>	
									
										<!--<p><?php //echo $row[0];?></p>-->
										<!--<h4><?php //echo $row['Price'];?></h4>-->
										</div>
										
										
										<!--
										<div class="snipcart-details top_brand_home_details">
											<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="basmati rise" />
													<input type="hidden" name="amount" value="11.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit1" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
										</div>
										-->
										
									</div>
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
<!-- //top-brands -->



<!-- newsletter -->
	<?php include("footer.php");?>
