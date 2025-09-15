<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "CREATE TABLE cart(
    cart_id int PRIMARY KEY AUTO_INCREMENT,
    user_id text,
    product_id text,
    quantity text,
    cart_status text,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
";
			$this->db->query($sql);
			echo "Table Created";
		}
}
?>
