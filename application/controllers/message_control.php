<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Message_control extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Login_model');
  //$this->load->model('mahana_model');
  $this->load->model('menu_models');
  $this->load->library('session');
  $this->load->library('mahana_messaging');
	$msg = $this->mahana_messaging->get_message($msg_id, $sender_id);
  $this->load->helper(array('form','url'));
 }
      public function compose_msg(){

          $this->load->view("compose");
       }
       public function send_msg(){
           echo "hello";
           echo "<pre/>";
           print_r($this->input->post());
           $msg= new mahana_messaging();
          $msg->send_new_message($this->input->post("sender"),$this->input->post("recipient"),$this->input->post("subject"),$this->input->post("body"),$this->input->post("priority"));

        }

}
