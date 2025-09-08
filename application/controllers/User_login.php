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

		if($this->My_model->insert('users',$data)){
            echo json_encode(['status' => 'success', 'message' => 'Signup successful! Please login.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Something went wrong, try again!']);
        }
    }

    // ✅ Login (AJAX)
    public function login(){
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->My_model->select_where('users', ['user_email' => $email]);

        if(count($data)>0){
			$user=$data[0];
            // session set
			if($email==$user['user_email'] && $password==$user['user_password']){

				$this->session->set_userdata('users2_id', $user['user_id']);
				$this->session->set_userdata('user2_name', $user['user_name']);

				echo json_encode(['status' => 'success', 'message' => 'Login successful!']);
			} else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password!']);
        }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password!']);
        }
    }

    // ✅ Logout
    public function logout(){
	   unset($_SESSION['user2_id']);
	   redirect('user');
    }
}
?>
