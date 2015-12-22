<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myCards
 *
 * @author habibullaharaphat
 */
class myCards extends CI_Controller{
    //put your code here
    public function index(){
        $header_data['header_name'] ="myCards"; 
        $this->load->view("common/header", $header_data);
        $this->load->view("my_cards/my_cards_body");
        $this->load->view("common/footer");
    }
}
