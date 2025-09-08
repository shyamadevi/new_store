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
		return $this->db->get($table)->result_arrey();
	}
	function delete($table,$cond){
		$this->db->where($cond)->delete($table);
		return $this->db->delete_id();
	}
	function update($table,$data,$cond) {
		$this->db->where($cond)->update($table,$data);
		return $this->db->update_id();
	}
	function select_where($table,$cond) {
		return $this->db->where($cond)->get($table)->result_array();
	}
}
?>
