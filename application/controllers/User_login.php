<?php
class User_login extends CI_Controller{

	// ✅ Signup (AJAX)
    public function signup(){
        $name     = $this->input->post('name');
        $phone    = $this->input->post('phone');
        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        $address = $this->input->post('address');


        $data = [
            'user_name'     => $name,
            'user_phone'    => $phone,
            'user_email'    => $email,
            'user_password' => $password,
            'user_address'  => $address,
        ];
		if ($_FILES["profile_picture"]["error"]==0) {
			$user_profile="user_assets/img/profile/".rand(0,50000).$data['user_name'].".png";
            move_uploaded_file($_FILES['profile_picture']['tmp_name'],$user_profile);
            $data["user_profile_picture"]=$user_profile;
		}

		if($this->User_model->insert('users',$data)){
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
