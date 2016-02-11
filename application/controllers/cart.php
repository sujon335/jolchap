<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author dripto
 */
class Cart extends CI_Controller {
    //put your code here
    public function index(){
        $header_data['header_name'] ="cart"; 
        $this->load->view("common/header", $header_data);
        $this->load->view("cart/cart_body");
        $this->load->view("common/footer");
    }
}
