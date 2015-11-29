<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of checkout
 *
 * @author dripto
 */
class Checkout extends CI_Controller {
    //put your code here
    public function index(){
        $header_data['header_name'] ="checkout"; 
        $this->load->view("common/header", $header_data);
        $this->load->view("checkout/checkout_body");
        $this->load->view("common/footer"); 
    }
}
