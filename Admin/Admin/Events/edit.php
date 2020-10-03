<?php include("../header2dot.php");?> 
<?php 
include("../../connection.php"); 
$activePage='event';
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
				
				
<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
	<div class="col-md-12">
		<div class="tabbable-line boxless tabbable-reversed">
			<div class="tab-content">
				<div class="tab-pane active" id="tab_0">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Edit Event</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"> </a>
								<a href="#portlet-config" data-toggle="modal" class="config"> </a>
								<a href="javascript:;" class="reload"> </a>
								<a href="javascript:;" class="remove"> </a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php $event_id=$_GET['id'];
							$result = $conn->prepare("SELECT * FROM events WHERE event_id= :event_id");
							$result->bindParam(':event_id', $event_id);
							$result->execute();
							$records = $result->fetch();
							?>
							<form method="POST" action="saveEdit.php" class="form-horizontal" enctype="multipart/form-data">
							<input type="hidden" name="event_id" value="<?php echo $event_id; ?>" />
								<div class="form-body">
									
									<div class="form-group">
										<label class="col-md-3 control-label">Title<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="title" value="<?php echo $records['title']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Description<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="description" value="<?php echo $records['description']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
                                            <label class="col-md-3 control-label">Status<span class="required">*</span></label>
											<div class="col-md-4">
												<select name="status"  id="status" class="form-control">
												
												<option value="Activate">Activate</option>
												<option value="DeActivate">DeActivate</option>
												
												</select>
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