<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author dripto
 */
class Home extends CI_Controller {
    //put your code here
    
    public function index(){
        /*
         * load model
         */
        $this->load->model("products");
        /*
         * header data
         */
        $header_data['header_name'] ="home"; 
        
        /*
         * body data
         */
        $body_data['featured_products'] = $this->products->get_featured_products();
        $body_data['recommended_products'] = $this->products->get_recommended_products();
        
        $this->load->view("common/header", $header_data);
        $this->load->view("home/home_body", $body_data);
        $this->load->view("common/footer");
    }
    
    public function test(){
        echo base_url();
    }
}
