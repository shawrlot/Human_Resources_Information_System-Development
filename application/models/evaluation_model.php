<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class evaluation_model extends CI_MODEL {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	public function get_evaluated(){
		 return $this->db

		 		->join('pin','session_pin=pin_id')
		 		->join('load','pin_load=load_id')
		 		->join('employee','load_employee=employee_id')
		 		->join('subject','load_subject=subject_id')
		 		->order_by('session_dateCreated','DESC')
				 ->get('session')->result_array();
	}
	public function pin_check($pin){
		if ($pin_details = $this->db->where('pin_code',$pin)->get('pin')->result_array()){
			return $this->db->join('subject','load.load_subject=subject.subject_id')
					 ->join('employee','load_employee=employee_id')
					 ->join('department','employee_department=department.department_id')
					 ->join('pin','load_id=pin_load')
					 ->get('load')->result_array();
		}
		else{
			return false;
		}
	}
	public function create_session($data){
		$this->db->insert('session',array('session_pin'=>$data));
		return $this->db->insert_id();
		echo "red";
	}
	public function get_questions(){
		return $this->db
					->join('subcategory','question_subcategory=subcategory_id')
					->join('category','subcategory_category=category_id')
					->order_by('category_order')
					->get('question')->result_array();
	}
	public function get_category(){
		return $this->db->get('category')->result_array();
	}
	public function get_subcategory(){
		return $this->db->get('subcategory')->result_array();
	}
	public function submit_answer($data){
		// print_r($data);
		$this->db->insert('sheet',$data);
	}
}