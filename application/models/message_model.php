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
   $sendar_name = $this->session->userdata('user_name');
 }
 else{
  $sender_id=$this->session->userdata('admin_id');
  $sendar_name = $this->session->userdata('admin_name');
 }
$send_to = $this->input->post('recipients');
$status=0;
$time=date('Y-m-d H:i:s',time());
$data=array(
  'message_title'=>$this->input->post('subject'),
  'message_body'=>$this->input->post('body'),
  'send_to'=>$send_to,
  'send_by'=>$sender_id,
  'sendar_name'=>$sendar_name,
  'message_time'=>$time,
  'message_status'=>$status
);
$this->db->insert('messages',$data);

$query = $this->db->query("select id from messages order by id desc limit 1;");
$m_id = $query->result()[0]->id;
$data1 = array(
  'user' => $send_to,
  'mailbox' => 'In',
  'message_id' => $m_id
);
$data2 = array(
  'user' => $sender_id,
  'mailbox' => 'Out',
  'message_id' => $m_id
);
$this->db->insert('message_user',$data1);
$this->db->insert('message_user',$data2);
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

 $this->db->limit($limit, $start);

// $query = $this->db->query("SELECT * FROM message_user LEFT JOIN messages ON messages.id = message_user.message_id
//  WHERE message_user.user = '$id' AND message_user.mailbox = 'In';");


  $d = $this->db->query("select messages.id,
         messages.message_title,
         messages.message_body,
         messages.message_status,
         messages.message_time,
         messages.send_to,
         messages.send_by,
         messages.sendar_name,
         message_user.user,
         message_user.mailbox,
         users_details.user_name
         from messages
         LEFT JOIN message_user ON messages.id = message_user.message_id
         LEFT JOIN users_details ON users_details.user_id = message_user.user WHERE message_user.user = '$id' AND message_user.mailbox = 'In' ;");




 //$query=$this->db->get('message_details');
 return $d;
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
 //$this->db->limit($limit, $start);
 //$this->db->where('sender_id',$id);
 //$query=$this->db->get('message_details');
 $d = $this->db->query("select messages.id,
        messages.message_title,
        messages.message_body,
        messages.message_status,
        messages.message_time,
        messages.send_to,
        messages.send_by,
        messages.sendar_name,
        message_user.user,
        message_user.mailbox,
        users_details.user_name
        from messages
        LEFT JOIN message_user ON messages.id = message_user.message_id
        LEFT JOIN users_details ON users_details.user_id = message_user.user WHERE message_user.user = '$id' AND message_user.mailbox = 'Out' ;");


 return $d;

}
public function delMessageIn($type)
{
  $message=implode(',',$this->input->post('chk'));
 $arr=explode(',',$message);
  foreach ($arr as $k => $v) {
    $query=$this->db->query("delete from message_user where message_id='$v' AND mailbox='In'; ");
  }
  //die;
//  if(mysql_affected_rows($query))
  return true;

}

public function delMessageOut($type)
{
  $message=implode(',',$this->input->post('chk'));
 $arr=explode(',',$message);
  foreach ($arr as $k => $v) {
    $query=$this->db->query("delete from message_user where message_id='$v' AND mailbox='Out'; ");
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

  $this->db->where('user',$id);
  $this->db->where('mailbox','In');
  //$this->db->where('user',$id);
  $query = $this->db->get("message_user");
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
 $this->db->where('user',$id);
 $this->db->where('mailbox','Out');
  $query = $this->db->get("message_user");
  return $query->num_rows();

}

public function getNewMessageCount()
{
  if($this->session->userdata('user_id')!=''){
   $id=$this->session->userdata('user_id');
 }
 else{
  $id=$this->session->userdata('admin_id');
 }



  $query = $this->db->query("SELECT * FROM message_user LEFT JOIN messages ON messages.id = message_user.message_id
    WHERE message_user.user = '$id' AND message_user.mailbox = 'Out' AND messages.message_status = 0;");
  //$query = $this->db->get("message_details");
  return $query->num_rows();
}

public function getNewMessage()
{
  if($this->session->userdata('user_id')!=''){
   $id=$this->session->userdata('user_id');
 }
 else{
  $id=$this->session->userdata('admin_id');
 }
  //$this->db->where('reciever_id',$id);
//  $this->db->where('message_status',0);
  $query = $this->db->query("SELECT * FROM message_user LEFT JOIN messages ON messages.id = message_user.message_id
    WHERE message_user.user = '$id' AND message_user.mailbox = 'Out' AND messages.message_status = 0;");
  return $query;
}

public function getSingleMessage($id)
{
$v=1;
  //$this->db->where('id',$id);
  //$this->db->update('messages','message_status',$v);
  $this->db->query("UPDATE messages set message_status='$v' WHERE id='$id';");
  $this->db->where('id',$id);
  return $this->db->get('messages')->result();
}

}
