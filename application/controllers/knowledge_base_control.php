<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Knowledge_base_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Knowledge_base_model');
  $this->load->helper(array('form','url'));
 }
 public function add_category()
{

    $data['title']='Add Category';
    $data['h']=$this->Knowledge_base_model->get_category();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_knowledge_category.php',$data);
      $this->load->view('templates/footer.php');

}
public function do_add_category()
{
  if($this->Knowledge_base_model->add_category())
  {
    $data['title']='Add Category';
    $data['msg']='Category detail saved';
    $data['h']=$this->Knowledge_base_model->get_category();
  	 $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_knowledge_category.php',$data);
      $this->load->view('templates/footer.php');
  }
}

public function add_knowledge_base()
{

    $data['title']='Add Knowledge Base Details';
    $data['h']=$this->Knowledge_base_model->get_category();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_knowledge_base.php',$data);
      $this->load->view('templates/footer.php');

}
public function do_add_knowledge_base()
{
  if($this->Knowledge_base_model->add_knowledge_base())
  {
    $data['title']='Add Knowledge Base Details';
    $data['msg']='Knowledge Base detail saved';
    $data['h']=$this->Knowledge_base_model->get_category();
     $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_knowledge_base.php',$data);
      $this->load->view('templates/footer.php');
  }
}

public function view_knowledge_base()
{
      $data['title']='View  Knowledge Base Details';
      $data['h']=$this->Ticket_model->get_knowledge_base();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_knowledge_base.php',$data);
      $this->load->view('templates/footer.php');
}

public function edit_knowledge_base($id)
{
   $data['title']='Update Knowledge Base Details';
    $data['h']=$this->Knowledge_base_model->get_category();
    $data['k']=$this->Knowledge_base_model->edit_knowledge_base();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_knowledge_base.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_edit_knowledge_base()
{
  $this->load->database();
  if($this->Knowledge_base_model->do_edit_knowledge_base($id))
  {
    redirect(base_url().'Knowledge_base_control/view_knowledge_base');
  }
  else{
    echo "server error";
  }  
}


public function delete_knowledge_base($id)
{
  if($this->Knowledge_base_control->delete_knowledge_base($id))
  {
    redirect(base_url().'Knowledge_base_control/view_knowledge_base');
  }
}


}

