<?php
class User_side extends CI_Controller{
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

	public function contact_details(){
		$data['form_data']=$this->My_model->select('contactform');
		// print_r($data);
		$this->admin_view('page_data/contact_details',$data);
	}

	function contact_form($id = null){
    $data['form_action'] = base_url('user_side/contact_info');

    // Agar edit ho to data laake form me dikhana
    if($id != null){
        $cond = ["contactform_id" => $id];
        $data['edit_data'] = $this->My_model->select_where('contactform', $cond)[0];
        $data['form_action'] = base_url('user_side/contact_info/'.$id);
    }
    $this->admin_view('page_data/contact_form', $data);

}

function contact_info($id = null){
    if($id == null){
		print_r($_POST);
        $this->My_model->insert('contactform', $_POST); // Insert
    } else {
        $cond = ['contactform_id' => $id];
		print_r($_POST);

        $this->My_model->update('contactform', $_POST, $cond); // Update
    }
    redirect('user_side/contact_details');
}
function contact_info_delete($id){
	$cond = ['contactform_id' => $id];
	$this->My_model->delete('contactform', $cond);
	redirect('user_side/contact_details');
}
}
?>
