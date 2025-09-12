<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "ALTER TABLE main_admin ADD admin_phone TEXT AFTER admin_name";
			$this->db->query($sql);
			echo "Table Updated";
		}
}
?>
