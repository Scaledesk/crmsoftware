<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ticket_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->database();
}

	
	public function add_ticket()
	{
		$data=array(
		'lead_name'=>$this->input->post('lead_name'),
		'lead_generate_date'=>$this->input->post('lead_generate_date'),
		'lead_source'=>$this->input->post('lead_source'),
		'lead_service'=>$this->input->post('lead_service'),
		'lead_designation'=>$this->input->post('designation'),
		'lead_company_name'=>$this->input->post('company_name'),
		'lead_phone'=>$this->input->post('phone'),
		'lead_email'=>$this->input->post('email'),
		'lead_fax_number'=>$this->input->post('fax_number'),
		'lead_contact_description'=>$this->input->post('description'),
		'lead_company_relation'=>$this->input->post('relation')
		);
		$this->db->insert('ticket_details',$data);
		return true;	
	}
	public function get_ticket()
	{
		$query=$this->db->get("ticket_details");
  		return $query;
  	}
  	public function edit_ticket($id)
  	{
  		$this->db->where('ticket_id',$id);
  		$query=$this->db->get('ticket_details');
  		return $query->result();
  	}
	public function do_edit_ticket()
	{
		$data=array(
			'order_id'=>$this->input->post('order_id'),
			'invoice_due_date'=>$this->input->post('due'),
			'invoice_total_amount'=>$this->input->post('total_amount'),
			'invoice_amount_paid'=>$this->input->post('amount_paid'),
			'invoice_amount_due'=>$this->input->post('amount_due'),
			'invoice_status'=>$this->input->post('status')
			);
		$this->db->where("ticket_id",$id);
		$this->db->update('ticket_details',$data);
		return true;		
	}
	public function delete_ticket($id)
	{
		$this->db->where("ticket_id",$id);
  		if($this->db->delete("ticket_details"))
  		{
  			return true;
  		}		
	}
	
}