<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Product_model');
  $this->load->model('menu_models');
  $this->load->helper(array('form','url'));
  }

  public function add_product()
  {
       $data['menus'] = $this->menu_models->menus();
        $data['title']='Add Product Details';
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/add_product.php');
        $this->load->view('templates/footer.php');

  }
  public function do_add_product()
  {
    if($this->Product_model->add_product())
      {
        $data['msg']="Product Record Added";
        $data['menus'] = $this->menu_models->menus();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/add_product.php',$data);
        $this->load->view('templates/footer.php');
      }
  }


    public function view_product()
    {
        $data['menus'] = $this->menu_models->menus();
        $data['title']='Product Details';
        $data['h']=$this->Product_model->view_product_details();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/view_product.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function editproduct($id)
  {
    $data['menus'] = $this->menu_models->menus();
    $this->load->database();
    $data['title']='Edit Product Details';
    $data['h']=$this->Product_model->editproduct($id);
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

}
