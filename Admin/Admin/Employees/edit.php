<?php include("../header2dot.php");?> 
<?php include("../../connection.php"); ?>
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
				
				
<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
	<div class="col-md-12">
		<div class="tabbable-line boxless tabbable-reversed">
			<div class="tab-content">
				<div class="tab-pane active" id="tab_0">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Edit Employee</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"> </a>
								<a href="#portlet-config" data-toggle="modal" class="config"> </a>
								<a href="javascript:;" class="reload"> </a>
								<a href="javascript:;" class="remove"> </a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php $employee_id=$_GET['id'];
							$result = $conn->prepare("SELECT * FROM employee WHERE employee_id= :employee_id");
							$result->bindParam(':employee_id', $employee_id);
							$result->execute();
							$records = $result->fetch();
							?>
							<form method="POST" action="saveEdit.php" class="form-horizontal" enctype="multipart/form-data">
							<input type="hidden" name="employeeid" value="<?php echo $employee_id; ?>" />
								<div class="form-body">
									
									<div class="form-group">
										<label class="col-md-3 control-label">First Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="firstname" value="<?php echo $records['first_name']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Last Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="lastname" value="<?php echo $records['last_name']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Mobile No<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="number" class="form-control input-circle" name="mobileno" value="<?php echo $records['mobile_no']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Email Id<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="email" class="form-control input-circle" name="email" value="<?php echo $records['email_id']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Address<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="address" value="<?php echo $records['address']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Password<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="password" class="form-control input-circle" name="password" value="<?php echo $records['password']; ?>"/>
										</div>
									</div>
									
									 <div class="form-group">
                                            <label class="col-md-3 control-label">Role<span class="required">*</span></label>
											<div class="col-md-4">
												<select name="role"  id="role" class="form-control">
												<option value="Owner">Owner</option>
												<option value="Manager">Manager</option>
												</select>
											</div>
                                     </div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Status<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="number" min="0" max="1" class="form-control input-circle" name="status" value="<?php echo $records['status']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Foto<span class="required">*</span></label>
										<div class="col-md-4">
											<img src="../../img/dosen/<?php echo $records['picture'] ?>" width="75" height="75">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Change Foto<span class="required">*</span></label>
										<div class="col-md-4">
										<input type="file" name="picture" />
										</div>
									</div>
								
		
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" name="submit_post" value="Update" class="btn btn-circle green">Submit</button>
											<button type="button" onclick=self.history.back() class="btn btn-circle grey-salsa btn-outline">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>							
				</div>
			</div>
		</div>
	</div>
</div>
			</div>
		</div>
	</div>
	<?php 
include("../footer2dot.php");
?>