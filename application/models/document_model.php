<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class document_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}

	
	public function add_document($rename)
	{
		$document_file = base_url().'application/upload/'.$rename;
		$data=array(
		'document_name'=>$this->input->post('document_name'),
		'document_type'=>$this->input->post('document_type'),
		'document_description'=>$this->input->post('document_description'),
		'categary_id'=>$this->input->post('categary_id'),
		'document_file'=>$document_file
		);
		$this->db->insert('document',$data);
		return true;	
	}

	public function view_document_details()
	{
		$query = $this->db->get('document');  
    	return $query;
	}

	public function editdocument($id)
	{
		
		$this->db->where("document_id",$id);
  		$query=$this->db->get("document_details");
  		return $query->result();
	}

	public function do_editdocument($id)
	{

		$data=array(
		'name'=>$this->input->post('name'),
		'designation'=>$this->input->post('designation'),
		'company'=>$this->input->post('c_name'),
		'phone'=>$this->input->post('phone'),
		'email'=>$this->input->post('email'),
		'fax_number'=>$this->input->post('fax'),
		'contact_description'=>$this->input->post('description'),
		'company_relation'=>$this->input->post('company_relation')
		);
		$this->db->where('document_id', $id);
		$this->db->update('document_details',$data);
		return true;
			
	}

	public function deletedocument($id)
	{
		$this->db->where("document_id",$id);
  		if($this->db->delete("document_details"))
  		{
  			return true;
  		}


	}

	



}