<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Controller {

public function create($options)
    {
        $this->db->insert('afa110_product_review', $options);
        return $this->db->insert_id();
    } 
}
