<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author habibullaharaphat
 */
class Test extends CI_Controller {
    //put your code here
    public function index(){
        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        $firstName = $this->input->post("firstName");
        if($firstName == "konok")
            $status = "success";
        else 
            $status = "failed";
        $data = array(
                "status" => $status
            );
        echo json_encode($data);
    }
}
