<?php include("../header2dot.php");?>
<?php include("../../connection.php");
$activePage='profile'; 
echo $employee_id= $_SESSION['SESS_MEMBER_ID'];

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
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>User Profile | Account 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<?php if(isset($_GET['messageSuccess'])){?><span style="color:green;text-align:center;"><?php echo $b=$_GET['messageSuccess'];}?></span>
					        <?php if(isset($_GET['passAndConfPssNotMch'])){?><span style="color:red;text-align:center;"><?php echo $b=$_GET['passAndConfPssNotMch'];}?></span>
					        <?php if(isset($_GET['currPass'])){?><span style="color:red;text-align:center;"><?php echo $b=$_GET['currPass'];}?></span>
                            
							<?php $employee_id= $_SESSION['SESS_MEMBER_ID']; ?>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">User</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <?php 
										$employee_id=$_SESSION['SESS_MEMBER_ID'];
																		
										$result = $conn->prepare("SELECT * FROM employee where employee_id = ?");
										$result->execute(array($employee_id));
										$row = $result->fetch();
										?>
                                        <img src="../../img/dosen/<?php echo $row['picture'];?>" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"><?php echo $row['first_name'].' '.$row['last_name'];?></div>
                                        <div class="profile-usertitle-job"><?php echo $row['role'];?></div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                        <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>								
												</div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="#" method="POST">
                                                            
															<div class="form-group">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" name="firstname" id="firstname" value="<?php echo $row['first_name']; ?>" required="true" readOnly class="form-control" />
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" name="lastname" id="lastname" value="<?php echo $row['last_name']; ?>" required="true" readOnly class="form-control" /> 
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">Mobile Number</label>
                                                                <input type="text" name="mobileno" id="mobileno" value="<?php echo $row['mobile_no']; ?>" required="true" readOnly class="form-control" /> 
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="text" name="emailid" id="emailid" value="<?php echo $row['email_id']; ?>" required="true" readOnly class="form-control" /> 
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">Occupation/Role</label>
                                                                <input type="text" name="role" id="role" value="<?php echo $row['role']; ?>" required="true" readOnly class="form-control" /> 
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">Address</label>
                                                                <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>" required="true" readOnly class="form-control" /> 
															</div>
                                                           
														   
														   
                                                            <div class="margiv-top-10">  
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" name="submit_post" class="btn btn-circle green">Save Changes</button>
																<button type="button" onclick=self.history.back() class="btn btn-circle grey-salsa btn-outline">Cancel</button>
															</div>
															</div>
															
															<div class="margiv-top-10">
                                                                <a class="btn green"></a>
                                                                <a class="btn default"></a>
                                                            </div>
															
															
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                  
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form role="form" method="POST" action="updatePassword.php" >
														<input type="hidden" name="employeeid" value="<?php echo $employee_id; ?>" />
                                                            <div class="form-group">
                                                                <label class="control-label">Current Password</label>
                                                                <input type="password" name="currentpassword" id="currentpassword" placeholder="Enter Current Password" class="form-control" /> 
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" name="newpassword" id="newpassword" placeholder="Enter New Password" class="form-control" /> 
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">Re-type New Password</label>
                                                                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password" id="confirmpassword" class="form-control" /> 
															</div>
                                                            
															<div class="margiv-top-10">  
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" name="submit_post" value="Update" class="btn btn-circle green">Save Changes</button>
																<button type="button" onclick=self.history.back() class="btn btn-circle grey-salsa btn-outline">Cancel</button>
															</div>
															</div>
															
															<div class="margin-top-10">
                                                                <a class="btn green"></a>
                                                                <a class="btn default"></a>
                                                            </div>
															
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
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