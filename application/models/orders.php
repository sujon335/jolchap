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
class orders extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function add($data){
           $this->db->insert('orders', $data);
           $order_id=$this->db->insert_id();


           $this->db->where('user_id',$user_id);
           $query=$this->db->get('temp_order_design');
           
           $ins=false;
           foreach($query->result() as $row)
           {
               $design_id=$row->design_id;
               $quantity=$row->quantity;
               $arr=array(
                 'order_id'=>$order_id,
                   'design_id'=>$design_id,
                   'quantity'=>$quantity
               );
               $ins=$this->db->insert('order_design',$arr);
           }

           if($ins)
           {
               $this->db->where('user_id',$user_id);
               $this->db->delete('temp_order_design');
           }
           
     
    }
    
    public function get($order_id){
        $data = $this->db->where('order_id', $order_id)
                 ->get('orders')
                 ->row_array();
        
        return $data;
    }
    
    public function edit($order_id, $data){
        $this->db->where('order_id', $order_id)
                 ->update('orders', $data);
    }
    
    public function get_user_design($user_id){

        $this->db->join('design', 'design.design_id=temp_order_design.design_id');
        $this->db->join('products', 'products.id=design.product_id');
        $this->db->where('temp_order_design.user_id', $user_id);
        $query = $this->db->get('temp_order_design');
        
        return $query->result();     
    }
    
    public function add_user_design_order($data) {
         $ins=$this->db->insert("temp_order_design", $array);
         return $ins; 
    }
    
    public function get_new_orders($page_number, $content_perpage){
        $data = $this->db->where('status', 0)
                         ->order_by("datetime", "desc")
                         ->get('orders', $content_perpage, $page_number*$content_perpage)
                         ->result_array();
        
        return $data;
    }
    
    public function get_process_orders($page_number, $content_perpage){
        $data = $this->db->where('status', 1)
                         ->order_by("datetime", "desc")
                         ->get('orders', $content_perpage, $page_number*$content_perpage)
                         ->result_array();
        
        return $data;
    }
    
    public function get_print_orders($page_number, $content_perpage){
        $data = $this->db->where('status', 2)
                         ->order_by("datetime", "desc")
                         ->get('orders', $content_perpage, $page_number*$content_perpage)
                         ->result_array();
        
        return $data;
    }
    
    public function get_shipping_orders($page_number, $content_perpage){
        $data = $this->db->where('status', 3)
                         ->order_by("datetime", "desc")
                         ->get('orders', $content_perpage, $page_number*$content_perpage)
                         ->result_array();
        
        return $data;
    }
    
    public function get_delivered_orders($page_number, $content_perpage){
        $data = $this->db->where('status', 4)
                         ->order_by("datetime", "desc")
                         ->get('orders', $content_perpage, $page_number*$content_perpage)
                         ->result_array();
        
        return $data;
    }
    
    
    
    public function get_trash_orders($page_number, $content_perpage){
        $data = $this->db->where('status', -1)
                         ->order_by("datetime", "desc")
                         ->get('orders', $content_perpage, $page_number*$content_perpage)
                         ->result_array();
        
        return $data;
    }
    
    public function new_order_count(){
        $count = $this->db->where('status', 0)
                        ->count_all_results('orders');
        
        return $count;
    }
    public function process_order_count(){
        $count = $this->db->where('status', 1)
                        ->count_all_results('orders');
        
        return $count;
    }
    public function print_order_count(){
        $count = $this->db->where('status', 2)
                        ->count_all_results('orders');
        
        return $count;
    }
    public function shipping_order_count(){
        $count = $this->db->where('status', 3)
                        ->count_all_results('orders');
        
        return $count;
    }
    public function delivered_order_count(){
        $count = $this->db->where('status', 4)
                        ->count_all_results('orders');
        
        return $count;
    }
    
    public function trash_order_count(){
        $count = $this->db->where('status', -1)
                        ->count_all_results('orders');
        
        return $count;
    }
    
    
}
