<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->db_debug = FALSE;
	}
	public function get_post($filter = null){
		if (!is_null($filter)) {
			$filter = array(
			'type_name'=>$filter
		);
		$result =  $this->db->or_where($filter)->join('account','post.post_author=account.account_id')
											->join('type','post.post_type=type.type_id')
											->get('post')->result_array();
		}
		else{
			$result =  $this->db->join('account','post.post_author=account.account_id')
											->join('type','post.post_type=type.type_id')
											->get('post')->result_array();
		}
		
		return $result;
	}
	public function search_post($keyword){
		$result =  $this->db->like('post_title',$keyword)->or_like('post_body',$keyword)
											->join('account','post.post_author=account.account_id')
											->join('type','post.post_type=type.type_id')
											->get('post')->result_array();
		return $result;
	}
	public function add_post(){
		return 'echo';
	}
	public function view_post($id){

	}
}