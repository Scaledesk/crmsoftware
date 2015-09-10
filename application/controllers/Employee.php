<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Employee extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Employee_model');
  $this->load->model('menu_models');
  $this->load->model('Message_model');
  $this->load->helper(array('form','url'));
 }



public function add_employee()
{
      $data['title']='Add Employee';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
     if( $this->Employee_model->add_employee()){
      //echo "successful add Employee";
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_employee.php');
      $this->load->view('templates/footer.php');
     }
}

public function employee()
  {
      $data['title']='Manage Event';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_employee.php');
      $this->load->view('templates/footer.php');
  }

  public function employee_delete($id)
{
  if($this->Employee_model->delete_employee($id))
  {
    $this->employee_show();
  }
}

public function update_employee($id)
{

    $this->load->model("sales_model");
    $data['h']=$this->Employee_model->update_employee($id);
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $data['title']="show calendar";
    $data['show_emp']=$this->Employee_model->employee_show();
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/show_employee.php',$data);
    $this->load->view('templates/footer.php');

}

public function employee_show()
  {
      $data['title']='Manage Event';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['show_emp']=$this->Employee_model->employee_show();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/show_employee.php',$data);
      $this->load->view('templates/footer.php');
  }


public function update_employee_select($id)
{

  $this->load->database();
    $data['title']="show calendar";
    $data['select_emp']=$this->Employee_model->update_employee_select($id);



    //$this->calendar();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
   $this->load->view('templates/header.php',$data);
  $this->load->view('pages/update_employee.php',$data);
  $this->load->view('templates/footer.php');

}


public function leave_employee()
{
      $data['title']='Manage Leave';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
     if( $this->Employee_model->leave_employee()){
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_employee.php');
      $this->load->view('templates/footer.php');
}
}

public function leave()
  {

      $data['title']='Manage Leave';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/leave.php');
      $this->load->view('templates/footer.php');
  }

  public function leave_employee_delete($id)
{
  if($this->Employee_model->delete_leave($id))
  {
    echo "successful leave delete ";

    $this->leave_employee_show();
  }
}

public function leave_update_employee($id)
{


    if($this->Employee_model->update_leave($id))
    {
      redirect(base_url().'Employee/leave_employee_show');
    }

   // echo 'successful leave update';

 //   $data['title']='Manage Leave';
   // $data['show_leave']=$this->Employee_model->leave_show();

    //$this->load->view('templates/header.php',$data);
    //$this->load->view('pages/leave_table.php',$data);
    //$this->load->view('templates/footer.php');

}

public function leave_employee_show()
  {
      $data['title']='Manage Leave';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['show_leave']=$this->Employee_model->leave_show();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/leave_table.php',$data);
      $this->load->view('templates/footer.php');
  }


public function leave_update_employee_select($id)
{


  $this->load->database();
    $data['title']="Manage Leave";
    $data['show_leave']=$this->Employee_model->update_leave_select($id);

   //  print_r($data['show_leave']);
   // die();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();


    //$this->calendar();
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
   $this->load->view('templates/header.php',$data);
  $this->load->view('pages/leave_update.php',$data);
  $this->load->view('templates/footer.php');

}

public function leave_employee_approve($id)
{
  if($this->Employee_model->leave_approve($id))
  {
    echo "successful leave Approve ";

    redirect(base_url().'Employee/leave_employee_show');
  }
}



}
