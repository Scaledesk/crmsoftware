<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sales_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}

	
	public function add_lead()
	{
		$data=array(
		'lead_name'=>$this->input->post('lead_name'),
		'lead_generate_date'=>$this->input->post('lead_generate_date'),
		'lead_source'=>$this->input->post('lead_source'),
		'lead_service'=>$this->input->post('lead_service'),
		'designation'=>$this->input->post('designation'),
		'company_name'=>$this->input->post('company_name'),
		'phone'=>$this->input->post('phone'),
		'email'=>$this->input->post('email'),
		'fax_number'=>$this->input->post('fax_number'),
		'contact_description'=>$this->input->post('description'),
		'company_relation'=>$this->input->post('relation')
		);
		$this->db->insert('leads',$data);
		return true;	
	}
	public function getorder()
	{
		$query=$this->db->get("order_details");
  		return $query;
  	}
	public function getleadname()
	{
		$query=$this->db->get("leads");
  		return $query;
	}
	public function add_invoice()
	{
		$data=array(
			'order_id'=>$this->input->post('order_id'),
			'due_date'=>$this->input->post('date1'),
			'total_amount'=>$this->input->post('total_amount'),
			'amount_paid'=>$this->input->post('amount_paid'),
			'amount_due'=>$this->input->post('amount_due'),
			'status'=>$this->input->post('status')
			);
		$this->db->insert('crm_invoice',$data);
		return true;

	}
	public function edit_invoice()
	{
		$data=array(
			'order_id'=>$this->input->post('order_id'),
			'due_date'=>$this->input->post('due'),
			'total_amount'=>$this->input->post('total_amount'),
			'amount_paid'=>$this->input->post('amount_paid'),
			'amount_due'=>$this->input->post('amount_due'),
			'status'=>$this->input->post('status')
			);
		$this->db->where("invoice_id",$id);
		$this->db->update('crm_invoice',$data);
		return true;		
	}
	public function add_order()
	{
		
		$data=array(
			'order_title'=>$this->input->post('order_title'),
			'client_name'=>$this->input->post('client_name'),
			'order_cost'=>$this->input->post('order_cost'),
			'starting_date'=>$this->input->post('date1'),
			'proposed_ending_date'=>$this->input->post('date2'),
			'lead_id'=>$this->input->post('lead_id')
			);
		$this->db->insert('order_details',$data);
		return true;
	}
	public function deleteorder($id)
	{
		$this->db->where("order_id",$id);
  		if($this->db->delete("order_details"))
  		{
  			return true;
  		}		
	}
	public function deleteinvoice($id)
	{
		$this->db->where("invoice_id",$id);
  		if($this->db->delete("crm_invoice"))
  		{
  			return true;
  		}		
	}
	public function editorder($id)
	{
		$this->db->where("order_id",$id);
  		$query=$this->db->get("order_details");
  		return $query->result();
	}
	public function do_editorder($id)
	{
		$data=array(
			'order_title'=>$this->input->post('order_title'),
			'client_name'=>$this->input->post('client_name'),
			'order_cost'=>$this->input->post('order_cost'),
			'starting_date'=>$this->input->post('starting_date'),
			'proposed_ending_date'=>$this->input->post('ending_date'),
			'lead_id'=>$this->input->post('lead_id')
			);
		$this->db->where('order_id', $id);
		$this->db->update('order_details',$data);
		return true;
	}

	public function view_lead_details()
	{
		$query = $this->db->get('leads');  
    	return $query;
	}
	public function view_invoices($id)
	{
		$this->db->where('order_id',$id);
		$query = $this->db->get('crm_invoice');  
    	return $query;
	}
	public function view_order_details()
	{
		$query = $this->db->get('order_details');  
    	return $query;
	}
	public function getinvoice($id)
	{
		$this->db->where("invoice_id",$id);
  		$query=$this->db->get("crm_invoice");
  		return $query->result();
	}

	public function editlead($id)
	{
		
		$this->db->where("lead_id",$id);
  		$query=$this->db->get("leads");
  		return $query->result();
	}

	public function do_editlead($id)
	{

		$data=array(
		'lead_name'=>$this->input->post('lead_name'),
		'lead_generate_date'=>$this->input->post('lead_generate_date'),
		'lead_source'=>$this->input->post('lead_source'),
		'lead_service'=>$this->input->post('phone')
		);
		$this->db->where('lead_id', $id);
		$this->db->update('leads',$data);
		return true;
			
	}

	public function deletelead($id)
	{
		$this->db->where("lead_id",$id);
  		if($this->db->delete("leads"))
  		{
  			return true;
  		}

	}
	public function add_reminder()
	{
		$data=array(
			'invoice_id'=>$this->input->post('invoice_id'),
			'reminder_title'=>$this->input->post('title'),
			'reminder_description'=>$this->input->post('description'),
			'reminder_date'=>$this->input->post('r_date')	
			);
		$this->db->insert('invoice_reminder',$data);
		return true;
	}

	public function getreminder()
	{
		$query=$this->db->get("invoice_reminder");
  		return $query;
	}
	public function view_reminder($id)
	{
		$this->db->where('invoice_id',$id);
		$query=$this->db->get("invoice_reminder");
  		return $query;	
	}
	public function add_supplier_category()
	{
		$data=array(
			'category_name'=>$this->input->post('category_name'),
			'category_description'=>$this->input->post('category_description')
			);
		$this->db->insert('supplier_category',$data);
		return true;	
	}

	public function add_supplier()
	{
		$data=array(
			'supplier_name'=>$this->input->post('supplier_name'),
			'supplier_address'=>$this->input->post('supplier_address'),
			'supplier_phone1'=>$this->input->post('supplier_phone1'),
			'supplier_phone2'=>$this->input->post('supplier_phone2'),
			'supplier_email'=>$this->input->post('supplier_email'),
			'supplier_faxno'=>$this->input->post('supplier_faxno'),
			'supplier_description'=>$this->input->post('supplier_description'),
			'category_id'=>$this->input->post('category_id')
			);
		$this->db->insert('supplier_details',$data);
		return true;	 
	}
	public function getsupplier()
	{
		$query=$this->db->get("supplier_details");
  		return $query;
	}
	public function editsupplier($id)
	{
		$this->db->where("supplier_id",$id);
  		$query=$this->db->get("supplier_details");
  		return $query->result();
	}
	public function do_editsupplier($id)
	{	
		$data=array(
			'supplier_name'=>$this->input->post('supplier_name'),
			'supplier_address'=>$this->input->post('supplier_address'),
			'supplier_phone1'=>$this->input->post('supplier_phone1'),
			'supplier_phone2'=>$this->input->post('supplier_phone2'),
			'supplier_email'=>$this->input->post('supplier_email'),
			'supplier_faxno'=>$this->input->post('supplier_faxno'),
			'supplier_description'=>$this->input->post('supplier_description'),
			'category_id'=>$this->input->post('category_id')
			);
		$this->db->where('supplier_id', $id);
		$this->db->update('supplier_details',$data);
		return true;
	}
	public function getsupplier_category()
	{
		$query=$this->db->get('supplier_category');
		return $query;
	}

	public function deletesupplier($id)
	{
		$this->db->where("supplier_id",$id);
  		if($this->db->delete("supplier_details"))
  		{
  			return true;
  		}
  		else
  		{
  			return false;
  		}

	}

}