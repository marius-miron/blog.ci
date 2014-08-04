<?php

/**
 *  Dashboard controller
 */
class Dashboard extends CI_Controller {

    /**
     * index action
     */
    public function index() {

        $this->load->view('dashboard/index');
    }
     
    /**
     * newPost action
     */
    public function newPost(){
        
        $this->load->view('dashboard/newPost');
        
    }
}
