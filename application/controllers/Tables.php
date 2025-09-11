<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "ALTER TABLE employees ADD employees_phone TEXT AFTER employees_name";
			$this->db->query($sql);
			echo "Table Updated";
		}
}
?>
