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
    
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }
    //put your code here
    public function index() {
        $user_id=$this->session->userdata('user_id');
        
        if(isset($user_id) == false || $user_id == false)
            redirect('home');
        
        $this->load->model("orders");
        $is_logged_in = $this->session->userdata('is_logged_in_user');
        if (!isset($is_logged_in) || $is_logged_in != TRUE)
            redirect('login');
        
        $data=array();
        


        $data['design'] = $this->orders->get_user_design($user_id);
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
            $in =$this->orders->add_user_design_order($array);
        }
    }
    public function save_order()
    {
        $user_id=$this->session->userdata('user_id');
        $this->load->model("products");
        $this->load->model("orders");
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mobile_phone','required');
        if ($this->form_validation->run() == TRUE) {
            
            $array=array(
            'user_id'=>$user_id,
            'company_name'=>$this->input->post('company'),
            'email'=>$this->input->post('email'),
            'title'=>$this->input->post('title'),
            'first_name'=>$this->input->post('first_name'),
            'middle_name'=>$this->input->post('middle_name'),
            'last_name'=>$this->input->post('last_name'),
            'address1'=>$this->input->post('address1'),
            'address2'=>$this->input->post('address2'),
            'postal_code'=>$this->input->post('postal_code'),
            'country'=>$this->input->post('country'),
            'state'=>$this->input->post('state'),
            'phone'=>$this->input->post('phone'),
            'mobile_phone'=>$this->input->post('mobile_phone'),
            'fax'=>$this->input->post('fax'),
            'message'=>$this->input->post('message'),
            'status' => 0,
            'datetime' => $date = date('Y-m-d H:i:s', time())
            );
            
            $this->orders->add($array);
            
            redirect('home');
        }
        else {
            $this->session->set_flashdata('status', 'failed');
            $this->session->set_flashdata('message', 'Mobile number is required');
        }
    }

}
