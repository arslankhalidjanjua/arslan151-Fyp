<?php include("../header2dot.php");?>
<?php include("../../connection.php");
$activePage='customer'; 
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
                            <a href="../AllHomePages/home.php">Home</a>
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
                						$result = $conn->prepare("SELECT * FROM signuptable ORDER BY User_id DESC");
                						$result->execute();
                						$rowcount = $result->rowcount();
                						?>
                						<button type="button" class="btn btn-circle purple">Customers</button>
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						<button type="button" class="btn green-meadow">Total Number of Customers:</button>
                						<button type="button" class="btn btn-circle dark"><?php echo $rowcount;?></button>

										
									</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
											<th>No</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Date</th>                                           
                                            <th width="200">Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
										<?php 
										$no=1;

										$result = $conn->prepare("SELECT * FROM signuptable");
										$result->execute();
                                    	while ($data=$result->fetch()) {
										?>
										
                                            <tr>
											 <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['FirstName']; ?></td>
                                            <td><?php echo $data['LastName']; ?></td>
                                            <td><?php echo $data['Gender']; ?></td>
                                            <td><?php echo $data['ContactNo']; ?></td>
                                            <td><?php echo $data['EmailId']; ?></td>
                                            <td><?php echo $data['DateAndTime']; ?></td>
                                            <?php $name = $data['FirstName'].' '.$data['LastName'];?>
                                            <td>
																
											<a href="allOrdersOfThisCustomer.php?em=<?php echo $data['EmailId']; ?>&name=<?php echo $name; ?>"><button type="button" class="btn btn-circle purple">View</button></a>
											<!--<a title="Click to edit the product" href="#"><button type="button" class="btn btn-circle dark">Invoice</button></a>-->
											<!--<a onclick="return confirm('Do you want to delete it...???')" href="delete.php?id=<?php //echo $data['User_id']; ?>"><button type="button" class="btn btn-circle red-mint">Delete</button></a>-->
										   
											
											
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