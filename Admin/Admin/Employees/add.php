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
								<i class="fa fa-gift"></i>Add Employee</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"> </a>
								<a href="#portlet-config" data-toggle="modal" class="config"> </a>
								<a href="javascript:;" class="reload"> </a>
								<a href="javascript:;" class="remove"> </a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form method="POST" action="save.php" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-body">
									
									<div class="form-group">
										<label class="col-md-3 control-label">First Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="firstname" placeholder="Input First Name" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Last Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="lastname" placeholder="Input Last Name" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Mobile No<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="number" class="form-control input-circle" name="mobileno" placeholder="Input Mobile No" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Email Id<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="email" class="form-control input-circle" name="email" placeholder="Input Email" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Address<span class="required">*</span></label>
										<div class="col-md-4">
											 <textarea class="form-control input-circle" rows="3" name="address"> </textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Password<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="password" class="form-control input-circle" name="password" placeholder="Input Password" />
										</div>
									</div>
									
									 <div class="form-group">
                                            <label class="col-md-3 control-label">Role<span class="required">*</span></label>
											<div class="col-md-4">
												<select name="gender"  id="role" class="form-control">
												<option value="Owner">Owner</option>
												<option value="Manager">Manager</option>
												</select>
											</div>
                                     </div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Status<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="number" min="0" max="1" class="form-control input-circle" name="status" placeholder="Input Status" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Foto<span class="required">*</span></label>
										
										<div class="col-md-4">
											<input type="file" name="picture" class="form-control input-circle">
										</div>
									</div>
											
											
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" name="submit_post" value="Save" class="btn btn-circle green">Submit</button>
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