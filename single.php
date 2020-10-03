<!DOCTYPE html>
<html>
<head>
<?php 
//include("head.php");
include("head.php");
?>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
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
				<li>Single Page</li>
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
			
					<?php
					$product_id=$_GET['p2'];
					$result = $db->prepare("SELECT * FROM products where product_id='$product_id'");
					$result->execute();
					$row = $result->fetch();
					?>
					<!--<form action = "Cart.php?" method = "post">-->
					<form action = "AftabCart.php?" method = "post">

						<table width='1000' height= 318 border= 0 cellpadding= 0 cellspacing = 5 align = center style = 'padding:5px; background-color:white; font-family:Futura Lt BT; font-weight:400; font-size:15px;'> <tr>
						<td align = center rowspan= 7><img src ="Collection/Both/<?php echo $row['Imagepath'];?>" class = 'imgbg' height = 307 width = 230><br></td>
						<td>Product Id :<td> <input type = 'text' class = 'in7' name = 'id' value ="<?php echo $row['Product_id'];?>" readonly> </td>
						</tr> <tr>
						<td>Product Name <td><input type = 'text' name = 'pn' class = 'in7' value ="<?php echo $row['ProductType'];?>" size = 40 readonly> </td>
						</tr> <tr>
						<td>Brand <td> <input type = 'text' name = 'b' class = 'in7' value = "<?php echo $row['product_brand_id'];?>" readonly> </td>
						</tr> <tr>
						<td>Description<td><input type = 'text' name = 'd' class = 'in7' value ="<?php echo $row['Description'];?>" size = 40 readonly> </td>
						</tr> <tr>
						<td>Price<td><font style = 'font-family:Rupee Foradian'> </font> <input type = 'text' class = 'in7' name = 'p' value ="<?php echo $row['Price'];?>" readonly> </td>
						</tr> <tr>
						<td> Quantity</td><td><input type = 'number' min = '1'   value = '1' name = 'quantity' size = 1> <!--<input type 'text'  value ="<?php //echo $row[1];?>" class = 'in8'name = 'c' size = 1>--></td>
						</tr> <tr>
						<td colspan = 2><button title="Click Add Cart" style="background:green" type = 'submit' class = 'Addtocart'  name = 'submit'> Add to Cart </button></td>
						
						</tr> <tr>
						<td colspan = 2>&nbsp;</td>
						</tr> </table>
						</form>
			
		</div>
		<div class="clearfix"></div>
	</div>	
<!-- //banner -->
<!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>Popular Brands</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>food</h6>
					<?php
					$result = $db->prepare("SELECT * FROM products ");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
						
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
									
										<h4><?php echo $row['Price'];?></h4>
										</div>
										<!--<div class="snipcart-details top_brand_home_details">
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
										</div>-->
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
<!-- //brands -->
<!-- newsletter -->
<?php include("footer.php");?>