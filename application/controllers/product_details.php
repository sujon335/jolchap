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
        
        $header_data['header_name'] = "Product Details";
        $design_id=$this->products->get_design_id($product_id,-1);
        
       
        if($design_id!=-1)
        {

            $body_data['design_info']=$this->products->get_design_data($design_id);

            $body_data['card_info']=$this->products->get_card_data($design_id);
        }
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
        $this->load->model("products");
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
        
        
        $design_id = $this->products->save_design($arr);
        
   
        if (isset($design_id)) {
            
            $logo_front=$obj[0]->logo_front;
            $logo_front_top=$obj[0]->logo_front_top;
            $logo_front_left=$obj[0]->logo_front_left;
            $logo_front_width=$obj[0]->logo_front_width;
            $logo_front_height=$obj[0]->logo_front_height;
            
            $image_data_front=array(
                'design_id'=>$design_id,
                'path'=>$logo_front,
                'type'=>"front",
                'top'=>$logo_front_top,
                'left'=>$logo_front_left,
                'width'=>$logo_front_width,
                'height'=>$logo_front_height
            );
            if($logo_front!="")
            $this->products->save_card_image($image_data_front);
            
            $logo_back=$obj[0]->logo_back;
            $logo_back_top=$obj[0]->logo_back_top;
            $logo_back_left=$obj[0]->logo_back_left;
            $logo_back_width=$obj[0]->logo_back_width;
            $logo_back_height=$obj[0]->logo_back_height;
            $image_data_back=array(
                'design_id'=>$design_id,
                'path'=>$logo_back,
                'type'=>"back",
                'top'=>$logo_back_top,
                'left'=>$logo_back_left,
                'width'=>$logo_back_width,
                'height'=>$logo_back_height   
            );
            if($logo_back!="")
            $this->products->save_card_image($image_data_back);

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

            $auth_data = array(
                'design_id_test' => $design_id,
            );
            $this->session->set_userdata($auth_data);
            
            

        //sesssion // design table
    }

  public function save_design_user() {
      $this->load->model("products");
      $user_id=$this->session->userdata('user_id');
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
            
            $logo_front=$obj[0]->logo_front;
            $logo_front_top=$obj[0]->logo_front_top;
            $logo_front_left=$obj[0]->logo_front_left;
            $logo_front_width=$obj[0]->logo_front_width;
            $logo_front_height=$obj[0]->logo_front_height;

            $image_data_front=array(
                'design_id'=>$design_id,
                'path'=>$logo_front,
                'type'=>"front",
                'top'=>$logo_front_top,
                'left'=>$logo_front_left,
                'width'=>$logo_front_width,
                'height'=>$logo_front_height
            );
            if($logo_front!="")
            $this->products->save_card_image($image_data_front);

            $logo_back=$obj[0]->logo_back;
            $logo_back_top=$obj[0]->logo_back_top;
            $logo_back_left=$obj[0]->logo_back_left;
            $logo_back_width=$obj[0]->logo_back_width;
            $logo_back_height=$obj[0]->logo_back_height;
            $image_data_back=array(
                'design_id'=>$design_id,
                'path'=>$logo_back,
                'type'=>"back",
                'top'=>$logo_back_top,
                'left'=>$logo_back_left,
                'width'=>$logo_back_width,
                'height'=>$logo_back_height
            );
            if($logo_back!="")
            $this->products->save_card_image($image_data_back);

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

    public function edit_design_view($design_id)
    {  
        $this->load->model("products");
        $product_id=  $this->products->get_product_id($design_id);
       
        $header_data['header_name'] = "Product Details";

        $body_data['product_details'] = $this->products->get_product($product_id);
        $body_data['recommended_products'] = $this->products->get_recommended_products();
        $body_data['design_info']=$this->products->get_design_data($design_id);

        $body_data['card_info']=$this->products->get_card_data($design_id);
        $body_data['card_image']=$this->products->get_card_image($design_id);
        $this->load->view("common/header", $header_data);
        $this->load->view("product_details/product_details_body_edit", $body_data);
        $this->load->view("common/footer");
    }
    
  public function edit_design_user() {
        $this->load->model("products");
        $card_data = $this->input->post("card_data");
        $obj = json_decode($card_data);
        $dimension = $obj[0]->dimension;
        $paper = $obj[0]->paper;
        $lamination = $obj[0]->lamination;
        $design_id=$obj[0]->design_id;
        $arr = array(
            'dimension' => $dimension,
            'lamination' => $lamination,
            'paper' => $paper
        );
        $up=$this->products->update_design_data($design_id,$arr);
        
        $dlt=$this->products->delete_card_data($design_id);
        $this->products->delete_card_image($design_id);
        
        if (isset($design_id)) {
            $logo_front=$obj[0]->logo_front;
            $logo_front_top=$obj[0]->logo_front_top;
            $logo_front_left=$obj[0]->logo_front_left;
            $logo_front_width=$obj[0]->logo_front_width;
            $logo_front_height=$obj[0]->logo_front_height;

            $image_data_front=array(
                'design_id'=>$design_id,
                'path'=>$logo_front,
                'type'=>"front",
                'top'=>$logo_front_top,
                'left'=>$logo_front_left,
                'width'=>$logo_front_width,
                'height'=>$logo_front_height
            );
            if($logo_front!="")
            $this->products->save_card_image($image_data_front);

            $logo_back=$obj[0]->logo_back;
            $logo_back_top=$obj[0]->logo_back_top;
            $logo_back_left=$obj[0]->logo_back_left;
            $logo_back_width=$obj[0]->logo_back_width;
            $logo_back_height=$obj[0]->logo_back_height;
            $image_data_back=array(
                'design_id'=>$design_id,
                'path'=>$logo_back,
                'type'=>"back",
                'top'=>$logo_back_top,
                'left'=>$logo_back_left,
                'width'=>$logo_back_width,
                'height'=>$logo_back_height
            );
            if($logo_back!="")
            $this->products->save_card_image($image_data_back);


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


    public function upload_icon_image()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4096';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $flag = TRUE;
        $this->load->library('upload', $config);

        $config['file_name'] = md5("1" . time());
        $this->upload->initialize($config);
        $flag = $flag && $this->upload->do_upload("card_icon");
        if ($flag) {
            /*
             * featured image file processing
             */
            $data = $this->upload->data();
            $image_file = $data['file_name'];
        }
        echo $image_file;
    }

}
