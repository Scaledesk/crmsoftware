<?php

class MyformController extends CI_Controller {

	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->model('menu_models');
		$this->load->model('Message_model');
		$this->load->model('MyformModel');
	}
	function index()
	{
		$this->form_validation->set_rules('gendar', 'Gendar', 'max_length[50]');
		$this->form_validation->set_rules('category', 'Category', 'max_length[100]');
		$this->form_validation->set_rules('qualification', 'Qualification', 'max_length[50]');

		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$data["title"]='myform';
			$data["countMsg"]= $this->Message_model->getNewMessageCount();
	    $data["msg"]= $this->Message_model->getNewMessage();
      $data["menus"] = $this->menu_models->menus();
      $data["company"]=$this->menu_models->getCompanyLogo();
      $this->load->view("templates/header.php",$data);
      $this->load->view('myform_view');
			$this->load->view("templates/footer.php");
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model

			$form_data = array(
					       	'gendar' => set_value('gendar'),
					       	'category' => set_value('category'),
					       	'qualification' => set_value('qualification')
						);

			// run insert model to write data to db

			if ($this->MyformModel->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('MyformController/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
 public function deleteRecord($id)
 {
	 if($this->MyformModel->deleteRecord($id))
	 {
		 $data["title"]='myform';
		 $data["countMsg"]= $this->Message_model->getNewMessageCount();
		 $data["msg"]= $this->Message_model->getNewMessage();
		 $data["menus"] = $this->menu_models->menus();
		 $data["company"]=$this->menu_models->getCompanyLogo();
		 $this->load->view("templates/header.php",$data);
		 $data['h'] = $this->MyformModel->view_form_details();
 		   $this->load->view('myform_view_page',$data);
			 $this->load->view("templates/footer.php");
	 }
 }
	function success()
	{
		$data["title"]='myform';
		$data["countMsg"]= $this->Message_model->getNewMessageCount();
		$data["msg"]= $this->Message_model->getNewMessage();
		$data["menus"] = $this->menu_models->menus();
		$data["company"]=$this->menu_models->getCompanyLogo();
		$this->load->view("templates/header.php",$data);
		$data['h'] = $this->MyformModel->view_form_details();
		   $this->load->view('myform_view_page',$data);
			 $this->load->view("templates/footer.php");
			/*echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';*/
	}
}
?>
