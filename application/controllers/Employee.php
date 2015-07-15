<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Employee extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Employee_model');
  $this->load->helper(array('form','url'));
 }



public function add_employee()
{
      $data['title']='Add order';
      $this->Employee_model->add_employee();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/show_employee.php',$data);
      $this->load->view('templates/footer.php');  
}

public function employee()
  {
      $data['title']='Manage Event';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_employee.php');
      $this->load->view('templates/footer.php');
  }

  public function employee_delete($id)
{
  if($this->Employee_model->delete_employee($id))
  {
    redirect(base_url().'sales_management/view_lead');
  }
}

public function employee_update($id)
{

    $this->load->model("sales_model");
    $data['h']=$this->Employee_model->employee_update($id);
 
    $data['title']="show calendar";
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/show_calender.php',$data);
    $this->load->view('templates/footer.php');
  
}

public function employee_show()
  {
      $data['title']='Manage Event';
      $data['h']=$this->Employee_model->employee_show();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/show_employee.php');
      $this->load->view('templates/footer.php');
  }
}