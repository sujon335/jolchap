<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recommended_products
 *
 * @author habibullaharaphat
 */
class Recommended_products extends CI_Model {
    //put your code here
    
    public function add($product_id){
        $check_data = $this->db->where('product_id', $product_id)
                               ->get('recommended_products')
                               ->row_array();
        if(!isset($check_data['product_id'])){
            $data = array("product_id" => $product_id);
            $this->db->insert("recommended_products", $data);
        }
    }
    
    public function remove($product_id){
        $this->db->where('product_id', $product_id)
                 ->delete('recommended_products');
    }
}
