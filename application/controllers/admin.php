<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author habibullaharaphat
 */
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('role') == false || $this->session->userdata('role')!= 'admin')
            redirect ('admin_auth/login');
    }
    //put your code here
    public function dashboard() {
        $this->load->model('orders');
        $this->load->model('users');
        /*
         * header data
         */
        $header_data['content_name'] = "Dashboard";
        $header_data['parent_content_name'] = "Products";
        
        /*
         * body data
         */
        $body_data['new_order_count'] = $this->orders->new_order_count();
        $body_data['process_order_count'] = $this->orders->process_order_count();
        $body_data['print_order_count'] = $this->orders->print_order_count();
        $body_data['shipping_order_count'] = $this->orders->shipping_order_count();
        $body_data['user_count'] = $this->users->user_count();
        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/dashboard/dashboard_body', $body_data);
        $this->load->view('admin/regions/footer');
    }

    public function new_product() {
        /*
         * header data
         */
        $header_data['content_name'] = "New Product";
        $header_data['parent_content_name'] = "Products";

        /*
         * body data
         */
        $body_data[''] = null;

        /*
         * form validation
         */
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error" style="color: red;"> ', '</div>');
        $this->form_validation->set_rules('product_name', "Product Name", "required");
        $this->form_validation->set_rules('product_description', "Product Description", "required");
        $this->form_validation->set_rules('product_unit', "Product Unit", "required");
        for($i=1; $i<4; $i++){
            $this->form_validation->set_rules('dimension_'.$i, "Product Dimension", "required");
            $this->form_validation->set_rules('price_'.$i, "Product Price", "required");
        }

        if ($this->form_validation->run() == TRUE) {

            $product['product_name'] = $this->input->post("product_name");
            $product['product_description'] = $this->input->post("product_description");
            $product['product_unit'] = $this->input->post("product_unit");
            for($i=1; $i<4; $i++){
                $product['dimension_'.$i] = $this->input->post("dimension_".$i);
                $product['price_'.$i] = $this->input->post("price_".$i);
            }

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '4096';
            $config['max_width'] = '0';
            $config['max_height'] = '0';

            $flag = TRUE;
            $this->load->library('upload', $config);

            $config['file_name'] = md5("1" . time());
            $this->upload->initialize($config);
            $flag = $flag && $this->upload->do_upload("featured_image");
            if ($flag) {
                /*
                 * featured image file processing
                 */
                $data = $this->upload->data();
                $product['featured_image'] = $data['file_name'];
            }

            $config['file_name'] = md5("2" . time());
            $this->upload->initialize($config);
            $flag = $flag && $this->upload->do_upload("front_side");
            if ($flag) {
                /*
                 * featured image file processing
                 */
                $data = $this->upload->data();
                $product['front_side'] = $data['file_name'];
            }

            $config['file_name'] = md5("3" . time());
            $this->upload->initialize($config);
            $flag = $flag && $this->upload->do_upload("back_side");
            if ($flag) {
                /*
                 * featured image file processing
                 */
                $data = $this->upload->data();
                $product['back_side'] = $data['file_name'];
            }



            if ($flag == FALSE) {
                $body_data['upload_error'] = array('error' => $this->upload->display_errors());
                $body_data['message_failed'] = "Product upload failed.";
            } else {
                $this->load->model("products");
                $this->products->insert($product);
                $body_data['upload_success'] = array('upload_data' => $this->upload->data());
                $body_data['message_success'] = "Product uploaded successfully.";
            }
        } else {
            $body_data['message'] = "Form validation failed.";
        }
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/new_product/new_product_body', $body_data);
        $this->load->view('admin/regions/footer');
    }
    
    
    public function product_list($page_number = 0){
        
        /*
         * load product model
         */
        $this->load->model('products');
        $content_perpage = 10;
        /*
         * header data
         */
        $header_data['content_name'] = "Product List";
        $header_data['parent_content_name'] = "Products";
        
        
        /*
         * body data
         */
        $body_data['products'] = $this->products->get_products($page_number, $content_perpage);
        $body_data['page_number'] = $page_number;
        $body_data['content_perpage'] = $content_perpage;
        
        /*
         * pagination data
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url()."index.php/admin/product_list/";
        $config['total_rows'] = $this->products->product_count();
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
        $this->load->view('admin/product_list/product_list_body', $body_data);
        $this->load->view('admin/regions/footer');
        
        /*
         * 
         */
    }
    
    public function edit_product($product_id){
        /*
         * loading models
         */
        $this->load->model("products");
        
        /*
         * header data
         */
        $header_data['content_name'] = "Edit Product";
        $header_data['parent_content_name'] = "Products";
        /*
         * body data
         */
        $body_data[''] = null;

        /*
         * form validation
         */
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error" style="color: red;"> ', '</div>');
        
        $this->form_validation->set_rules('product_name', "Product Name", "required");
        $this->form_validation->set_rules('product_description', "Product Description", "required");
        $this->form_validation->set_rules('product_unit', "Product Unit", "required");
        for($i=1; $i<4; $i++){
            $this->form_validation->set_rules('dimension_'.$i, "Product Dimension", "required");
            $this->form_validation->set_rules('price_'.$i, "Product Price", "required");
        }

        if ($this->form_validation->run() == TRUE) {
            $product['id'] = $product_id;
            $product['product_name'] = $this->input->post("product_name");
            $product['product_description'] = $this->input->post("product_description");
            $product['product_unit'] = $this->input->post("product_unit");
            for($i=1; $i<4; $i++){
                $product['dimension_'.$i] = $this->input->post("dimension_".$i);
                $product['price_'.$i] = $this->input->post("price_".$i);
            }

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '4096';
            $config['max_width'] = '0';
            $config['max_height'] = '0';

            $flag = TRUE;
            $this->load->library('upload', $config);

            $config['file_name'] = md5("1" . time());
            $this->upload->initialize($config);
            $flag = $this->upload->do_upload("featured_image");
            if ($flag) {
                /*
                 * featured image file processing
                 */
                $data = $this->upload->data();
                $product['featured_image'] = $data['file_name'];
            }

            $config['file_name'] = md5("2" . time());
            $this->upload->initialize($config);
            $flag = $this->upload->do_upload("front_side");
            if ($flag) {
                /*
                 * featured image file processing
                 */
                $data = $this->upload->data();
                $product['front_side'] = $data['file_name'];
            }

            $config['file_name'] = md5("3" . time());
            $this->upload->initialize($config);
            $flag = $this->upload->do_upload("back_side");
            if ($flag) {
                /*
                 * featured image file processing
                 */
                $data = $this->upload->data();
                $product['back_side'] = $data['file_name'];
            }
            $this->products->update($product);
            $body_data['message_success'] = "Product updated successfully.";
        } else {
            $body_data['message'] = "Form validation failed.";
        }
        
        $body_data['product_details'] = $this->products->get_product($product_id);        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/edit_product/edit_product_body', $body_data);
        $this->load->view('admin/regions/footer');
    }
    
    public function delete_product($product_id){
        $this->load->model("products");
        $this->products->delete($product_id);
        
        redirect('admin/product_list');
    }
    
    public function featured_products(){
        /*
         * load product model
         */
        $this->load->model('products');
        
        /*
         * header data
         */
        $header_data['content_name'] = "Featured Products";
        $header_data['parent_content_name'] = "Products";
        
        /*
         * body data
         */
        $body_data['products'] = $this->products->get_featured_products();
        $body_data['products_all'] = $this->products->get_products(0,100);
        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/featured_products/featured_products_body', $body_data);
        $this->load->view('admin/regions/footer');
    }
    
    
    public function add_featured_product(){
        $product_id = $this->input->post("product_id");
        if(isset($product_id) &&  $product_id!=null && $product_id>0)
        $this->load->model("featured_products");
        $this->featured_products->add($product_id);
        
        redirect('admin/featured_products');
    }
    
    public function remove_featured_product($product_id){
        $this->load->model("featured_products");
        $this->featured_products->remove($product_id);
        
        redirect("admin/featured_products");
    }
    
    
    public function recommended_products(){
        /*
         * load product model
         */
        $this->load->model('products');
        
        /*
         * header data
         */
        $header_data['content_name'] = "Recommended Products";
        $header_data['parent_content_name'] = "Products";
        
        /*
         * body data
         */
        $body_data['products'] = $this->products->get_recommended_products();
        $body_data['products_all'] = $this->products->get_products(0,100);
        
        $this->load->view('admin/regions/header', $header_data);
        $this->load->view('admin/recommended_products/recommended_products_body', $body_data);
        $this->load->view('admin/regions/footer');
    }
    
    
    public function add_recommended_product(){
        $product_id = $this->input->post("product_id");
        if(isset($product_id) &&  $product_id!=null && $product_id>0)
        $this->load->model("recommended_products");
        $this->recommended_products->add($product_id);
        
        redirect('admin/recommended_products');
    }
    
    public function remove_recommended_product($product_id){
        $this->load->model("recommended_products");
        $this->recommended_products->remove($product_id);
        
        redirect("admin/recommended_products");
    }

}
