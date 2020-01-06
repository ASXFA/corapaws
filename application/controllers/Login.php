<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}


	public function index()
	{
		if ($this->session->userdata('akses')== TRUE) {
			redirect('admin/dashboard');
		}
		$data['judul'] = "Admin Page";
		$this->load->view('admin/login',$data);
	}

	public function login_action()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required',
				array('required' => 'You must provide a %s.')
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		}else {
			
			$query= $this->login_model->check_admin();
			if ($query->num_rows() > 0 ) {
				$data = $query->row_array();
				$this->session->set_userdata('akses',TRUE);
				$this->session->set_userdata('ses_name',$data['name']);
				$this->session->set_userdata('ses_photo',$data['photo']);
				redirect('admin/dashboard');
			}else {
				$this->session->set_flashdata('message_login','Sorry your Username or Password Not Match !');
				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}