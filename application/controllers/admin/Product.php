<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model','product');
		if (! $this->session->userdata('is_logged_in')) redirect('/admin','refresh');

	}

	public function index()
	{

		$config['base_url'] = base_url() . 'admin/product/index';
		$config['total_rows'] = $this->product->count_all();
		$config['per_page'] =  ($this->input->get('per_page')) ? $this->input->get('per_page') : 15 ;
		$config['uri_segment'] = 4; 
		$config['num_links'] = 3; 

		$this->pagination->initialize($config);
		if ($this->input->get('q'))
			$this->db->like('title', $this->input->get('q'), 'BOTH');

		$data['products'] = $this->product->get_all($config['per_page'], $this->uri->segment(4));
		$data['title'] = 'Manage Product';
		$data['mainContent'] = 'admin/product/index';
		$this->load->view('admin/layout/master',$data);
	}
	public function add()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') 

		{
			$this->form_validation->set_rules('create_date','Date','required');
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('slug','Slug','required');

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

				if (! $this->upload->do_upload('product_img')) {
					$data['error'] = $this->upload->display_errors();
				}
				else{
					$fileUpload = $this->upload->data();
					$hasFileUploaded = TRUE;
				}

				if ($hasFileUploaded) {

					$options = [
						'create_date' => $this->input->post('create_date'),
						'title' => $this->input->post('title'),
						'slug' => $this->input->post('slug'),
						'part_number' => $this->input->post('part_number'),
						'price' => $this->input->post('price'),
						'description' => $this->input->post('description'),
						'product_img' => $fileUpload['file_name'],
						'meta_description' => $this->input->post('meta_description'),
						'meta_keyword' => $this->input->post('meta_keyword'),
					];
					$this->product->create($options);
					redirect('/admin/product_specification/add','refresh');
				}
			}
		}

		$data['title'] = 'Create Product';
		$data['mainContent'] = 'admin/product/add';
		$this->load->view('admin/layout/master',$data);
	}
	public function edit($product_id)
	{

		
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$fileUpload = [];
			$hasFileUploaded = FALSE;

			$filePrefrence = [

				'upload_path' => './uploads/',
				'allowed_types' => 'jpg|jpeg|png|gif',
				'encrypt_name' => TRUE
			];

			$this->upload->initialize($filePrefrence);

			if (! $this->upload->do_upload('product_img')) {
				$data['error'] = $this->upload->display_errors();
			}
			else{
				$fileUpload = $this->upload->data();
				$hasFileUploaded = TRUE;
			}	
			$options = [
				'create_date' => $this->input->post('create_date'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'part_number' => $this->input->post('part_number'),
				'price' => $this->input->post('price'),
				'description' => $this->input->post('description'),
				'product_img' => ($hasFileUploaded) ? $fileUpload['file_name'] : $this->input->post('img_url'),
				'meta_description' => $this->input->post('meta_description'),
				'meta_keyword' => $this->input->post('meta_keyword'),
			];
			
			$affected = $this->product->update($product_id,$options);
			if ($affected)
			{
				if ($hasFileUploaded) 
					if (file_exists('./uploads/' . $this->input->post('img_url')))
					
						unlink('./uploads/' . $this->input->post('img_url'));
					
						redirect('/admin/product','refresh');
			}
		}

		$data['product'] = $this->product->get_by($product_id);	
		$data['title'] = 'Edit Product';
		$data['mainContent'] = 'admin/product/edit';
		$this->load->view('admin/layout/master',$data);
	}

	public function status($product_id)
	{
		sleep(1);
		$row = $this->product->get_by($product_id);
		$newStatus = ($row->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE' ;
		$options = ['status' => $newStatus];
		$this->product->update($product_id, $options);
		echo $newStatus;
	}
	public function delete($product_id)
	{
		$row = $this->product->get_by($product_id);
		$currentImage = $row->product_img;
		$affected = $this->product->remove($product_id);
		if ($affected) {
			//unlink('./uploads/' . $currentImage);
			//redirect('/admin/product','refresh');
			echo TRUE;
		}
	}
	public function active_all_status()
	{
		$checkAll = $this->input->post('checkAll');
		$options = ['status' => 'ACTIVE'];
		foreach ($checkAll as $id) {
		echo $this->product->update($id, $options);
		}
	}
	public function deactive_all_status()
	{
		$checkAll = $this->input->post('checkAll');
		$options = ['status' => 'DEACTIVE'];
		foreach ($checkAll as $id) {
		echo $this->product->update($id, $options);
		}
	}
	public function delete_all()
	{
		$checkAll = $this->input->post('checkAll');
		foreach ($checkAll as $id) {
			echo $this->delete($id);
		}
	}

	public function product_seed()
	{


		$faker = Faker\Factory::create();
		for ($i=0; $i < 50 ; $i++) { 
				$title = $faker->name;
			$options = [
				'create_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'brand_id' => $faker->paragraph,
				'title' => $title,
				'slug' => url_title($title, '-', TRUE),
				'part_number' => $faker->paragraph,
				'price' => $faker->numberBetween($min = 1200, $max = 12000),
				'description' => $faker->paragraph,
				'product_img' => 'No Image Found',
				'meta_description' => $faker->text($maxNbChars = 500),
				'meta_keyword' => $faker->randomElement(['keyword_1','keyword_2','keyword_3','keyword_4'])
			];
			$this->product->create($options);
		}
		redirect('/admin/product','refresh');
	}
}
