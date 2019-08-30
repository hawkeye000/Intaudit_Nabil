<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Main_model');
	}

	public function index() {
	   $from=$this->input->post('dt-from',TRUE);
	   
	   $to=$this->input->post('dt-to',TRUE);
	   
	   $report=$this->input->post('report',TRUE);
	   
	    $data['title'] = " Intelligent Audit";
	    
	    $data['report'] = $report;
		
		if ($report=='Report-1'||!$report){
		    
		$data['invoices'] = $this->Main_model->get_invoices($from,$to);
		
            }
           else if ($report=='Report-2'){
		    
		$data['invoices'] = $this->Main_model->get_invoices2($from,$to);
		
		
            }
          else  if ($report=='Report-3'){
		    
		$data['invoices'] = $this->Main_model->get_invoices3($from,$to);
		
            }
            
		$this->load->view('index',$data);
	}




}
