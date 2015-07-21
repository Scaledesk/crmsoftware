<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Login_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Login_model');
  $this->load->helper(array('form','url'));
 }
 public function index()
 {
   if($this->session->userdata('admin_name')!="")
   {
     $this->load->view('templates/header.php');
     $this->load->view('Admin/index.php');
     $this->load->view('templates/footer.php');
   }
   else if($this->session->userdata('user_name')!="")
   {
     $this->load->view('templates/header.php');
     $this->load->view('pages/userpage.php');
     $this->load->view('templates/footer.php');
   }
   else{
   $this->load->view('pages/home.php');
    }
 }


 public function login()
{

 if($this->session->userdata('admin_name')!="")
 {
   $this->load->view('templates/header.php');
   $this->load->view('Admin/index.php');
   $this->load->view('templates/footer.php');
 }
 else if($this->session->userdata('user_name')!="")
 {
   $this->load->view('templates/header.php');
   $this->load->view('pages/userpage.php');
   $this->load->view('templates/footer.php');
 }
 else{
 $this->load->view('pages/login.php');
  }

}
public function register()
{
    $this->load->view('pages/register.php');
}

public function do_login()
{
  $email=$this->input->post('email');
  $password=$this->input->post('password');
  $result=$this->Login_model->login($email,$password);
  if($result) $this->welcome();
  else        $this->index();
}

public function welcome()
{
  $data['title']= 'Welcome';
  if($this->session->userdata('admin_name')!="")
  {  $this->load->view('templates/header.php');
    $this->load->view('pages/index.php', $data);
    $this->load->view('templates/footer.php');

  }
  else
  {
    $this->load->view('templates/header.php');
    $this->load->view('pages/userpage.php', $data);
    $this->load->view('templates/footer.php');
  }
}
public function logout()
{
  /*$newdata = array(
  'user_id'   =>'',
  'user_name'  =>'',
  'user_email'     => '',
  'logged_in' => FALSE,
  );
  $this->session->unset_userdata($newdata );*/
  $this->session->sess_destroy();
  redirect(base_url());

}
}
