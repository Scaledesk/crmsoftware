<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Contact_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('company_model');
  $this->load->model('contact_model');
  $this->load->model('menu_models');
  $this->load->helper(array('form','url'));
 }

public function add_contact()
{
    $data['menus'] = $this->menu_models->menus();
      $data['title']='Add Contact Details';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_contact.php');
      $this->load->view('templates/footer.php');

}
public function do_add_contact()
{
  if($this->contact_model->add_contact())
    {
      $data['msg']="Contact Record Added";
      $data['menus'] = $this->menu_models->menus();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_contact.php',$data);
      $this->load->view('templates/footer.php');
    }
}


  public function view_contact()
  {
      $data['menus'] = $this->menu_models->menus();
      $data['title']='Contact Details';
      $data['h']=$this->contact_model->view_contact_details();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_contact.php',$data);
      $this->load->view('templates/footer.php');
  }

  public function editcontact($id)
{
  $data['menus'] = $this->menu_models->menus();
  $this->load->database();
  $data['title']='Edit Contact Details';
  $data['h']=$this->contact_model->editcontact($id);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/edit_contact.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_edit_contact($id)
{
  $this->load->database();
  if($this->contact_model->do_editcontact($id))
  {
    /*$data['title']='View Company Details';
    $data['msg']="Successfully updated company details";
    $data['h']=$this->company_model->view_company_details();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_company.php',$data);
    $this->load->view('templates/footer.php');
    */
    redirect(base_url().'contact_control/view_contact');
  }
  else{
    echo "record not updated";
  }

}

public function deletecontact($id)
{
  if($this->contact_model->deletecontact($id))
  {
    /*$data['title']='View Company Details';
    $data['msg']="Company deleted";
    $data['h']=$this->company_model->view_company_details();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_company.php',$data);
    $this->load->view('templates/footer.php');
    */
    redirect(base_url().'contact_control/view_contact');
  }
}



}
