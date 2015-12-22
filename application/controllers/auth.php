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
    //put your code here
    public function signup(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', "Name", 'required');
        $this->form_validation->set_rules('email', "Email", 'required');
        $this->form_validation->set_rules('password', "Password", 'required');
        
        if($this->form_validation->run() == TRUE){
            $user['name'] = $this->input->post('name', TRUE);
            $user['email'] = $this->input->post('email', TRUE);
            $user['password'] = $this->input->post('password', TRUE);
            
            $this->load->model("users");
            if($this->users->insert($user) == TRUE){
                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('message', 'Client has been created successfully.');
            }
            else{
                $this->session->set_flashdata('status', 'failed');
                $this->session->set_flashdata('message', 'User already exists.');
            }
        }
        else{
            $this->session->set_flashdata('status', 'failed');
            $this->session->set_flashdata('message', 'Validation error.');
        }
        
        redirect('login');
    }
    
    public function login(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', "Email", "required");
        $this->form_validation->set_rules('password', "Password", "required");
        
        //echo $this->input->post('email');
        
        
        if($this->form_validation->run() == TRUE){
            $credentials['email'] = $this->input->post('email', TRUE);
            $credentials['password'] = $this->input->post('password', TRUE);
            
            $this->load->model('users');
            if($this->users->login($credentials) == TRUE){
                $user_data = $this->users->get_user_by_email($credentials['email']);
                
                $auth_data = array(
                    'email' => $user_data['email'],
                    'name' => $user_data['name']
                );
                
                $this->session->set_userdata($user_data);
                
                redirect('myCards');
            }
            else{
                $this->session->set_flashdata('status', 'failed');
                $this->session->set_flashdata('message', 'Wrong Email or Password');
            }
        }
        else {
            //echo "validation failed.";
            $this->session->set_flashdata('status', 'failed');
            $this->session->set_flashdata('message', 'Validation error.');
        }
        
        //redirect('login');
    }
}
