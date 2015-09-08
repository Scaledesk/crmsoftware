<?php

class TestController extends CI_Controller {

	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->model('menu_models');
		$this->load->model('TestModel');
	}
	function index()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|max_length[150]');
		$this->form_validation->set_rules('address', 'Address', 'max_length[500]');
		$this->form_validation->set_rules('Allahabad', 'City', 'max_length[250]');
		$this->form_validation->set_rules('gender', 'Gender', 'max_length[50]');

		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$data["title"]='TestModule';
      $data["menus"] = $this->menu_models->menus();
      $data["company"]=$this->menu_models->getCompanyLogo();
      $this->load->view("templates/header.php",$data);
      $this->load->view('TestModule_view');
			$this->load->view("templates/footer.php");
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model

			$form_data = array(
					       	'name' => set_value('name'),
					       	'email' => set_value('email'),
					       	'address' => set_value('address'),
					       	'Allahabad' => set_value('Allahabad'),
					       	'gender' => set_value('gender')
						);

			// run insert model to write data to db

			if ($this->TestModel->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('TestController/success');   // or whatever logic needs to occur
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
	 if($this->TestModel->deleteRecord($id))
	 {
		 $data["title"]='TestModule';
		 $data["menus"] = $this->menu_models->menus();
		 $data["company"]=$this->menu_models->getCompanyLogo();
		 $this->load->view("templates/header.php",$data);
		 $data['h'] = $this->TestModel->view_form_details();
 		   $this->load->view('TestModule_view_page',$data);
			 $this->load->view("templates/footer.php");
	 }
 }
	function success()
	{
		$data["title"]='TestModule';
		$data["menus"] = $this->menu_models->menus();
		$data["company"]=$this->menu_models->getCompanyLogo();
		$this->load->view("templates/header.php",$data);
		$data['h'] = $this->TestModel->view_form_details();
		   $this->load->view('TestModule_view_page',$data);
			 $this->load->view("templates/footer.php");
			/*echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';*/
	}
}
?>