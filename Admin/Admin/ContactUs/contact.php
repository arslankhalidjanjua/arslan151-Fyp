<?php 
include("../header2dot.php"); 
include("../../connection.php"); 
$activePage='contact';
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
                						$result = $conn->prepare("SELECT * FROM contactus ORDER BY contactus_id DESC");
                						$result->execute();
                						$rowcount = $result->rowcount();
                						?>
                						<button type="button" class="btn btn-circle purple">Contact Us</button>
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						<button type="button" class="btn green-meadow">Total Number of Contact:</button>
                						<button type="button" class="btn btn-circle dark"><?php echo $rowcount;?></button>
                                        
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>                                           
                                            <th width="180">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
										<?php 
										$no=1;

										$result = $conn->prepare("SELECT * FROM contactus");
										$result->execute();
                                    	while ($data=$result->fetch()) {
											?>
										
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['subject']; ?></td>
                                            <td><?php echo $data['message']; ?></td>
                                            <td><?php echo $data['Date']; ?></td>
                                            
                                            <td>
											<a onclick="return confirm('Do you want to delete it...???')" href="delete.php?id=<?php echo $data['contactus_id']; ?>"><button type="button" class="btn btn-circle red-mint">Delete</button></a>
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