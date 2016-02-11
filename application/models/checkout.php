<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orders
 *
 * @author habibullaharaphat
 */
class Checkout extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function get_user_design($user_id){

        $this->db->join('design', 'design.design_id=temp_order_design.design_id');
        $this->db->join('products', 'products.id=design.product_id');
        $this->db->where('temp_order_design.user_id', $user_id);
        $query = $this->db->get('temp_order_design');
        
        return $query->result();     
    }
}
