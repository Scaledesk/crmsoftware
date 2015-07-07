<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
$this->load->database();
}

	

	


}