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

	public function employee_show()
	{
		
		
		$query=$this->db->query("select * from employee");
		// echo '<pre />';
		// print_r($query);
		// die();  
		
		return $query->result();
	}

	public function update_employee_select($id)
	{
		
		$this->db->where("emp_id",$id);
		$query=$this->db->query("select * from employee where emp_id=$id");
		// echo '<pre />';
		// print_r($query);
		// die();  
		return $query->result();
	}


public function update_employee($id)
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
$this->db->where(array('emp_id'=> $id));
$this->db->update('employee',$data);
return true;
}


public function leave_employee()
{
  
 $data=array(
'emp_name'=>$this->input->post('start_date'),
'emp_mobile_no'=>$this->input->post('end_date'),
'emp_email'=>$this->input->post('resion_leave'));

$this->db->insert('leave',$data);
return true;
}


public function leave_delete($id)
	{
		$this->db->where("emp_id",$id);
  		if($this->db->delete("employee"))
  		{
  			return true;
  		}		
	}

	public function leave_show()
	{
		
		
		$query=$this->db->query("select * from employee");
		// echo '<pre />';
		// print_r($query);
		// die();  
		
		return $query->result();
	}

	public function update_leave_select($id)
	{
		
		$this->db->where("emp_id",$id);
		$query=$this->db->query("select * from employee where emp_id=$id");
		// echo '<pre />';
		// print_r($query);
		// die();  
		return $query->result();
	}


public function update_leave($id)
{

 $data=array(
'emp_name'=>$this->input->post('start_date'),
'emp_mobile_no'=>$this->input->post('end_date'),
'emp_email'=>$this->input->post('resion_leave'));
 
$this->db->where(array('emp_id'=> $id));
$this->db->update('employee',$data);
return true;
}

}