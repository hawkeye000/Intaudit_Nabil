
<h3>All invoices where the invoice amount does not match the sum of all detailamount column values for this invoice</h1>				
					<div class="panel panel-default">
						<div class="panel-body">
							<ul id="todo-container">
							   <div class="row">
							        <div class="col-xs-2">Invoice num</div>
							        <div class="col-xs-2">Invoice date</div>
							        <div class="col-xs-2">Invoice amount</div>
							        <div class="col-xs-2">Detailamount Total </div>
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
								<?php echo $invoice['invoice_amount']; ?>
								
									</div>
									  <div class="col-xs-2">
								<?php echo $invoice['detail_amount_total']; ?>
								
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