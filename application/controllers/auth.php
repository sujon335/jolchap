<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of auth
 *
 * @author habibullaharaphat
 */
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }
    //put your code here
    public function signup() {
        $this->load->model('users');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', "Name", 'required');
        $this->form_validation->set_rules('email', "Email", 'required');
        $this->form_validation->set_rules('password', "Password", 'required');

        if ($this->form_validation->run() == TRUE) {

            /*
             * check captcha
             */
            $captcha_flag = true;
            $this->load->model('captchas');
            $captcha_id = $this->input->post('signup_captcha_id', TRUE);
            $input_captcha_value = $this->input->post('signup_captcha',TRUE);
            $captcha_id_from_session = $this->session->userdata('signup_captcha_id');
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
                redirect('login');
            }
            /*
             * check captcha end
             */


            $user['name'] = $this->input->post('name', TRUE);
            $user['email'] = $this->input->post('email', TRUE);
            $user['password'] = $this->input->post('password', TRUE);

            $this->load->model("users");
            if ($this->users->insert($user) == TRUE) {
                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('message', 'Client has been created successfully.');
            } else {
                $this->session->set_flashdata('status', 'failed');
                $this->session->set_flashdata('message', 'User already exists.');
            }
        } else {
            $this->session->set_flashdata('status', 'failed');
            $this->session->set_flashdata('message', 'Validation error.');
        }

        redirect('login');
    }

    public function login() {
        /*
         * facebook data
         */


        /*
         * load helpers
         */
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', "Email", "required");
        $this->form_validation->set_rules('password', "Password", "required");

        //echo $this->input->post('email');


        if ($this->form_validation->run() == TRUE) {
            $this->load->model('users');
            $credentials['email'] = $this->input->post('email', TRUE);
            $credentials['password'] = $this->input->post('password', TRUE);


//            $design_id = $this->session->userdata('design_id');
//            echo "design_id: "; echo $design_id;
//            die();
            /*
             * check captcha
             */
            $captcha_flag = true;
            $this->load->model('captchas');
            $captcha_id = $this->input->post('login_captcha_id', TRUE);
            $input_captcha_value = $this->input->post('login_captcha',TRUE);
            $captcha_id_from_session = $this->session->userdata('login_captcha_id');
            $current_time = time();


            //echo $captcha_id." ".$captcha_id_from_session;
            if(isset($captcha_id) == false || $captcha_id == false || $captcha_id != $captcha_id_from_session){
                $captcha_flag = false;
            }

            $captcha_data = $this->captchas->get($captcha_id);
            if(isset($captcha_data['captcha_id']) == false){
                $captcha_flag = false;
            }

            else if($input_captcha_value != $captcha_data['word'] || $current_time - $captcha_data['captcha_time']>1200){
                $captcha_flag = false;
            }
           // var_dump($captcha_flag);

            if($captcha_flag == false){
                $this->session->set_flashdata('status', 'failed');
                $this->session->set_flashdata('message', 'Please enter the text shown in the image correctly');
                redirect('login');
            }
            /*
             * check captcha end
             */


            $this->load->model('users');
            if ($this->users->login($credentials) == TRUE) {
                $user_data = $this->users->get_user_by_email($credentials['email']);



                $auth_data = array(
                    'user_id' => $user_data['id'],
                    'email' => $user_data['email'],
                    'name' => $user_data['name'],
                    'fb_id' => $user_data['fb_id'],
                    'gmail_id' => $user_data['gmail_id'],
                    'is_logged_in_user' => true
                );
                $this->session->set_userdata($auth_data);
                $design_id_test = $this->session->userdata("design_id_test");


                if(isset($design_id_test)) {
                    $arr = array(
                        'user_id' => $user_data['id']
                    );

                    $this->db->where('design_id', $design_id_test);
                    $this->db->update('design', $arr);
                }
                    redirect('myCards');

            }
            else {
                $this->session->set_flashdata('status', 'failed');
                $this->session->set_flashdata('message', 'Wrong Email or Password');
            }
        } else {
            //echo "validation failed.";
            $this->session->set_flashdata('status', 'failed');
            $this->session->set_flashdata('message', 'Validation error.');
        }

        redirect('login');
    }

    public function facebook_login() {
        /*
         * fb data
         */
        $fb_user = $this->facebook->get_user();
        $header_data['fb_user'] = $fb_user;

        /*
         * load model
         */
        $this->load->model("users");

        if (isset($fb_user['id']) && $fb_user['id'] != "") {
            $user['name'] = $fb_user['name'];
            $user['fb_id'] = $fb_user['id'];
            $this->users->insert($user);

            $user_data = $this->users->get_user_by_fb_id($user['fb_id']);

            $auth_data = array(
                'user_id' => $user_data['id'],
                'email' => $user_data['email'],
                'name' => $user_data['name'],
                'fb_id' => $user_data['fb_id'],
                'gmail_id' => $user_data['gmail_id'],
                'is_logged_in_user' => true
            );

            $this->session->set_userdata($auth_data);


                    redirect('myCards');

        } else {
            redirect("login");
        }

        /*
         * load model
         */
    }

    public function google_login() {
        $this->load->library('google');
        $token = $this->input->get('code');
        $this->load->library("google");
        $client_id = '1006637573377-nvtrdhhf7kia3nk7quu44u7dt4u4l54t.apps.googleusercontent.com';
        $client_secret = '9hwmVOkkpzbloXsk5C-YMLLY';
        $redirect_uri = 'http://localhost/jolchap/index.php/auth/google_login?';
        $simple_api_key = 'AIzaSyC8RCGUGZdwMwfN4zAaEKxqH0JjfLGTXrc';



        $this->google->setApplicationName("PHP Google OAuth Login Example");
        $this->google->setClientId($client_id);
        $this->google->setClientSecret($client_secret);
        $this->google->setRedirectUri($redirect_uri);
        $this->google->setDeveloperKey($simple_api_key);
        $this->google->addScope("https://www.googleapis.com/auth/userinfo.email");

        $this->google->authenticate($token);
        $accessToken = $this->google->getAccessToken();

        var_dump($accessToken);
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('home');
    }
}

