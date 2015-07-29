<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Company_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}

	public function add_company()
	{
		$data=array(
		'company_name'=>$this->input->post('name'),
		'company_address'=>$this->input->post('address'),
		'company_phone1'=>$this->input->post('phone1'),
		'company_phone2'=>$this->input->post('phone2'),
		'company_email'=>$this->input->post('email'),
		'company_fax_number'=>$this->input->post('faxno'),
		'company_domain'=>$this->input->post('domain'),
		'company_description'=>$this->input->post('description'),
		'company_relation'=>$this->input->post('relation')
		);
		$this->db->insert('company_details',$data);
		return true;
	}

	public function view_company_details()
	{
		$query = $this->db->get('company_details');
    	return $query;
	}

	public function editcompany($id)
	{

		$this->db->where("company_id",$id);
  		$query=$this->db->get("company_details");
  		return $query->result();
	}

	public function do_editcompany($id)
	{

		$data=array(
		'company_name'=>$this->input->post('name'),
		'company_address'=>$this->input->post('address'),
		'company_phone1'=>$this->input->post('phone1'),
		'company_phone2'=>$this->input->post('phone2'),
		'company_email'=>$this->input->post('email'),
		'company_fax_number'=>$this->input->post('faxno'),
		'company_domain'=>$this->input->post('domain'),
		'company_description'=>$this->input->post('description'),
		'company_relation'=>$this->input->post('relation')
		);
		$this->db->where('company_id', $id);
		$this->db->update('company_details',$data);
		return true;

	}

	public function deletecompany($id)
	{
		$this->db->where("company_id",$id);
  		if($this->db->delete("company_details"))
  		{
  			return true;
  		}


	}

}
