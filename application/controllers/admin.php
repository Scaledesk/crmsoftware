<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Admin extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('admin_model');
  $this->load->helper(array('form','url'));
 }
  public function index()
  {
    if(($this->session->userdata('admin_name')!=""))
    {
      $this->welcome();
    }
    else if(($this->session->userdata('user_name')!=""))
    {
      $this->welcome();
    }
    else{
      $this->load->view("admin/home.php");
    }
  }


}
