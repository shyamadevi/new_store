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

	// ✅ Signup (AJAX)
    public function signup(){
        $name     = $this->input->post('user_name');
        $email    = $this->input->post('user_email');
        $password = $this->input->post('user_password');

        // check email already exist
        if($this->User_model->check_email($email)){
            echo json_encode(['status' => 'error', 'message' => 'Email already registered!']);
            return;
        }

        $data = [
            'name'     => $name,
            'email'    => $email,
            'password' => $password,
            'created_at' => date('Y-m-d H:i:s')
        ];

        if($this->User_model->insert_user($data)){
            echo json_encode(['status' => 'success', 'message' => 'Signup successful! Please login.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Something went wrong, try again!']);
        }
    }

    // ✅ Login (AJAX)
    public function login(){
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->User_model->login($email, $password);

        if($user){
            // session set
            $this->session->set_userdata('user_id', $user['id']);
            $this->session->set_userdata('user_name', $user['name']);

            echo json_encode(['status' => 'success', 'message' => 'Login successful!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password!']);
        }
    }

    // ✅ Logout
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
?>
