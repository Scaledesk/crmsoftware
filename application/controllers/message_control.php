<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Login_model');
  //$this->load->model('mahana_model');
  $this->load->model('menu_models');
  $this->load->model('User_model');
  $this->load->model('Message_model');
  $this->load->library('session');
  $this->load->library('pagination');
  //$this->load->library('mahana_messaging');
	//$msg = $this->mahana_messaging->get_message($msg_id, $sender_id);
  $this->load->helper(array('form','url'));
 }
      public function compose_msg(){
        $data['title']='Inbox';
        $data['countMsg']= $this->Message_model->getNewMessageCount();
        $data['msg']= $this->Message_model->getNewMessage();
        $data['menus'] = $this->menu_models->menus();
        $data['company']=$this->menu_models->getCompanyLogo();
        $data['h']=$this->User_model->view_user();
        $data['count']=$this->Message_model->getMessageCount();
        $data['countSentbox']=$this->Message_model->getSentMessageCount();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/compose.php',$data);
        $this->load->view('templates/footer.php');
       }
       public function send_msg(){

           if($this->Message_model->send_message())
           {
             $data['title']='Inbox';
             $data['massage']="Message sent";
             $data['countMsg']= $this->Message_model->getNewMessageCount();
             $data['msg']= $this->Message_model->getNewMessage();
             $data['m']=$this->Message_model->getMessage();
             $data['menus'] = $this->menu_models->menus();
             $data['company']=$this->menu_models->getCompanyLogo();
             $data['count']=$this->Message_model->getMessageCount();
             $data['countSentbox']=$this->Message_model->getSentMessageCount();
             $this->load->view('templates/header.php',$data);
             $this->load->view('pages/inbox.php',$data);
             $this->load->view('templates/footer.php');
           }
        }
         public function inbox()
         {

          $data['title']='Inbox';
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
          $data['count']=$this->Message_model->getMessageCount();
          $data['countSentbox']=$this->Message_model->getSentMessageCount();
          $config['base_url'] = base_url().'Message_control/inbox';
          $config['total_rows'] = $data['count'];
          $config['enable_query_strings']=true;
          $config['per_page'] = 3;
          $config['num_links'] = 2;
          $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
          $this->pagination->initialize($config);
          $data['m']=$this->Message_model->getMessage($config["per_page"],$page);
          $str_links = $this->pagination->create_links();
          $data["links"] = explode('&nbsp;',$str_links );
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/inbox.php',$data);
          $this->load->view('templates/footer.php');
        }
        public function sentbox()
        {

          $data['title']='Sentbox';
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
          $data['count']=$this->Message_model->getSentMessageCount();
            $data['countInbox']=$this->Message_model->getMessageCount();
          $data['countSentbox']=$this->Message_model->getSentMessageCount();
          $config['base_url'] = base_url().'Message_control/sentbox';
          $config['total_rows'] = $data['count'];
          $config['enable_query_strings']=true;
          $config['per_page'] = 3;
          $config['num_links'] = 2;
          $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
          $this->pagination->initialize($config);
          $data['s']=$this->Message_model->getSentMessage($config["per_page"],$page);
          $str_links = $this->pagination->create_links();
          $data["links"] = explode('&nbsp;',$str_links );
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/sentbox.php',$data);
          $this->load->view('templates/footer.php');

          /*
          $data['title']='sentbox';
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
          $data['countInbox']=$this->Message_model->getMessageCount();
          $data['s']=$this->Message_model->getSentMessage();
          $data['count']=$data['s']->num_rows();
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/sentbox.php',$data);
          $this->load->view('templates/footer.php');
          */
        }

  /*
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
*/
public function deleteMessageOut()
{
  if($this->Message_model->delMessageOut($type))
  {
    $data['title']='Sentbox';
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $data['count']=$this->Message_model->getSentMessageCount();
      $data['countInbox']=$this->Message_model->getMessageCount();
    $data['countSentbox']=$this->Message_model->getSentMessageCount();
    $config['base_url'] = base_url().'Message_control/sentbox';
    $config['total_rows'] = $data['count'];
    $config['enable_query_strings']=true;
    $config['per_page'] = 3;
    $config['num_links'] = 2;
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->pagination->initialize($config);
    $data['s']=$this->Message_model->getSentMessage($config["per_page"],$page);
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;',$str_links );
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/sentbox.php',$data);
    $this->load->view('templates/footer.php');
  }
}

public function deleteMessageIn()
{
  if($this->Message_model->delMessageIn($type))
  {
    $data['title']='Inbox';
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $data['count']=$this->Message_model->getMessageCount();
    $data['countSentbox']=$this->Message_model->getSentMessageCount();
    $config['base_url'] = base_url().'Message_control/inbox';
    $config['total_rows'] = $data['count'];
    $config['enable_query_strings']=true;
    $config['per_page'] = 3;
    $config['num_links'] = 2;
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->pagination->initialize($config);
    $data['m']=$this->Message_model->getMessage($config["per_page"],$page);
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;',$str_links );
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/inbox.php',$data);
    $this->load->view('templates/footer.php');
  }
}

public function message_view($id)
{
  $data['title']='Inbox';
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
  $data['menus'] = $this->menu_models->menus();
  $data['message'] = $this->Message_model->getSingleMessage($id);
  // print_r($data['message']);
  // die;
  $data['company']=$this->menu_models->getCompanyLogo();
  $data['count']=$this->Message_model->getMessageCount();
  $data['countSentbox']=$this->Message_model->getSentMessageCount();
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/message_view.php',$data);
  $this->load->view('templates/footer.php');
}

}
