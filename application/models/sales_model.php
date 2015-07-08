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

	public function view_lead_details()
	{
		$query = $this->db->get('leads');  
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