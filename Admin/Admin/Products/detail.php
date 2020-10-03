<?php include("../header2dot.php");?>
<?php include("../../connection.php");
$activePage='profile'; 
$Product_id= $_GET['id'];

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
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
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
                                    <div class="profile-userpic" >
                                        <?php 
										//$employee_id=$_SESSION['SESS_MEMBER_ID'];
																		
										$result = $conn->prepare("select * from  products Join product_brand on products.product_brand_id=product_brand.product_brand_id JOIN product_category on products.product_category_id=product_category.product_category_id WHERE products.Product_id ='$Product_id'");
										$result->execute(array($Product_id));
										$row = $result->fetch();
										?>
                                        <img src="../../../Collection/Both/<?php echo $row['Imagepath'];?>" class="img-responsive"   alt=""> 
									</div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
									
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"><?php echo $row['ProductType'];?></div>
                                        <div class="profile-usertitle-job"><?php echo $row['product_brand_name'];?></div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <!--
									<div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                        <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                    </div>
									-->
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
                                                    <span class="caption-subject font-blue-madison bold uppercase">Product Detail</span>								
												</div>
                                               
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="#" method="POST">
                                                            
															<div class="form-group">
                                                                <label class="control-label">Product Name/Type</label>
                                                                <input type="text" name="productname" id="productname" value="<?php echo $row['ProductType']; ?>" required="true" readOnly class="form-control" />
															</div>
                                                            
															<div class="form-group">
                                                                <label class="control-label">Product Category</label>
                                                                <input type="text" name="category" id="category" value="<?php echo $row['product_category_name']; ?>" required="true" readOnly class="form-control" /> 
															</div>
															
															<div class="form-group">
                                                                <label class="control-label">Product Brand</label>
                                                                <input type="text" name="brand" id="brand" value="<?php echo $row['product_brand_name']; ?>" required="true" readOnly class="form-control" /> 
															</div>
                                                            
															
															<div class="form-group">
                                                                <label class="control-label">Product Price</label>
                                                                <input type="text" name="saleprice" id="saleprice" value="<?php echo $row['Price']; ?>" required="true" readOnly class="form-control" /> 
															</div>
															
															<div class="form-group">
                                                                <label class="control-label">Product Description</label>
                                                                <input type="text" name="description" id="description" value="<?php echo $row['Description']; ?>" required="true" readOnly class="form-control" /> 
															</div>
															
															<div class="form-group">
                                                                <label class="control-label">Product Quantity Available</label>
                                                                <input type="text" name="stock" id="stock" value="<?php echo $row['stock']; ?>" required="true" readOnly class="form-control" /> 
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