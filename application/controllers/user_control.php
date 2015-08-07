<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class User_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('User_model');
  $this->load->model('menu_models');
  $this->load->helper(array('form','url'));
 }

 public function do_register()
 {
   if($this->User_model->register())
   {
    $data['msg']='Registration successful please login';
    $this->load->view('pages/login.php',$data);
   }
 }
 public function edit_user($id)

 {
   $data['h']=$this->User_model->edituser($id);
   $this->load->view('pages/register.php',$data);
 }
 public function do_edit_user($id)
 {
   if($this->User_model->do_edituser($id))
   {
    $data['msg']='user details updated';
    redirect(base_url().'User_control/view_user');
   }
 }
 public function view_user()
 {
   $data['company']=$this->menu_models->getCompanyLogo();
   $data['h']=$this->User_model->view_user();
   $data['title']='user_details';
   $data['menus'] = $this->menu_models->menus();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/view_user.php',$data);
   $this->load->view('templates/footer.php');
}
public function view_permission()
{
  $data['company']=$this->menu_models->getCompanyLogo();
  $data['h']=$this->User_model->view_permission();
  $data['title']='Manage Permission';
  $data['menus'] = $this->menu_models->menus();
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/manage_permission.php',$data);
  $this->load->view('templates/footer.php');
}
public function access_permission()
{
  $data['company']=$this->menu_models->getCompanyLogo();
  $data['h']=$this->User_model->view_user();
  $data['k']=$this->User_model->get_menu();
  $data['menus']=$this->menu_models->menus();
// $data["cds"] = array('menus' => $menus);
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/permission_access.php',$data);
  $this->load->view('templates/footer.php');
}
public function loadpermission()
{
  $id=$this->input->post('id');
  $data['k']=$this->User_model->get_menu();
  $data['user_perm']=$this->User_model->get_user_permission($id);
  $this->load->view('pages/permission_access_load.php',$data);
}
public function add_permission()
{/*
echo "<pre/>";
print_r($this->input->post());
die;*/
  if($this->User_model->add_permission())
  {
    $data['company']=$this->menu_models->getCompanyLogo();
   $data['msg']='Permission added to user';
   $data['h']=$this->User_model->view_user();
   $data['k']=$this->User_model->get_menu();
   $data['menus']=$this->menu_models->menus();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/permission_access.php',$data);
   $this->load->view('templates/footer.php');
  }
}
public function delete_user($id)
{
  if($this->User_model->delete_user($id))
  {
    redirect(base_url().'User_control/view_user');
  }
}
public function changePassword()
{
  $data['menus'] = $this->menu_models->menus();
  $data['title']='Change Your Password';
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/changePassword.php');
  $this->load->view('templates/footer.php');
}

public function do_change_password()
{
  if($this->User_model->changePassword())
  {
    $data['msg']="password changed";
    redirect(base_url().'Login_control/login',$data);
    /*
    $data['menus'] = $this->menu_models->menus();
    $data['title']='Change Your Password';
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/changePassword.php');
    $this->load->view('templates/footer.php');
    */
  }
}
public function ChangeImage()
{
  $data['menus'] = $this->menu_models->menus();
  $data['title']='Change Profile Picture';
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/uploadProfilePicture.php');
  $this->load->view('templates/footer.php');
}

public function do_upload_image()
{
  $config['upload_path'] = APPPATH.'/profile/';
  $config['allowed_types'] = 'png|jpeg|gif|jpg';
  $config['max_size'] = '2048000';
  $this->load->library('upload',$config);
  $imgName=time().$_FILES['image']['name'];

   $_FILES['image']['name']=$imgName;

   if($this->upload->do_upload('image')==true)
   {
     if($this->User_model->ChangeImage($imgName))
     {
       $data['msg']="image uploaded";
       redirect(base_url().'Login_control/login',$data);
     }
   }
   else {
     echo "upload error";
   }

 }

 public function upload_company_logo()
 {
   $data['menus'] = $this->menu_models->menus();
   $data['title']='Change Company Logo';
   $data['c']= $this->User_model->getCompanyProfile();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/addCompanyLogo.php',$data);
   $this->load->view('templates/footer.php');
 }
 public function do_upload_company_logo()
 {
   $config['upload_path'] = APPPATH.'/companylogo/';
   $config['allowed_types'] = 'png|jpeg|gif|jpg';
   $config['max_size'] = '2048000';
   $this->load->library('upload',$config);
   $logoImg=time().$_FILES['logo']['name'];

    $_FILES['logo']['name']=$logoImg;

    if($this->upload->do_upload('logo')==true)
    {
      if($this->User_model->upload_company_logo($logoImg))
      {
        $data['msg']="Logo uploaded";
        redirect(base_url().'Login_control/login',$data);
      }
    }
    else {
      echo "upload error";
    }
 }

 public function settingAccount()
 {
   $data['menus'] = $this->menu_models->menus();
   $data['title']='Settings';
   $data['company']=$this->menu_models->getCompanyLogo();
   $data['c']= $this->User_model->getCompanyProfile();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/setting.php',$data);
   $this->load->view('templates/footer.php');
 }
}
