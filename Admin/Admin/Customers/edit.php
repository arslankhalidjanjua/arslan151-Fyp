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
								<i class="fa fa-gift"></i>Edit User</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"> </a>
								<a href="#portlet-config" data-toggle="modal" class="config"> </a>
								<a href="javascript:;" class="reload"> </a>
								<a href="javascript:;" class="remove"> </a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php $user_id=$_GET['user_id'];
							$result = $conn->prepare("SELECT * FROM users WHERE user_id= :user_id");
							$result->bindParam(':user_id', $user_id);
							$result->execute();
							$row = $result->fetch();
							?>
							<form method="POST" action="saveEdit.php" class="form-horizontal" enctype="multipart/form-data">
							<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
								<div class="form-body">
									
									<div class="form-group">
										<label class="col-md-3 control-label">User Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="username" name="username" value="<?php echo $row['user_name'];?>" placeholder="Enter User Name">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Password<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="password" name="password" value="<?php echo $row['password'];?>" placeholder="Enter Password Name">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">First Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="firstname" name="firstname" value="<?php echo $row['first_name'];?>" placeholder="Enter First Name">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Last Name<span class="required">*</span></label>
										
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="lastname" name="lastname" value="<?php echo $row['last_name'];?>" placeholder="Enter Last Name">
										</div>
									</div>
									
										
									<div class="form-group">
										<label class="col-md-3 control-label">User Type<span class="required">*</span></label>
										
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="usertype" name="usertype" value="<?php echo $row['user_type'];?>" placeholder="Enter User Type">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Foto<span class="required">*</span></label>
										
										<div class="col-md-4">
											<img src="../../usersFotos/<?php echo $row['foto']; ?>" width="75" height="75">
											<input type="file" name="foto" />
										</div>
									</div>
								
		
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-circle green">Submit</button>
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