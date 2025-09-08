<?php
class User extends CI_Controller{

	public function user_view($page='',$data=''){
		$this->load->view('user/navbaar');
		$this->load->view("user/$page",$data);
		$this->load->view('user/footer');
	}
	function index(){
		$data['userdata']=$this->My_model->select('users');
		// print_r($data);
		$this->user_view('index',$data);
	}

	function cart()
	{
		$this->user_view('cart');
	}
}
?>
