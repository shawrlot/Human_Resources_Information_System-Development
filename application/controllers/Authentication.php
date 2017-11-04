<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function login(){
		if ($this->input->post()){
			$data = array(
				'account_username'=>$this->input->post('username'),
				'account_password'=>$this->input->post('password'),
			);
			$this->load->model('authentication_model');

			if ($this->authentication_model->login($data)) {
				header('location:/');
			}
			else{
				header('location:/');
			}
		}
		else{
			$this->load->view('login_view');
		}
	}
	public function logout(){
		$this->session->unset_userdata('logged_in');
		header('location:/');
	}



}