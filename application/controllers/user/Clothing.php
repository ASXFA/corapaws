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
	public function clothing_men()
	{
		$data['judul'] = "Corapaws Shop";
		$this->load->view('user/layout/header',$data);
		$this->load->view('user/clothing_men');
		$this->load->view('user/layout/footer');
	}
	
	public function clothing_women()
	{
		$data['judul'] = "Corapaws Shop";
		$this->load->view('user/layout/header',$data);
		$this->load->view('user/clothing_women');
		$this->load->view('user/layout/footer');
	}
}
