
	<?php 
	$this->load->view('head');
	
	
		if ($report=='Report-2'){
		    $this->load->view('report2.php');
		}
		else 	if ($report=='Report-3'){
		    $this->load->view('report3.php');
		}
		else{ 
if (count($invoices) > 0){	?>

				<h2>all invoices</h1>
					<div class="panel panel-default">
						<div class="panel-body">
							<ul id="todo-container">
							   <div class="row"><div class="col-md-4">Invoice num</div><div class="col-md-4">Invoice date</div><div class="col-md-4">Invoice amount</div>
							   </div>
							<?php
								foreach ($invoices as $invoice){ ?>
							<div class="row">
								    <div class="col-md-4">
								<?php echo $invoice['invoice_num']; ?>
								
									</div>
									<div class="col-md-4">
								<?php echo $invoice['invoice_date']; ?>
								
									</div>
									  <div class="col-md-4">
								<?php echo $invoice['invoice_amount']; ?>
								
									</div>
								</div>
								<?php 
								    
								
								}  
								?>
							
							</ul>
							<div class="col-md-4">
							
							</div>
							<div class="col-md-4">
							    Total
							    </div>
							    <div class="col-md-4">
								# <?php echo count($invoices); ?> of invoices | Total amount :<?php echo $invoice['total_amount'];?>
									</div>
						</div>
						
						
	<?php 
}
	}
	
	$this->load->view('foot');
	
	?>