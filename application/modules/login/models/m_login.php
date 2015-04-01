<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get_table(){
		$table = 'menu';
		return $table;
	}
	
	function get($order_by){
		$table = $this->get_table();
		$this->db->order_by($order_by);
		$query = $this->db->get($table);
		if ($query->num_rows()>0) {
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		} else {
			return array();
		}
		
	}
	// Count all record of table "contact_info" in database.
	public function record_count() {
		$table = $this->get_table();
		return $this->db->count_all($table);
	}

		// Fetch data according to per_page limit.
	public function fetch_data($limit, $id) {
		$table = $this->get_table();
		$this->db->limit($limit, $id);
		// $this->db->where('id', $id);
		$query = $this->db->get($table);
		if ($query->num_rows() > 0) {
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		} else{
			return array();
		}
		
	}

	function get_with_limit($limit, $offset, $order_by) {
		$table = $this->get_table();
		$this->db->limit($limit, $offset);
		$this->db->order_by($order_by);
		$query=$this->db->get($table);
		return $query;
	}

	function get_where($id) {
		$table = $this->get_table();
		$this->db->where('id', $id);
		$query=$this->db->get($table);
		if ($query->num_rows()>0) {
			$q_result = $query->row_array();
			$query->free_result();
			return $q_result;
		} else {
			return array();
		}
		
	}

	function get_where_custom($col, $value) {
		$table = $this->get_table();
		$this->db->where($col, $value);
		$query=$this->db->get($table);
		return $query;
	}

	function _insert($data) {
		$table = $this->get_table();
		$this->db->insert($table, $data);
	}

	function _update($id, $data) {
		$table = $this->get_table();
		$this->db->where('id', $id);
		$this->db->update($table, $data);
	}

	function _delete($id) {
		$table = $this->get_table();
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

	function count_where($column, $value) {
		$table = $this->get_table();
		$this->db->where($column, $value);
		$query=$this->db->get($table);
		$num_rows = $query->num_rows();
		return $num_rows;
	}

	function count_all() {
		$table = $this->get_table();
		$query=$this->db->get($table);
		$num_rows = $query->num_rows();
		return $num_rows;
	}

	function get_max() {
		$table = $this->get_table();
		$this->db->select_max('id');
		$query = $this->db->get($table);
		$row=$query->row();
		$id=$row->id;
		return $id;
	}

	function _custom_query($mysql_query) {
		$query = $this->db->query($mysql_query);
		return $query;
	}

	
} 