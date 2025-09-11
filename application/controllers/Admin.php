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

			$this->load->view('admin/body/navbaar',$navdata='');
			$this->load->view("admin/$page",$data);
			$this->load->view('admin/body/footer');
		}else{
			redirect(base_url('admins/login'));
		}
	}
	function index(){
		$this->admin_view('body/index');
	}

	function customer_list(){
        $data['customer_list']=$this->My_model->select('users');
        // $data['order']=$this->My_model->select_orders_count();
        // print_r($data);
        $this->admin_view('customer/customer_list',$data);
    }
	function products(){
        // $data['products']=$this->My_model->select('products');
        $this->admin_view('products/list');
    }

	function products_form($id = null){
		$data['form_action'] = base_url('admin/products_op');

		// Agar edit ho to data laake form me dikhana
		if($id != null){
			$cond = ["product_id" => $id];
			$data['edit_data'] = $this->My_model->select_where('products', $cond)[0];
			$data['form_action'] = base_url('admin/products_op/'.$id);
		}
		$this->admin_view('products/form', $data);
	}

	function products_op($id = null){
		if($id == null){
			$this->My_model->insert('products', $_POST); // Insert
		} else {
			$cond = ['id' => $id];
			$this->My_model->update('products', $_POST, $cond); // Update
		}
		redirect('admin/products');
	}

	function msg(){
		$data['msg']=$this->My_model->select('msg');
		$this->admin_view('customer/msg',$data);
	}
	function remove_msg($id){
		$cond=['msg_id'=>$id];
		$this->My_model->delete('msg',$cond);
		redirect('admin/msg');
	}

	function employee_list(){
		$data['emp']=$this->My_model->select('employees');
		// print_r($data);
		$this->admin_view('employees/emp_list',$data);
	}
	function emp_form($id = null){
		$data['form_action'] = base_url('admin/emp_op');

		$data['roles'] = $this->My_model->select('loginform');

		// Agar edit ho to data laake form me dikhana
		if($id != null){
			$cond = ["employees_id" => $id];
			$data['edit_data'] = $this->My_model->select_where('employees', $cond)[0];
			$data['form_action'] = base_url('admin/emp_op/'.$id);
		}
		$this->admin_view('employees/emp_form', $data);
	}

	function emp_op($id = null){
		if($id == null){
			if ($_FILES["employees_pic"]["error"]==0) {
			$emp_pic="admin_assets/img/employees/employees_pic".rand(0,50000).".png";
			move_uploaded_file($_FILES['employees_pic']['tmp_name'],$emp_pic);
			$_POST["employees_pic"]=$emp_pic;
		}
			$this->My_model->insert('employees', $_POST); // Insert
		} else {
			if ($_FILES["employees_pic"]["error"]==0) {
			$emp_pic="admin_assets/img/employees/employees_pic".rand(0,50000).".png";
			move_uploaded_file($_FILES['employees_pic']['tmp_name'],$emp_pic);
			$_POST["employees_pic"]=$emp_pic;
		}
			$cond = ['employees_id' => $id];
			$this->My_model->update('employees', $_POST, $cond); // Update
		}
		redirect('admin/employee_list');
	}

}
?>
