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
								<i class="fa fa-gift"></i>Edit Subject</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"> </a>
								<a href="#portlet-config" data-toggle="modal" class="config"> </a>
								<a href="javascript:;" class="reload"> </a>
								<a href="javascript:;" class="remove"> </a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php $subject_id=$_GET['subject_id'];
							$result = $conn->prepare("SELECT * FROM subject WHERE subject_id= :subject_id");
							$result->bindParam(':subject_id', $subject_id);
							$result->execute();
							$row = $result->fetch();
							?>
							<form method="POST" action="saveEdit.php" class="form-horizontal">
							<input type="hidden" id="subjectid" name="subjectid" value="<?php echo $subject_id; ?>" />
								
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">subject Code<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="subjectcode" name="subjectcode" value="<?php echo $row['subject_code'];?>" placeholder="Enter subject Code">
										</div>
									</div>
									
									<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">subject Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="subjecttitle" name="subjecttitle" value="<?php echo $row['subject_title'];?>" placeholder="Enter subject Title">
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