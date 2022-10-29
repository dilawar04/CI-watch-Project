<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		if($this->input->get('price'))
		{
			$priceItem = explode('-', $this->input->get('price'));
			$this->db->where("price BETWEEN ". $priceItem[0] ." AND ". $priceItem[1]);
		}

		if ($this->input->get('type')) 
			$this->db->like('title', $this->input->get('type') , 'BOTH');

		if ($this->input->get('s')) 
			$this->db->like('title', $this->input->get('s'), 'BOTH');

		$data['products'] = $this->product->show_all();
		$data['title'] = '';
		$this->load->view('product/index', $data);
	}

	
	public function detail($slug)
	{
		$row = $this->product->show_by($slug);
		if(! $row) show_404();

		$this->db->where('id !=' , $row->id);
		$this->db->where('brand_id' , $row->brand_id);
		$this->db->limit(6);
		$this->db->order_by('id' , 'RANDOME');

		$data['related_products'] = $this->product->show_all();
		$data['product'] = $row;
		$data['brand_array'] = $this->brand->brand_array();
		$data['title'] = 'Product Ka detail aaiga';
		$this->load->view('product/detail', $data);
	}

	public function add()
	{

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			$options = [

				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'comment' => $this->input->post('comment')
			];

			$this->review->create($options);
			redirect('/product/detail','refresh');
		}

			$this->load->view('product/index', $data);

	}
}
