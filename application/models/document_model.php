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
		'document_category_id'=>$this->input->post('categary_id'),
		'document_file'=>$document_file
		);
		$this->db->insert('document',$data);
		return true;	
	}
	public function getcategory()
	{
		$query = $this->db->get('document_category');  
    	return $query;	
	}

	public function view_document_details()
	{
		$query = $this->db->get('document');  
    	return $query;
	}

	public function editdocument($id)
	{
		
		$this->db->where("document_id",$id);
  		$query=$this->db->get("document");
  		return $query->result();
	}

	public function do_editdocument($id)
	{

		$document_file = base_url().'application/upload/'.$rename;
		$data=array(
		'document_name'=>$this->input->post('document_name'),
		'document_type'=>$this->input->post('document_type'),
		'document_description'=>$this->input->post('document_description'),
		'document_category_id'=>$this->input->post('categary_id'),
		'document_file'=>$document_file
		);
		$this->db->where('document_id', $id);
		$this->db->update('document',$data);
		return true;
			
	}

	public function deletedocument($id)
	{
		$this->db->where("document_id",$id);
  		if($this->db->delete("document"))
  		{
  			return true;
  		}


	}

	



}