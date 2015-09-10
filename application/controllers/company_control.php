<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Company_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Company_model');
  $this->load->model('menu_models');
  $this->load->model('Message_model');
  $this->load->helper(array('form','url'));
 }


  public function add_company()
  {
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['title']='Add Company Details';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_company.php');
      $this->load->view('templates/footer.php');

  }
  public function do_add_company()
  {
    if($this->Company_model->add_company())
    {
      $data['title']='Add Company Details';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['msg']="Company Record Added";
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_company.php',$data);
      $this->load->view('templates/footer.php');
    }
  }

  public function view_company()
  {
      $data['title']='View Company Details';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['h']=$this->Company_model->view_company_details();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_company.php',$data);
      $this->load->view('templates/footer.php');
  }

  public function editcompany($id)
{

  $this->load->database();
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
  $data['menus'] = $this->menu_models->menus();
  $data['company']=$this->menu_models->getCompanyLogo();
  $data['title']='Edit Company Details';
  $data['h']=$this->Company_model->editcompany($id);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/edit_company.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_edit_company($id)
{
  $this->load->database();
  if($this->Company_model->do_editcompany($id))
  {
    /*$data['title']='View Company Details';
    $data['msg']="Successfully updated company details";
    $data['h']=$this->Company_model->view_company_details();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_company.php',$data);
    $this->load->view('templates/footer.php');
    */
    redirect(base_url().'company_control/view_company');
  }
  else{
    echo "record not updated";
  }

}

public function deletecompany($id)
{
  if($this->Company_model->deletecompany($id))
  {
    /*$data['title']='View Company Details';
    $data['msg']="Company deleted";
    $data['h']=$this->Company_model->view_company_details();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_company.php',$data);
    $this->load->view('templates/footer.php');
    */
    redirect(base_url().'company_control/view_company');
  }
}



}
