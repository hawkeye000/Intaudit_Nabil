<h3>All tracking#s  where the detailamount does not match the sum of all chargemount column values for this invoice and trackingno</h2>
				
					<div class="panel panel-default">
						<div class="panel-body">
							<ul id="todo-container">
							   <div class="row">
							        <div class="col-xs-2">Invoice num</div>
							        <div class="col-xs-2">Invoice date</div>
							        <div class="col-xs-2">tracking_no</div>
							        <div class="col-xs-2">Detail Amount</div>
							         <div class="col-xs-2">Charge amount total</div>
							        <div class="col-xs-2">Discrepancy</div>
							    </div>
								<?php if (count($invoices) > 0){
								foreach ($invoices as $invoice){ ?>
								<div class="row">
								    <div class="col-xs-2">
								<?php echo $invoice['invoice_num']; ?>
								
									</div>
									<div class="col-xs-2">
								<?php echo $invoice['invoice_date']; ?>
								
									</div>
									  <div class="col-xs-2">
								<?php echo $invoice['tracking_no']; ?>
								
									</div>
									  <div class="col-xs-2">
								<?php echo $invoice['detail_amount']; ?>
								
									</div>
									  <div class="col-xs-2">
								<?php echo $invoice['charge_amount_total']; ?>
								
									</div>
									 <div class="col-xs-2">
								<?php echo $invoice['discrepancy']; ?>
								
									</div>
								</div>
								<?php 
								    
								}
								}  
								?>
							
							</ul>
						
							
						</div>