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
class admin_users  extends CI_Model{
    //put your code here
    public function add($data){
        $this->db->insert('admin_users', $data);
        
        return $this->db->insert_id();
    }
    
    public function get_data_by_user_email($email){
        $data = $this->db->where('email', $email)
                         ->get('admin_users')
                         ->row_array();
        
        return $data;
    }
    
    public function update($user_id, $data){
        $this->db->where('user_id', $user_id)
                 ->update('admin_users');
    }
}
