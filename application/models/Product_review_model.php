<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_review_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_product_review', $options);
		return $this->db->insert_id();
	}	
	
	public function get_all($limit = NULL, $offset = NULL)
	{
		$query = $this->db->get('afa110_product_review', $limit,$offset);
		return $query->result();
	}
	public function count_all()
	{
		$query = $this->db->get('afa110_product_review');
		return $query->num_rows();
	}
	public function get_by($product_review_id)
	{
		$this->db->where('id',$product_review_id);
		$query = $this->db->get('afa110_product_review');
		return $query->row();
	}
	public function update($product_review_id,$options)
	{
		$this->db->where('id',$product_review_id);
		$this->db->update('afa110_product_review',$options);
		return $this->db->affected_rows();
	}
	public function remove($product_review_id)
	{
		$this->db->where('id',$product_review_id);
		$this->db->delete('afa110_product_review');
		return $this->db->affected_rows();
	}
	public function product_review_array()
	{
		$product_reviews = [];
		foreach ($this->get_all() as $product_review) {
			$product_reviews[$product_review->id] = $product_review->title;
		}
		return $product_reviews;
	}
}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */