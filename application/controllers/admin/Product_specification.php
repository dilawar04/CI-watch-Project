<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_specification extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_specification_model','specification');

	}

	public function index()
	{
		$data['mainContent'] = 'admin/product_specification/index';
		$this->load->view('admin/layout/master',$data);
	}
	public function add()
	{

		if ($this->input->server('REQUEST_METHOD') == 'POST') 

		{
			$this->form_validation->set_rules('model_number','Model Number','required');
			$this->form_validation->set_rules('model_year','Model Year','required');
			$this->form_validation->set_rules('item_shape','Item Shape','required');

			if ($this->form_validation->run() == TRUE)
			{

			$options = [
				'model_number' => $this->input->post('model_number'),
				'model_year' => $this->input->post('model_year'),
				'item_shape' => $this->input->post('item_shape'),
				'display_type' => $this->input->post('display_type'),
				'case_material' => $this->input->post('case_material'),
				'case_diameter' => $this->input->post('case_diameter'),
				'case_thickness' => $this->input->post('case_thickness'),
				'band_material' => $this->input->post('band_material'),
				'band_size' => $this->input->post('band_size'),
				'band_width' => $this->input->post('band_width'),
				'band_color' => $this->input->post('band_color'),
				'dial_color' => $this->input->post('dial_color'),
				'item_weight' => $this->input->post('item_weight'),
				'movement' => $this->input->post('movement'),
			];

			$this->specification->create($options);
			redirect('/admin/product/','refresh');

			}
		}

		$data['title'] = 'Edit product specification';
		$data['mainContent'] = 'admin/product_specification/add';
		$this->load->view('admin/layout/master',$data);
	}
	public function edit()
	{
		$data['mainContent'] = 'admin/product_specification/edit';
		$this->load->view('admin/layout/master',$data);
	}
}
