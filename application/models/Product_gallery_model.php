<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_gallery_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_product_gallery', $options);
		return $this->db->insert_id();
	}
	/**** FRONTEND DEVELOPER ****/

	public function get_gallery_by($product_id)
	{
		$this->db->where('product_id',$product_id);
		$this->db->limit(5);
		$query = $this->db->get('afa110_product_gallery');
		return $query->result();
	}
}
