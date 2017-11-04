<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authentication_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	public function login($data){
		$result = $this->db->where($data)->get('account');
		if ($result->num_rows()==1){
			$user = $result->result_array();

			$data = array(
				'employee_account'=>$user[0]['account_id']
			);
			$user_details =$this->db->where($data)
									->select('employee_id,
											  employee_lastName,
											  employee_firstName,
											  employee_middleName,
											  gender_name,
											  employee_dob,
											  employee_address,
											  employee_email,
											  account_username,
											  employee_account,
											  civilStatus_name,
											  religion_name,
											  status_name,
											  department_name,
											  position_name,
											  employmentStatus_name
											  ')
									->join('account','employee.employee_account=account.account_id','left')
									->join('gender','employee.employee_gender=gender.gender_id','left')
									->join('civilStatus','employee.employee_civilStatus=civilStatus.civilStatus_id','left')
									->join('religion','employee.employee_religion=religion.religion_id','left')
									->join('status','employee.employee_status=status.status_id')
									->join('position','employee.employee_position=position.position_id')
									->join('employmentStatus','employee.employee_employmentStatus=employmentstatus.employmentStatus_id')
									->join('department','employee.employee_department=department.department_id')
									->get('employee')
									->result_array();

			// header('content-type:application/json');
			// print_r($user_details->result_array());
				

			$this->session->set_userdata('logged_in',$user_details[0]);
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}