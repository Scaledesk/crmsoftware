<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class sales_management extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('sales_model');
  $this->load->helper(array('form','url'));
 }
 public function add_lead()
{

    $data['title']='Add Leads';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_lead.php');
      $this->load->view('templates/footer.php');

}
public function add_order()
{
      $data['title']='Add order';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_order.php');
      $this->load->view('templates/footer.php');  
}
public function do_add_order()
{
  if($this->sales->add_order())
  {
          $data['msg']=" Order saved";
           $this->load->view('templates/header.php');
           $this->load->view('pages/add_order.php',$data);
           $this->load->view('templates/footer.php');
  }
}

public function do_add_comment()
{
    if($this->sales_model->add_comment())
         {
           $data['msg']="comment saved";
           $this->load->view('templates/header.php');
           $this->load->view('pages/view_lead.php',$data);
           $this->load->view('templates/footer.php');
         }
}
public function do_add_lead()
{
          
          if($this->sales_model->add_lead())
         {
           $data['msg']="Lead Aded Added";
           $this->load->view('templates/header.php');
           $this->load->view('pages/add_lead.php',$data);
           $this->load->view('templates/footer.php');
         }
  
}


  public function view_lead()
  {
      $data['title']='Lead  Details';
      $data['h']=$this->sales_model->view_lead_details();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_lead.php',$data);
      $this->load->view('templates/footer.php'); 
  }

  public function editlead($id)
{
  $this->load->database();
  $data['title']='Update Lead Details';
  $data['h']=$this->sales_model->editlead($id);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/add_lead.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_edit_lead($id)
{
  $this->load->database();
  if($this->sales_model->do_editlead($id))
  {
    redirect(base_url().'sales_management/view_lead');
  }
  else{
    echo "record not updated";
  }

}

public function deletelead($id)
{
  if($this->sales_model->deletelead($id))
  {
    redirect(base_url().'sales_management/view_lead');
  }
}
public function deleteorder($id)
{
  if($this->sales_model->deleteorder($id))
  {
    redirect(base_url().'sales_management/view_order');
  } 
}



}
