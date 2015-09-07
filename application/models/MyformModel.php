<?php

class MyformModel extends CI_Model {

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
		$this->db->insert('Mytable', $form_data);

		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}

		return FALSE;
	}
	function deleteRecord($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('Mytable');
		return true;
	}
	function view_form_details()
	{
		$query=$this->db->get('Mytable');
		return $query;
	}


}
?>