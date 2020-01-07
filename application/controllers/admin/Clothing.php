<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clothing extends CI_Controller {

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
		if ($this->session->userdata('akses')!= TRUE) {
			redirect('login');
        }
        $this->load->model('clothing_model');
	}

	public function index()
	{
        $data['judul'] = "Admin Page";
        $data['product'] = $this->clothing_model->getAll();
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/sider');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/clothing',$data);
		$this->load->view('admin/layout/footer_modal');
    }
    
    public function detail_product($id)
    {
        $data['judul'] = "Admin Page";
        $data['product'] = $this->clothing_model->getById($id);
        $data['image'] = $this->clothing_model->imageById($id);
        $data['size'] = $this->clothing_model->size();
        $data['color'] = $this->clothing_model->color();
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/sider');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/detail_product',$data);
		$this->load->view('admin/layout/footer_modal');
    }
}
