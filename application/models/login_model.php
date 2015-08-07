<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
	$this->load->database();
}

public function login($email,$password)
{
  $this->db->where("admin_email",$email);
  $this->db->where("admin_password",$password);
  $query=$this->db->get("admin_details");
  if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
       $newdata = array(
      'admin_id'  => $rows->admin_id,
      'admin_name'  => $rows->admin_name,
      'admin_email'    => $rows->admin_email,
			'imgName'    => $rows->imgName,
      'logged_in'  => TRUE,
    );
    $this->session->set_userdata($newdata);
    return true;
   }
  }
  else
  {
   $this->db->where("user_email",$email);
   $this->db->where("user_password",$password);
   $query=$this->db->get("users_details");
   if($query->num_rows()>0)
   {
    foreach($query->result() as $rows)
    {
     $newdata = array(
      'user_id'  => $rows->user_id,
      'user_name'  => $rows->user_name,
      'user_email'    => $rows->user_email,
			'imgName'    => $rows->imgName,
      'logged_in'  => TRUE,
     );
     $this->session->set_userdata($newdata);
    return true;
    }
    return false;
   }
  }
}

}
