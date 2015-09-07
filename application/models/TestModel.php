<?php

class TestModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	// --------------------------------------------------------------------

      /**
       * function SaveForm()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
       */

	function SaveForm($form_data)
	{
		$this->db->insert('testTable', $form_data);

		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}

		return FALSE;
	}
	function deleteRecord($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('testTable');
		return true;
	}
	function view_form_details()
	{
		$query=$this->db->get('testTable');
		return $query;
	}


}
?>