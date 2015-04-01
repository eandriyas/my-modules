<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_tasks extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get($order_by){
		$this->db->order_by($order_by);
		$query = $this->db->get('tasks');
		if ($query->num_rows()>0) {
			$q_result = $query->result_array();
			$query->free_result();
			return $q_result;
		} else {
			return array();
		}
		
	}
} 