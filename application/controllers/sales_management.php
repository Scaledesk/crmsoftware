<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Sales_management extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('sales_model');
  $this->load->helper(array('form','url'));
  $this->load->library('email');
  $this->load->model('menu_models');
  $this->load->model('Message_model');
 }
public function add_lead()
{

    $data['title']='Add Leads';
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_lead.php');
      $this->load->view('templates/footer.php');

}
public function add_order()
{
      $data['title']='Add order';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['k']=$this->sales_model->getleadname();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_order.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_add_order()
{
  if($this->sales_model->add_order())
  {
          $data['oredrmsg']=" Order saved";
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['k']=$this->sales_model->getleadname();
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
           $this->load->view('templates/header.php',$data);
           $this->load->view('pages/add_order.php',$data);
           $this->load->view('templates/footer.php');
  }
}

public function do_add_comment()
{
    if($this->sales_model->add_comment())
         {
           $data['commentmsg']="comment saved";
           $data['countMsg']= $this->Message_model->getNewMessageCount();
           $data['msg']= $this->Message_model->getNewMessage();
           $data['menus'] = $this->menu_models->menus();
           $data['company']=$this->menu_models->getCompanyLogo();
           $this->load->view('templates/header.php',$data);
           $this->load->view('pages/view_lead.php',$data);
           $this->load->view('templates/footer.php');
         }
}
public function do_add_lead()
{

          if($this->sales_model->add_lead())
         {
           $data['leadmsg']="Lead Aded Added";
           $data['countMsg']= $this->Message_model->getNewMessageCount();
           $data['msg']= $this->Message_model->getNewMessage();
           $data['menus'] = $this->menu_models->menus();
           $data['company']=$this->menu_models->getCompanyLogo();
           $this->load->view('templates/header.php',$data);
           $this->load->view('pages/add_lead.php',$data);
           $this->load->view('templates/footer.php');
         }

}
  public function view_lead()
  {
      $data['title']='Lead  Details';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->view_lead_details();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_lead.php',$data);
      $this->load->view('templates/footer.php');
  }

  public function view_order()
  {
      $data['title']='Order  Details';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->view_order_details();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_order.php',$data);
      $this->load->view('templates/footer.php');
  }


public function calendar()
  {
      $data['title']='Manage Event';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/calendar.php');
      $this->load->view('templates/footer.php');
  }
public function insert_calendar()
{
  $this->load->database();
  if($this->sales_model->do_calendar())
  {
    redirect(base_url().'sales_management/calendar');
  }
  else{
    echo "record not updated";
  }

}



public function show_calendar()
{
  $this->load->database();
    $data['title']="show calendar";
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
   $data['show_date']=$this->sales_model->show_calendar();
   $data['menus'] = $this->menu_models->menus();
   $data['company']=$this->menu_models->getCompanyLogo();
   $this->load->view('templates/header.php',$data);
  $this->load->view('pages/calendar_show.php',$data);
  $this->load->view('templates/footer.php');
}


public function show_calendar_table()
{
  $this->load->database();
    $data['title']="show calendar";
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
   $data['show_date']=$this->sales_model->show_calendar();
   $data['menus'] = $this->menu_models->menus();
   $data['company']=$this->menu_models->getCompanyLogo();
   $this->load->view('templates/header.php',$data);
  $this->load->view('pages/show_calender_table.php',$data);
  $this->load->view('templates/footer.php');
}


public function update_calendar($id)
{

  $this->load->database();
    $data['title']="show calendar";
  if( $this->sales_model->update_calendar($id)){

    echo"Successful Update";
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    //$this->calendar();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
   $this->load->view('templates/header.php',$data);
  $this->load->view('pages/calendar.php');
  $this->load->view('templates/footer.php');
}
}

public function delete_event($id)
{
  if($this->sales_model->delete_event($id))
  {
    $data['title']="show calendar";
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
  $this->load->view('pages/calendar.php');
  $this->load->view('templates/footer.php');
  }
}

public function update_event($id)
{

    $this->load->model("sales_model");
    $data['h']=$this->sales_model->update_event($id);

    $data['title']="show calendar";
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/show_calender.php',$data);
    $this->load->view('templates/footer.php');

}

  public function manage_invoice()
  {
    $data['title']='Manage Invoice';
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['k']=$this->sales_model->getorder();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
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
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['k']=$this->sales_model->getorder();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
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
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
   // $data['k']=$this->sales_model->getorder();
    $data['h']=$this->sales_model->getinvoice($id);
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/update_invoice.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_edit_invoice($id)
{
  $this->load->database();
  if($this->sales_model->edit_invoice($id))
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
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
  $data['title']='Update Lead Details';
  $data['h']=$this->sales_model->editlead($id);
  $data['menus'] = $this->menu_models->menus();
  $data['company']=$this->menu_models->getCompanyLogo();
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/add_lead.php',$data);
  $this->load->view('templates/footer.php');
}

public function editorder($id)
{
  $this->load->database();
  $data['title']='Update Order Details';
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
  $data['k']=$this->sales_model->getleadname();
  $data['h']=$this->sales_model->editorder($id);
  $data['menus'] = $this->menu_models->menus();
  $data['company']=$this->menu_models->getCompanyLogo();
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
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['k']=$this->sales_model->getinvoice($id);
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/reminder.php',$data);
      $this->load->view('templates/footer.php');
}
public function editreminder($id)
{
 $data['title']='Update reminder';
 $data['countMsg']= $this->Message_model->getNewMessageCount();
 $data['msg']= $this->Message_model->getNewMessage();
      $data['k']=$this->sales_model->getinvoice($id);
      $data['h']=$this->sales_model->get_reminder($id);
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/reminder.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_addreminder()
{
  if($this->sales_model->add_reminder())
  {
          $data['title']='Manage Invoice';
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['k']=$this->sales_model->getorder();
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
           $this->load->view('templates/header.php');
           $this->load->view('pages/manage_invoice.php',$data);
           $this->load->view('templates/footer.php');
  }
}
public function do_editreminder($id)
{
  if($this->sales_model->editreminder($id))
  {
          $data['title']='Manage Invoice';
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['k']=$this->sales_model->getorder();
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
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

}

public function view_reminder()
{
      $data['title']='View  Reminder';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->getorder();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
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
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_supplier_category.php');
      $this->load->view('templates/footer.php');
}
public function do_add_supplier_category()
{
  if($this->sales_model->add_supplier_category())
  {
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['title']='Add Supplier Category';
    $data['supplierCategoryAddmsg']='Supplier category saved';
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_supplier_category.php',$data);
      $this->load->view('templates/footer.php');
  }
}


public function add_supplier()
{
      $data['title']='Add Supplier';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->getsupplier_category();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_supplier.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_add_supplier()
{
  if($this->sales_model->add_supplier())
  {
    $data['title']='Add Supplier';
    $data['AddSuppliermsg']='Supplier details saved';
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['h']=$this->sales_model->getsupplier_category();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_supplier.php',$data);
      $this->load->view('templates/footer.php');
  }
}
public function view_supplier()
{
      $data['title']='View  Supplier';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->getsupplier();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_supplier.php',$data);
      $this->load->view('templates/footer.php');
}

public function editsupplier($id)
{
  $this->load->database();
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
  $data['title']='Update Supplier Details';
  $data['h']=$this->sales_model->getsupplier_category();
  $data['k']=$this->sales_model->editsupplier($id);
  $data['menus'] = $this->menu_models->menus();
  $data['company']=$this->menu_models->getCompanyLogo();
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/add_supplier.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_editsupplier($id)
{
  $this->load->database();
  if($this->sales_model->do_editsupplier($id))
  {
    redirect(base_url().'sales_management/view_supplier');
  }
  else{
    echo "server error";
  }

}

public function deletesupplier($id)
{
  if($this->sales_model->deletesupplier($id))
  {
    redirect(base_url().'sales_management/view_supplier');
  }
}

public function add_quote_details()
{
      $data['title']='Add Quote Details';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->getsupplier();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_quote_details.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_add_quote_details()
{

  $config['upload_path'] = APPPATH.'/quote/';
  $config['allowed_types'] = 'pdf';
  $config['max_size'] = '1024';
  $this->load->library('upload',$config);
  $rename=time().$_FILES['quote_file']['name'];

   $_FILES['quote_file']['name']=$rename;
  if ($this->upload->do_upload('quote_file')==False)
        {
           echo 'upload error';
           die;
        }
        else
        {
          if($this->sales_model->add_quote_details($rename))
          {
            $data['countMsg']= $this->Message_model->getNewMessageCount();
            $data['msg']= $this->Message_model->getNewMessage();
            $data['title']='Add Quote Details';
            $data['quotemsg']='Quote details saved';
            $data['menus'] = $this->menu_models->menus();
            $data['company']=$this->menu_models->getCompanyLogo();
            $data['h']=$this->sales_model->getsupplier();
            $this->load->view('templates/header.php',$data);
            $this->load->view('pages/add_quote_details.php',$data);
            $this->load->view('templates/footer.php');
          }
        }
  }
public function editquote($id)
{
  $this->load->database();
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
  $data['title']='Update Quote Details';
  $data['h']=$this->sales_model->getsupplier();
  $data['k']=$this->sales_model->editquote($id);
  $data['menus'] = $this->menu_models->menus();
  $data['company']=$this->menu_models->getCompanyLogo();
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/add_quote_details.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_editquote($id)
{
  $this->load->database();
  if($_FILES!='')
  {
  $config['upload_path'] = APPPATH.'/quote/';
  $config['allowed_types'] = 'pdf';
  $config['max_size'] = '1024';
  $this->load->library('upload',$config);
   $rename=time().$_FILES['quote_file']['name'];
   $_FILES['quote_file']['name']=$rename;
     if ($this->upload->do_upload('quote_file')==False)
        {
           echo 'upload error';
        }
        else
        {
          if($this->sales_model->do_editquote_file($id,$rename))
           {
             redirect(base_url().'sales_management/view_quote');
           }
        }

  }
  else{
    if($this->sales_model->do_editquote($id))
    {
     redirect(base_url().'sales_management/view_quote');
    }
   }



}

public function deletequote($id)
{
  if($this->sales_model->deletequote($id))
  {
    redirect(base_url().'sales_management/view_quote');
  }
}
public function view_quote_details()
{
  $data['title']='View  Quote Details';
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->getquote();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_quote.php',$data);
      $this->load->view('templates/footer.php');
}

public function add_contractor()
{
  $data['title']='Add  Contractor Details';
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->getsupplier();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['menus'] = $this->menu_models->menus();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_contractor.php',$data);
      $this->load->view('templates/footer.php');
}
public function do_add_contractor()
{
  if($this->sales_model->add_contractor())
  {
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['title']='Add Contractor Details';
    $data['contractorAddmsg']='Contractor details saved';
    $data['h']=$this->sales_model->getsupplier();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/add_contractor.php',$data);
    $this->load->view('templates/footer.php');
  }
}



public function automation_mgt()
  {
      $data['title']='Automation Management ';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/automation_management.php');
      $this->load->view('templates/footer.php');
  }


  public function automation_mgt_insert()
  {
     $this->load->database();
     $this->sales_model->automation_mgt_insert();
     $data['countMsg']= $this->Message_model->getNewMessageCount();
     $data['msg']= $this->Message_model->getNewMessage();
      $data['title']='Automation Management ';
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/automation_management.php');
      $this->load->view('templates/footer.php');
  }



  public function automation_mgt_delete($id)
{
  if($this->sales_model->automation_mgt_delete($id))

  {
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['title']='Automation Management';
    $data['h']=$this->sales_model->automation_mgt_select();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
  $this->load->view('pages/automation_management_show.php',$data);
  $this->load->view('templates/footer.php');
  }
}

public function automation_mgt_update($id)
{

$this->load->model("sales_model");
  $data['h']=$this->sales_model->automation_mgt_update($id);
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
    $data['title']="Automation Management ";
    $data['h']=$this->sales_model->automation_mgt_select();
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
  $this->load->view('pages/automation_management_show.php',$data);
  $this->load->view('templates/footer.php');

}

public function automation_mgt_update_select($id)
{

$this->load->model("sales_model");
  $data['h']=$this->sales_model->automation_mgt_update_select($id);
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();

    $data['title']="Automation Management";
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
  $this->load->view('pages/automation_management_update.php',$data);
  $this->load->view('templates/footer.php');

}

public function automation_mgt_show()
  {
      $data['title']='Automation Management ';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->sales_model->automation_mgt_select();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/automation_management_show.php',$data);
      $this->load->view('templates/footer.php');
  }
}
