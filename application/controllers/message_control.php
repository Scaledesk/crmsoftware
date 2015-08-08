<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
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
  //$this->load->library('mahana_messaging');
	//$msg = $this->mahana_messaging->get_message($msg_id, $sender_id);
  $this->load->helper(array('form','url'));
 }
      public function compose_msg(){
        $data['title']='Inbox';
        $data['menus'] = $this->menu_models->menus();
        $data['company']=$this->menu_models->getCompanyLogo();
        $data['h']=$this->User_model->view_user();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/compose.php');
        $this->load->view('templates/footer.php');
       }
       public function send_msg(){

           if($this->Message_model->send_new_message())
           {
             $data['title']='Inbox';
             $data['msg']="Message sent";
             $data['menus'] = $this->menu_models->menus();
             $data['company']=$this->menu_models->getCompanyLogo();
             $this->load->view('templates/header.php',$data);
             $this->load->view('pages/inbox.php');
             $this->load->view('templates/footer.php');
           }
        }
         public function inbox()
         {
          $data['title']='Inbox';
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/inbox.php');
          $this->load->view('templates/footer.php');
        }
}
