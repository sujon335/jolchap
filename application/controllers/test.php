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
        $this->load->library("google");
        $this->google->setApplicationName("JolchapBD");
        $this->google->setDeveloperKey("AIzaSyC8RCGUGZdwMwfN4zAaEKxqH0JjfLGTXrc");
        echo $this->google->getLibraryVersion(); 
        
    }
}
