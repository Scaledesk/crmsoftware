<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class admin extends CI_Controller {
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

  public function add_company()
  {
      $this->load->view('templates/header.php');
      $this->load->view('admin/addcompany.php',$data);
      $this->load->view('templates/footer.php',$data);

  }
  public function do_add_company()
  {
    if($this->admin_model->add_company())
    {
      $data['msg']="Company Record Added";
      $this->load->view('templates/header.php');
      $this->load->view('admin/index.php',$data);
      $this->load->view('templates/footer.php');
    }
  }

}
