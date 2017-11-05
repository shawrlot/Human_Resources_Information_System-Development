<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
	}
	public function index(){if($this->session->userdata('logged_in')){
		$rows = $this->employee_model->get_employee();
		$count = 0;
		foreach($rows as $row) {
		$newDate = date(" M d, Y", strtotime($row['employee_dob']));
        $age = date_diff(date_create($newDate),date_create('now'))->y;
		if($age >= 60) {
		$count++;}
		}
		$arr = array (
		'ages' => $count
		);
		$data['ages'] = $arr;
		$data['count_rows'] = $this->db->count_all('employee');
		$data['title'] = 'Employee';
		$data['active'] = 'employee';
		$data['filters'] = $this->employee_model->get_filter();
		$data['genders'] = $this->employee_model->get_gender();
		$data['cstatus'] = $this->employee_model->get_cstatus();
		$data['empposition'] = $this->employee_model->get_empposition();
		$data['empstatus'] = $this->employee_model->get_estatus();
		$data['religion'] = $this->employee_model->get_rel();
		$data['employees'] = $this->employee_model->get_employee();
		$this->load->view('employee_view',$data);
		echo "sample";
	} else { redirect('login');}
}

	function insert_employee(){if($this->session->userdata('logged_in')){
		$data = array (
			'employee_id' => $this->input->post('idnum'),
			'employee_lastName' => $this->input->post('lname'),
			'employee_firstName' => $this->input->post('fname'),
			'employee_middleName' => $this->input->post('mname'),
			'employee_dob' => $this->input->post('birthdate'),
			'employee_address' => $this->input->post('address'),
			'employee_email' => $this->input->post('email'),
			'employee_gender' => $this->input->post('gender'),
			'employee_civilStatus' => $this->input->post('civilstatus'),
			'employee_religion' => $this->input->post('religion'),
			'employee_status' => 1,
			'employee_employmentStatus' => $this->input->post('empstatus'),
			'employee_position' => $this->input->post('empposition'),
			'employee_department' => $this->input->post('dept')
		);
		$this->employee_model->insert_employee($data);
		redirect('employee');
	} else { redirect('login');}
}

	function archive_employee($id){if($this->session->userdata('logged_in'))
		{
		$data = array (
			'employee_status' => 2
		); $this->employee_model->archive_employee($data,$id);
		redirect('employee');} 
	 else {redirect('login');}}

}