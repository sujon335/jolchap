<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author habibullaharaphat
 */
class users extends CI_Model{
    //put your code here
    public function insert($user){
        if(isset($user['email']) && $user['email'] != ""){
            $user_data = $this->get_user_by_email($user['email']);
        }
        else if(isset($user['fb_id']) && $user['fb_id'] != ""){
            $user_data = $this->get_user_by_fb_id($user['fb_id']);
        }
        else if(isset($user['gmail_id']) && $user['gmail_id'] != ""){
            $user_data = $this->get_user_by_gmail_id($user['gmail_id']);
        }
        
        if(isset($user_data['email']))
            return FALSE;
        
        if(!isset($user['email']))
            $user['email'] = "";
        
        if(!isset($user['fb_id']))
            $user['fb_id'] = "";
        
        if(!isset($user['gmail_id']))
            $user['gmail_id'] = "";
        
        if(!isset($user['password']))
            $user['password'] = "";
        
        $data = array(
            "email" => $user['email'],
            "password" => $user['password'],
            "name" => $user['name'],
            "fb_id" => $user['fb_id'],
            "gmail_id" => $user['gmail_id']
        );
        $this->db->insert("users", $data);
        
        return TRUE;
    }
    
    public function get_user_by_email($email){
        return $this->db->where('email', $email)
                 ->get('users')
                 ->row_array();
    }
    
    public function get_user_by_fb_id($fb_id){
        return $this->db->where('fb_id', $fb_id)
                 ->get('users')
                 ->row_array();
    }
    
    public function get_user_by_gmail_id($gmail_id){
        return $this->db->where('gmail_id', $gmail_id)
                 ->get('users')
                 ->row_array();
    }
    
    public function login($credentials){
        $data = $this->db->where('email', $credentials['email'])
                         ->where('password', $credentials['password'])
                         ->get('users')
                         ->row_array();
        
        if(isset($data['email'])){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
