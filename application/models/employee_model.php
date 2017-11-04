<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	function get_filter(){
		return $this->db->get('department')->result_array();
	}
	function get_gender(){
		return $this->db->get('gender')->result_array();
	}
	function get_cstatus(){
		return $this->db->get('civilstatus')->result_array();
	}
	function get_rel(){
		return $this->db->get('religion')->result_array();
	}
	function get_estatus(){
		return $this->db->get('employmentstatus')->result_array();
	}
	function get_empposition(){
		return $this->db->get('position')->result_array();
	}
	function get_employee(){
		return $this->db
					->join('department','employee.employee_department=department.department_id','left')
					->join('status','employee.employee_status=status.status_id','left')
					->get('employee')->result_array();
	}
	function view_employee(){

	}
	function insert_employee($data){
		$this->db->insert('employee',$data);
	}
}