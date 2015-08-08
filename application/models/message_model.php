<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message_model extends CI_Model {
public function __construct()
{
parent::__construct();
	$this->load->library('session');
	$this->load->database();
}

public function send_new_message()
{
  if($this->session->userdata('user_id')!=''){
   $sender_id=$this->session->userdata('user_id');
 }
 else{
  $sender_id=$this->session->userdata('admin_id');
 }
$reciever_id=$this->input->post('recipients');
$title=$this->input->post('subject');
$body=$this->input->post('body');
$status=0;
$data=array(
  'reciever_id'=>$reciever_id,
  'sender_id'=>$sender_id,
  'message_title'=>$title,
  'message_body'=>$body,
  'message_status'=>$status
)
$this->db->insert('message_details',$data);
return true;
}


}
