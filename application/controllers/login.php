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
    public function __construct() {
        parent::__construct();
         date_default_timezone_set('Asia/Dhaka');
         $this->load->helper('captcha');
    }
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
        
        /*
         * create login captha
         */
        $this->load->model('captchas');
        $length = 5;
        
        /*
         * login captha
         */
        $randomString = substr(str_shuffle(md5(time())),0,$length);
        $vals = array(
             'word' => $randomString,
             'img_path' => './captcha/',
             'img_url' => base_url().'captcha/',
             'img_width' => 140,
             'img_height' => 32,
             'expiration' => 7200
            );
        $body_data['login_captcha'] = create_captcha($vals);
        $login_captha_data = array(
            'captcha_time' => time(),
            'ip_address' => $this->input->ip_address(),
            'word' => $randomString
        );
        $body_data['login_captcha_id'] = $this->captchas->add($login_captha_data);
        $this->session->set_userdata('login_captcha_id',$body_data['login_captcha_id']);
        //echo var_dump($body_data['login_captcha']);
        
        /*
         * signup captha
         */
        $randomString = substr(str_shuffle(md5(time())),0,$length);
        $vals = array(
             'word' => $randomString,
             'img_path' => './captcha/',
             'img_url' => base_url().'captcha/',
             'img_width' => 140,
             'img_height' => 32,
             'expiration' => 7200
            );
        $body_data['signup_captcha'] = create_captcha($vals);
        $login_captha_data = array(
            'captcha_time' => time(),
            'ip_address' => $this->input->ip_address(),
            'word' => $randomString
        );
        $body_data['signup_captcha_id'] = $this->captchas->add($login_captha_data);
        $this->session->set_userdata('signup_captcha_id',$body_data['signup_captcha_id']);
        //echo var_dump($body_data['login_captcha']);
        
        $this->load->view("common/header", $header_data);
        $this->load->view("login/login_body", $body_data);
        $this->load->view("common/footer");
        
    }
}
