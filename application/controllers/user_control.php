<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class User_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('User_model');
  $this->load->model('menu');
  $this->load->helper(array('form','url'));
 }

 public function do_register()
 {
   if($this->User_model->register())
   {
    $data['msg']='Registration successful please login';
    $this->load->view('pages/login.php',$data);
   }
 }
 public function edit_user($id)
 {
   $data['h']=$this->User_model->edituser($id);
   $this->load->view('pages/register.php',$data);
 }
 public function do_edit_user($id)
 {
   if($this->User_model->do_edituser($id))
   {
    $data['msg']='user details updated';
    $this->load->view('pages/login.php',$data);
   }
 }
 public function view_user()
 {
   $data['k']=$this->User_model->view_user();
   $data['title']='user_details';
   $this->load->view('template/header.php',$data);
   $this->load->view('pages/view_user.php',$data);
   $this->load->view('template/footer.php');
}
}
