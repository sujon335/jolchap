<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of featured_products
 *
 * @author habibullaharaphat
 */
class Featured_products extends CI_Model {
    //put your code here
    
    public function add($product_id){
        $data = array("product_id" => $product_id);
        
        $this->db->insert("featured_products", $data);
    }
    
    public function remove($product_id){
        $this->db->where('product_id', $product_id)
                 ->delete('featured_products');
    }
}
