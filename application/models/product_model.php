<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {
public function __construct()
{
parent::__construct();
  $this->load->library('session');
	$this->load->database();
}


	public function add_product()
	{
		$data=array(
		'product_name'=>$this->input->post('name'),
		'product_description'=>$this->input->post('description'),
		'product_status'=>$this->input->post('product_status'),
		'product_start_date'=>$this->input->post('product_start_date'),
		'product_end_date'=>$this->input->post('product_end_date')
		);
		$this->db->insert('product_details',$data);
		return true;
	}

	public function view_product_details()
	{
		$query = $this->db->get('product_details');
    	return $query;
	}

	public function editproduct($id)
	{

		$this->db->where("product_id",$id);
  		$query=$this->db->get("product_details");
  		return $query->result();
	}

	public function do_editproduct($id)
	{

    $data=array(
		'product_name'=>$this->input->post('name'),
		'product_description'=>$this->input->post('description'),
		'product_status'=>$this->input->post('product_status'),
		'product_start_date'=>$this->input->post('product_start_date'),
		'product_end_date'=>$this->input->post('product_end_date')
		);
		$this->db->where('product_id', $id);
		$this->db->update('product_details',$data);
		return true;

	}

	public function deleteproduct($id)
	{
		$this->db->where("product_id",$id);
  		if($this->db->delete("product_details"))
  		{
  			return true;
  		}


	}
}
