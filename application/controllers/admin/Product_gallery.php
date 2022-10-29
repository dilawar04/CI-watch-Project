<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_gallery_model','gallery');
		if (! $this->session->userdata('is_logged_in')) redirect('/admin','refresh');

	}

	public function index()
	{
		$data['mainContent'] = 'admin/product_gallery/index';
		$this->load->view('admin/layout/master',$data);
	}
	public function add()
	{

		if ($this->input->server('REQUEST_METHOD') == 'POST') 

		{
			$this->form_validation->set_rules('create_date','Date','required');

			if ($this->form_validation->run() == TRUE) 
			{
				$fileUpload = [];
				$hasFileUploaded = FALSE;

				$filePrefrence = [

					'upload_path' => './uploads/',
					'allowed_types' => 'jpg|jpeg|png|gif',
					'encrypt_name' => TRUE
				];

				$this->upload->initialize($filePrefrence);

				if (! $this->upload->do_upload('gallery_img')) {
					$data['error'] = $this->upload->display_errors();
				}
				else{
					$fileUpload = $this->upload->data();
					$hasFileUploaded = TRUE;
				}

				if ($hasFileUploaded) {

					$options = [
						'create_date' => $this->input->post('create_date'),
						'gallery_img' => $fileUpload['file_name']

					];

					$this->gallery->create($options);
					redirect('/admin/product/','refresh');

				}
			}
		}

		$data['title'] = 'Create Product Gallery';
		$data['mainContent'] = 'admin/product_gallery/add';
		$this->load->view('admin/layout/master',$data);
	}
	public function edit()
	{
		$data['mainContent'] = 'admin/product_gallery/edit';
		$this->load->view('admin/layout/master',$data);
	}
}
