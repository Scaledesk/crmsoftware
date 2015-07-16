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
      'logged_in'  => TRUE,
    );
    $this->session->set_userdata($newdata);
    return true;
   }
  }
  else
  {
   $this->db->where("email",$email);
   $this->db->where("password",$password);
   $query=$this->db->get("users");
   if($query->num_rows()>0)
   {
    foreach($query->result() as $rows)
    {
     $newdata = array(
      'user_id'  => $rows->user_id,
      'user_name'  => $rows->username,
      'user_email'    => $rows->email,
      'logged_in'  => TRUE,
     );
     $this->session->set_userdata($newdata);
    return true;
    }
    return false;
   }
  }
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
}
