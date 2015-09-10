<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Document_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('document_model');
  $this->load->model('menu_models');
  $this->load->model('Message_model');
  $this->load->helper(array('form','url'));
 }

 public function add_document()
{

      $data['title']='Add Document';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['k']=$this->document_model->getcategory();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_document.php',$data);
      $this->load->view('templates/footer.php');

}
public function do_add_document()
{
   $config['upload_path'] = APPPATH.'/upload/';
  $config['allowed_types'] = 'pdf';
  $config['max_size'] = '1024';
  $this->load->library('upload',$config);
  //echo APPPATH;
  //echo $_FILES['document_file']['name'];
  //echo "<pre/>";
  //print_r($_FILES);
  //die;
   $rename=time().$_FILES['document_file']['name'];
   $_FILES['document_file']['name']=$rename;
  if ($this->upload->do_upload('document_file')==False)
        {
           echo 'upload error';
        }
        else
        {

          if($this->document_model->add_document($rename))
         {
           $data['Dmsg']="Document Added";
           $data['countMsg']= $this->Message_model->getNewMessageCount();
           $data['msg']= $this->Message_model->getNewMessage();
           $data['menus'] = $this->menu_models->menus();
           $data['company']=$this->menu_models->getCompanyLogo();
           $data['k']=$this->document_model->getcategory();
           $this->load->view('templates/header.php',$data);
           $this->load->view('pages/add_document.php',$data);
           $this->load->view('templates/footer.php');
         }

       }

}


  public function view_document()
  {
      $data['title']='View Document Details';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['h']=$this->document_model->view_document_details();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/view_document.php',$data);
      $this->load->view('templates/footer.php');
  }
  public function editdocument($id)
{

  $this->load->database();
  $data['title']='Edit document Details';
  $data['countMsg']= $this->Message_model->getNewMessageCount();
  $data['msg']= $this->Message_model->getNewMessage();
  $data['menus'] = $this->menu_models->menus();
  $data['company']=$this->menu_models->getCompanyLogo();
  $data['k']=$this->document_model->getcategory();
  $data['h']=$this->document_model->editdocument($id);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/edit_document.php',$data);
  $this->load->view('templates/footer.php');
}

public function do_edit_document($id)
{
  $this->load->database();
  if($this->document_model->do_editdocument($id))
  {
    /*$data['title']='View Company Details';
    $data['msg']="Successfully updated company details";
    $data['h']=$this->company_model->view_company_details();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_company.php',$data);
    $this->load->view('templates/footer.php');
    */
    redirect(base_url().'document_control/view_document');
  }
  else{
    echo "record not updated";
  }

}

public function deletedocument($id)
{
  if($this->document_model->deletedocument($id))
  {
    /*$data['title']='View Company Details';
    $data['msg']="Company deleted";
    $data['h']=$this->company_model->view_company_details();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_company.php',$data);
    $this->load->view('templates/footer.php');
    */
    redirect(base_url().'document_control/view_document');
  }
}



}
