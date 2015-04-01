<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_base extends MX_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		

		$this->load->model('m_tasks');
		$data['query'] = $this->m_tasks->get('priority');

		$data['module'] = "tasks";
		$data['view_file'] = "display";
		echo Modules::run('template/two_col', $data);
		// $this->load->view('display', $data, FALSE);
		
	}
	function get($order_by) {
		$this->load->model('m_base');
		$query = $this->m_base->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
		$this->load->model('m_base');
		$query = $this->m_base->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id) {
		$this->load->model('m_base');
		$query = $this->m_base->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value) {
		$this->load->model('m_base');
		$query = $this->m_base->get_where_custom($col, $value);
		return $query;
	}

	function _insert($data) {
		$this->load->model('m_base');
		$this->m_base->_insert($data);
	}

	function _update($id, $data) {
		$this->load->model('m_base');
		$this->m_base->_update($id, $data);
	}

	function _delete($id) {
		$this->load->model('m_base');
		$this->m_base->_delete($id);
	}

	function count_where($column, $value) {
		$this->load->model('m_base');
		$count = $this->m_base->count_where($column, $value);
		return $count;
	}

	function get_max() {
		$this->load->model('m_base');
		$max_id = $this->m_base->get_max();
		return $max_id;
	}

	function _custom_query($mysql_query) {
		$this->load->model('m_base');
		$query = $this->m_base->_custom_query($mysql_query);
		return $query;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */