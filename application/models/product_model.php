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
		'product_name'=>$this->input->post('product_name'),
		'product_description'=>$this->input->post('product_description'),
		'product_status'=>$this->input->post('product_status'),
		'product_start_date'=>date('Y-m-d', strtotime($this->input->post('product_start_date'))),
		'product_end_date'=>date('Y-m-d', strtotime($this->input->post('product_start_date')))
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
    'product_name'=>$this->input->post('product_name'),
    'product_description'=>$this->input->post('product_description'),
    'product_status'=>$this->input->post('product_status'),
    'product_start_date'=>date('Y-m-d', strtotime($this->input->post('product_start_date'))),
    'product_end_date'=>date('Y-m-d', strtotime($this->input->post('product_start_date')))
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

  public function add_progress()
	{
		$data=array(
		'date'=>date('Y-m-d', strtotime($this->input->post('date'))),
		'title'=>$this->input->post('title'),
		'description'=>$this->input->post('description'),
		'product_id'=>$this->input->post('product_id')
		);
		$this->db->insert('product_progress',$data);
		return true;
	}
	public function view_progress_details()
	{
		$query = $this->db->get('product_progress');
    	return $query;
	}


  public function add_milesstone()
	{
		$data=array(
		'milesstone_name'=>$this->input->post('milesstone_name'),
		'milesstone_description'=>$this->input->post('milesstone_description'),
		'milesstone_expected_date'=>date('Y-m-d', strtotime($this->input->post('milesstone_expected_date'))),
		'milesstone_end_date'=>date('Y-m-d', strtotime($this->input->post('milesstone_end_date'))),
    	'product_id'=>$this->input->post('product_id')
		);
		$this->db->insert('product_milesstone',$data);
		return true;
	}

	public function view_milesstone_details()
	{
		$query = $this->db->get('product_milesstone');
    	return $query;
	}

	public function editmilesstone($id)
	{

		$this->db->where("milesstone_id",$id);
  		$query=$this->db->get("product_milesstone");
  		return $query->result();
	}

	public function do_editmilesstone($id)
	{

    $data=array(
		'milesstone_name'=>$this->input->post('milesstone_name'),
		'milesstone_description'=>$this->input->post('milesstone_description'),
		'milesstone_expected_date'=>date('Y-m-d', strtotime($this->input->post('milesstone_expected_date'))),
		'milesstone_end_date'=>date('Y-m-d', strtotime($this->input->post('milesstone_end_date')))
		);
		$this->db->where('milesstone_id', $id);
		$this->db->update('product_milesstone',$data);
		return true;

	}

	public function deletemilesstone($id)
	{
		$this->db->where("milesstone_id",$id);
  		if($this->db->delete("product_milesstone"))
  		{
  			return true;
  		}
	}

}
