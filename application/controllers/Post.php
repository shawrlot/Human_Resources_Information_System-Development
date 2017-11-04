<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
		function __construct(){
		parent::__construct();
$this->load->model('post_model');}
	public function index(){
		if ($this->session->has_userdata('logged_in')) {
			$this->load->model('post_model');
			if($keyword=$this->input->get('search')){
				$data['posts'] =  $this->post_model->search_post($keyword);
				$data['keyword'] = $keyword;
			}
			else{
				$data['posts'] =  $this->post_model->get_post($this->input->get('filter'));
			}
			$data['active_filter'] = $this->input->get('filter');
			$data['active'] = 'home';
			$data['title'] = 'Home';
			$this->load->view('dashboard-home-admin_view',$data);
		}
		else{
			$this->load->view('login_view');
		}	
	}

	function create_announcement(){if($this->session->userdata('logged_in')){
		$sess = $this->session->userdata('logged_in');
		$id = $sess['employee_account'];
		 date_default_timezone_set('Asia/Manila');
		 $data = array (
			'post_title' => $this->input->post('announce_title'),
			'post_body' => $this->input->post('announce_content'),
			'post_author' => $id,
			'post_type' => 1
		);
		$this->post_model->create_announcement($data);
		redirect('post');
	} else { redirect('login');}
}

	function create_event(){if($this->session->userdata('logged_in')){
		$sess = $this->session->userdata('logged_in');
		$id = $sess['employee_account'];
		$data = array (
			'post_title' => $this->input->post('event_title'),
			'post_when' => $this->input->post('event_date'),
			'post_body' => $this->input->post('event_content'),
			'post_author' => $id,
			'post_type' => 2
		);
		$this->post_model->create_event($data);
		redirect('post');
	} else { redirect('login');}
}
}