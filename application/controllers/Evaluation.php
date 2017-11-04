<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('evaluation_model');
	}
	public function index(){
		if ($this->session->userdata('logged_in')) {
			$data['title'] = 'Employee';
			$data['active'] = 'evaluation';
			$data['sessions'] = $this->evaluation_model->get_evaluated();
			$this->load->view('evaluation_view',$data);
		}
		else{
			if(!$this->session->userdata('evaluation')){
				$data['title'] = 'Evaluate Now';
				$this->load->view('evaluate_view',$data);
			}
			else{
				header('location:/introduction');
			}
			
		}
		
	}
	public function start_evaluation(){
		$pin = $this->input->post('pin');
		if ($pin_details = $this->evaluation_model->pin_check($pin)){
			// var_dump($pin_details);
			$data['evaluation'] = $pin_details[0];
			$data['title'] = 'Step 2: Verify';
			$this->load->view('evaluation-start_view',$data);
		}
		else{
			header('location:/evaluation');
		}
	}
	public function create_session(){
		if(!$this->session->userdata('evaluation')){
			if ($x = $this->input->post('pin')) {
			$session_id = $this->evaluation_model->create_session($x);
			$this->session->set_userdata('evaluation',array('session_id'=>$session_id));
			header('location:/introduction');
			}
			else{
				header('location:/evaluation');
			}
		}
		else{
			$this->load->view('evaluation-question_view');
		}
		
	}
	public function session_introduction(){
		// print_r($this->session->userdata('evaluation'));
		$data['categories'] = $this->evaluation_model->get_category();
		$data['subcategories'] = $this->evaluation_model->get_subcategory();
		$data['questions'] = $this->evaluation_model->get_questions();
		$this->load->view('evaluation-question_view',$data);
	}
	public function session_submit(){
		$esession = $this->session->userdata['evaluation']['session_id'];
		// var_dump($this->input->get());
		foreach ($this->input->get() as $qid => $qa) {
			$data = array(
				'sheet_session'=>$esession,
				'sheet_question'=>$qid,
				'sheet_answer'=>$qa
			);
			$this->evaluation_model->submit_answer($data);
			// print_r($data);
		}
		$this->session->unset_userdata('evaluation');
		header('location:/');
	}

}