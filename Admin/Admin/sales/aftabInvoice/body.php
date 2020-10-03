<!--Start here by aftab-->
            <section id="content">
                <div class="container invoice"> 
					<div class="card">
                        <div class="card-header ch-alt text-center">
                            <img class="i-logo" src="img/demo/invoice-logo.jpg" alt="">
                        </div>
					   <div class="card-body card-padding">
                            <div class="row m-b-25">
                                <div class="col-xs-6">
                                    <div class="text-right">
                                        <p class="c-gray">Invoice from</p>
                                        
                                        <h4>Sarhad Flour Mill</h4>
                                        
                                        <span class="text-muted">
                                            <address>
											24/133, Chodry Street<br>
											Near Masjid-e-Qubah,<br>
											Rawalpindi, Cannt - 123456789<br>
											Pakistan
                                            </address>
                
                                            123456789<br/>
                                            aftab@gmail.com
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6">
                                    <div class="i-to">
                                        <p class="c-gray">Invoice to</p>
										
								<?php 
								$result1 = $conn->prepare("SELECT * FROM sales_invoice where sales_invoice_id='$sales_invoice_id2'");
								$result1->execute();
								$row1 = $result1->fetch();
								$User_id=$row1['User_id'];
								$employee_id=$row1['employee_id'];
								
								
								$result_employee = $conn->prepare("SELECT * FROM employee where employee_id='$employee_id'");
								$result_employee->execute();
								$result_employee_row = $result_employee->fetch();
								$employee_name=$result_employee_row['first_name'].' '.$result_employee_row['last_name'];
								
								
								$result = $conn->prepare("SELECT * FROM signuptable where User_id='$User_id'");
								$result->execute();
								$row = $result->fetch();
								?>
								
                                        <h4><?php echo $Name=$row['FirstName'].' '.$row['LastName']; ?></h4>
                                        <span class="text-muted">
                                            <address><?php echo $row['address']; ?></address>
                                            <?php echo $row['ContactNo']; ?><br/>
                                            <?php echo $row['EmailId']; ?><br/>
                                            <?php echo $row['country']; ?>,<?php echo $row['city']; ?></br>
											
                                        </span>
                                    </div>
                                </div>                              
                            </div>
                            <div class="clearfix"></div>
							<?php 
							$result = $conn->prepare("SELECT * FROM sales_invoice_items where sales_invoice_id='$sales_invoice_id2'");
							$result->execute();
							$row = $result->fetch();
							?>							
                            <div class="row m-t-25 p-0 m-b-25">
                                <div class="col-xs-3">
                                    <div class="bgm-amber brd-2 p-15">
                                        <div class="c-white m-b-5">Invoice#</div>
                                        <h2 class="m-0 c-white f-300"><?php echo $row['sales_invoice_id']; ?></h2>
                                    </div>
                                </div>
                                <?php
								$date1=$row['Date']; //Y-M-D
								$date2 = date("d-m-Y", strtotime($date1)); //D-M-Y
								?>
                                <div class="col-xs-3">
                                    <div class="bgm-blue brd-2 p-15">
                                        <div class="c-white m-b-5">Date</div>
                                        <h2 class="m-0 c-white f-300"><?php echo $date2; ?></h2>
                                    </div>
                                </div>
                                
                                <div class="col-xs-3">
                                    <div class="bgm-green brd-2 p-15">
                                        <div class="c-white m-b-5">Sale Created By</div>
                                        <h2 class="m-0 c-white f-300"><?php echo $employee_name; ?></h2>
                                    </div>
                                </div>
                                
                                <div class="col-xs-3">
                                    <div class="bgm-red brd-2 p-15">
                                        <div class="c-white m-b-5">Grand Total</div>
										<?php
										$resultas = $conn->prepare("SELECT * FROM sales_invoice where sales_invoice_id='$sales_invoice_id2'");
										$resultas->execute();
										$rowas = $resultas->fetch();
										$totalAmount=$rowas['total_amount'];
										$totalAmount;
										?>
                                        <h2 class="m-0 c-white f-300"><?php echo $totalAmount; ?>.00</h2>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <table class="table i-table m-t-25 m-b-25">
                                <thead class="text-uppercase"> 
                                    
                                    <th class="c-gray">Sr#</th>
                                   
                                    <th class="c-gray">Name</th>
                                    <th class="c-gray">ITEM DESCRIPTION</th>
                                    <th class="c-gray">UNIT PRICE</th>
                                    
                                    <th class="c-gray">QUANTITY</th>
                                    <th class="highlight">TOTAL</th>
                                </thead>
                                
                                <tbody>
                                    <thead>
                                        <tr>
										<?php 
										$serialNo=1;
										$result = $conn->prepare("SELECT * FROM sales_invoice_items WHERE sales_invoice_id= :sales_invoice_id");
										$result->bindParam(':sales_invoice_id', $sales_invoice_id2);
										$result->execute();
										for($i=1; $row = $result->fetch(); $i++){
										?>
										
										<?php
										$Product_id=$row['Product_id'];
										//
										$result1 = $conn->prepare("SELECT * FROM products WHERE Product_id='$Product_id'"); 
										$result1->execute();
										$rowget = $result1->fetch();
										$ProductType=$rowget['ProductType'];
										$Description=$rowget['Description'];
										$Price=$rowget['Price'];
										?>
											<td><h5 class="f-400"><?php echo $serialNo;?></h5></td>
											<td><h5 class="f-400"><?php echo $ProductType;?></h5></td>
											<td><h5 class="f-400"><?php echo $Description; ?></h5></td>
                                            <td><h5 class="f-400"><?php echo $rowget['Price']; ?></h5></td>                                           
                                            <td><h5 class="f-400"><?php echo $row['item_quantity']; ?></h5></td>
										<?php $total=($row['item_quantity'])*($rowget['Price']);?>
                                            <td class="highlight"><?php echo $total; ?>.00</td>
                                        </tr>
										<?php
										$serialNo++;
										}
										?>										
                                        <tr>
                                            <td colspan="3"></td>
                                            <td></td>                                          
                                            <td></td>
										<?php
										$resultas = $conn->prepare("SELECT * FROM sales_invoice where sales_invoice_id='$sales_invoice_id2'");
										$resultas->execute();
										$rowas = $resultas->fetch();
										$totalAmount=$rowas['total_amount'];
										$totalAmount;
										?>
                                            <td class="highlight"><?php echo $totalAmount; ?>.00</td>
                                        </tr>
                                    </thead> 
                                </tbody>
                            </table>                            
                            <div class="clearfix"></div>                            
                            <div class="p-25">
                                <h4 class="c-green f-400">REMARKS</h4>
                                <p class="c-gray">Full amount paid by this customer</p><br/>                          
                                <h4 class="c-green f-400">MERCY FOR YOUR BUSINESS</h4>
                                <p class="c-gray">Goods once sold can not be returned</p>
                            </div>
                        </div>
                        
                        <footer class="m-t-15 p-20">
                            <ul class="list-inline text-center list-unstyled">
                                <li class="m-l-5 m-r-5"><small>support@company.com</small></li>
                                <li class="m-l-5 m-r-5"><small>+92 123 456789</small></li>
                                <li class="m-l-5 m-r-5"><small>www.company.com</small></li>
                            </ul>
                        </footer>
                    </div> 
                </div>
                
                <button class="btn btn-float bgm-red m-btn" data-action="print"><i class="zmdi zmdi-print"></i></button>
            </section>
			
			<!--end here by aftab-->