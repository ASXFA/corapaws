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
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/sider');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/detail_product',$data);
		$this->load->view('admin/layout/footer_modal');
	}

	public function add_product()
	{
		$data['judul'] = "Admin Page";
		$data['code'] = $this->clothing_model->buat_kode();
		$data['size'] = $this->clothing_model->size();
		$data['color'] = $this->clothing_model->color();
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/sider');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/add_product',$data);
		$this->load->view('admin/layout/footer_modal');
	}

	public function action_add_product()
	{
		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('size[]', 'Size', 'required');
		$this->form_validation->set_rules('color[]', 'Color', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('product_desc', 'Product Description', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/add_product');
		}else {
			$config['upload_path'] = './assets/img/design';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['overwrite'] = true;
			$config['max_size'] = 10240;
			$config['max_width'] = 5000;
			$config['max_height'] = 5000;        
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('product_images')) {
				$data = array('upload_data' => $this->upload->data());
				$img = $data['upload_data']['file_name'];
				$sizes = implode(",",$this->input->post('size[]'));
				$colors = implode(",",$this->input->post('color[]'));
				$this->clothing_model->addNewProduct($sizes,$colors,$img);
				$this->session->set_flashdata('addProductSuccess','Added data success');
				redirect('admin/clothing');
			} else {
				$this->session->set_flashdata('failupload','Image failed to upload');
				redirect('admin/clothing/add_product');
			}
		}
	}
	
	public function delete_product($id)
	{
		$where = array('product_id' => $id);
		$this->clothing_model->delete_product($where);
		$this->session->set_flashdata('message',"Your file has been deleted ! ");
		redirect('clothing');
	}

}
