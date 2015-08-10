<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
$this->load->database();
}
public function send_message()
{
  if($this->session->userdata('user_id')!=''){
   $sender_id=$this->session->userdata('user_id');
 }
 else{
  $sender_id=$this->session->userdata('admin_id');
 }

$status=0;
$time=date('Y-m-d H:i:s',time());
$data=array(
  'reciever_id'=>$this->input->post('recipients'),
  'sender_id'=>$sender_id,
  'message_title'=>$this->input->post('subject'),
  'message_body'=>$this->input->post('body'),
  'message_status'=>$status,
  'message_time'=>$time
);
$this->db->insert('message_details',$data);
return true;
}

public function getMessage($limit,$start)
{
  if($this->session->userdata('user_id')!=''){
   $id=$this->session->userdata('user_id');
 }
 else{
  $id=$this->session->userdata('admin_id');
 }
// $this->db->where('message_id',$p);
 //$this->db->limit($limit);
 $this->db->limit($limit, $start);
 $this->db->where('reciever_id',$id);
 $query=$this->db->get('message_details');
 return $query;
}

public function getSentMessage($limit,$start)
{
  if($this->session->userdata('user_id')!=''){
   $id=$this->session->userdata('user_id');
 }
 else{
  $id=$this->session->userdata('admin_id');
 }


 //$this->db->where('message_id',$p);
 $this->db->limit($limit, $start);
 $this->db->where('sender_id',$id);
 $query=$this->db->get('message_details');
 return $query;
}
public function delMessage()
{
  $message=implode(',',$this->input->post('chk'));
 $arr=explode(',',$message);
  foreach ($arr as $k => $v) {
    $query=$this->db->query("delete from message_details where message_id='$v'");
  }
  //die;
//  if(mysql_affected_rows($query))
  return true;

}
public function getMessageCount()
{
  if($this->session->userdata('user_id')!=''){
   $id=$this->session->userdata('user_id');
 }
 else{
  $id=$this->session->userdata('admin_id');
 }
  $this->db->where('reciever_id',$id);
  $query = $this->db->get("message_details");
  return $query->num_rows();


}
public function getSentMessageCount()
{
  if($this->session->userdata('user_id')!=''){
   $id=$this->session->userdata('user_id');
 }
 else{
  $id=$this->session->userdata('admin_id');
 }
  $this->db->where('sender_id',$id);
  $query = $this->db->get("message_details");
  return $query->num_rows();

}

}
