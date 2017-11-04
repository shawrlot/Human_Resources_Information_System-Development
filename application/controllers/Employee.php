<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
	}
	public function index(){if($this->session->userdata('logged_in')){
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

}