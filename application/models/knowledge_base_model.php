<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Knowledge_base_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->database();
}

	
	public function get_category()
	{
		$query=$this->db->get('knowledge_base_category');
		return $query;
	}
	public function add_category()
	{
		

		$data=array(
		'knowledge_base_parent_id'=>$this->input->post('parent_id'),
		'knowledge_base_category_name'=>$this->input->post('knowledge_base_category_name'),
		'knowledge_base_category_description'=>$this->input->post('knowledge_base_category_description')
		);
		$this->db->insert('knowledge_base_category',$data);
		return true;	
	}
	
  	
	public function add_knowledge_base()
	{
		$data=array(
		'knowledge_base_name'=>$this->input->post('knowledge_base_name'),
		'knowledge_base_description'=>$this->input->post('knowledge_base_description'),
		'knowledge_base_category_id'=>$this->input->post('knowledge_base_category_id'),
		'knowledge_base_tags'=>$this->input->post('knowledge_base_tags'),
		'knowledge_base_date'=>date('Y-m-d',time())
		);
		$this->db->insert('knowledge_base',$data);
		return true;		
	}
	public function get_knowledge_base()
	{
		$query=$this->db->get('knowledge_base');
		return $query;	
	}
	public function edit_knowledge_base($id)
  	{
  		$this->db->where('knowledge_base_id',$id);
  		$query=$this->db->get('knowledge_base');
  		return $query->result();
  	}
	public function delete_knowledge_base($id)
	{
		$this->db->where("knowledge_base_id",$id);
  		if($this->db->delete("knowledge_base"))
  		{
  			return true;
  		}		
	}
	
}