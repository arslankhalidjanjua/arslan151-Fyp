<?php include("../header2dot.php");?>
<?php include("../../connection.php");
$activePage='product'; 
?>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
					<!-- BEGIN SIDEBAR MENU -->
                    <?php include("../AdminDashBoard/sideMenu.php"); ?>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="#">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
									
						<?php 
						$result = $conn->prepare("SELECT * FROM products ORDER BY Product_id DESC");
						$result->execute();
						$rowcount = $result->rowcount();
						?>
						<a href="add.php"><button type="button" class="btn btn-circle purple">Add Product</button></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn green-meadow">Total Number of Products:</button>
						<button type="button" class="btn btn-circle dark"><?php echo $rowcount;?></button>
									
									</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
											<th>No</th>
                                        	<th>Category</th>
                                            <th>ProductType</th>
                                            <th>Brand</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Foto</th>
                                            <th>Quantity</th>
                                            <th width="240">Action</th>
												
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
										<?php 
                                    	$no=1;
										
										$result = $conn->prepare("select * from  products Join product_brand on products.product_brand_id=product_brand.product_brand_id JOIN product_category on products.product_category_id=product_category.product_category_id");
                                    	$result->execute();
                                    	while ($data=$result->fetch()) {
										?>
                                            <tr>
											<td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['product_category_name']; ?></td>
                                            <td><?php echo $data['ProductType']; ?></td>
                                            <td><?php echo $data['product_brand_name']; ?></td>
                                            <td><?php echo $data['Price']; ?></td>
                                            <td><?php echo $data['Description']; ?></td>
                                            <td><img src="../../../Collection/Both/<?php echo $data['Imagepath']; ?>" alt="" width="50" height="50"> </td>
											<td><?php echo $data['stock']; ?></td>
                                            <td>
											<a href="detail.php?id=<?php echo $data['Product_id']; ?>"><button type="button" class="btn btn-circle purple">Detail</button></a>
											<a title="Click to edit the product" href="edit.php?id=<?php echo $data['Product_id']; ?>"><button type="button" class="btn btn-circle dark">Edit</button></a>
											<a onclick="return confirm('Do you want to delete it...???')" href="delete.php?id=<?php echo $data['Product_id']; ?>"><button type="button" class="btn btn-circle red-mint">Delete</button></a>
											</td>
                                            </tr>
                                           <?php  
										   } 
										   ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
<?php 
include("../footer2dot.php");
?>