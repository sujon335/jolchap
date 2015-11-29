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
        $header_data['header_name'] ="home"; 
        $this->load->view("common/header", $header_data);
        $this->load->view("home/home_body");
        $this->load->view("common/footer");
    }
    
    public function test(){
        echo base_url();
    }
}
