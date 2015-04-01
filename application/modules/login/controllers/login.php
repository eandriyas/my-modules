<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

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
		
		$this->load->model('m_login');
	}

	function page_attribute(){
		$data['page_title'] ="Menu";

		return $data;
	}
	public function index()
	{
		
		$this->load->library('form_validation');
		$data['page_title'] ="Login";
		$data['list_menu'] =$this->m_login->get('menu');
		
		$data['module'] = "login";
		$data['view_file'] = "form_login";
		echo Modules::run('template/two_col', $data);

		
	}
	
	function create(){
		$data = $this->get_data_from_post();
		$data['page_title'] ="Menu";
		$this->load->library('form_validation');
		
		$data['module'] = "menu";
		$data['view_file'] = "form";
		echo Modules::run('template/two_col', $data);
	}
	function get_data_from_post(){
		$data['username'] = $this->input->post('username', TRUE);
		$data['password'] = $this->input->post('password', TRUE);
		
		return $data;
	}
	function submit(){
			
		$this->load->library('form_validation');
		$this->form_validation->set_rules('menu', 'Menu', 'required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');

		if ($this->form_validation->run() == false) {
			$this->create();
		} else {
			$data = $this->get_data_from_post();
			$this->m_login->_insert($data);
			redirect('menu');
		}
	}
	function update(){
		$id = $this->input->post('id');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('menu', 'Menu', 'required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');

		if ($this->form_validation->run() == false) {
			$this->edit($id);
		} else {
			$data = $this->get_data_from_post();
			$this->m_login->_update($id, $data);
			
			redirect('menu');
		}
	}
	function edit($id){
		$this->load->library('form_validation');
		$data = $this->get_data_from_post();

		$data = $this->m_login->get_where($id);
		$data['page_title'] ="Menu";
		$data['module'] = "menu";
		$data['view_file'] = "update_form";
		echo Modules::run('template/two_col', $data);

	}
	function remove($id){
		$delete = $this->m_login->_delete($id);
		redirect('menu');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */