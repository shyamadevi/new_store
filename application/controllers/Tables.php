<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "CREATE TABLE terms(
			terms_id int PRIMARY KEY AUTO_INCREMENT,
			terms_title text,
			terms_heading text,
			terms_description_1 text,
			terms_description_2 text,
			terms_description_3 text,
			terms_description_4 text,
			terms_description_5 text,
			terms_description_6 text,
			terms_description_7 text,
			terms_status text,
			terms_created DATETIME DEFAULT CURRENT_TIMESTAMP,
			terms_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
			)";
			$this->db->query($sql);
			echo "Table Created";
		}
}
?>
