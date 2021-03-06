<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Login_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Login_model');
  $this->load->model('Sales_model');
  $this->load->model('Message_model');
  $this->load->model('Company_model');
  $this->load->model('Product_model');
  $this->load->model('menu_models');
  $this->load->library('session');
  $this->load->helper(array('form','url'));
 }
 public function index()
 {
   if($this->session->userdata('admin_name')!="")
   {
     $data['products']=$this->Product_model->view_product_details();
     $data['Supplier']=$this->Sales_model->getsupplier();
     $data['orderDetails']=$this->Sales_model->view_order_details();
     $data['companyDetails']=$this->Company_model->view_company_details();
     $data['countMsg']= $this->Message_model->getNewMessageCount();
     $data['msg']= $this->Message_model->getNewMessage();
     $data['title']='Welcome Admin';
     $data['menus'] = $this->menu_models->menus();
     $data['company']=$this->menu_models->getCompanyLogo();
     $this->load->view('templates/header.php',$data);
     $this->load->view('pages/index.php',$data);
     $this->load->view('templates/footer.php');
   }
   else if($this->session->userdata('user_name')!="")
   {
     $data['countMsg']= $this->Message_model->getNewMessageCount();
     $data['msg']= $this->Message_model->getNewMessage();
     $data['menus'] = $this->menu_models->menus();
     $data['company']=$this->menu_models->getCompanyLogo();
     $data['title']='Welcome';
     $this->load->view('templates/header.php',$data);
     $this->load->view('pages/home.php');
     $this->load->view('templates/footer.php');
   }
   else{
   $this->load->view('pages/login.php');
    }
 }


 public function login()
{

 if($this->session->userdata('admin_name')!="")
 {
   $data['products']=$this->Product_model->view_product_details();
   $data['Supplier']=$this->Sales_model->getsupplier();
   $data['orderDetails']=$this->Sales_model->view_order_details();
   $data['companyDetails']=$this->Company_model->view_company_details();
   $data['countMsg']= $this->Message_model->getNewMessageCount();
   $data['msg']= $this->Message_model->getNewMessage();
   $data['menus'] = $this->menu_models->menus();
   $data['company']=$this->menu_models->getCompanyLogo();
   $data['title'] = "Welcome Admin";
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/index.php',$data);
   $this->load->view('templates/footer.php');
 }
 else if($this->session->userdata('user_name')!="")
 {
   $data['countMsg']= $this->Message_model->getNewMessageCount();
   $data['msg']= $this->Message_model->getNewMessage();
   $data['title']='Welcome';
   $data['menus'] = $this->menu_models->menus();
   $data['company']=$this->menu_models->getCompanyLogo();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/home.php');
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
  {
    $data['products']=$this->Product_model->view_product_details();
    $data['Supplier']=$this->Sales_model->getsupplier();
    $data['orderDetails']=$this->Sales_model->view_order_details();
    $data['companyDetails']=$this->Company_model->view_company_details();
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/index.php');
    $this->load->view('templates/footer.php');

  }
  else
  {
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/home.php');
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
