<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shop
 *
 * @author dripto
 */
class Shop extends CI_Controller {
    //put your code here
    public function view($page_number = 0){
        /*
         * count per page
         */
        $content_per_page = 12;
        
        /*
         * load model
         */
        $this->load->model("products");
        
        /*
         * header data
         */
        $header_data['header_name'] ="shop"; 
        
        /*
         * body data
         */
        $body_data['products'] = $this->products->get_products($page_number, $content_per_page);
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/shop/view/";
        $config['total_rows'] = $this->products->product_count();
        $config['per_page'] = $content_per_page; 
        $config['num_tag_open'] = 
                $config['next_tag_open'] = $config['prev_tag_open'] = 
                $config['first_tag_open'] = $config['last_tag_open'] = "<li>";
        $config['num_tag_close'] = 
                $config['next_tag_close'] = $config['prev_tag_close'] =
                $config['first_tag_close'] = $config['last_tag_close'] = "</li>";
        
        
        $config['cur_tag_open'] = "<li class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        
        $this->pagination->initialize($config); 
        
        $this->load->view("common/header", $header_data);
        $this->load->view("shop/shop_body", $body_data);
        $this->load->view("common/footer");
    }
}
