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
'user_name'=>$this->input->post('e_name'),
'user_phone_number'=>$this->input->post('e_mobile'),
'user_email'=>$this->input->post('e_email'),
'user_address'=>$this->input->post('e_address'),
'user_gendar'=>$this->input->post('gender'),
'user_password'=>$this->input->post('password'),
'user_fax_number'=>$this->input->post('fax_num'),
'user_joining_date'=>$this->input->post('e_date'),
'user_sallery'=>$this->input->post('sallary')

);

$this->db->insert('users_details',$data);
return true;
}


public function delete_employee($id)
	{
		$this->db->where("user_id",$id);
  		if($this->db->delete("users_details"))
  		{
  			return true;
  		}
	}

	public function employee_show()
	{


		$query=$this->db->query("select * from users_details");
		// echo '<pre />';
		// print_r($query);
		// die();

		return $query->result();
	}

	public function update_employee_select($id)
	{

		$this->db->where("user_id",$id);
		$query=$this->db->query("select * from users_details where user_id=$id");
		// echo '<pre />';
		// print_r($query);
		// die();
		return $query->result();
	}


public function update_employee($id)
{

	$data=array(
 'user_name'=>$this->input->post('e_name'),
 'user_phone_number'=>$this->input->post('e_mobile'),
 'user_email'=>$this->input->post('e_email'),
 'user_address'=>$this->input->post('e_address'),
 'user_gendar'=>$this->input->post('gender'),
 'user_fax_number'=>$this->input->post('fax_num'),
 'user_joining_date'=>$this->input->post('e_date'),
 'user_sallery'=>$this->input->post('sallary')
);
$this->db->where(array('user_id'=> $id));
$this->db->update('users_details',$data);
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
