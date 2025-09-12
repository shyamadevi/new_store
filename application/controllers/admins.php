<?php
class Admins extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('My_model');
	}
	public function admin_view($page='',$data=''){

		if(isset($_SESSION['admin2_id'])){
			$id['admin_id']=$_SESSION['admin2_id'];
			$navdata['admindata']=$this->My_model->select_where('main_admin',$id)[0];

			$this->load->view('admin/body/navbaar',$navdata);
			$this->load->view("admin/$page",$data);
			$this->load->view('admin/body/footer');
		}else{
			redirect(base_url('admins/login'));
		}
	}
	public function login(){
		$data['formdata']=$this->My_model->select('loginform');
		// print_r($data);
		$this->load->view('admin/login',$data);
	}

	function login_verify() {
		$op       = $this->input->post('login_op');
        $email    = $this->input->post('log_email');
        $password = $this->input->post('log_password');

		if ($op == 'Admin') {
            $cond = ["admin_email" => $email];
            $data = $this->My_model->select_where("main_admin", $cond);

			if (count($data) > 0) {
				$admin = $data[0];
                if ($password == $admin['admin_password']) {
					$this->session->set_userdata("admin2_id", $admin["admin_id"]);
					$this->session->set_userdata("admin2_name", $admin["admin_name"]);
                    redirect("admin/index");
                }
            }
            $this->failed_login();

		} else {
            $cond = ["employees_email" => $email, "employees_role" => $op, "employees_status" => "Active"];
            $data = $this->My_model->select_where("employees", $cond);

			if (count($data) > 0) {
				$emp = $data[0];
                if ($password == $emp['employees_password']) {
                    $this->session->set_userdata("emp2_id", $emp["employees_id"]);
                    $this->session->set_userdata("emp2_role", $emp["employees_role"]);
                    $this->session->set_userdata("emp2_name", $emp["employees_name"]);
                    switch ($emp['employees_role']) {
					case "ProductManager":
                    redirect("product_manager/indexpm");
                    break;
					case "OrderManager":
					redirect("order_manager/indexom");
					break;
					case "DeliveryStaff":
					redirect("delivery_staff/indexds");
					break;
					case "Accountant":
					redirect("accountant/indexac");
					break;
					default:
					redirect("login");
				}
			}
		}
		$this->failed_login();
	}
}

    private function failed_login() {
        echo "<script>alert('Login Failed');</script>";
        $this->login();
    }

    // ✅ Logout
    public function admin_logout(){
	   unset($_SESSION['admin2_id']);
	   unset($_SESSION['admin2_name']);
	   redirect('admin/index');
    }

	function login_info(){
		$data['logindata']=$this->My_model->select('loginform');
		$this->admin_view('login_info',$data);
	}
	function login_form($id = null){
		$data['form_action'] = base_url('admins/login_op');

		// Agar edit ho to data laake form me dikhana
		if($id != null){
			$cond = ["form_id" => $id];
			$data['edit_data'] = $this->My_model->select_where('loginform', $cond)[0];
			$data['form_action'] = base_url('admins/login_op/'.$id);
		}
		$this->admin_view('login_form', $data);
	}

	function login_op($id = null){
		if($id == null){
			$this->My_model->insert('loginform', $_POST); // Insert
		} else {
			$cond = ['form_id' => $id];
			$this->My_model->update('loginform', $_POST, $cond); // Update
		}
		redirect('admins/login_info');
	}
	function profile(){
		if(isset($_SESSION['admin2_id'])){
			$id['admin_id']=$_SESSION['admin2_id'];
			$data['admin']=$this->My_model->select_where('main_admin',$id)[0];
			// print_r($data);
			$this->admin_view('body/profile',$data);
		}else{
			redirect(base_url('admins/login'));
		}
	}
	public function update_profile(){
		$cond['admin_id']  = $_SESSION['admin2_id'];

		$data = [
			'admin_name'    => $this->input->post('admin_name', true),
			'admin_phone'   => $this->input->post('admin_phone', true),
			'admin_email'   => $this->input->post('admin_email', true),
			'admin_address' => $this->input->post('admin_address', true),
		];

		if ($_FILES["admin_pic"]["error"] == 0) {
			$admin_profile = "admin_assets/img/profile/". $_POST['admin_name'] . rand(0,50000) . ".png";
			move_uploaded_file($_FILES['admin_pic']['tmp_name'], $admin_profile);
			$data["admin_pic"] = $admin_profile;
		}

		if (!empty($this->input->post('admin_password'))) {
			$data['admin_password'] = $this->input->post('admin_password');
		}

		$this->My_model->update('main_admin', $data, $cond);
		redirect('admins/profile');
	}
}
?>
