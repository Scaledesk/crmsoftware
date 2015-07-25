<?php
class CheckAccess extends CI_Controller
{
  var $CI;

    function __construct()
    {
        $this->CI =&get_instance();
        $this->CI->load->helper('form');
        $this->CI->load->helper('url');
       $this->CI->load->library('form_validation');
        if(!isset($this->CI->session)){  //Check if session lib is loaded or not
              $this->CI->load->library('session');  //If not loaded, then load it here
              if(($this->CI->session->userdata('logged_in'))!= 1){
              //  echo 'vnsbhvbsv';
                //exit();
                  redirect(base_url());
                }
        }

    }

    function loginCheck()
    {


            //echo 'vsdgdgfgdsgdgv';

    
          /*  else {
              /*$this->session->set_flashdata(
                  'error',
                  'Access denied.'
              );
          //  header("location:");
              //echo 'access denied';
              //die;

              redirect(base_url());
            } */


      /* $this->CI =&get_instance();

      if(!isset($this->CI->session)){  //Check if session lib is loaded or not
            $this->CI->load->library('session');  //If not loaded, then load it here
      }


     $session_userdata = $this->CI->session->userdata('logged_in');
     if($session_userdata!='')
     {
        if($session_userdata['admin_name']!="")
        {
          echo "Valid User";
          die; //it wont get inside this if
        }
        else {

        }
      }
      else {
      redirect(base_url()); */
    }
}

?>
