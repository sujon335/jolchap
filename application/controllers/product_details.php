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
    public function show($product_id){
        /*
         * load model
         */
        $this->load->model("products");
        /*
         * header data
         */
        $header_data['header_name'] ="Product Details"; 
        
        /*
         * body data
         */
        $body_data['product_details'] = $this->products->get_product($product_id); 
        $body_data['recommended_products'] = $this->products->get_recommended_products();
        
        
        $this->load->view("common/header", $header_data);
        $this->load->view("product_details/product_details_body", $body_data);
        $this->load->view("common/footer");
    }

    public function save_design()
    {
        $card_data = $this->input->post("card_data");
        $obj = json_decode($card_data);
        for($i=0; $i<sizeof($obj);$i++)
        {
            
            $var = $obj["$i"];
            $font_size=$var->font_size;
            $font_family=$var->font_family;
            $text=$var->text;
            $color=$var->color;
            $top=$var->top;
            $left=$var->left;
            
            $array=array(
                'font_size'=>$font_size,
                'font_family'=>$font_family,
                'text'=>$text,
                'top_pos'=>$top,
                'left_pos'=>$left,
                'color'=>$color,
                'type'=>"front"
            );

            $ins=$this->db->insert("card_text", $array);
           //$this->products->save_design($array);
           // var_dump($array);
           
             
        }
        
     
      
 

        //sesssion // design table
        
    }
}
