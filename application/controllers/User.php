<?php
class User extends CI_Controller{

	public function user_view($page='',$data=''){
		if(isset($_SESSION['users2_id'])){
			$id['user_id']=$_SESSION['users2_id'];
			$navdata['userdata']=$this->My_model->select_where('users',$id)[0];
		}
		$navdata['contactdata']=$this->My_model->select('contactform')[0];
		// print_r($navdata['contactdata']);
		// exit;

		$this->load->view('user/navbaar',$navdata);
		$this->load->view("user/$page",$data='');
		$this->load->view('user/footer');
	}
	function index(){
		$this->user_view('index');
	}
	function sub(){
		$this->user_view('sub');
	}

	function cart()
	{
		$this->user_view('cart');
	}
	function checkout()
	{
		$this->user_view('checkout');
	}

}
?>
