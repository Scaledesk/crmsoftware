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
	public function view_order_details()
	{
		$query = $this->db->get('order_details');  
    	return $query;
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

}