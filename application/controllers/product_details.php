<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product_details
 *
 * @author habibullaharaphat
 */
class Product_details extends CI_Controller {

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


        $this->load->view("common/header", $header_data);
        $this->load->view("product_details/product_details_body", $body_data);
        $this->load->view("common/footer");
    }

    public function save_design_temp() {
        $card_data = $this->input->post("card_data");
        $obj = json_decode($card_data);
        $dimension = $obj[0]->dimension;
        $paper = $obj[0]->paper;
        $lamination = $obj[0]->lamination;
        $product_id = $obj[0]->product_id;
        $arr = array(
            'dimension' => $dimension,
            'product_id' => $product_id,
            'lamination' => $lamination,
            'paper' => $paper
        );
        $ins = $this->db->insert("design", $arr);
        $design_id = $this->db->insert_id();
   
        if ($ins) {
            $text_obj = $obj[0]->card_texts;
            for ($i = 0; $i < sizeof($text_obj); $i++) {
                $var = $text_obj["$i"];
                $font_size = $var->font_size;
                $font_family = $var->font_family;
                $text = $var->text;
                $color = $var->color;
                $top = $var->top;
                $left = $var->left;
                $array = array(
                    'design_id' => $design_id,
                    'font_size' => $font_size,
                    'font_family' => $font_family,
                    'text' => $text,
                    'top_pos' => $top,
                    'left_pos' => $left,
                    'color' => $color,
                    'type' => "front"
                );
                $in = $this->db->insert("card_text", $array);
            }
        }
        if ($in) {
            $auth_data = array(
                'design_id' => $design_id,
            );
            $this->session->set_userdata($auth_data);
        }



        //sesssion // design table
    }

  public function save_design_user() {
      $user_id=$this->session->userdata('user_id');
        $card_data = $this->input->post("card_data");
        $obj = json_decode($card_data);
        $dimension = $obj[0]->dimension;
        $paper = $obj[0]->paper;
        $lamination = $obj[0]->lamination;
        $product_id = $obj[0]->product_id;
        $arr = array(
            'user_id'=>$user_id,
            'dimension' => $dimension,
            'product_id' => $product_id,
            'lamination' => $lamination,
            'paper' => $paper
        );
        $ins = $this->db->insert("design", $arr);
        $design_id = $this->db->insert_id();
        
        if ($ins) {
            $text_obj = $obj[0]->card_texts;
            for ($i = 0; $i < sizeof($text_obj); $i++) {
                $var = $text_obj["$i"];
                $font_size = $var->font_size;
                $font_family = $var->font_family;
                $text = $var->text;
                $color = $var->color;
                $top = $var->top;
                $left = $var->left;
                $array = array(
                    'design_id' => $design_id,
                    'font_size' => $font_size,
                    'font_family' => $font_family,
                    'text' => $text,
                    'top_pos' => $top,
                    'left_pos' => $left,
                    'color' => $color,
                    'type' => "front"
                );
                $in = $this->db->insert("card_text", $array);
            }
        }


        //sesssion // design table
    }

    public function edit_design_view($design_id)
    {
        $this->db->where('design_id',$design_id);
        $query=$this->db->get('design');
        foreach($query->result() as $row)
        {
            $product_id=$row->product_id;
        }



        $this->load->model("products");
        $header_data['header_name'] = "Product Details";


        $body_data['product_details'] = $this->products->get_product($product_id);
        $body_data['recommended_products'] = $this->products->get_recommended_products();
        $body_data['design_info']=$query->result();

        $this->db->where('design_id',$design_id);
        $q=  $this->db->get('card_text');

        $body_data['card_info']=$q->result();
        $this->load->view("common/header", $header_data);
        $this->load->view("product_details/product_details_body_edit", $body_data);
        $this->load->view("common/footer");
    }
    
  public function edit_design_user() {

        $card_data = $this->input->post("card_data");
        $obj = json_decode($card_data);
        $dimension = $obj[0]->dimension;
        $paper = $obj[0]->paper;
        $lamination = $obj[0]->lamination;
        $product_id = $obj[0]->product_id;
        $design_id=$obj[0]->design_id;
        $arr = array(
            'user_id'=>$user_id,
            'dimension' => $dimension,
            'product_id' => $product_id,
            'lamination' => $lamination,
            'paper' => $paper
        );
        $this->db->where('design_id',$design_id);
        $up=$this->db->update('design',$arr);
        if ($up) {
            $text_obj = $obj[0]->card_texts;
            for ($i = 0; $i < sizeof($text_obj); $i++) {
                $var = $text_obj["$i"];
                $font_size = $var->font_size;
                $font_family = $var->font_family;
                $text = $var->text;
                $color = $var->color;
                $top = $var->top;
                $left = $var->left;
                $array = array(
                    'design_id' => $design_id,
                    'font_size' => $font_size,
                    'font_family' => $font_family,
                    'text' => $text,
                    'top_pos' => $top,
                    'left_pos' => $left,
                    'color' => $color,
                    'type' => "front"
                );
                $in = $this->db->insert("card_text", $array);
            }
        }


        //sesssion // design table
    }

}
