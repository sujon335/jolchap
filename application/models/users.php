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
        $user_data = $this->get_user_by_email($user['email']);
        
        if(isset($user_data['email']))
            return FALSE;
        
        $data = array(
            "email" => $user['email'],
            "password" => $user['password'],
            "name" => $user['name']
        );
        $this->db->insert("users", $data);
        
        return TRUE;
    }
    
    public function get_user_by_email($email){
        return $this->db->where('email', $email)
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
