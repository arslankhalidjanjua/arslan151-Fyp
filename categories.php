<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
	<ul class="nav navbar-nav nav_1">
	
	<?php
	if(isset($_SESSION['Email'])){
	$result = $db->prepare("select * from  product_category");
	$result->execute();
	while ($data=$result->fetch()) {
	?>
		<li><a href="products.php?id=<?php echo $data['product_category_id']; ?>&keywords=<?php echo $data['product_category_name']; ?>"><?php echo $data['product_category_name']; ?></a></li>
		<?php  
		}?>
		<br/>
		<td><a href="customerOrders.php"><button class="btn btn-warning btn-lg" style="font-size: 50px;" width="300px;" height="40px;"><i class="icon-eye"></i>*MY Orders</button></a>
		
	<?php	
	}
	else
	{
		$result = $db->prepare("select * from  product_category");
		$result->execute();
		while ($data=$result->fetch()) {
		?>
		<li><a href="products.php?id=<?php echo $data['product_category_id']; ?>&keywords=<?php echo $data['product_category_name']; ?>"><?php echo $data['product_category_name']; ?></a></li>
		
		<?php  
		}
		}
		?>
	</ul>
</div>