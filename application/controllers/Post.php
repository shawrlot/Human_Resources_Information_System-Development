<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

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



}