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
								<i class="fa fa-gift"></i>Add Product</div>
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
										<label class="col-md-3 control-label">Product Type/Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="productname" name="productname" placeholder="Input Product Type/Name">
										</div>
									</div>
									
									<div class="form-group">
                                            <label class="col-md-3 control-label">Category<span class="required">*</span></label>
											<div class="col-md-4">
												<select name="category"  id="category" class="form-control">
												<?php	
												$resultCategory = $conn->prepare("select * from  product_category");
												$resultCategory->execute();
												while ($data=$resultCategory->fetch()) {
												?>
												<option value="<?php echo $data['product_category_id'];?>"><?php echo $data['product_category_name']; ?></option>
												<?php
												}
												?>	
												</select>
											</div>
                                     </div>
									 						 
									 <div class="form-group">
                                            <label class="col-md-3 control-label">Brand<span class="required">*</span></label>
											<div class="col-md-4">
												<select name="brand"  id="brand" class="form-control">
												<?php	
												$resultBrand = $conn->prepare("select * from  product_brand");
												$resultBrand->execute();
												while ($data=$resultBrand->fetch()) {
												?>
												<option value="<?php echo $data['product_brand_id'];?>"><?php echo $data['product_brand_name']; ?></option>
												<?php
												}
												?>
												</select>
											</div>
                                     </div>
									 
									 <div class="form-group">
										<label class="col-md-3 control-label">Sale Price<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="number" class="form-control input-circle" id="saleprice" name="saleprice" placeholder="Input Sale Price">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Stock<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="number" class="form-control input-circle" id="stock" name="stock" placeholder="Input stock/Quantity">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Description<span class="required">*</span></label>
										<div class="col-md-4">
											 <textarea class="form-control input-circle" rows="3" id="description" name="description"> </textarea>
										</div>
									</div>
									 
									 <div class="form-group">
										<label class="col-md-3 control-label">Foto<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="file" name="foto" class="form-control input-circle">
										</div>
									</div>
													
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" name="submit_post" class="btn btn-circle green">Submit</button>
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