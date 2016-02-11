<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact_us
 *
 * @author dripto
 */
class ContactUs extends CI_Controller {
    //put your code here
    public function index(){
        $header_data['header_name'] ="contact_us"; 
        $this->load->view("common/header", $header_data);
        $this->load->view("contact_us/contact_us_body");
        $this->load->view("common/footer");
    }
}
