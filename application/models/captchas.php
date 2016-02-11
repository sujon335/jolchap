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
class Captchas extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function add($data){
        $this->db->insert('captcha', $data);
        
        return $this->db->insert_id();
    }
    
    public function get($captha_id){
        $data = $this->db->where('captcha_id', $captha_id)
                         ->get('captcha')
                         ->row_array();
        
        return $data;
    }
    
}
