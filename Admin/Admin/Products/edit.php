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
								<i class="fa fa-gift"></i>Edit Product</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"> </a>
								<a href="#portlet-config" data-toggle="modal" class="config"> </a>
								<a href="javascript:;" class="reload"> </a>
								<a href="javascript:;" class="remove"> </a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php $Product_id=$_GET['id'];
							$result = $conn->prepare("SELECT * FROM products WHERE Product_id= :Product_id");
							$result->bindParam(':Product_id', $Product_id);
							$result->execute();
							$records = $result->fetch();
							?>
							<form method="POST" action="saveEdit.php" class="form-horizontal" enctype="multipart/form-data">
							<input type="hidden" name="product_id" value="<?php echo $Product_id; ?>" />
								<div class="form-body">
									
									<div class="form-group">
										<label class="col-md-3 control-label">Product Type/Name<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" name="productname" value="<?php echo $records['ProductType']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
                                                <label class="col-md-3 control-label">Select Category<span class="required">*</span></label>
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
                                                <label class="col-md-3 control-label">Select Brand<span class="required">*</span></label>
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
											<input type="number" class="form-control input-circle" id="saleprice" name="saleprice" value="<?php echo $records['Price']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Stock<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="number" class="form-control input-circle" id="stock" name="stock" value="<?php echo $records['stock']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Description<span class="required">*</span></label>
										<div class="col-md-4">
											<input type="text" class="form-control input-circle" id="description" name="description" value="<?php echo $records['Description']; ?>"/>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Foto<span class="required">*</span></label>
										<div class="col-md-4">
											<img src="../../../Collection/Both/<?php echo $records['Imagepath'] ?>" width="75" height="75">
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Change Foto<span class="required">*</span></label>
										<div class="col-md-4">
										<input type="file" name="foto" />
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