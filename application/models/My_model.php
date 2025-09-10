<?php
class My_model extends CI_Model {
	// function __construct() {
	// 	parent::__construct();
	// 	$this->load->database();
	// }
	function insert($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	function select($table){
		return $this->db->get($table)->result_array();
	}
	function delete($table,$cond){
		$this->db->where($cond)->delete($table);
	}
	function update($table,$data,$cond) {
		$this->db->where($cond)->update($table,$data);
	}
	function select_where($table,$cond) {
		return $this->db->where($cond)->get($table)->result_array();
	}



	// user

	function privacy_update(){
		$sql="SELECT DATE_FORMAT(policy_updated, '%e %M %Y <small>at</small> %h:%i %p') AS last_updated
		FROM privacy_policy
		ORDER BY policy_updated DESC LIMIT 1; ";
		return $this->db->query($sql)->result_array();
	}
	function terms_update(){
		$sql="SELECT DATE_FORMAT(terms_updated, '%e %M %Y <small>at</small> %h:%i %p') AS last_updated
		FROM terms
		ORDER BY terms_updated DESC LIMIT 1; ";
		return $this->db->query($sql)->result_array();
	}
}
?>
