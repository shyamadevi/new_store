<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "ALTER TABLE privacy_policy(
			policy_id int PRIMARY KEY AUTO_INCREMENT,
			policy_title text,
			policy_heading text,
			policy_description_1 text,
			policy_description_2 text,
			policy_description_3 text,
			policy_description_4 text,
			policy_description_5 text,
			policy_description_6 text,
			policy_description_7 text,
			policy_status text,
			policy_created DATETIME DEFAULT CURRENT_TIMESTAMP,
			policy_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
			)";
			$this->db->query($sql);
			echo "Table Created";
		}
}
?>
