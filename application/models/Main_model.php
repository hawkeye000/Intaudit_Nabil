<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function get_invoices($from,$to) {

	    
	    $query = $this->db->query("SELECT
            ih.invoice_num,
            ih.invoice_date,
            ih.invoice_amount ,
            (select SUM(h.invoice_amount) 
            FROM invoice_headers AS h where h.invoice_date between '$from' and '$to') as total_amount
        
          FROM invoice_headers AS ih 
          where ih.invoice_date between '$from' and '$to'
         ");
         $result=$query->result_array();
        
		return $result;
	}

	public function get_invoices2($from,$to) {

/// we can use JOIN instead of WHERE 
	    

	    $query = $this->db->query("SELECT
            ih.invoice_num,
            ih.invoice_date,
            ih.invoice_amount,
            SUM(d.detail_amount) AS detail_amount_total,
            (ih.invoice_amount - SUM(d.detail_amount)) AS discrepancy
          FROM invoice_headers AS ih,invoice_details AS d
          where ih.invoice_num = d.invoice_num 
               and ih.invoice_date between '$from' and '$to'
          GROUP BY d.invoice_num
          HAVING ih.invoice_amount != detail_amount_total");
          
         $result=$query->result_array();
        
		return $result;
	}
	
	
		public function get_invoices3($from,$to) {
		    
/// we can use JOIN instead of WHERE 

	    $query = $this->db->query("SELECT ih.invoice_num,
            ih.invoice_date,
            d.tracking_no,
            d.detail_amount,
            SUM(c.charge_amount) AS charge_amount_total,
            (d.detail_amount - SUM(c.charge_amount)) AS discrepancy
          FROM invoice_headers  ih,invoice_details  d,invoice_charges  c
          where ih.invoice_num = d.invoice_num
            and d.tracking_no = c.tracking_no
            and ih.invoice_date between '$from' and '$to'
          GROUP BY c.tracking_no
          HAVING d.detail_amount != charge_amount_total
         ");
         $result=$query->result_array();
        
		return $result;
	}

}