<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tasks extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();

		$this->load->model('m_tasks');
	}


	public function index()
	{
		$uri = $this->uri->segment(3);
		$per_page = 5;
		$data= $this->make_paginate($uri, $per_page);

		
		$data['page_title'] ="Tasks";
		$data['module'] = "tasks";
		$data['view_file'] = "display";
		echo Modules::run('template/two_col', $data);
		// $this->load->view('display', $data, FALSE);
		
	}
	function make_paginate($uri, $per_page){
		$this->load->library('pagination');
		$config = array();
		$config["base_url"] = base_url() . "tasks/index/";
		$total_row = $this->m_tasks->record_count();
		$config["total_rows"] = $total_row;
		$config["per_page"] = $per_page;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$config['first_tag_open'] = $config['last_tag_open']= $config['next_tag_open']= $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
         
        $config['cur_tag_open'] = "<li class="."active"."><span>";
        $config['cur_tag_close'] = "</span></li>";

		$this->pagination->initialize($config);
		$per_page = 5;
		if($uri){
			
			$page = ($uri-1)*5;
		} else{
			$page = 0;
		}
		$data['results'] = $this->m_tasks->fetch_data($per_page, $page);
		$str_links = $this->pagination->create_links();
		$data['links'] = explode('&nbsp;',$str_links );
		return $data;
	}
	function create(){
		$this->load->library('form_validation');
		$data = $this->get_data_from_post();
		$data['module'] = "tasks";
		$data['view_file'] = "form";
		echo Modules::run('template/two_col', $data);
	}
	function get_data_from_post(){
		$data['title'] = $this->input->post('title', TRUE);
		$data['priority'] = $this->input->post('priority', TRUE);
		return $data;
	}
	function get_data_from_db($update_id){
		$query = $this->get_where($update_id);

	}
	function submit(){
			
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('priority', 'Priority', 'required|numeric|xss_clean|max_length[2]');

		if ($this->form_validation->run() == false) {
			$this->create();
		} else {
			$data = $this->get_data_from_post();
			$this->m_tasks->_insert($data);
			redirect('tasks');
		}
	}
	function update(){
		$id = $this->input->post('id');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('priority', 'Priority', 'required|numeric|xss_clean|max_length[2]');

		if ($this->form_validation->run() == false) {
			$this->edit($id);
		} else {
			$data = $this->get_data_from_post();
			$this->m_tasks->_update($id, $data);
			redirect('tasks');
		}
	}
	function edit($id){
		$this->load->library('form_validation');
		$data = $this->get_data_from_post();
		$data = $this->m_tasks->get_where($id);
		$data['module'] = "tasks";
		$data['view_file'] = "update_form";
		echo Modules::run('template/two_col', $data);

	}
	function remove($id){
		$delete = $this->m_tasks->_delete($id);
		redirect('tasks');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */