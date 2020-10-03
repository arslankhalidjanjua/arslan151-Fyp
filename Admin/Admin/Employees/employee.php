<?php include("../header2dot.php");?>
<?php include("../../connection.php");
$activePage='employee'; 
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
                						$result = $conn->prepare("SELECT * FROM employee ORDER BY employee_id DESC");
                						$result->execute();
                						$rowcount = $result->rowcount();
                						?>
                						<a href="add.php"><button type="button" class="btn btn-circle purple">Add Amployee</button></a>
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                						<button type="button" class="btn green-meadow">Total Number of Employee:</button>
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
                                            <th>Mobile No</th>
                                            <th>Email Id</th>
                                            <th>Address</th>
                                            <th>Role</th>
                                            <th>Picture</th>
              
                                            <th width="240">Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
										<?php 
										$no=1;

										$result = $conn->prepare("select * from employee");
                                    	$result->execute();
                                    	while ($data=$result->fetch()) {
										?>
										
                                            <tr>
											<td><?php echo $no++; ?></td>
                                            <td><?php echo $data['first_name']; ?></td>
                                            <td><?php echo $data['last_name']; ?></td>
                                            <td><?php echo $data['mobile_no']; ?></td>
                                            <td><?php echo $data['email_id']; ?></td>
                                            <td><?php echo $data['address']; ?></td>
                                            <td><?php echo $data['role']; ?></td>
                                            <td><img src="../../img/dosen/<?php echo $data['picture']; ?>" alt="" width="50" height="50"> </td>
                                            <td>	
                                            <a href="profile.php?id=<?php echo $data['employee_id']; ?>"><button type="button" class="btn btn-circle purple">Detail</button></a>
											<a title="Click to edit the product" href="edit.php?id=<?php echo $data['employee_id']; ?>"><button type="button" class="btn btn-circle dark">Edit</button></a>
											<a onclick="return confirm('Do you want to delete it...???')" href="delete.php?id=<?php echo $data['employee_id']; ?>"><button type="button" class="btn btn-circle red-mint">Delete</button></a>
										   
										   
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