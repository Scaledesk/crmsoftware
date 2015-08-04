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
'emp_gender'=>$this->input->post('gender'),
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
'emp_gender'=>$this->input->post('gender'),
'emp_joining_date'=>$this->input->post('e_date'),
'emp_sallery'=>$this->input->post('sallary')

);
$this->db->where(array('emp_id'=> $id));
$this->db->update('employee',$data);
return true;
}


public function leave_employee()
{
  
    $date1=$this->input->post('start_date');

       $date2=date('Y-m-d', strtotime($date1));

       $date3=$this->input->post('end_date');

       $date4=date('Y-m-d', strtotime($date3));

 $data=array(   
'leave_start_date'=>$date2,
'leave_end_date'=>$date4,
'leave_reason'=>$this->input->post('resion_leave'));

$this->db->insert('leave_details',$data);
return true;
}


public function delete_leave($id)
	{
		$this->db->where("leave_id",$id);
  		if($this->db->delete("leave_details"))
  		{
  			return true;
  		}		
	}

	public function leave_show()
	{
		
		
		$query=$this->db->query("select * from leave_details");
		// echo '<pre />';
		// print_r($query);
		// die();  
		
		return $query->result();
	}

	public function update_leave_select($id)
	{
		


		$this->db->where("leave_id",$id);
		$query=$this->db->query("select * from leave_details where leave_id=$id");
		//  echo '<pre />';
		//  print_r($query->result());
		//  die(); 
		// //print_r($query->result()); 
		//die();
		return $query->result();
	}


public function update_leave($id)
{
$date1=$this->input->post('start_date');

       $date2=date('Y-m-d', strtotime($date1));

       $date3=$this->input->post('end_date');

       $date4=date('Y-m-d', strtotime($date3));

 $data=array(   
'leave_start_date'=>$date2,
'leave_end_date'=>$date4,
'leave_reason'=>$this->input->post('resion_leave'));
 
$this->db->where(array('leave_id'=> $id));
$this->db->update('leave_details',$data);
return true;
}

public function leave_approve($id)
	{
		$approve='1';
          
		$data=array('leave_status'=>$approve);
		$this->db->where("leave_id",$id);
  		if($this->db->update('leave_details',$data))
  		{
  			return true;
  		}		
	}

}