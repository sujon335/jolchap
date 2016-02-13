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
class Admin_design extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
   //put your code here
    public function show($product_id) {
        /*
         * load model
         */
        $this->load->model("products");
        /*
         * header data
         */
        $header_data['header_name'] = "Product Details";

        /*
         * body data
         */
        $body_data['product_details'] = $this->products->get_product($product_id);
        $body_data['recommended_products'] = $this->products->get_recommended_products();
        
        
        
        
        $this->load->view("admin/regions/header", $header_data);
        $this->load->view("admin/design/admin_design_view", $body_data);
        $this->load->view("admin/regions/footer");
        
    }
   
    
public function save_design_user() {
      $this->load->model("products");
      $user_id=-1;
        $card_data = $this->input->post("card_data");
        $obj = json_decode($card_data);
        $dimension = $obj[0]->dimension;
        $paper = $obj[0]->paper;
        $lamination = $obj[0]->lamination;
        $product_id = $obj[0]->product_id;
        
        
        
        $data = array(
            'user_id'=>$user_id,
            'dimension' => $dimension,
            'product_id' => $product_id,
            'lamination' => $lamination,
            'paper' => $paper
        );
         
        
        $design_id = $this->products->save_design($data);
        //$design_id = 5;
         if (isset($design_id)) {
            $text_obj = $obj[0]->card_texts_front;
            for ($i = 0; $i < sizeof($text_obj); $i++) {
                $var = $text_obj["$i"];
                $font_size = $var->font_size;
                $font_family = $var->font_family;
                $text = $var->text;
                $color = $var->color;
                $top = $var->top;
                $left = $var->left;
                $data = array(
                    'design_id' => $design_id,
                    'font_size' => $font_size,
                    'font_family' => $font_family,
                    'text' => $text,
                    'top_pos' => $top,
                    'left_pos' => $left,
                    'color' => $color,
                    'type' => "front"
                );
                $in = $this->products->save_card_data($data);
            }
             $text_obj_back = $obj[0]->card_texts_back;
            for ($i = 0; $i < sizeof($text_obj_back); $i++) {
                $var = $text_obj_back["$i"];
                $font_size = $var->font_size;
                $font_family = $var->font_family;
                $text = $var->text;
                $color = $var->color;
                $top = $var->top;
                $left = $var->left;
                $data = array(
                    'design_id' => $design_id,
                    'font_size' => $font_size,
                    'font_family' => $font_family,
                    'text' => $text,
                    'top_pos' => $top,
                    'left_pos' => $left,
                    'color' => $color,
                    'type' => "back"
                );
                $in = $this->products->save_card_data($data);
            
           }
        }


        //sesssion // design table
    }    
    //put your code here
}
