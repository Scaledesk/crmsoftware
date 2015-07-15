<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employee_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}



public function add_employee()
{

 $data=array(
'emp_name'=>$this->input->post('e_name'),
'emp_mobile_no'=>$this->input->post('e_mobile'),
'emp_email'=>$this->input->post('e_email'),
'emp_address'=>$this->input->post('e_address'),
'gender'=>$this->input->post('gender'),
'emp_joining_date'=>$this->input->post('e_date'),
'emp_sallery'=>$this->input->post('sallary')

);

$this->db->insert('employee',$data);
return true;
}


public function delete_employee($id)
	{
		$this->db->where("emp_id",$id);
  		if($this->db->delete("employee"))
  		{
  			return true;
  		}		
	}
}