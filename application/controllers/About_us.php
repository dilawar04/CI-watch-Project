<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model','brand');
		$this->load->model('product_model','product');
		$this->load->model('media_model','media');
		$this->load->model('product_gallery_model','gallery');
		$this->load->model('product_review_model','review');

	}

	public function index()
	{
		$data['title'] = 'About us';
		$this->load->view('about_us',$data);
	}
}
