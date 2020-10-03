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
                            <!-- Begin: life time stats -->
						<?php	
						
						$oid = $_GET['id'];
						$emid = $_GET['em'];	
						
						$result = $conn->prepare("select * from cart1 where Order_id = '$oid' and email = '$emid'"); 
						$result->execute();
						$row = $result->fetch();
						$date_time=$row['date_time'];
						
						//getting detail from orders table
						$result1 = $conn->prepare("select * from orders where Order_id = '$oid'"); 
						$result1->execute();
						$row1 = $result1->fetch();
						$Order_Ammount=$row1['Order_Ammount'];
						$PaymentMethod=$row1['PaymentMethod'];
						$order_status=$row1['order_status'];
						$FirstName=$row1['FirstName'];
						$LastName=$row1['LastName'];
						$FullName=$row1['FirstName'].' '.$row1['LastName'];
						$Email=$row1['Email'];
						$contactNo=$row1['contactNo'];
						$city=$row1['City'];
						$country=$row1['Country'];
									
						
						?>
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase"> Order #<?php echo $oid; ?>
                                            <span class="hidden-xs">| <?php echo $date_time=date("d-m-Y H:i:s", strtotime($date_time));?> </span>
                                        </span>
                                    </div>
									<div class="actions">
										<label class="btn btn-transparent green btn-outline btn-circle btn-sm active">
										<a href="order.php"><button type="button" class="btn btn-circle purple">Go Bakck</button></a>
										
								   </div> 
								   
                                </div>
										
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs nav-tabs-lg">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab"> Details </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="portlet yellow-crusta box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Order Details </div>
                                                                
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order #: </div>
                                                                    <div class="col-md-7 value"><?php echo $oid; ?>
                                                                        <span class="label label-info label-sm">**************************</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order Date & Time: </div>
                                                                    <div class="col-md-7 value"><?php echo $date_time=date("d-m-Y H:i:s", strtotime($date_time));?></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order Status: </div>
                                                                    <div class="col-md-7 value">
                                                                        <span class="label label-success"><?php echo $order_status; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Grand Total: </div>
                                                                    <div class="col-md-7 value">RS. <?php echo $Order_Ammount; ?></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Payment Information: </div>
                                                                    <div class="col-md-7 value"><?php echo $PaymentMethod; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="portlet blue-hoki box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Customer Information </div>
                                                                
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Customer Name: </div>
                                                                    <div class="col-md-7 value"><?php echo ucwords($FullName); ?></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Email: </div>
                                                                    <div class="col-md-7 value"><?php echo $Email; ?></div>
                                                                </div>
																
																<div class="row static-info">
                                                                    <div class="col-md-5 name">Country: </div>
                                                                    <div class="col-md-7 value"><?php echo $country; ?></div>
                                                                </div>
																
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name">City: </div>
                                                                    <div class="col-md-7 value"><?php echo $city; ?></div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Phone Number: </div>
                                                                    <div class="col-md-7 value"><?php echo $contactNo; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <!-- <div class="row">
                                                    
													<div class="col-md-6 col-sm-12">
                                                        <div class="portlet green-meadow box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Billing Address </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-12 value"> Jhon Done
                                                                        <br> #24 Park Avenue Str
                                                                        <br> New York
                                                                        <br> Connecticut, 23456 New York
                                                                        <br> United States
                                                                        <br> T: 123123232
                                                                        <br> F: 231231232
                                                                        <br> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
													<div class="col-md-6 col-sm-12">
                                                        <div class="portlet red-sunglo box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Shipping Address </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-12 value"> Jhon Done
                                                                        <br> #24 Park Avenue Str
                                                                        <br> New York
                                                                        <br> Connecticut, 23456 New York
                                                                        <br> United States
                                                                        <br> T: 123123232
                                                                        <br> F: 231231232
                                                                        <br> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													
                                                </div>-->
                                                
												
												<div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="portlet grey-cascade box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Shopping Cart </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover table-bordered table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                               <th> Product ID</th>
                                                                                <th>Cart ID</th>
																				<th>Image</th>
                                                                                <th> Description </th>
                                                                                <th> Price </th>
                                                                                <th>Quantity</th>
                                                                                <th>Total</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
																		
																		<?php
																				
																		$rowItems = $conn->prepare("select * from cart1 where Order_id = '$oid' and email = '$emid'");
																		$rowItems->execute();
																		while($rows = $rowItems->fetch())
																		{
																		?>
																		
                                                                            <tr>
                                                                                <td><?php echo $rows['Product_id']; ?></td>
																				<td><?php echo $rows[0]; ?></td>
                                                                                <td><img src="../../../Collection/Both/<?php echo $rows[6]; ?>" alt="" width="50" height="50"></td>
                                                                                <td> <?php echo $rows[5]; ?></td>
                                                                                <td><?php echo $rows[7]; ?></td>
                                                                                <td><?php echo $rows[8]; ?></td>
                                                                                <td><?php echo $rows[9]; ?></td>
                                                                            </tr>
																			<?php 
																			}
																			?>
																			
                                                                           
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"> </div>
                                                    <div class="col-md-6">
                                                        <div class="well">
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Sub Total: </div>
                                                                <div class="col-md-3 value"><?php echo $Order_Ammount; ?>.00</div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Shipping: </div>
                                                                <div class="col-md-3 value">0.00</div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Grand Total: </div>
                                                                <div class="col-md-3 value"><?php echo $Order_Ammount; ?>.00</div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Total Paid: </div>
                                                                <div class="col-md-3 value">0.00</div>
                                                            </div>
                                                          
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Total Due: </div>
                                                                <div class="col-md-3 value"><?php echo $Order_Ammount; ?>.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: life time stats -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <?php 
include("../footer2dot.php");
?>