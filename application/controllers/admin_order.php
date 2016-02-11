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
class Admin_order extends CI_Controller {
    //put your code here
    public $content_perpage = 0;
    
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $this->content_perpage = 1;
    }
    
    public function new_orders($page_number = 0){
        /*
         * load product model
         */
        $this->load->model('orders');
        $content_perpage = 1;
        /*
         * header data
         */
        $header_data['content_name'] = "New Orders";
        $header_data['parent_content_name'] = "Orders";
        
        
        /*
         * body data
         */
        $body_data['new_orders'] = $this->orders->get_new_orders($page_number, $content_perpage);
        $body_data['page_number'] = $page_number;
        $body_data['content_perpage'] = $content_perpage;
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/admin_order/new_orders/";
        $config['total_rows'] = $this->orders->new_order_count();
        $config['per_page'] = $content_perpage; 
        $config['num_tag_open'] = 
                $config['next_tag_open'] = $config['prev_tag_open'] = 
                $config['first_tag_open'] = $config['last_tag_open'] = "<li>";
        $config['num_tag_close'] = 
                $config['next_tag_close'] = $config['prev_tag_close'] =
                $config['first_tag_close'] = $config['last_tag_close'] = "</li>";
        
        
        $config['cur_tag_open'] = "<li class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        
        $this->pagination->initialize($config); 


        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/order_list/new_order_list_body', $body_data);
        $this->load->view('admin/regions/footer');
        
        /*
         * 
         */
    }
    
    public function move_order_to_process($order_id){
        $this->load->model("orders");
        $data = $this->orders->get($order_id);
        
        if(isset($data['order_id']) && $data['status'] == 0){
            $data = array(
                "status" => 1
            );
            $this->orders->edit($order_id, $data);
        }
        
        redirect('admin_order/new_orders');
    }
    
    public function move_order_to_print($order_id){
        $this->load->model("orders");
        $data = $this->orders->get($order_id);
        
        if(isset($data['order_id']) && $data['status'] == 1){
            $data = array(
                "status" => 2
            );
            $this->orders->edit($order_id, $data);
        }
        
        redirect('admin_order/process_orders');
    }
    
    public function move_order_to_shipping($order_id){
        $this->load->model("orders");
        $data = $this->orders->get($order_id);
        
        if(isset($data['order_id']) && $data['status'] == 2){
            $data = array(
                "status" => 3
            );
            $this->orders->edit($order_id, $data);
        }
        
        redirect('admin_order/print_orders');
    }
    
    public function move_order_to_delivered($order_id){
        $this->load->model("orders");
        $data = $this->orders->get($order_id);
        
        if(isset($data['order_id']) && $data['status'] == 3){
            $data = array(
                "status" => 4
            );
            $this->orders->edit($order_id, $data);
        }
        
        redirect('admin_order/shipping_orders');
    }
    
    public function move_order_to_trash($order_id){
        $this->load->model("orders");
        $data = $this->orders->get($order_id);
        
        if(isset($data['order_id']) && $data['status'] == 0){
            $data = array(
                "status" => -1
            );
            $this->orders->edit($order_id, $data);
        }
        
        redirect('admin_order/new_orders');
    }
    
    public function process_orders($page_number = 0){
        /*
         * load product model
         */
        $this->load->model('orders');
        $content_perpage = 1;
        /*
         * header data
         */
        $header_data['content_name'] = "Processing Orders";
        $header_data['parent_content_name'] = "Orders";
        
        
        /*
         * body data
         */
        $body_data['new_orders'] = $this->orders->get_process_orders($page_number, $content_perpage);
        $body_data['page_number'] = $page_number;
        $body_data['content_perpage'] = $content_perpage;
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/admin_order/process_orders/";
        $config['total_rows'] = $this->orders->process_order_count();
        $config['per_page'] = $content_perpage; 
        $config['num_tag_open'] = 
                $config['next_tag_open'] = $config['prev_tag_open'] = 
                $config['first_tag_open'] = $config['last_tag_open'] = "<li>";
        $config['num_tag_close'] = 
                $config['next_tag_close'] = $config['prev_tag_close'] =
                $config['first_tag_close'] = $config['last_tag_close'] = "</li>";
        
        
        $config['cur_tag_open'] = "<li class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        
        $this->pagination->initialize($config); 


        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/order_list/process_order_list_body', $body_data);
        $this->load->view('admin/regions/footer');
        
        /*
         * 
         */
    }
    
    public function print_orders($page_number = 0){
        /*
         * load product model
         */
        $this->load->model('orders');
        $content_perpage = 1;
        /*
         * header data
         */
        $header_data['content_name'] = "Printing Orders";
        $header_data['parent_content_name'] = "Orders";
        
        
        /*
         * body data
         */
        $body_data['new_orders'] = $this->orders->get_print_orders($page_number, $content_perpage);
        $body_data['page_number'] = $page_number;
        $body_data['content_perpage'] = $content_perpage;
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/admin_order/print_orders/";
        $config['total_rows'] = $this->orders->print_order_count();
        $config['per_page'] = $content_perpage; 
        $config['num_tag_open'] = 
                $config['next_tag_open'] = $config['prev_tag_open'] = 
                $config['first_tag_open'] = $config['last_tag_open'] = "<li>";
        $config['num_tag_close'] = 
                $config['next_tag_close'] = $config['prev_tag_close'] =
                $config['first_tag_close'] = $config['last_tag_close'] = "</li>";
        
        
        $config['cur_tag_open'] = "<li class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        
        $this->pagination->initialize($config); 


        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/order_list/print_order_list_body', $body_data);
        $this->load->view('admin/regions/footer');
        
        /*
         * 
         */
    }
    
    public function shipping_orders($page_number = 0){
        /*
         * load product model
         */
        $this->load->model('orders');
        $content_perpage = 1;
        /*
         * header data
         */
        $header_data['content_name'] = "Shipping Orders";
        $header_data['parent_content_name'] = "Orders";
        
        
        /*
         * body data
         */
        $body_data['new_orders'] = $this->orders->get_shipping_orders($page_number, $content_perpage);
        $body_data['page_number'] = $page_number;
        $body_data['content_perpage'] = $content_perpage;
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/admin_order/shipping_orders/";
        $config['total_rows'] = $this->orders->shipping_order_count();
        $config['per_page'] = $content_perpage; 
        $config['num_tag_open'] = 
                $config['next_tag_open'] = $config['prev_tag_open'] = 
                $config['first_tag_open'] = $config['last_tag_open'] = "<li>";
        $config['num_tag_close'] = 
                $config['next_tag_close'] = $config['prev_tag_close'] =
                $config['first_tag_close'] = $config['last_tag_close'] = "</li>";
        
        
        $config['cur_tag_open'] = "<li class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        
        $this->pagination->initialize($config); 


        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/order_list/shipping_order_list_body', $body_data);
        $this->load->view('admin/regions/footer');
        
        /*
         * 
         */
    }
    
    public function delivered_orders($page_number = 0){
        /*
         * load product model
         */
        $this->load->model('orders');
        $content_perpage = 1;
        /*
         * header data
         */
        $header_data['content_name'] = "Delivered Orders";
        $header_data['parent_content_name'] = "Orders";
        
        
        /*
         * body data
         */
        $body_data['new_orders'] = $this->orders->get_delivered_orders($page_number, $content_perpage);
        $body_data['page_number'] = $page_number;
        $body_data['content_perpage'] = $content_perpage;
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/admin_order/delivered_orders/";
        $config['total_rows'] = $this->orders->delivered_order_count();
        $config['per_page'] = $content_perpage; 
        $config['num_tag_open'] = 
                $config['next_tag_open'] = $config['prev_tag_open'] = 
                $config['first_tag_open'] = $config['last_tag_open'] = "<li>";
        $config['num_tag_close'] = 
                $config['next_tag_close'] = $config['prev_tag_close'] =
                $config['first_tag_close'] = $config['last_tag_close'] = "</li>";
        
        
        $config['cur_tag_open'] = "<li class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        
        $this->pagination->initialize($config); 


        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/order_list/delivered_order_list_body', $body_data);
        $this->load->view('admin/regions/footer');
        
        /*
         * 
         */
    }
    
    public function trash_orders($page_number = 0){
        /*
         * load product model
         */
        $this->load->model('orders');
        $content_perpage = 1;
        /*
         * header data
         */
        $header_data['content_name'] = "Trash Orders";
        $header_data['parent_content_name'] = "Orders";
        
        
        /*
         * body data
         */
        $body_data['new_orders'] = $this->orders->get_trash_orders($page_number, $content_perpage);
        $body_data['page_number'] = $page_number;
        $body_data['content_perpage'] = $content_perpage;
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/admin_order/trash_orders/";
        $config['total_rows'] = $this->orders->trash_order_count();
        $config['per_page'] = $content_perpage; 
        $config['num_tag_open'] = 
                $config['next_tag_open'] = $config['prev_tag_open'] = 
                $config['first_tag_open'] = $config['last_tag_open'] = "<li>";
        $config['num_tag_close'] = 
                $config['next_tag_close'] = $config['prev_tag_close'] =
                $config['first_tag_close'] = $config['last_tag_close'] = "</li>";
        
        
        $config['cur_tag_open'] = "<li class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        
        $this->pagination->initialize($config); 


        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/order_list/trash_order_list_body', $body_data);
        $this->load->view('admin/regions/footer');
        
        /*
         * 
         */
    }
    
}
