<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
$this->load->database();
}
public function get_user_permission($id)
{
  $this->db->where('user_id',$id);
  $query=$this->db->get("user_permission");
  return $query->result();
}
public function add_permission()
{

  //$page=implode(',',serialize($this->input->post('page')));
  $page=implode(',',$this->input->post('page'));
  //die;
  $id=$this->input->post('user_id');
  $data=array(
  'user_id'=>$this->input->post('user_id'),
  'page_id'=>$page
  );
  $q=$this->db->query("select * from user_permission where user_id='$id'");

  if($q->num_rows() > 0)
  {
    $this->db->where("user_id",$id);
    $this->db->update('user_permission',$data);
    return true;
  }
  else {
    $this->db->insert('user_permission',$data);
    return true;
  }

/* if($this->input->post('submit')=='Update')
   {
    $this->db->update('user_permission',$data);
    return true;
   }
  else {
    $this->db->insert('user_permission',$data);
    return true;
  } */

}

public function register()
{
$data=array(
'user_name'=>$this->input->post('user_name'),
'user_email'=>$this->input->post('user_email'),
'user_password'=>$this->input->post('user_password'),
'user_address'=>$this->input->post('user_address'),
'user_phone_number'=>$this->input->post('user_phone_number'),
'user_fax_number'=>$this->input->post('user_fax_number'),
'registration_time'=>time()
);
$this->db->insert('users_details',$data);
return true;
}
public function edituser($id)
{
  $u_id=$id;
  $this->db->where("user_id",$u_id);
  $query=$this->db->get("users_details");
  return $query->result();

}
public function do_edituser($id)
{
  $user_id=$id;
$data = array(
  'user_name'=>$this->input->post('user_name'),
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>$this->input->post('user_password'),
  'user_address'=>$this->input->post('user_address'),
  'user_phone_number'=>$this->input->post('user_phone_number'),
  'user_fax_number'=>$this->input->post('user_fax_number')
            );
$this->db->where('user_id', $user_id);
$this->db->update('users_details', $data);
return true;
}
public function view_user()
{
  $query=$this->db->get("users_details");
  return $query;
}
public function view_permission()
{
  $query=$this->db->get("perm_data");
  return $query;
}
public function get_menu()
{
  $query=$this->db->get("menu_children");
  return $query;
}
public function delete_user($id)
{
  $this->db->where("user_id",$id);
  $this->db->delete('users_details');
  return true;
}
public function changePassword()
{
  if($this->session->userdata('user_id')!="")
    {
    if($this->db->get_where('users_details', array('user_id' => $this->session->userdata('user_id'), 'user_password' => $cur_pwd =$this->input->post('old_password'))))
    {
      $this->db->where(array('user_email'=>$this->input->post('email'),'user_password'=>$cur_pwd));
      $this->db->update('users_details', array('user_password' =>$this->input->post('new_password')));
       if($this->db->affected_rows()==1){
        return true;
      }
      else {
        return false;
      }
    }
   }
  else
  {
      if($this->db->get_where('admin_details', array('admin_id' => $this->session->userdata('admin_id'), 'admin_password' => $cur_pwd =$this->input->post('old_password'))))
      {
        $this->db->where(array('admin_email'=>$this->input->post('email'),'admin_password'=>$cur_pwd));
        $this->db->update('admin_details', array('admin_password' =>$this->input->post('new_password')));
        if($this->db->affected_rows()==1){
        return true;
        }
        else {
          return false;
        }
      }
    }
  }

  public function ChangeImage($imgName)
  {
    $imgName='application/profile/'.$imgName;
    if($this->session->userdata('user_id')!="")
    {
      $id=$this->session->userdata('user_id');
      $data=array(
        'imgName'=>$imgName
      );
      $this->db->where('user_id',$id);
      $this->db->update('users_details', $data);
      $this->session->set_userdata($data);
    //  $this->session->userdata('image')=$imgName;

      $d=array(
        'profile_image_name'=>$imgName,
        'user_id'=>$id
      );
      $this->db->insert('profile_image', $d);

      return true;
    }
    else
    {
      $id=$this->session->userdata('admin_id');
      $data=array(
        'imgName'=>$imgName
      );
      $this->db->where('admin_id',$id);
      $this->db->update('admin_details', $data);
      $this->session->set_userdata($data);
      $d=array(
        'profile_image_name'=>$imgName,
        'user_id'=>$id
      );
      $this->db->insert('profile_image', $d);
      return true;
    }
  }

  public function getCompanyProfile()
  {
    $query=$this->db->get("company_profile");
    return $query->result();
  }
  public function upload_company_logo($logoImg)
  {
    $logo='application/companylogo/'.$logoImg;
    $data=array(
      'logo_url'=>$logo
    );
    $this->db->insert('company_logo', $data);

    $d=array(
      'name'=>$this->input->post('company_name'),
      'logo'=>$logo
    );
    $this->db->update('company_profile', $d);

    return true;
  }



}
