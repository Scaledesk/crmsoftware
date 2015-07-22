<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class User_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('User_model');
  $this->load->model('menu_models');
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
   $data['h']=$this->User_model->view_user();
   $data['title']='user_details';
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/view_user.php',$data);
   $this->load->view('templates/footer.php');
}
public function view_permission()
{
  $data['h']=$this->User_model->view_permission();
  $data['title']='Manage Permission';
  $menus = $this->menu_models->menus();
  $data = array('menus' => $menus);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/manage_permission.php',$data);
  $this->load->view('templates/footer.php');
}
public function access_permission()
{
  $data['h']=$this->User_model->get_menu();
  $menus = $this->menu_models->menus();
  $data = array('menus' => $menus);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/permission_access.php',$data);
  $this->load->view('templates/footer.php');
}
public function delete_user($id)
{
  if($this->User_model->delete_user($id))
  {
    redirect(base_url().'User_control/view_user');
  }
}
}
