<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Login_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Login_model');
  $this->load->helper(array('form','url'));
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
 $this->load->view('pages/home.php');
  }

}
