<?php
class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('My_model');
	}
	public function admin_view($page='',$data=''){

		if(isset($_SESSION['admin2_id'])){
			$id['admin_id']=$_SESSION['admin2_id'];
			$navdata['admindata']=$this->My_model->select_where('main_admin',$id)[0];

			$this->load->view('admin/navbaar',$navdata='');
			$this->load->view("admin/$page",$data);
			$this->load->view('admin/footer');
		}else{
			redirect(base_url('admins/login'));
		}
	}
	function index(){
		$this->admin_view('index');
	}

	function customer_list(){
        $data['customer_list']=$this->My_model->select('users');
        // $data['order']=$this->My_model->select_orders_count();
        // print_r($data);
        $this->admin_view('customer_list',$data);
    }
}
?>
