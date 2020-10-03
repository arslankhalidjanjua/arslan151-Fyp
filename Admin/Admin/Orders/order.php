<?php 
include("../header2dot.php"); 
include("../../connection.php"); 
$activePage='order';
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
                						$result = $conn->prepare("SELECT * FROM orders ORDER BY Order_id DESC");
                						$result->execute();
                						$rowcount = $result->rowcount();
                						?>
                						
                						<button type="button" class="btn btn-circle purple">Orders</button>
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
                						<button type="button" class="btn green-meadow">Total Number of Orders:</button>
                						<button type="button" class="btn btn-circle dark"><?php echo $rowcount;?></button>
										
										<?php $employee_id; ?>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                        	<th>Order Id</th>
                                        	<th>Order Status</th>
                                        	<th>Payment Method</th>
                                            <th>Shipping Address</th>
                                            <th>Order Ammount</th>
											<th>Order Time</th>
                                            <!--<th>Email id</th>-->
                                            <th width="250">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
										<?php 
										$no=1;

										$result = $conn->prepare("select * from orders ORDER BY Order_id DESC");
                                    	$result->execute();
                                    	while ($data=$result->fetch()) {
										?>
										
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['Order_id']; ?></td>
                                            <td><?php echo $data['order_status']; ?></td>
                                            <td><?php echo $data['PaymentMethod']; ?></td>
                                            <td><?php echo $data['ShippingAddress']; ?></td>
                                            <td><?php echo $data['Order_Ammount']; ?></td>
                                            <td><?php echo $data['OrderDateTime']; ?></td>
                                           <!-- <td><?php //echo $data['Email_id'];?></td>-->
											<?php $data['Email_id']; ?>
                                            
                                            <td>
											<a title="Click to view order detail" href="viewSingleOrder.php?id=<?php echo $data['Order_id']; ?>&em=<?php echo $data['Email_id']; ?>"><button type="button" class="btn btn-circle purple">View</button></a>
											<?php if($data['order_status']=="Approved"){?>
											
											<?php 
											}
											else
											{
											?>
											<a title="Click to approve this order" href="saveInvoice.php?id=<?php echo $data['Order_id']; ?>&em=<?php echo $data['Email_id']; ?>&employee_id=<?php echo $employee_id; ?>"><button type="button" class="btn btn-circle dark">Approve</button></a>		
											<?php
											}
											?>
											<!--<a onclick="return confirm('Do you want to delete it...???')" href="delete.php?id=<?php //echo $data['Order_id']; ?>"><button type="button" class="btn btn-circle red-mint">Delete</button></a>-->
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