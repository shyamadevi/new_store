<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "CREATE TABLE employees(
			employees_id int PRIMARY KEY AUTO_INCREMENT,
			employees_name text,
			employees_email text,
			employees_password text,
			employees_pic text,
			employees_address text,
			employees_status text,
			employees_sign DATETIME DEFAULT CURRENT_TIMESTAMP,
			employees_update DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
			)";
			$this->db->query($sql);
			echo "Table Created";
		}
}
?>
