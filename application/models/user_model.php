<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
$this->load->database();
}

public function add_permission()
{
  echo '<pre/>';
  print_r(serialize($this->input->post('page')));
  //print_r($this->input->post());
  die;
  $data=array(
  'user_id'=>$this->input->post('user_id'),
  'page_id'=>$pid
  );
  $this->db->insert('user_permission',$data);
  return true;
}

public function register()
{
$data=array(
'user_name'=>$this->input->post('user_name'),
'user_email'=>$this->input->post('user_email'),
'user_password'=>$this->input->post('user_password'),
'user_address'=>$this->input->post('user_address'),
'user_phone_number'=>$this->input->post('user_phone_number'),
'user_fax_number'=>$this->input->post('user_fax_number'),
'registration_time'=>time()
);
$this->db->insert('users_details',$data);
return true;
}
public function edituser($id)
{
  $u_id=$id;
  $this->db->where("user_id",$u_id);
  $query=$this->db->get("users_details");
  return $query->result();

}
public function do_edituser($id)
{
  $user_id=$id;
$data = array(
  'user_name'=>$this->input->post('user_name'),
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>$this->input->post('user_password'),
  'user_address'=>$this->input->post('user_address'),
  'user_phone_number'=>md5($this->input->post('user_phone_number')),
  'user_fax_number'=>$this->input->post('user_fax_number')
            );
$this->db->where('user_id', $user_id);
$this->db->update('users_details', $data);
return true;
}
public function view_user()
{
  $query=$this->db->get("users_details");
  return $query;
}
public function view_permission()
{
  $query=$this->db->get("perm_data");
  return $query;
}
public function get_menu()
{
  $query=$this->db->get("menu_children");
  return $query;
}
public function delete_user($id)
{
  $this->db->where("user_id",$id);
  $this->db->delete('users_details');
  return true;
}
}
