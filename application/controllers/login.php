<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author dripto
 */
class Login extends CI_Controller {
    //put your code here
     public function index(){
        $header_data['header_name'] ="login"; 
        
        
        $body_data['status'] = $this->session->flashdata('status');
        $body_data['message'] = $this->session->flashdata('message');
        
        $this->load->view("common/header", $header_data);
        $this->load->view("login/login_body", $body_data);
        $this->load->view("common/footer");
    }
}
