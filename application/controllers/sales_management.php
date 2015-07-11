<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class sales_management extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('sales_model');
  $this->load->helper(array('form','url'));
  $this->load->library('email');
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
      $data['k']=$this->sales_model->getleadname();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_order.php',$data);
      $this->load->view('templates/footer.php');  
}
public function do_add_order()
{
  if($this->sales_model->add_order())
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

  public function view_order()
  {
      $data['title']='Order  Details';
      $data['h']=$this->sales_model->view_order_details();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_order.php',$data);
      $this->load->view('templates/footer.php'); 
  }

  public function calendar()
  {
      $data['title']='Manage Event';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/calendar.php');
      $this->load->view('templates/footer.php');
  }
  public function manage_invoice()
  {
    $data['title']='Manage Invoice';
    $data['k']=$this->sales_model->getorder();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/manage_invoice.php',$data);
      $this->load->view('templates/footer.php');
  }

  public function loadinvoice()
  {
    $id=$this->input->post('id');
    $data['k']=$this->sales_model->view_invoices($id);
    $this->load->view('pages/add_invoice_form.php',$data);
  }
public function add_invoice()
  {
      $data['title']='Add Invoice';
      $data['k']=$this->sales_model->getorder();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_invoice.php',$data);
      $this->load->view('templates/footer.php');
  }
public function do_add_invoice()
{
  if($this->sales_model->add_invoice())
  {
    redirect(base_url().'sales_management/manage_invoice');
  }
}
public function editinvoice($id)
{
  $data['title']='Update Invoice';
   // $data['k']=$this->sales_model->getorder();
    $data['h']=$this->sales_model->getinvoice($id);
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/update_invoice.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_edit_invoice($id)
{
  $this->load->database();
  if($this->sales_model->do_edit_invoice($id))
  {
    redirect(base_url().'sales_management/manage_invoice');
  }
  else{
    echo "record not updated";
  }

}
/*public function view_invoice($id)
{
  $data['h']=$this->sales_model->view_invoice($id);
  $this->load->view();

}*/
public function editlead($id)
{
  $this->load->database();
  $data['title']='Update Lead Details';
  $data['h']=$this->sales_model->editlead($id);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/add_lead.php',$data);
  $this->load->view('templates/footer.php');
}

public function editorder($id)
{
  $this->load->database();
  $data['title']='Update Order Details';
  $data['k']=$this->sales_model->getleadname();
  $data['h']=$this->sales_model->editorder($id);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/add_order.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_edit_order($id)
{
  $this->load->database();
  if($this->sales_model->do_editorder($id))
  {
    redirect(base_url().'sales_management/view_order');
  }
  else{
    echo "record not updated";
  }

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

public function addreminder($id)
{
      $data['title']='Add reminder';
      $data['k']=$this->sales_model->getinvoice($id);
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/reminder.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_addreminder()
{
  if($this->sales_model->add_reminder())
  {
          $data['title']='Manage Invoice';
          $data['k']=$this->sales_model->getorder();
           $this->load->view('templates/header.php');
           $this->load->view('pages/manage_invoice.php',$data);
           $this->load->view('templates/footer.php');
  }
}

public function sendreminder()
{

  $data['remider']=$this->sales_model->getreminder();
  $f=0;
  $tdate=date('Y-m-d',mktime(0,0,0));
  foreach ($data['remider']->result() as $row) {
    $r_date=date($row->reminder_date,mktime(0,0,0));
    
    if(strtotime($r_date)==strtotime($tdate))
    {
       //$data['invoice']=$this->sales_model->getinvoice();
        $invoice_id=$row->invoice_id;
        $this->email->from('javed@weboforce.com', 'JavedAhamad');
        $this->email->to('javedahamad4@gmail.com');
        $this->email->subject('Invoice Due Date');
        $this->email->message('Dear sir, invoice due date come regarding invoice number  ');
        if($this->email->send())
        {
          //echo "reminder send";
          //$this->sales_model->deletereminder($row->reminder_id);
          $f=1;
        }    
    }
  }
  if($f==1)
  {
    echo "reminder send";

  }
  else
  {
    echo "reminder not send";
  }

  /*$data['invoice']=$this->sales_model->getinvoice();
  $this->email->from('javed@weboforce.com', 'JavedAhamad');
  $this->email->to('javedahamad4@gmail.com');
  $this->email->subject('New Usre Registered');
  $this->email->message('Testing the email class.');
  $this->email->send();
*/
}

public function view_reminder()
{
      $data['title']='View  Reminder';
      $data['h']=$this->sales_model->getorder();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_reminder.php',$data);
      $this->load->view('templates/footer.php'); 
}
public function loadreminderinvoice()
{
    $id=$this->input->post('id');
    $data['i']=$this->sales_model->view_invoices($id);
    $this->load->view('pages/selectinvoice.php',$data);
}
public function loadreminder()
{
  $id=$this->input->post('id');
  $data['k']=$this->sales_model->view_reminder($id);
    $this->load->view('pages/showreminder.php',$data);
}

public function add_supplier_category()
{
      $data['title']='Add Supplier Category';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_supplier_category.php');
      $this->load->view('templates/footer.php');  
}
public function do_add_supplier_category()
{
  if($this->sales_model->add_supplier_category())
  {
    $data['title']='Add Supplier Category';
    $data['msg']='Supplier category saved';
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_supplier_category.php',$data);
      $this->load->view('templates/footer.php');     
  }
}



}
