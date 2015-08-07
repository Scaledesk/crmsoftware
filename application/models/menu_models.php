<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Menu_models extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
	$this->load->database();
}


function menus() {
	if($this->session->userdata('logged_in'))
	{
    $this->db->select("*");
    $this->db->from("menu_parent");
    $q = $this->db->get();

    $final = array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
         if($this->session->userdata('admin_id')=='')
				 {
					$uid=$this->session->userdata('user_id');
					$query=$this->db->query("select * from user_permission where user_id='$uid'");
					$res=$query->result();
					//$str=$res[0]->page_id;
					if($res[0]->page_id!='')
					 {
				  $arr=explode(',',$res[0]->page_id);
					$l=end($arr);
					$st=implode(',',$arr);
						foreach ($arr as $k => $v) {
						//	$q=$this->db->query("select * from menu_children where parent_id='$row->parent_id' and children_id BETWEEN '$arr[0]' AND '$l'");
						$q=$this->db->query("select * from menu_children where parent_id='$row->parent_id' and children_id in ({$st})");
							if ($q->num_rows() > 0) {
	              $row->children = $q->result();
							}
						}
					}}
					else {
							$q=$this->db->query("select * from menu_children where parent_id='$row->parent_id'");
							if ($q->num_rows() > 0) {
	              $row->children = $q->result();
							}
						}
						array_push($final, $row);

        }
    }
    return $final;
	}
	else {
		redirect(base_url());
		//echo 'access denied';
		//die;
	}
}

public function getCompanyLogo()
{
	$query=$this->db->get('company_profile');
	return $query->result();

}

}
