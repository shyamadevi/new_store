<?php
class Users extends CI_Controller{

	// ✅ Signup (AJAX)
    public function signup(){

		$checkemail=['user_email'=>$_POST['email']];
		$checkphone=['user_phone'=>$_POST['phone']];

		$crossceckemail=$this->My_model->select_where('users',$checkemail);
		$crossceckphone=$this->My_model->select_where('users',$checkphone);

		if(count($crossceckemail)== 0 && count($crossceckphone)== 0){
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
				'user_status'  => 'Active',
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
		} else {
			if(count($crossceckemail)>0){
				echo json_encode(['status' => 'error', 'message' => 'Email Already Used!']);
				return;
			}
			if(count($crossceckphone)>0){
				echo json_encode(['status' => 'error', 'message' => 'Phone Already Used!']);
				return;
			}
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
				$this->session->set_userdata('users2_name', $user['user_name']);

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
	   unset($_SESSION['users2_id']);
	   unset($_SESSION['users2_name']);
	   redirect('user');
    }

	public function user_view($page='',$data=''){
		if(isset($_SESSION['users2_id'])){
			$id['user_id']=$_SESSION['users2_id'];
			$userdata['userdata']=$this->My_model->select_where('users',$id)[0];
			// print_r($userdata);
			$userdata['contactdata']=$this->My_model->select('contactform')[0];

			$this->load->view('user/navbaar',$userdata);
			$this->load->view("user/$page",$data='');
			$this->load->view('user/footer');
		}else{
			redirect('user');
		}
	}

	public function profile(){
		// echo "profile page";
		$this->user_view('profile');
	}

	public function update_profile(){
		$cond['user_id']  = $_SESSION['users2_id'];

		$data = [
			'user_name'    => $this->input->post('user_name', true),
			'user_phone'   => $this->input->post('user_phone', true),
			'user_email'   => $this->input->post('user_email', true),
			'user_address' => $this->input->post('user_address', true),
		];

		if ($_FILES["user_profile_picture"]["error"] == 0) {
			$user_profile = "user_assets/img/profile/" . rand(0,50000) . $_POST['user_name'] . ".png";
			move_uploaded_file($_FILES['user_profile_picture']['tmp_name'], $user_profile);
			$data["user_profile_picture"] = $user_profile;
		}

		if (!empty($this->input->post('user_password'))) {
			$data['user_password'] = $this->input->post('user_password');
		}

		$this->My_model->update('users', $data, $cond);
		redirect('users/profile');
	}

}
?>
