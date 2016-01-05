<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of wishlist
 *
 * @author dripto
 */
class Wishlist extends CI_Controller {
    //put your code here
        
        public function index(){
        /*
         * load model
         */
        $this->load->model("products");
        
        $header_data['header_name'] ="wishlist"; 
        $body_data = array();
        
        $wishlist = $this->session->userdata("wishlist");
        
        //echo $wishlist;
        if($wishlist!=null){
            $my_data = array();
            
            $tok = strtok($wishlist, ",");
            while($tok != false){
                array_push($my_data, $this->products->get_product($tok));
                
                $tok = strtok(",");
            }
            
            $body_data['my_wishlist'] = $my_data;
        }
        
        $this->load->view("common/header", $header_data);
        $this->load->view("wishlist/wishlist_body", $body_data);
        $this->load->view("common/footer");
        
    }
    
    public function add($product_id){
        $this->load->model("products");
        $product_data = $this->products->get_product($product_id);
        $status = true;
        if(isset($product_data['id'])){
            $wishlist = $this->session->userdata('wishlist');
            //echo $wishlist;
            if($wishlist != NULL){
                $tok = strtok($wishlist, ",");
                while($tok != false){
                    if($tok == $product_id)
                        break;
                    
                    $tok = strtok(",");
                }
                
                if($tok != false)
                    $status = false;
            }
            else{
                $wishlist = "";
            }
            
            if($status == true){
                if($wishlist != "")
                    $wishlist .= ",";
                $wishlist .= $product_id;
                $this->session->set_userdata('wishlist', $wishlist);
            }
            
        }
        else {
            $status = false;
        }
        
        if($status == true)
            echo "success";
        else 
            echo "failed";
        
    }
    
    public function delete($product_id, $forward = 0){
        $status = false;
        
        $wishlist = $this->session->userdata('wishlist');
        //echo $wishlist;
        $newWishlist = "";
        if($wishlist != null){
            $tok=strtok($wishlist, ",");
            while($tok != false){
                if($tok != $product_id){
                    if($newWishlist != "")
                        $newWishlist .= ",";
                    $newWishlist .= $tok;
                }
                
                if($tok == $product_id){
                    $status = true;
                }
                $tok = strtok(",");
            }
        }
        if($status == true)
        $this->session->set_userdata('wishlist', $newWishlist);
        if($forward == 0){
            if($status == true)
                echo "success";
            else 
                echo "failed";
        }
        else {
            redirect('wishlist');
        }
    }
}
