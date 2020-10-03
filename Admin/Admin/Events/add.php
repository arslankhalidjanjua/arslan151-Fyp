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
								<i class="fa fa-gift"></i>Add Event</div>
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
										<label class="col-md-3 control-label">Title<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="title" placeholder="Input Event Title" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Description<span class="required">*</span></label>
										<div class="col-md-4">
											 <textarea class="form-control input-circle" rows="3" id="description" name="description"> </textarea>
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