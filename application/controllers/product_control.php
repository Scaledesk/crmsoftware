<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Product_model');
  $this->load->model('document_model');
  $this->load->model('Message_model');
  $this->load->model('menu_models');
  $this->load->helper(array('form','url'));
  }
  public function add_product()
  {
       $data['menus'] = $this->menu_models->menus();
       $data['company']=$this->menu_models->getCompanyLogo();
       $data['countMsg']= $this->Message_model->getNewMessageCount();
       $data['msg']= $this->Message_model->getNewMessage();
        $data['title']='Add Product Details';
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/add_product.php');
        $this->load->view('templates/footer.php');

  }
  public function do_add_product()
  {
    if($this->Product_model->add_product())
      {
        $data['pAddMsg']="Product Record Added";
        $data['countMsg']= $this->Message_model->getNewMessageCount();
        $data['msg']= $this->Message_model->getNewMessage();
        $data['menus'] = $this->menu_models->menus();
        $data['company']=$this->menu_models->getCompanyLogo();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/add_product.php',$data);
        $this->load->view('templates/footer.php');
      }
  }


    public function view_product()
    {
        $data['menus'] = $this->menu_models->menus();
        $data['countMsg']= $this->Message_model->getNewMessageCount();
        $data['msg']= $this->Message_model->getNewMessage();
        $data['company']=$this->menu_models->getCompanyLogo();
        $data['title']='Product Details';
        $data['h']=$this->Product_model->view_product_details();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/view_product.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function editproduct($id)
  {
    $this->load->database();
    $data['title']='Edit Product Details';
    $data['countMsg']= $this->Message_model->getNewMessageCount();
    $data['msg']= $this->Message_model->getNewMessage();
    $data['h']=$this->Product_model->editproduct($id);
    $data['menus'] = $this->menu_models->menus();
    $data['company']=$this->menu_models->getCompanyLogo();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/add_product.php',$data);
    $this->load->view('templates/footer.php');
  }

  public function do_edit_product($id)
  {
    $this->load->database();
    if($this->Product_model->do_editproduct($id))
    {

      redirect(base_url().'Product_control/view_product');
    }
    else{
      echo "record not updated";
    }

  }

  public function deleteproduct($id)
  {
    if($this->Product_model->deleteproduct($id))
    {
      redirect(base_url().'Product_control/view_product');
    }
  }

  public function add_progress()
  {
       $data['menus'] = $this->menu_models->menus();
       $data['countMsg']= $this->Message_model->getNewMessageCount();
       $data['msg']= $this->Message_model->getNewMessage();
       $data['company']=$this->menu_models->getCompanyLogo();
        $data['title']='Add Progress Details';
        $data['k']=$this->Product_model->view_product_details();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/add_progress.php');
        $this->load->view('templates/footer.php');

  }
  public function do_add_progress()
  {
    if($this->Product_model->add_progress())
      {
        $data['pProgressMsg']="Product Progress Record Added";
        $data['menus'] = $this->menu_models->menus();
        $data['countMsg']= $this->Message_model->getNewMessageCount();
        $data['msg']= $this->Message_model->getNewMessage();
        $data['company']=$this->menu_models->getCompanyLogo();
        $data['k']=$this->Product_model->view_product_details();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/add_progress.php',$data);
        $this->load->view('templates/footer.php');
      }
  }


    public function view_progress()
    {
        $data['menus'] = $this->menu_models->menus();
        $data['countMsg']= $this->Message_model->getNewMessageCount();
        $data['msg']= $this->Message_model->getNewMessage();
        $data['company']=$this->menu_models->getCompanyLogo();
        $data['title']='Product Details';
        $data['h']=$this->Product_model->view_progress_details();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/view_progress.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function add_milesstone()
    {
         $data['menus'] = $this->menu_models->menus();
         $data['countMsg']= $this->Message_model->getNewMessageCount();
         $data['msg']= $this->Message_model->getNewMessage();
         $data['company']=$this->menu_models->getCompanyLogo();
          $data['title']='Add Milesstone Details';
          $data['k']=$this->Product_model->view_product_details();
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/add_milesstone.php');
          $this->load->view('templates/footer.php');

    }
    public function do_add_milesstone()
    {
      if($this->Product_model->add_milesstone())
        {
          $data['pMilestoneMsg']="Product Milesstone Record Added";
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['menus'] = $this->menu_models->menus();
          $data['company']=$this->menu_models->getCompanyLogo();
          $data['k']=$this->Product_model->view_product_details();
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/add_milesstone.php',$data);
          $this->load->view('templates/footer.php');
        }
    }


      public function view_milesstone()
      {
          $data['menus'] = $this->menu_models->menus();
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['company']=$this->menu_models->getCompanyLogo();
          $data['title']='Product Milesstone Details';
          $data['h']=$this->Product_model->view_milesstone_details();
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/view_milesstone.php',$data);
          $this->load->view('templates/footer.php');
      }

      public function editmilesstone($id)
    {
      $this->load->database();
      $data['title']='Edit Milesstone Details';
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['h']=$this->Product_model->editmilesstone($id);
      $data['menus'] = $this->menu_models->menus();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['k']=$this->Product_model->view_product_details();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_milesstone.php',$data);
      $this->load->view('templates/footer.php');
    }

    public function do_edit_milesstone($id)
    {
      $this->load->database();
      if($this->Product_model->do_editmilesstone($id))
      {
        redirect(base_url().'Product_control/view_milesstone');
      }
      else{
        echo "record not updated";
      }

    }

    public function deleteprogress($id)
    {
      if($this->Product_model->deleteprogress($id))
      {
        redirect(base_url().'Product_control/view_progress');
      }
    }

    public function deletemilesstone($id)
    {
      if($this->Product_model->deletemilesstone($id))
      {
        redirect(base_url().'Product_control/view_milesstone');
      }
    }

    public function add_document()
    {
          $data['menus'] = $this->menu_models->menus();
          $data['countMsg']= $this->Message_model->getNewMessageCount();
          $data['msg']= $this->Message_model->getNewMessage();
          $data['company']=$this->menu_models->getCompanyLogo();
          $data['title']='Add Product Document Details';
          $data['k']=$this->document_model->getcategory();
          $data['h']=$this->Product_model->view_product_details();
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/add_product_document.php');
          $this->load->view('templates/footer.php');

    }
    public function do_add_document()
    {
      $config['upload_path'] = APPPATH.'/product_document/';
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

             if($this->Product_model->add_document($rename))
               {
                  $data['menus'] = $this->menu_models->menus();
                  $data['countMsg']= $this->Message_model->getNewMessageCount();
                  $data['msg']= $this->Message_model->getNewMessage();
                  $data['company']=$this->menu_models->getCompanyLogo();
                  $data['title']='Add Product Document Details';
                  $data['pDocumentMsg']="Document Details Saved";
                  $data['k']=$this->document_model->getcategory();
                  $data['h']=$this->Product_model->view_product_details();
                  $this->load->view('templates/header.php',$data);
                  $this->load->view('pages/add_product_document.php',$data);
                  $this->load->view('templates/footer.php');
               }
         }
    }
    public function view_document()
    {
        $data['menus'] = $this->menu_models->menus();
        $data['countMsg']= $this->Message_model->getNewMessageCount();
        $data['msg']= $this->Message_model->getNewMessage();
        $data['company']=$this->menu_models->getCompanyLogo();
        $data['title']='Product Document Details';
        $data['h']=$this->Product_model->view_document_details();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/view_product_document.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function editdocument($id)
  {
      $data['menus'] = $this->menu_models->menus();
      $data['countMsg']= $this->Message_model->getNewMessageCount();
      $data['msg']= $this->Message_model->getNewMessage();
      $data['company']=$this->menu_models->getCompanyLogo();
      $data['title']='Update Product Document Details';
      $data['updateMsg']="Update Document Details";
      $data['m']=$this->Product_model->editdocument($id);
      $data['k']=$this->document_model->getcategory();
      $data['h']=$this->Product_model->view_product_details();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/add_product_document.php',$data);
      $this->load->view('templates/footer.php');
  }

  public function do_edit_document($id)
  {
    $this->load->database();
    if($this->Product_model->do_editdocument($id))
    {
      redirect(base_url().'Product_control/view_document');
    }
    else{
      echo "record not updated";
    }

  }

  public function deletedocument($id)
  {
    if($this->Product_model->deletedocument($id))
    {
      redirect(base_url().'Product_control/view_document');
    }
  }


}
