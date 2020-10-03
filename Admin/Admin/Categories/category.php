<?php include("../header2dot.php");?>
<?php include("../../connection.php");
$activePage='category'; 
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
                						$result = $conn->prepare("SELECT * FROM product_category ORDER BY product_category_id DESC");
                						$result->execute();
                						$rowcount = $result->rowcount();
                						?>
                						<a href="add.php"><button type="button" class="btn btn-circle purple">Add Category</button></a>
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						<button type="button" class="btn green-meadow">Total Number of Categories:</button>
                						<button type="button" class="btn btn-circle dark"><?php echo $rowcount;?></button>

										
									</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
											<th>No</th>
                                            <th>Category Name/Type</th>
                                            <th>Date</th>                                           
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
										<?php 
										$no=1;

										$result = $conn->prepare("select * from  product_category");
                                    	$result->execute();
                                    	while ($data=$result->fetch()) {
										?>
										
                                            <tr>
											<td><?php echo $no++; ?></td>
                                            <td><?php echo $data['product_category_name']; ?></td>
                                            <td><?php echo $data['Date']; ?></td>
                                            <td>											    
											<a title="Click to edit the product" href="edit.php?id=<?php echo $data['product_category_id']; ?>"><button type="button" class="btn btn-circle dark">Edit</button></a>
											<a onclick="return confirm('Do you want to delete it...???')" href="delete.php?id=<?php echo $data['product_category_id']; ?>"><button type="button" class="btn btn-circle red-mint">Delete</button></a>
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