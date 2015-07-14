<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ticket_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Ticket_model');
  $this->load->helper(array('form','url'));
 }
 public function add_ticket()
{

    $data['title']='Add Ticket';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_ticket.php');
      $this->load->view('templates/footer.php');

}
public function do_add_ticket()
{
  if($this->Ticket_model->add_ticket())
  {
    $data['title']='Add Ticket';
    $data['msg']='Ticket details saved';
	$this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_ticket.php',$data);
      $this->load->view('templates/footer.php');
  }
}

public function view_ticket()
{
      $data['title']='View  Ticket';
      $data['h']=$this->Ticket_model->get_ticket();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_ticket_details.php',$data);
      $this->load->view('templates/footer.php');
}

public function edit_ticket($id)
{
  $this->load->database();
  $data['title']='Update Ticket Details';
  $data['k']=$this->Ticket_model->edit_ticket($id);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/add_ticket.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_edit_ticket($id)
{
  $this->load->database();
  if($this->Ticket_model->do_edit_ticket($id))
  {
    redirect(base_url().'Ticket_control/view_ticket');
  }
  else{
    echo "server error";
  }

}
public function delete_ticket($id)
{
  if($this->Ticket_model->delete_ticket($id))
  {
    redirect(base_url().'Ticket_control/view_ticket');
  }
}


}

