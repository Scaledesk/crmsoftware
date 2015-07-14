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
		'ticket_name'=>$this->input->post('ticket_name'),
		'ticket_raiser'=>$this->input->post('ticket_raiser'),
		'ticket_description'=>$this->input->post('ticket_description'),
		'ticket_category'=>$this->input->post('ticket_category'),
		'ticket_admin_comment'=>$this->input->post('designation'),
		'lead_company_name'=>$this->input->post('ticket_admin_comment'),
		'ticket_raised_date'=>$this->input->post('ticket_raised_date'),
		'ticket_closed_date'=>$this->input->post('ticket_closed_date'),
		'ticket_resolution'=>$this->input->post('ticket_resolution')
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
		'ticket_name'=>$this->input->post('ticket_name'),
		'ticket_raiser'=>$this->input->post('ticket_raiser'),
		'ticket_description'=>$this->input->post('ticket_description'),
		'ticket_category'=>$this->input->post('ticket_category'),
		'ticket_admin_comment'=>$this->input->post('designation'),
		'lead_company_name'=>$this->input->post('ticket_admin_comment'),
		'ticket_raised_date'=>$this->input->post('ticket_raised_date'),
		'ticket_closed_date'=>$this->input->post('ticket_closed_date'),
		'ticket_resolution'=>$this->input->post('ticket_resolution')
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