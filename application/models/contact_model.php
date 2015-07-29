<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}


	public function add_contact()
	{
		$data=array(
		'contact_name'=>$this->input->post('name'),
		'contact_designation'=>$this->input->post('designation'),
		'contact_company'=>$this->input->post('c_name'),
		'contact_phone'=>$this->input->post('phone'),
		'contact_email'=>$this->input->post('email'),
		'contact_fax_number'=>$this->input->post('fax'),
		'contact_description'=>$this->input->post('description'),
		'contact_company_relation'=>$this->input->post('company_relation')
		);
		$this->db->insert('contact_details',$data);
		return true;
	}

	public function view_contact_details()
	{
		$query = $this->db->get('contact_details');
    	return $query;
	}

	public function editcontact($id)
	{

		$this->db->where("contact_id",$id);
  		$query=$this->db->get("contact_details");
  		return $query->result();
	}

	public function do_editcontact($id)
	{

		$data=array(
		'contact_name'=>$this->input->post('name'),
		'contact_designation'=>$this->input->post('designation'),
		'contact_company'=>$this->input->post('c_name'),
		'contact_phone'=>$this->input->post('phone'),
		'contact_email'=>$this->input->post('email'),
		'contact_fax_number'=>$this->input->post('fax'),
		'contact_description'=>$this->input->post('description'),
		'contact_company_relation'=>$this->input->post('company_relation')
		);
		$this->db->where('contact_id', $id);
		$this->db->update('contact_details',$data);
		return true;

	}

	public function deletecontact($id)
	{
		$this->db->where("contact_id",$id);
  		if($this->db->delete("contact_details"))
  		{
  			return true;
  		}


	}





}
