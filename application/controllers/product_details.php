<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product_details
 *
 * @author habibullaharaphat
 */
class Product_details extends CI_Controller {
    //put your code here
    public function show($product_id){
        /*
         * load model
         */
        $this->load->model("products");
        /*
         * header data
         */
        $header_data['header_name'] ="Product Details"; 
        
        /*
         * body data
         */
        $body_data['product_details'] = $this->products->get_product($product_id); 
        $body_data['recommended_products'] = $this->products->get_recommended_products();
        
        
        $this->load->view("common/header", $header_data);
        $this->load->view("product_details/product_details_body", $body_data);
        $this->load->view("common/footer");
    }
}
