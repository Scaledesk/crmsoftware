<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menu_models extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
	$this->load->database();
}


function menus() {
    $this->db->select("*");
    $this->db->from("menu_parent");
    $q = $this->db->get();

    $final = array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {

            $this->db->select("*");
            $this->db->from("menu_children");
            $this->db->where("parent_id", $row->parent_id);
            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                $row->children = $q->result();
            }
            array_push($final, $row);
        }
    }
    return $final;
}


}
