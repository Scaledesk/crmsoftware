<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sales_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}


	public function add_lead()
	{
		$data=array(
		'lead_name'=>$this->input->post('lead_name'),
		'lead_generate_date'=>$this->input->post('lead_generate_date'),
		'lead_source'=>$this->input->post('lead_source'),
		'lead_service'=>$this->input->post('lead_service'),
		'lead_designation'=>$this->input->post('designation'),
		'lead_company_name'=>$this->input->post('company_name'),
		'lead_phone'=>$this->input->post('phone'),
		'lead_email'=>$this->input->post('email'),
		'lead_fax_number'=>$this->input->post('fax_number'),
		'lead_contact_description'=>$this->input->post('description'),
		'lead_company_relation'=>$this->input->post('relation')
		);
		$this->db->insert('leads',$data);
		return true;
	}
	public function getorder()
	{
		$query=$this->db->get("order_details");
  		return $query;
  	}
	public function getleadname()
	{
		$query=$this->db->get("leads");
  		return $query;
	}
	public function add_invoice()
	{
		$data=array(
			'order_id'=>$this->input->post('order_id'),
			'invoice_due_date'=>$this->input->post('date1'),
			'invoice_total_amount'=>$this->input->post('total_amount'),
			'invoice_amount_paid'=>$this->input->post('amount_paid'),
			'invoice_amount_due'=>$this->input->post('amount_due'),
			'invoice_status'=>$this->input->post('status')
			);
		$this->db->insert('crm_invoice',$data);
		return true;

	}
	public function edit_invoice()
	{
		$data=array(
			'order_id'=>$this->input->post('order_id'),
			'invoice_due_date'=>$this->input->post('due'),
			'invoice_total_amount'=>$this->input->post('total_amount'),
			'invoice_amount_paid'=>$this->input->post('amount_paid'),
			'invoice_amount_due'=>$this->input->post('amount_due'),
			'invoice_status'=>$this->input->post('status')
			);
		$this->db->where("invoice_id",$id);
		$this->db->update('crm_invoice',$data);
		return true;
	}
	public function add_order()
	{

		$data=array(
			'order_title'=>$this->input->post('order_title'),
			'order_client_name'=>$this->input->post('client_name'),
			'order_cost'=>$this->input->post('order_cost'),
			'order_start_date'=>$this->input->post('date1'),
			'order_proposed_end_date'=>$this->input->post('date2'),
			'lead_id'=>$this->input->post('lead_id')
			);
		$this->db->insert('order_details',$data);
		return true;
	}
	public function deleteorder($id)
	{
		$this->db->where("order_id",$id);
  		if($this->db->delete("order_details"))
  		{
  			return true;
  		}
	}
	public function deleteinvoice($id)
	{
		$this->db->where("invoice_id",$id);
  		if($this->db->delete("crm_invoice"))
  		{
  			return true;
  		}
	}
	public function editorder($id)
	{
		$this->db->where("order_id",$id);
  		$query=$this->db->get("order_details");
  		return $query->result();
	}
	public function do_editorder($id)
	{
		$data=array(
			'order_title'=>$this->input->post('order_title'),
			'order_client_name'=>$this->input->post('client_name'),
			'order_cost'=>$this->input->post('order_cost'),
			'order_start_date'=>$this->input->post('starting_date'),
			'order_proposed_end_date'=>$this->input->post('ending_date'),
			'lead_id'=>$this->input->post('lead_id')
			);
		$this->db->where('order_id', $id);
		$this->db->update('order_details',$data);
		return true;
	}

	public function view_lead_details()
	{
		$query = $this->db->get('leads');
    	return $query;
	}
	public function view_invoices($id)
	{
		$this->db->where('order_id',$id);
		$query = $this->db->get('crm_invoice');
    	return $query;
	}
	public function view_order_details()
	{

		$query = $this->db->query("select * from order_details left join leads on leads.lead_id = order_details.lead_id;");

		//$query = $this->db->get('order_details');
    	return $query;
	}
	public function getinvoice($id)
	{
		$this->db->where("invoice_id",$id);
  		$query=$this->db->get("crm_invoice");
  		return $query->result();
	}

	public function editlead($id)
	{

		$this->db->where("lead_id",$id);
  		$query=$this->db->get("leads");
  		return $query->result();
	}

	public function do_editlead($id)
	{

		$data=array(
		'lead_name'=>$this->input->post('lead_name'),
		'lead_generate_date'=>$this->input->post('lead_generate_date'),
		'lead_source'=>$this->input->post('lead_source'),
		'lead_service'=>$this->input->post('phone')
		);
		$this->db->where('lead_id', $id);
		$this->db->update('leads',$data);
		return true;

	}

	public function deletelead($id)
	{
		$this->db->where("lead_id",$id);
  		if($this->db->delete("leads"))
  		{
  			return true;
  		}

	}
	public function add_reminder()
	{
		$data=array(
			'invoice_id'=>$this->input->post('invoice_id'),
			'reminder_title'=>$this->input->post('title'),
			'reminder_description'=>$this->input->post('description'),
			'reminder_date'=>$this->input->post('r_date')
			);
		$this->db->insert('invoice_reminder',$data);
		return true;
	}
	public function editreminder($id)
	{
		$data=array(
			'invoice_id'=>$this->input->post('invoice_id'),
			'reminder_title'=>$this->input->post('title'),
			'reminder_description'=>$this->input->post('description'),
			'reminder_date'=>$this->input->post('r_date')
			);
		$this->db->where('reminder_id',$id);
		$this->db->update('invoice_reminder',$data);
		return true;
	}

	public function getreminder()
	{
		$query=$this->db->get("invoice_reminder");
  		return $query;
	}
	public function view_reminder($id)
	{
		$this->db->where('invoice_id',$id);
		$query=$this->db->get("invoice_reminder");
  		return $query;
	}
	public function add_supplier_category()
	{
		$data=array(
			'category_name'=>$this->input->post('category_name'),
			'category_description'=>$this->input->post('category_description')
			);
		$this->db->insert('supplier_category',$data);
		return true;
	}

	public function add_supplier()
	{
		$data=array(
			'supplier_name'=>$this->input->post('supplier_name'),
			'supplier_address'=>$this->input->post('supplier_address'),
			'supplier_phone1'=>$this->input->post('supplier_phone1'),
			'supplier_phone2'=>$this->input->post('supplier_phone2'),
			'supplier_email'=>$this->input->post('supplier_email'),
			'supplier_faxno'=>$this->input->post('supplier_faxno'),
			'supplier_description'=>$this->input->post('supplier_description'),
			'category_id'=>$this->input->post('category_id')
			);
		$this->db->insert('supplier_details',$data);
		return true;
	}
	public function getsupplier()
	{
		$query=$this->db->get("supplier_details");
  		return $query;
	}
	public function editsupplier($id)
	{
		$this->db->where("supplier_id",$id);
  		$query=$this->db->get("supplier_details");
  		return $query->result();
	}
	public function do_editsupplier($id)
	{
		$data=array(
			'supplier_name'=>$this->input->post('supplier_name'),
			'supplier_address'=>$this->input->post('supplier_address'),
			'supplier_phone1'=>$this->input->post('supplier_phone1'),
			'supplier_phone2'=>$this->input->post('supplier_phone2'),
			'supplier_email'=>$this->input->post('supplier_email'),
			'supplier_faxno'=>$this->input->post('supplier_faxno'),
			'supplier_description'=>$this->input->post('supplier_description'),
			'category_id'=>$this->input->post('category_id')
			);
		$this->db->where('supplier_id', $id);
		$this->db->update('supplier_details',$data);
		return true;
	}
	public function getsupplier_category()
	{
		$query=$this->db->get('supplier_category');
		return $query;
	}

	public function deletesupplier($id)
	{
		$this->db->where("supplier_id",$id);
  		if($this->db->delete("supplier_details"))
  		{
  			return true;
  		}
  		else
  		{
  			return false;
  		}

	}

	public function add_quote_details($rename)
	{
		$upload_quote= base_url().'application/quote/'.$rename;

		$data=array(
			'supplier_id'=>$this->input->post('supplier_id'),
			'quote_supplier_for'=>$this->input->post('supplier_for'),
			'quote_upload'=>$upload_quote,
			'quote_description'=>$this->input->post('quote_description')
			);
		$this->db->insert('quote_details',$data);
		return true;
	}
	public function editquote($id)
	{
		$this->db->where("quote_id",$id);
  		$query=$this->db->get("quote_details");
  		return $query->result();
	}
	public function do_editquote_file($id,$rename)
	{
		$upload_quote= base_url().'application/quote/'.$rename;
		$data=array(
			'supplier_id'=>$this->input->post('supplier_id'),
			'quote_supplier_for'=>$this->input->post('supplier_for'),
			'quote_upload'=>$upload_quote,
			'quote_description'=>$this->input->post('quote_description')
			);
		$this->db->where("quote_id",$id);
		$this->db->update('quote_details',$data);
		return true;
	}

	public function do_editquote($id)
	{
		//$upload_quote= base_url().'application/quote/'.$rename;
		$data=array(
			'supplier_id'=>$this->input->post('supplier_id'),
			'quote_supplier_for'=>$this->input->post('supplier_for'),
			'quote_description'=>$this->input->post('quote_description')
			);
		$this->db->where("quote_id",$id);
		$this->db->update('quote_details',$data);
		return true;
	}
	public function getquote()
	{
		$query=$this->db->get("quote_details");
  		return $query;
	}

	public function deletequote($id)
	{
		$this->db->where("quote_id",$id);
  		if($this->db->delete("quote_details"))
  		{
  			return true;
  		}
  		else
  		{
  			return false;
  		}
	}

	public function add_contractor()
	{
		$data=array(
			'supplier_id'=>$this->input->post('supplier_id'),
			'contractor_description'=>$this->input->post('description')
			);
		$this->db->insert('contractor',$data);
		return true;
	}
	public function get_reminder($id)
	{
		$this->db->where("reminder_id",$id);
		$query=$this->db->get('invoice_reminder');
		return $query->result();
	}

public function do_calendar()

	{
         $date=$this->input->post('date9');
       $sdate=date('Y-m-d', strtotime($date));

		$data=array(
		'title'=>$this->input->post('title'),
		'description'=>$this->input->post('description'),
		'date'=>$sdate

		);

		$this->db->insert('calendar',$data);
		return true;

	}



public function show_calendar()
	{

		 $start=$this->input->post('startdate');
         $end=$this->input->post('enddate');

       $startdate=date('Y-m-d', strtotime($start));
        $enddate=date('Y-m-d', strtotime($end));

    $query=$this->db->query("select id, title, description, date from calendar where date between '$startdate' and '$enddate'");

      return  $query;

	}
// ........................................................
public function update_calendar($id)
	{
  //echo $this->input->post('id');
	$date=$this->input->post('date2');
       $sdate=date('Y-m-d', strtotime($date));

   $data=array(
		'title'=>$this->input->post('title'),
		'description'=>$this->input->post('description'),
		'date'=>$sdate);
		$this->db->where('id', $id);
		$this->db->update('calendar',$data);
		return true;

	}

public function delete_event($id)
	{
		$this->db->where("id",$id);
  		if($this->db->delete("calendar"))
  		{
  			return true;
  		}

	}

public function update_event($id)
	{

		$this->db->where(array('id'=> $id));
		$query=$this->db->query("select * from calendar where id=$id");
		// echo '<pre />';
		// print_r($query);
		// die();
		return $query->result();
	}



public function automation_mgt_insert()
	{
		$data=array(
		'name_application'=>$this->input->post('application_name'),
		'company_of_application'=>$this->input->post('application_company'),
		'application_cost'=>$this->input->post('paid_cost'),
		'next_due_date'=>$this->input->post('due_date'),
		'subscribed'=>$this->input->post('subscription'),
		'description'=>$this->input->post('description')

		);

		$this->db->insert('software_mgt',$data);
		return true;

	}

public function automation_mgt_delete($id)
	{
		$this->db->where("application_id",$id);
  		if($this->db->delete("software_mgt"))
  		{
  			return true;
  		}

	}

	public function automation_mgt_update($id)
	{
		$data=array(
		'name_application'=>$this->input->post('application_name'),
		'company_of_application'=>$this->input->post('application_company'),
		'application_cost'=>$this->input->post('paid_cost'),
		'next_due_date'=>$this->input->post('due_date'),
		'subscribed'=>$this->input->post('subscription'),
		'description'=>$this->input->post('description')

		);
		$this->db->where('application_id', $id);
		$this->db->update('software_mgt',$data);
		return true;
	}

	public function automation_mgt_update_select($id)
	{

		//$this->db->where(array('application_id'=> $id));

		$query=$this->db->query("select * from software_mgt where application_id=$id");

		return $query->result();
	}


public function automation_mgt_select()
	{

		$query=$this->db->query("select * from software_mgt");

		return $query;
	}


}
