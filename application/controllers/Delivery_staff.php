<?php
class Delivery_staff extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('My_model');
	}
	function del_view($page='', $data= ''){
		$this->load->view("delivery_staff/$page", $data);
	}
	public function indexds(){
		$this->del_view('indexds');
	}
}
?>
