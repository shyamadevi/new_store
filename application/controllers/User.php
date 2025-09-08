<?php
class User extends CI_Controller{

	public function user_view($page='',$data=''){
		$this->load->view('user/navbaar');
		$this->load->view("user/$page",$data);
		$this->load->view('user/footer');
	}
	function index(){
		$this->user_view('index');
	}
}
?>
