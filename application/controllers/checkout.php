<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of checkout
 *
 * @author dripto
 */
class Checkout extends CI_Controller {

    //put your code here
    public function index() {
        $is_logged_in = $this->session->userdata('is_logged_in_user');
        if (!isset($is_logged_in) || $is_logged_in != TRUE)
            redirect('login');
        $user_id=$this->session->userdata('user_id');
        $data=array();
        $this->db->join('products', 'products.id=design.product_id');
        $this->db->where('design.user_id', $user_id);
        $query = $this->db->get('design');
        $data['design'] = $query->result();
        $header_data['header_name'] = "checkout";
        $this->load->view("common/header", $header_data);
        $this->load->view("checkout/checkout_body",$data);
        $this->load->view("common/footer");
    }
    public function save_order_design()
    {
        $user_id=$this->session->userdata('user_id');
        $order_data = $this->input->post("order_data");
        $obj = json_decode($order_data);

        for ($i = 0; $i < sizeof($obj); $i++) {
            $var = $obj["$i"];
            $design_id=$var->design_id;
            $quantity=$var->quantity;
            $array = array(
                'user_id'=>$user_id,
                'design_id' => $design_id,
                'quantity' => $quantity
            );
            $in = $this->db->insert("temp_order_design", $array);
        }
    }
    public function save_order()
    {
        
    }

}
