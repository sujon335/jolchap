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
        $user_id=$this->session->userdata('user_id');
        $data=array();
        $this->db->join('products', 'products.id=design.product_id');
        $this->db->where('design.user_id', $user_id);
        $query = $this->db->get('design');
        $data['design'] = $query->result();
        $this->load->view("common/header", $header_data);
        $this->load->view("my_cards/my_cards_body",$data);
        $this->load->view("common/footer");
    }
    public function get_card_text_data()
    {
        $data=array();
        $design_id=$_POST['design_id'];
        $this->db->where('design_id', $design_id);
        $query = $this->db->get('card_text');
        $data['design'] = $query->result();
        var_dump($data);
    }
}
