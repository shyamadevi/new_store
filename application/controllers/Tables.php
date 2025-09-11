<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "CREATE TABLE msg(
			msg_id INT PRIMARY KEY AUTO_INCREMENT,
			msg_name TEXT,
			msg_phone TEXT,
			msg_sub TEXT,
			msg_desc TEXT,
			msg_userid TEXT,
			created DATETIME DEFAULT CURRENT_TIMESTAMP,
			updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		)";
			$this->db->query($sql);
			echo "Table Created";
		}
}
?>
