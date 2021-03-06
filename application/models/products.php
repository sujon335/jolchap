<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of products
 *
 * @author habibullaharaphat
 */
class Products extends CI_Model {
    //put your code here
    public function insert($product){
        $data = array(
            "product_name" => $product['product_name'],
            "product_description" => $product['product_description'],
            "product_unit" => $product['product_unit'],
            "featured_image" => $product['featured_image'],
            "front_side" =>$product['front_side'],
            "back_side" => $product['back_side'],
            "dimension_price_1" => $product['dimension_1']."-".$product['price_1'],
            "dimension_price_2" => $product['dimension_2']."-".$product['price_2'],
            "dimension_price_3" => $product['dimension_3']."-".$product['price_3'],
        );
        $this->db->insert("products", $data);
    }
    
    public function get_products($page_number, $content_per_page){
        $data = $this->db->where('id >',0)
                         ->order_by('id', 'desc')
                         ->get('products', $content_per_page, $page_number*$content_per_page)
                         ->result_array();
        
        return $data;
    }

    public function get_searched_products($page_number, $content_per_page,$search){
        $this->db->like('lower(product_name)', $search);
        $data = $this->db->where('id >',0)
                         ->order_by('id', 'desc')
                         ->get('products', $content_per_page, $page_number*$content_per_page)
                         ->result_array();

        return $data;
    }

    public function get_product($product_id){
        return $this->db->where('id', $product_id)
                        ->get('products')
                        ->row_array();
    }


    public function product_count(){
        return $this->db->where('id >', 0)
                        ->count_all_results('products');
    }
    public function searched_product_count($search){
        $this->db->like('lower(product_name)', $search);
        return $this->db->where('id >', 0)
                        ->count_all_results('products');
    }


    public function update($product){
        $product_details = $this->get_product($product['id']);
        
        if($product['id'] <0){
            return;
        }
        
        if(isset($product['featured_image']) == false || $product['featured_image'] == "")
            $product['featured_image'] = $product_details['featured_image'];
        if(isset($product['front_side']) == false || $product['front_side'] == "")
            $product['front_side'] = $product_details['front_side'];
        if(isset($product['back_side']) == false || $product['back_side'] == "")
            $product['back_side'] = $product_details['back_side'];
        
        
        $data = array(
            "product_name" => $product['product_name'],
            "product_description" => $product['product_description'],
            "product_unit" => $product['product_unit'],
            "featured_image" => $product['featured_image'],
            "front_side" =>$product['front_side'],
            "back_side" => $product['back_side'],
            "dimension_price_1" => $product['dimension_1']."-".$product['price_1'],
            "dimension_price_2" => $product['dimension_2']."-".$product['price_2'],
            "dimension_price_3" => $product['dimension_3']."-".$product['price_3'],
        );
        $this->db->where('id', $product['id'])
                 ->update("products", $data);
    }
    
    public function delete($product_id){
        $data = array('id' => $product_id*-1);
        
        $this->db->where('id', $product_id)
                 ->update('products', $data);
    }
    
    public function get_featured_products(){
        return $this->db->select("*")
                        ->from("products")
                        ->join("featured_products", "featured_products.product_id = products.id")
                        ->where("products.id >", 0)
                        ->get()
                        ->result_array();
    }
    
    public function get_recommended_products(){
        return $this->db->select("*")
                        ->from("products")
                        ->join("recommended_products", "recommended_products.product_id = products.id")
                        ->where("products.id >", 0)
                        ->get()
                        ->result_array();
    }

 
    
    
    public function save_design($data){
        
    $this->db->insert("design", $data);
        return $this->db->insert_id();
         
    }
    public function save_card_data($data){
        
        $ins=$this->db->insert("card_text", $data);
        return $ins;
    }
     public function save_card_image($data){

        $ins=$this->db->insert("card_logo", $data);
        return $ins;
    }
    public function get_design_id($product_id,$user_id)
    {
        $design_id=-1;
        $this->db->where('product_id',$product_id)
                ->where('user_id',$user_id);
        
        $query=$this->db->get('design');
        foreach($query->result() as $row)
        {
            $design_id=$row->design_id;
            break;
        }
        return $design_id;
        
    }    
    
    public function get_product_id($design_id)
    {
        $this->db->where('design_id',$design_id);
        $query=$this->db->get('design');
        foreach($query->result() as $row)
        {
            $product_id=$row->product_id;
        }
        return $product_id;
        
    }
    
     public function get_design_data($design_id)
     {
        $this->db->where('design_id',$design_id);
        $query=$this->db->get('design');
        return $query->result();        
     }    
    
    public function get_card_data($design_id)
    {
        $this->db->where('design_id',$design_id);
        $q=  $this->db->get('card_text');
        return $q->result();
    }
    public function get_card_image($design_id)
    {
        $this->db->where('design_id',$design_id);
        $q=  $this->db->get('card_logo');
        return $q->result();
    }

    public function update_design_data($design_id,$arr)
    {
        $this->db->where('design_id',$design_id);
        $up=$this->db->update('design',$arr);
        
        return $up;
    }
    public function delete_card_data($design_id) {
        $this->db->where('design_id',$design_id)
                ->delete('card_text');
    }
     public function delete_card_image($design_id) {
        $this->db->where('design_id',$design_id)
                ->delete('card_logo');
    }

    public function save_design_ofuser($user_id,$design_id_test)
    {
        $arr = array(
            'user_id' => $user_id
        );

        $this->db->where('design_id', $design_id_test);
        $this->db->update('design', $arr);
    }


}
