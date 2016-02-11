<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author habibullaharaphat
 */
class Admin_auth extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('captcha');
    }
    
    
    public function login(){
        $this->load->model('admin_users');
        $this->load->library("form_validation");
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        
        
        
        
        if($this->form_validation->run() == TRUE){
            $this->load->model('admin_users');
            $email = $this->input->post('email', TRUE);
            $password = $this->input->post('password', TRUE);
            
            $data = $this->admin_users->get_data_by_user_email($email);
            
            
            /*
             * check captcha
             */
            $captcha_flag = true;
            $this->load->model('captchas');
            $captcha_id = $this->input->post('admin_login_captcha_id', TRUE);
            $input_captcha_value = $this->input->post('admin_login_captcha',TRUE);
            $captcha_id_from_session = $this->session->userdata('admin_login_captcha_id');
            $current_time = time();
            
            
            //echo $captcha_id." ".$captcha_id_from_session;
            if(isset($captcha_id) == false || $captcha_id == false || $captcha_id != $captcha_id_from_session){
                $captcha_flag = false;
            }
            //var_dump($captcha_flag);
            
            $captcha_data = $this->captchas->get($captcha_id);
            if(isset($captcha_data['captcha_id']) == false){
                $captcha_flag = false;
            }
            
            else if($input_captcha_value != $captcha_data['word'] || $current_time - $captcha_data['captcha_time']>1200){
                $captcha_flag = false;
            }
            //var_dump($captcha_flag);
            
            if($captcha_flag == false){
                $this->session->set_flashdata('status', 'failed');
                $this->session->set_flashdata('message', 'Please enter the text shown in the image correctly');
               // redirect('login');
            }
            /*
             * check captcha end
             */
            
            
            if( $captcha_flag == true && isset($data['password']) && $data['password'] == $password){
                $session_data = array(
                    'email' => $email,
                    'role' => 'admin',
                    'id' => $data['id'],
                    'name' => $data['name']
                );
                
                $this->session->set_userdata($session_data);
                
                redirect("admin/dashboard");
            }
        }
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
        $body_data['admin_login_captcha'] = create_captcha($vals);
        $admin_login_captha_data = array(
            'captcha_time' => time(),
            'ip_address' => $this->input->ip_address(),
            'word' => $randomString
        );
        $body_data['admin_login_captcha_id'] = $this->captchas->add($admin_login_captha_data);
        $this->session->set_userdata('admin_login_captcha_id',$body_data['admin_login_captcha_id']);
        //echo var_dump($body_data['login_captcha']);
        
        
        
        $this->load->view('admin/login/login_body', $body_data);
        $this->load->view('admin/regions/footer');
         
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('admin_auth/login');
    }
}
