<?php
class Admins extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('My_model');
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

		if ($op == 'admin') {
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
            $cond = ["email" => $email, "role" => $op, "status" => "Active"];
            $data = $this->My_model->select_where("employees", $cond);

			if (count($data) > 0) {
				$emp = $data[0];
                if ($password == $emp['password']) {
                    $this->session->set_userdata("emp2_id", $emp["id"]);
                    $this->session->set_userdata("emp2_role", $emp["role"]);
                    switch ($emp['role']) {
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
	   redirect('admin');
    }
}
?>
