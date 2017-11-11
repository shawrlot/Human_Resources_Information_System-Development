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

	function create_announcement(){if($this->session->userdata('logged_in'))
		{$sess = $this->session->userdata('logged_in');
		$id = $sess['employee_account'];
		date_default_timezone_set('Asia/Manila');
		$slug = url_title($this->input->post('announce_title'), 'dash', TRUE);
		$data = array (
			'post_title' => $this->input->post('announce_title'),
			'post_body' => $this->input->post('announce_content'),
			'post_author' => $id,
			'post_type' => 1,
			'post_status' => 1,
			'post_slug' => $slug
		); $this->post_model->create_announcement($data,$slug);
		redirect('post');}
	 else {redirect('login');}}

	function create_event(){if($this->session->userdata('logged_in'))
		{$sess = $this->session->userdata('logged_in');
		$id = $sess['employee_account'];
		date_default_timezone_set('Asia/Manila');
		$slug = url_title($this->input->post('event_title'), 'dash', TRUE);
		$data = array (
			'post_title' => $this->input->post('event_title'),
			'post_when' => $this->input->post('event_date'),
			'post_body' => $this->input->post('event_content'),
			'post_author' => $id,
			'post_type' => 2,
			'post_status' => 1,
			'post_slug' => $slug
		); $this->post_model->create_event($data,$slug);
		redirect('post');}
	 else {redirect('login');}}

	function archive_announcement($id){if($this->session->userdata('logged_in'))
		{
		$data = array (
			'post_status' => 0
		); $this->post_model->archive_announcement($data,$id);
		redirect('post');} 
	 else {redirect('login');}}

	function archive_event($id){if($this->session->userdata('logged_in'))
		{
		$data = array (
			'post_status' => 0
		); $this->post_model->archive_event($data,$id);
		redirect('post');} 
	 else {redirect('login');}}


	 function view_post($slug){
		$data['title'] = "View Post";
		$data['view_post'] = $this->post_model->view_post($slug);
		$this->load->view('admin_view_post', $data);
	}


	 function update_announcement($id){if($this->session->userdata('logged_in'))
		{
			$data = $this->post_model->update_announcement($id);
			echo json_encode($data);
	
	} 
	 else {redirect('login');}}

	 function edit_announcement(){if($this->session->userdata('logged_in'))
		{
		$id = $this->input->post('announceid');
		$data = array (
			'post_title' => $this->input->post('editatitle'),
			'post_body' => $this->input->post('editacontent')
		); $this->post_model->edit_announcement($data,$id);
		redirect('post');} 
	 else {redirect('login');}}


	 function update_event($id){if($this->session->userdata('logged_in'))
		{
			$data = $this->post_model->update_event($id);
			echo json_encode($data);
	
	} 
	 else {redirect('login');}}

	 function edit_event(){if($this->session->userdata('logged_in'))
		{
		$id = $this->input->post('eventid');
		$data = array (
			'post_title' => $this->input->post('editetitle'),
			'post_when' => $this->input->post('editedate'),
			'post_body' => $this->input->post('editecontent')
		); $this->post_model->edit_event($data,$id);
		redirect('post');} 
	 else {redirect('login');}}
}