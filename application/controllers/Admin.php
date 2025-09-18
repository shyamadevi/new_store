<?php
class Admin extends CI_Controller{
	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('My_model');
	// }
	public function admin_view($page='',$data=''){

		if(isset($_SESSION['admin2_id'])){
			$id['admin_id']=$_SESSION['admin2_id'];
			$navdata['admindata']=$this->My_model->select_where('main_admin',$id)[0];
			// print_r($navdata);
			$this->load->view('admin/body/navbaar',$navdata);
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
	// function products(){
    //     // $data['products']=$this->My_model->select('products');
    //     $this->admin_view('products/list');
    // }

	// function products_form($id = null){
	// 	$data['form_action'] = base_url('admin/products_op');

	// 	// Agar edit ho to data laake form me dikhana
	// 	if($id != null){
	// 		$cond = ["product_id" => $id];
	// 		$data['edit_data'] = $this->My_model->select_where('products', $cond)[0];
	// 		$data['form_action'] = base_url('admin/products_op/'.$id);
	// 	}
	// 	$this->admin_view('products/form', $data);
	// }

	// function products_op($id = null){
	// 	if($id == null){
	// 		$this->My_model->insert('products', $_POST); // Insert
	// 	} else {
	// 		$cond = ['id' => $id];
	// 		$this->My_model->update('products', $_POST, $cond); // Update
	// 	}
	// 	redirect('admin/products');
	// }

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

	 public function products() {
        // Fetch all products with category name
        $this->db->select('products.*, categories.category_name');
        $this->db->from('products');
        $this->db->join('categories', 'categories.category_id = products.category_id', 'left');
        $this->db->where('products.status', 'active');
        $query = $this->db->get();
        $data['products'] = $query->result();

        // Load the products view
        $this->admin_view('products', $data);
    }




		public function update_product($id = null) {
    $this->load->library('upload');

    // Gather POST data
    $name = $this->input->post('name');
    $brand = $this->input->post('brand');
    $price = (float)$this->input->post('price');
    $discount_percent = (float)$this->input->post('discount_percent');
    $stock = (int)$this->input->post('stock');
    $sub_option = $this->input->post('sub_option');
    $variety = $this->input->post('variety');
    $shelf_life = $this->input->post('shelf_life');
    $origin = $this->input->post('origin');

    // Calculate discount
    $discount_amount =$price - ($price * $discount_percent) / 100;

    $data = [
        'name' => $name,
        'brand' => $brand,
        'price' => $price,
        'discount_percent' => $discount_percent,
        'discount_amount' => $discount_amount,
        'stock' => $stock,
        'sub_option' => $sub_option,
        'variety' => $variety,
        'shelf_life' => $shelf_life,
        'origin' => $origin
    ];

    // Handle image upload
    if (!empty($_FILES['image1']['name'])) {
        $config['upload_path'] = './user_assets/img/products/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = time() . '_' . $_FILES['image1']['name'];
        $config['overwrite'] = false;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('image1')) {
            $uploadData = $this->upload->data();
            $data['image1'] = $uploadData['file_name'];

            // Delete old image if editing
            if ($id) {
                $old = $this->db->get_where('products', ['product_id' => $id])->row_array();
                if (!empty($old['image1']) && file_exists('./user_assets/img/products/' . $old['image1'])) {
                    @unlink('./user_assets/img/products/' . $old['image1']);
                }
            }
        }
    }

    if ($id == null) {
        // Insert new product
        $this->My_model->insert('products', $data);
    } else {
        // Update existing product
        $this->My_model->update('products', $data, ['product_id' => $id]);
    }

    redirect('admin/products');
}
public function products_form($id = null){
    $data['form_action'] = base_url('admin/update_product');

    // If editing, fetch existing data
    if($id != null){
        $cond = ["product_id" => $id];
        $data['edit_data'] = $this->My_model->select_where('products', $cond)[0];
        $data['form_action'] = base_url('admin/update_product/'.$id);
    }

    $this->admin_view('add_product', $data);
}
// In Admin.php controller
public function delete_product($id = null)
{
    if ($id === null) {
        echo "failed";
        return;
    }

    
    $this->load->model('my_model');

    // Update status to 'deleted'
    $update = $this->my_model->update('products', ['status' => 'deleted'], ['product_id' => $id]);

    if ($update !== false) { 
        echo "deleted";
    } else {
        echo "failed";
    }
}

	

}
?>
