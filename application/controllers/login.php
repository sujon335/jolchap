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
        /*
         * fb data
         */
        $fb_user = $this->facebook->get_user();
        $header_data['fb_user'] = $fb_user;
         
        /*
         * login header name
         */
        $header_data['header_name'] ="login"; 
        //var_dump($fb_user);
        
        $body_data['status'] = $this->session->flashdata('status');
        $body_data['message'] = $this->session->flashdata('message');
        $body_data['fb_login_url'] = $this->facebook->login_url();
        
        $this->load->view("common/header", $header_data);
        $this->load->view("login/login_body", $body_data);
        $this->load->view("common/footer");
        
    }
}
