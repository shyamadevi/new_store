<?php
class Tables extends CI_Controller{

	function index(){
		$sql = "ALTER TABLE contactform 
		ADD data_address_street TEXT AFTER data_address,
		ADD data_mobile TEXT AFTER data_phone,
		ADD data_toll_free TEXT AFTER data_mobile,
		ADD data_map TEXT AFTER data_address_street
		";
			$this->db->query($sql);
			echo "Table Updated";
		}
}
?>
