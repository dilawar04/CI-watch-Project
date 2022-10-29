<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_specification_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_product_specification', $options);
		return $this->db->insert_id();
	
	}
}
